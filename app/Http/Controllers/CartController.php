<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Image;
use App\Models\Order;
use App\Models\OrderDetail;
use Auth;
use Session;
use DB;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cart(){
        // $col = 'payment_menthod';
        // $data= Order::getEnumValues($col);
        // dd($data);

        //dd(Cart::content());
        return view('frontend.pages.cart');
    }

    public function addToCart(Request $request, $slug){
        
        $product = Product::where('pro_slug', $slug)->first();

        Cart::add([
            'id' => $product->pro_id,
            'name' => $product->pro_name,
            'qty' => $request->quantity ?? 1,
            'price' => $product->pro_price,
            'options' => [
                'photo' => $product->pro_thumbnail,
                'maxQuantity' => $product->pro_quantity,
            ]
        ]);

        return redirect()->back();
    }

    public function updateCart(Request $request, $id){ 
       if($request->ajax()){
            $qty = $request->qty ?? 1;

            $product_id = $request->product_id;
            $product = Product::find($product_id);
            if(!$product) return response(['msg' => 'error']);

            Cart::update($id, $qty);
            return response([
                'data' => 'success',
                'subtotal' => Cart::subtotal(0,'.','.'),
                'id' => $product_id,
                'cartTotal' => Cart::count(),
                'amount' => number_format($qty * $product->pro_price, 0, '', '.')
            ]);
       }
    }

    public function deleteCart($id){
        Cart::remove($id);
        return redirect()->back();
    }

    public function checkOut()
    {        
        if(Cart::count() > 0 && Auth::check()){
            $items = Cart::content();
            //dd($items);
            return view('frontend.pages.checkout', compact('items'));
        }
        else if(Cart::count() > 0 && !Auth::check())
        {
            return redirect()->route('login');
        }
        else
        {
            return redirect()->route('home');
        }
    }

    public function checkOutSubmit(Request $request)
    {        
        $customer = $request->all();
        $items = Cart::content();
        
        $data = [
            'items' => $items,
            'customer' => $customer
        ];

        //dd($data);

        $order = Order::create([
            'order_number' => mt_rand(10000000000, 99999999999),
            'user_id' => Auth::user()->id,
            'sub_total' => Cart::subtotal(0,'',''),
            'quantity' => Cart::count(),
            'payment_menthod' => $request->input('payment-method'),
            'payment_status' => 'unpaid',
            'status' => 'pending',
            'fullname' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        foreach ($items as $item){
            $order_details = OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'user_id' => $order->user_id,
                'price' => $item->price,
                'quantity' => $item->qty,
                'total' => $item->qty * $item->price,
            ]);

            $product = Product::find($item->id);
            $product->pro_quantity -= $item->qty;
            $product->save();
        }

        Cart::destroy();

        return redirect()->back();

        //return view('frontend.pages.static_page_checkout_success');
    }
}
