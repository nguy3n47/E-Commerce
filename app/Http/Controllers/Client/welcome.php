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
        $products = DB::table('product')->get();
        return view('welcome')->with('products', $products);
    }
    
    public function getDetail($id){
        return view('../Auth/detailProduct');
    }
}