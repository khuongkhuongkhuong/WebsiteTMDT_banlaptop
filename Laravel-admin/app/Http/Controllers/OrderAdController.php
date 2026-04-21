<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class OrderAdController extends Controller
{
  public function index(Request $request)
  {
    $sotrang = $request->input('show', 10);
    $orderquery = Order::with([
      'payment',
      'orders_detail.productVariant.product.discount'
    ]);
    if ($request->has('orderquery')) {
      switch ($request->query('orderquery')) {
        case 0:
          $orderquery->where('status', 0);
          break;
        case 1:
          $orderquery->where('status', 1)->where('thanh_toan', 1);
          break;
        case 2:
          $orderquery->where('status', 2);
          break;
        case 3:
          $orderquery->where('status', 3);
          break;
        case 'all':
          $orderquery->orderBy('order_date', 'DESC');
          break;
      }
    }
    if ($key = request()->key) {
      $orderquery->where(function ($tim) use ($key) {
        $tim->where('orders.id', 'like', '%' . $key . '%')->orwhere('orders.id_user', 'like', '%' . $key . '%');
      });
    }
    switch ($thutu = request()->thutu) {
      case 1:
        $orderquery->orderBy('status', 'DESC');
        break;
      case 2:
        $orderquery->orderBy('total_price', 'DESC');
        break;
      default:
        $orderquery->orderBy('order_date', 'DESC');
        break;
    }
    $order = $orderquery->paginate($sotrang)->appends([
      'show' => $sotrang,
      'key' => request()->key,
    ]);
    $pageht = $order->currentPage();
    $lapa = $order->lastPage();
    $start = max($pageht - 1, 1);
    $end = min($pageht + 1, $lapa);
    return view('page.order.donhang', compact('order', 'start', 'end', 'pageht', 'lapa', 'sotrang'));
  }

  public function detai($id)
  {
    $order = Order::with([
      'user',
      'orders_detail.productVariant.product',
      'payment'
    ])->findOrFail($id);
    if (!$order) {
      return redirect()->route('donhang')->with('error', 'Đơn hàng không tồn tại.');
    }
    $status_labels = [
      0 => ['label' => 'Đơn hàng đã hủy', 'style' => 'background-color: #f8d7da; color: #fb0018;'],
      1 => ['label' => 'Đơn hàng đang xử lý', 'style' => 'background-color: #fff3cd; color: #dca60a;'],
      2 => ['label' => 'Đơn hàng đang giao', 'style' => 'background-color: #cce5ff; color: #0071eb;'],
      3 => ['label' => 'Đã hoàn thành', 'style' => 'background-color: #d4edda; color: #0a9f2c;'],
    ];
    $status = $status_labels[$order->status] ?? ['label' => 'Trạng thái không xác định', 'style' => 'background-color: #e2e3e5; color: #6c757d;'];
    $thanh_toan = [
      0 => 'chưa thanh toán',
      1 => 'đã thanh toán',
    ];
    $thanh_toan = $thanh_toan[$order->thanh_toan] ?? 'trạng thái không xác định';
    return view('page.order.detail', compact('order', 'status', 'thanh_toan'));
  }

  public function edit($id)
  {
    $order = Order::with([
      'user',
      'orders_detail.productVariant.product',
      'payment'
    ])->findOrFail($id);
    $status_labels = [
      0 => ['label' => 'Đơn hàng đã hủy', 'style' => 'background-color: #f8d7da; color: #fb0018;'],
      1 => ['label' => 'Đơn hàng đang xử lý', 'style' => 'background-color: #fff3cd; color: #dca60a;'],
      2 => ['label' => 'Đơn hàng đang giao', 'style' => 'background-color: #cce5ff; color: #0071eb;'],
      3 => ['label' => 'Đã hoàn thành', 'style' => 'background-color: #d4edda; color: #0a9f2c;'],
    ];
    $status_label = $status_labels[$order->status] ?? 'Trạng thái không xác định';

    return view('page.order.edit', compact('order', 'status_label'));
  }

  public function updateStatus(Request $request)
  {
    $request->validate([
      'order_id' => 'required|exists:orders,id',
      'status' => 'required|in:0,1,2,3',
    ]);
    $order = Order::with('orders_detail.productVariant')->findOrFail($request->order_id);
    
    // Nếu chuyển sang trạng thái "Hoàn thành"
    if ($request->status == 3 && $order->status != 3) {
      foreach ($order->orders_detail as $detail) {
        $variant = $detail->productVariant;
        if ($variant) {
          if ($variant->stock < $detail->quantity) {
            return back()->with('error', "Biến thể ID {$variant->id} không đủ hàng (còn {$variant->stock}, cần {$detail->quantity}) để hoàn thành đơn hàng.");
          }
        }
      }
      // Nếu qua được vòng kiểm tra thì trừ kho
      foreach ($order->orders_detail as $detail) {
        $variant = $detail->productVariant;
        if ($variant) {
          $variant->stock -= $detail->quantity;
          $variant->save();
        }
      }
      
      // TỰ ĐỘNG CHUYỂN THANH TOÁN THÀNH 1 KHI DUYỆT ĐƠN HOÀN THÀNH
      $order->thanh_toan = 1;
    }
    
    // Cập nhật trạng thái đơn hàng
    $order->status = $request->status;
    $order->save();

    return back()->with('success', 'Cập nhật trạng thái đơn hàng thành công.');
  }
}