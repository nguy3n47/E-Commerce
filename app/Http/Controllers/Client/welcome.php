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
    public function getHomePage(Request $request){
        $user = session('user_id');


        $newProducts = [];
        $best_loving_products = [];
        $best_loving_products = [];

        if($user != null){
            $newProducts = DB::table('product')->orderBy('create_at', 'desc')->take(10)->get();

            $best_selling_products =  DB::table('purchase')
                            ->join('order_detail', 'purchase.id','=','order_detail.purchase_id')
                            ->join('product','product.id','=','order_detail.product_id')
                            ->whereNotNull('purchase.status_id')
                            ->select('order_detail.product_id', 'product.*')
                            ->groupBy('order_detail.product_id')
                            ->orderBy(DB::raw('SUM(order_detail.quantity)'),'DESC')
                            ->take(10)
                            ->get();
            
            $best_loving_products = DB::table('product')
                                        ->join('likes','likes.pro_id','=','product.id')
                                        ->select('product.*')
                                        ->groupBy('likes.pro_id')
                                        ->orderBy(DB::raw('SUM(likes.pro_id)'),'DESC')
                                        ->take(10)
                                        ->get();
        }
        else{
            $newProducts = DB::table('product')->orderBy('create_at', 'desc')->take(10)->get();

            $best_selling_products =  DB::table('purchase')
                            ->join('order_detail', 'purchase.id','=','order_detail.purchase_id')
                            ->join('product','product.id','=','order_detail.product_id')
                            ->whereNotNull('purchase.status_id')
                            ->select('order_detail.product_id', 'product.*')
                            ->groupBy('order_detail.product_id')
                            ->orderBy(DB::raw('SUM(order_detail.quantity)'),'DESC')
                            ->take(10)
                            ->get();
            
            $best_loving_products = DB::table('product')
                                        ->join('likes','likes.pro_id','=','product.id')
                                        ->select('product.*')
                                        ->groupBy('likes.pro_id')
                                        ->orderBy(DB::raw('SUM(likes.pro_id)'),'DESC')
                                        ->take(10)
                                        ->get();
        }
        
        return view('homePage')
                ->with('newProducts', $newProducts)
                ->with('best_selling_products', $best_selling_products)
                ->with('best_loving_products', $best_loving_products);
    }
    
    public function getDetail($product_name){
        $pro = str_replace('-', ' ', $product_name);
        $product = DB::table('product')
                    ->join('images', 'product.id','=','images.product_id')
                    ->where('pro_Name', $pro)
                    ->select('product.*',)
                    ->first();

        return view('../Shop/detailProduct')->with('product', $product);
    }
}