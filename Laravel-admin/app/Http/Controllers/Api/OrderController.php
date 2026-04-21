<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail; // Đảm bảo bạn đã import Model này (tùy tên Model chi tiết đơn hàng của bạn)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user', 'payment', 'orders_detail.productVariant.product')
            ->where('id_user', Auth::id())->orderBy('created_at', 'desc')->get();
        return response()->json([
            'success' => true,
            'orders' => $orders
        ], 200);
    }

    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Lưu thông tin đơn hàng vào bảng orders
        $order = new Order();
        $order->id_user = $request->id_user;
        $order->id_payment = $request->id_payment;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->note = $request->note ?? '';
        $order->total_price = $request->total_price;
        $order->status = 1; // 1: Đang xử lý
        $order->thanh_toan = 0; // 0: Chưa thanh toán
        $order->order_date = now();
        $order->save();

        // 2. Lưu chi tiết sản phẩm vào bảng orders_detail
        if ($request->has('order_details')) {
            foreach ($request->order_details as $item) {
                $order->orders_detail()->create([
                    'id_variant' => $item['id_variant'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);
            }
        }

        // ==========================================
        // 3. XỬ LÝ THANH TOÁN VNPAY (Giả sử id_payment = 4 là VNPay, bạn thay số 4 bằng ID thực tế trong Database nhé)
        // ==========================================
        if ($request->id_payment == 4) { 
            
            // Cấu hình VNPay (Nên lấy từ file .env)
            $vnp_TmnCode = env('VNPAY_TMN_CODE', 'T90W6Q5G'); // Mã website của bạn trên VNPay
            $vnp_HashSecret = env('VNPAY_HASH_SECRET', 'YOUR_SECRET_KEY'); // Chuỗi bí mật
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            
            // URL trả về sau khi khách thanh toán xong (Trang frontend của bạn)
            $vnp_Returnurl = url("/api/vnpay-return"); 

            $vnp_TxnRef = $order->id; // Mã đơn hàng
            $vnp_OrderInfo = "Thanh toan don hang " . $order->id;
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $request->total_price * 100; // VNPay yêu cầu nhân 100
            $vnp_Locale = 'vn';
            $vnp_IpAddr = $request->ip();

            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
            );

            // Sắp xếp dữ liệu và tạo mã băm bảo mật
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }

            // Trả link VNPay về cho React tự động chuyển hướng
            return response()->json([
                'status' => 'success',
                'message' => 'Đang chuyển hướng đến VNPay...',
                'vnpay_url' => $vnp_Url,
                'order' => $order->id
            ], 200);
        }

        // 4. Nếu là thanh toán COD (Tiền mặt)
        return response()->json([
            'status' => 'success',
            'message' => 'Đặt hàng thành công!',
            'order' => $order->id
        ], 200);
    }

    public function show(string $id)
    {
        $order = Order::with('user', 'payment', 'orders_detail.productVariant.product')->where('id_user', Auth::id())->where('id', $id)->first();
        if (!$order) {
            return response()->json(['message' => 'Không tìm thấy đơn hàng'], 404);
        }
        return response()->json([
            'success' => true,
            'order' => $order
        ], 200);
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }

    public function cancelOrder(Request $request, string $id)
    {
        $order = Order::where('id_user', Auth::id())->where('id', $id)->first();
        if (!$order) {
            return response()->json(['message' => 'Không tìm thấy đơn hàng'], 404);
        }
        if ($order->status === 0) {
            return response()->json(['message' => 'Đơn hàng đã hủy trước đó'], 401);
        }
        if ($order->status === 1) {
            $order->status = 0;
            $order->save();
            return response()->json(['message' => 'Hủy đơn hàng thành công'], 200);
        }
        if ($order->status === 2) {
            return response()->json(['message' => 'Liên hệ cửa hàng để hủy'], 401);
        }

        return response()->json(['message' => 'Trạng thái đơn hàng không hợp lệ'], 400);
    }
}