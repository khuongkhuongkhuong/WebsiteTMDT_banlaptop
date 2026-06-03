<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
<<<<<<< HEAD
use App\Models\OrderDetail; 
=======
use App\Models\OrderDetail;
>>>>>>> 6045d5a81d3b1d26b10db5a9f363874b34b56c58
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

    public function cancelOrder($id)
    {
<<<<<<< HEAD
        $order = Order::where('id_user', Auth::id())->where('id', $id)->first();
=======
>>>>>>> 6045d5a81d3b1d26b10db5a9f363874b34b56c58
        try {
            $order = Order::with('orders_detail.productVariant')
                ->where('id', $id)
                ->where('id_user', auth()->id())
                ->first();

            if (!$order) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Không tìm thấy đơn hàng'
                ], 404);
            }

            if ($order->status == 3) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Đơn hàng đã hoàn thành, không thể hủy'
                ], 400);
            }

            if ($order->status == 0) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Đơn hàng đã được hủy trước đó'
                ], 400);
            }

            foreach ($order->orders_detail as $detail) {
                if ($detail->productVariant) {
                    $detail->productVariant->increment('stock', $detail->quantity);
                }
            }

            $order->status = 0;
            $order->save();
<<<<<<< HEAD
           

       return response()->json([
=======

            return response()->json([
>>>>>>> 6045d5a81d3b1d26b10db5a9f363874b34b56c58
                'status' => 'success',
                'message' => 'Hủy đơn hàng thành công'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}