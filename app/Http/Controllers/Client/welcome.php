<?php
namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Auth\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
        // find id user
        $user_id = 1;
        
        // if purchase user if status_id is NULL or not exists then insert
        $purchase = DB::table('purchase')
                    ->where('user_id', '=', $user_id)
                    ->whereNull('status_id')
                    ->get();
                    dd($purchase[0]);
        // if not exists
        if($purchase->count() == 0){
            // step 1: insert (user_id) to purchase with status_id is NULL
            $count_purchaseID = DB::table('purchase')->count(); // count number of column in `purchase`
            DB::table('purchase')->insert(['id'=>$count_purchaseID + 1,'user_id'=>$user_id]);
            
            // step 2: find product_id with product_Name
            $product_id = DB::table('product')
                            ->where('pro_Name', $request->product_name)
                            ->select('id')->get();

            // step 3: insert (purchase_id, product_id, quantity, price, total = quantity * price) to order_detail
            $count_order_detailID = DB::table('order_detail')->count();
            DB::table('order_detail')
                    ->insert([
                        'id'=> $count_order_detailID + 1,
                        'purchase_id' => $count_purchaseID + 1,
                        'product_id' => $product_id[0]->id,
                        'quantity' => $request->quantity,
                        'price' => $request->price,
                        'total' => $request->price * $request->quantity
                    ]);
            
            // step 4: update total in purchase
            DB::table('purchase')
                        ->where('id', $count_purchaseID + 1)
                        ->update(['total' => $request->price * $request->quantity]);
        }
        // if exists
        else{
            //find product_id with product_Name
            $product_id = DB::table('product')
                            ->where('pro_Name', $request->product_name)
                            ->select('id')->get();
            
            $t = DB::table('purchase')
                        ->join('order_detail', 'purchase.id', '=', 'order_detail.purchase_id')
                        ->where('purchase.id', $purchase[0]->id)
                        ->where('order_detail.product_id', $product_id[0]->id)
                        ->select('order_detail.*')
                        ->get();

            if($t->count() == 0){
                $count_order_detailID = DB::table('order_detail')->count();
                // insert product to order_detail
                DB::table('order_detail')
                    ->insert([
                        'id'=> $count_order_detailID + 1,
                        'purchase_id' => $purchase[0]->id,
                        'product_id' => $product_id[0]->id,
                        'quantity' => $request->quantity,
                        'price' => $request->price,
                        'total' => $request->price * $request->quantity
                    ]);
            }
            else{
                DB::table('order_detail')
                        ->where('id', $t[0]->id)
                        ->where('purchase_id', $t[0]->purchase_id)
                        ->where('product_id', $product_id[0]->id)
                        ->update([
                            'quantity' => $t[0]->quantity + $request->quantity,
                            'total' => $request->price * ($t[0]->quantity + $request->quantity)
                        ]);
            }
            // update total in purchase
            $total = DB::table('order_detail')
                    ->where('purchase_id', $purchase[0]->id)
                    ->sum('total');

            DB::table('purchase')
                ->where('id', $purchase[0]->id)
                ->update(['total' => $total]);
        }
    }
}