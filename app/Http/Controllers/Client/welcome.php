<?php
namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Auth\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class welcome extends Controller
{
    public function getHomePage(){
        $products = DB::table('product')->orderBy('create_at', 'desc')->take(10)->get();
        return view('homePage')->with('products', $products);
    }
    
    public function getDetail($product_name){
        $pro = str_replace('-', ' ', $product_name);
        $product = DB::table('product')->where('pro_Name', $pro)->get();
        return view('../Shop/detailProduct')->with('product', $product[0]);
    }


    public function postToCart(Request $request){
        dd($request->all());
    }
}