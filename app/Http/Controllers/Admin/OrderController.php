<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = DB::table('orders')->orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function updateStatusOrder(Request $request, $id, $status)
    {
        $orders = Order::find($id);

        if($status == 'cancel'){
            $items = OrderDetail::where('order_id', $id)->get();
            foreach ($items as $item) {
                $product = Product::where('pro_id', $item->product_id)->first();
                $product->pro_quantity += $item->quantity;
                $product->save();
            }
        }

        $orders->status = $status;
        $orders->save();

        return redirect()->route('admin.orders.index');
    }

    public function orderDetail($number)
    {
        $orders = Order::where('order_number', $number);
        $items = Order::where('order_number', $number);
    }
}
