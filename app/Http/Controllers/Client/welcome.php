<?php
namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Auth\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\Product;



class welcome extends Controller
{
    public function getHomePage(){
        $user = session('user_id');
        $amountOfProduct = 0;
        if($user != null){
            $purchase = DB::table('purchase')
                        ->where('user_id', '=', $user)
                        ->WhereNull('status_id')
                        ->get();
            if($purchase->count() != 0){
                $amountOfProduct = DB::table('order_detail')
                        ->join('product', 'order_detail.product_id', '=', 'product.id')
                        ->join('purchase', 'order_detail.purchase_id', '=', 'purchase.id')
                        ->where('order_detail.purchase_id', $purchase[0]->id)
                        ->count();
            }
        }
        $products = DB::table('product')->orderBy('create_at', 'desc')->take(10)->get();
        return view('homePage')->with('products', $products)->with('amountOfProduct', $amountOfProduct);
    }
    
    public function getDetail($product_name){
        $pro = str_replace('-', ' ', $product_name);
        $product = DB::table('product')->where('pro_Name', $pro)->get();
        return view('../Shop/detailProduct')->with('product', $product[0]);
    }
}