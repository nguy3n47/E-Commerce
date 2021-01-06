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

class loveProduct extends Controller
{
    public function postLove(Request $request){
        $user = session('user_id');
        if($user == null){
            $msg[0] = "nothing";
        }else{
            $check = DB::table('likes')
                        ->where('user_id', $user)
                        ->where('pro_id', $request->product_id)
                        ->first();

            if($check == null){
                DB::table('likes')
                        ->insert([  'user_id' => $user,
                                    'pro_id' => (int)$request->product_id]);
                $msg[0] = "Thêm thành công";
            }else{
                DB::table('likes')
                        ->where('user_id', $user)
                        ->where('pro_id', (int)$request->product_id)
                        ->delete();
                $msg[0] = "Bỏ thích";
            }
        }
        return json_encode($msg);
        exit;  
    }
}