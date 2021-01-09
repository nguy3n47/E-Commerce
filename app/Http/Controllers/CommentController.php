<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Image;
use App\Models\Order;
use App\Models\Wishlist;
use App\Models\OrderDetail;
use App\Models\ProductReview;
use Auth;
use Session;
use DB;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getComment(){
        $comments = DB::table('product_reviews')
                    ->join('users', 'product_reviews.user_id', '=', 'users.id')
                    ->join('products', 'product_reviews.product_id', '=','products.pro_id')
                    ->where('products.pro_id', $product_detail->pro_id)
                    ->select('users.name', 'users.avatar', 'product_reviews.comment', 'product_reviews.rate', 'product_reviews.created_at')
                    ->get();

        //dd($comments);
    }

    public function postComment(Request $request){
        $product_id = $request->productId;
        $comment = $request->comment;
        $user_id = $request->userId;
        
        $product_review = new ProductReview();
        $product_review->product_id = $product_id;
        $product_review->user_id = $user_id;
        $product_review->comment = $comment;
        $product_review->save();
    }
}
