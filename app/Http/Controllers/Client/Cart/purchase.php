<?php
namespace App\Http\Controllers\Client\Cart;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Auth\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\Product;


class purchase extends Controller
{
    public function getpurchase(){
        dd("hello");
    }

    public function postpurchase(Request $request){
        $user_id = session()->get('user_id');
        dd($request->all());
    }
}