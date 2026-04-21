<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderSuccessMail;

class CheckOutApiController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function paymethor()
  {
    //
    $payment = Payment::where('status', '>', 0)->get();


    return response()->json([
      'status' => 'success',
      'data' => $payment
    ]);
  }

  public function getOrderById(Request $request)
  {
    $order = Order::where('id', $request->id)->with('payment')->where('status', '>', 0)->first();

    if (!$order) {
      return response()->json([
        'status' => 'error',
        'message' => 'Đơn hàng không tồn tại.'
      ], 404);
    }

    return response()->json([
      'status' => 'success',
      'data' => $order
    ]);
  }


  //put order 
  public function order(Request $request)
  {
    // 1. Tạo đơn hàng chính
    $order = Order::create([
      'id_user' => $request->input('id_user'),
      'id_payment' => $request->input('id_payment'),
      'note' => $request->input('note'),
      'phone' => $request->input('phone'),
      'address' => $request->input('address'),
      'total_price' => $request->input('total_price'),
      // Mặc định trạng thái khi tạo đơn
      'status' => 1, 
      'thanh_toan' => 0
    ]);

    // 2. Tạo chi tiết đơn hàng
    $orderDetails = $request->input('order_details');
    if (is_array($orderDetails)) {
      foreach ($orderDetails as $detail) {
        OrderDetail::create([
          'id_order' => $order->id, // Lấy ID của đơn hàng
          'id_variant' => $detail['id_variant'],
          'price' => $detail['price'],
          'quantity' => $detail['quantity'],
        ]);
      }
    }

    // 3. Gửi Email xác nhận đơn hàng
    try {
        $inFoOrder = Order::with('orders_detail.productVariant.product')->find($order->id);
        Mail::to($request->input('email'))->send(new OrderSuccessMail($inFoOrder,  $request->input('name')));
    } catch (\Exception $e) {
        // Ghi log nếu lỗi gửi email nhưng không chặn quá trình tạo đơn
        \Log::error("Lỗi gửi email đơn hàng " . $order->id . ": " . $e->getMessage());
    }

    // ==========================================
    // 4. XỬ LÝ THANH TOÁN VNPAY (ID = 4)
    // ==========================================
    if ($request->input('id_payment') == 4) { 
        
        $vnp_TmnCode = env('VNPAY_TMN_CODE', 'T90W6Q5G'); 
        $vnp_HashSecret = env('VNPAY_HASH_SECRET', 'YOUR_SECRET_KEY'); 
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        
        // URL React của bạn hứng kết quả trả về
        $vnp_Returnurl = url("/api/vnpay-return"); 

        $vnp_TxnRef = $order->id; // Dùng ID đơn hàng làm mã giao dịch
        $vnp_OrderInfo = "Thanh toan don hang " . $order->id;
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request->input('total_price') * 100; // VNPay yêu cầu nhân 100
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

        return response()->json([
            'status' => 'success',
            'message' => 'Đang chuyển hướng đến VNPay...',
            'vnpay_url' => $vnp_Url,
            'order' => $order->id
        ]);
    }

    // 5. Nếu là thanh toán Tiền mặt / LPO / Vietcombank (Không phải VNPay)
    return response()->json([
      'status' => 'success',
      "order" => $order->id,
      'message' => 'Đặt hàng thành công'
    ]);
  }

  // 
  public function webhook(Request $request)
  {

    if ($request->transferType !== "in") {
      return response()->json(['success' => false, 'message' =>  'not order ']);
    }

    $transaction_content = $request->content;
    $regex = '/MDH(\d+)/';
    preg_match($regex, $transaction_content, $matches);
    $pay_order_id = $matches[1];

    if (!is_numeric($pay_order_id)) {
      return response()->json(['success' => false, 'message' =>  'Order not found. Order_id ']);
    }

    $order = Order::where("id", $pay_order_id)
      ->where('thanh_toan', 0)
      ->where('total_price', $request->transferAmount)->first();


    if (!$order) {
      return response()->json(['success' => false, 'message' => 'Order not found. Order_id ' . $pay_order_id]);
    }
    $order->thanh_toan = 1;
    $order->save();
    return response()->json(['success' => true, 'data' =>  $order, 'message' => 'Order not found. Order_id '], 200);
  }

  // 
  public function KTThanhToan(Request $request)
  {


    // Tìm đơn hàng Điều kiện là id đơn hàng, số tiền, trạng thái đơn hàng phải là 'Unpaid'
    $order = Order::where("id", $request->id)
      ->where('thanh_toan', 1)
      ->first();

    if (!$order) {
      return response()->json(['success' => false, 'message' =>  'Chưa thanh toán'], 201);
    } else {
      return response()->json(['success' => true, 'message' =>  'thanh toán thành cong'], 200);
    }
  }
}