<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Image;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Wishlist;
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

class WishlistController extends Controller
{
    public function show(){
        $items = DB::table('wishlists')
                    ->join('products', 'wishlists.product_id', '=', 'products.pro_id')
                    ->where('wishlists.user_id', Auth::user()->id)
                    ->get();
        return view('frontend.pages.wishlist', compact('items'));
    }

    public function delete($id){
        Wishlist::where('product_id', $id)->where('user_id', Auth::user()->id)->delete();
        return redirect()->back();
    }

    public function store(Request $request, $id){
        $item = Wishlist::where('product_id', $id)->where('user_id', Auth::user()->id)->first();
        if(!$item){
            Wishlist::create([
                'user_id' => Auth::user()->id,
                'product_id' => $id
            ]);
            //
            $count = Wishlist::where('user_id', Auth::user()->id)->count();
            $totalWishlishProduct = DB::table('wishlists')->where('product_id', $id)->count();
            return response([
                'msg' => 'success',
                'total' => $count,
                'totalWishlishProduct' => $totalWishlishProduct
            ]);
        }
        else{
            $item->delete();
            $count = Wishlist::where('user_id', Auth::user()->id)->count();
            $totalWishlishProduct = DB::table('wishlists')->where('product_id', $id)->count();
            return response([
                'msg' => 'delete',
                'total' => $count,
                'totalWishlishProduct' => $totalWishlishProduct
            ]);
        }
    }
}
