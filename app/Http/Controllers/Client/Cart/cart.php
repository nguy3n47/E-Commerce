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

class cart extends Controller
{
    public function getToCart()
    {
        // if not logged in then loggin
        $user = session('user_id');
        if($user == null){
            session()->put('cart', 'cart');
            return redirect()->route('login');
        }
        $purchase = DB::table('purchase')
                        ->where('user_id', '=', $user)
                        ->WhereNull('status_id')
                        ->get();
        $order_details = [];
        if($purchase->count() != 0){
            $order_details = DB::table('order_detail')
                        ->join('product', 'order_detail.product_id', '=', 'product.id')
                        ->join('purchase', 'order_detail.purchase_id', '=', 'purchase.id')
                        ->where('order_detail.purchase_id', $purchase[0]->id)
                        ->select('order_detail.*', 'product.pro_Name', 
                                    'purchase.total', 'product.quantity as qtyMax')
                        ->get();
        }
        
        
        return view('../Shop/cart')->with('order_details', $order_details);
    }

    public function postToCart(Request $request){
        $total = 0;
        $pur_id = NULL;
        $user_id = session('user_id');
        // sub quantity
        if($request->sub != null){
            $pur_id = $request->purchase_id;
            if($request->quantity - 1 == 0){
                dd("xóa lun à");
            }else{
                DB::table('order_detail')
                        ->where('id', $request->sub)
                        ->update([
                            'quantity' => $request->quantity - 1,
                            'total' => $request->price * ($request->quantity - 1)
                        ]);

                $total = DB::table('order_detail')
                        ->where('purchase_id', $request->purchase_id)
                        ->sum('total');
            }
        }
        // add quantity
        else if($request->add != null){
            $pur_id = $request->purchase_id;
            DB::table('order_detail')
                        ->where('id', $request->add)
                        ->update([
                            'quantity' => $request->quantity + 1,
                            'total' => $request->price * ($request->quantity + 1)
                        ]);

                $total = DB::table('order_detail')
                        ->where('purchase_id', $request->purchase_id)
                        ->sum('total');
        }
        else if($request->del != null){
            $pur_id = $request->del;
            DB::table('order_detail')
                    ->where('id', $pur_id)
                    ->where('product_id', $request->product_id)
                    ->delete();

            $total = DB::table('order_detail')
                    ->where('purchase_id', $pur_id)
                    ->sum('total');
            // check empty cart
            if($total == 0){
                DB::table('purchase')
                        ->where('id', $pur_id)
                        ->delete();
            }
        }
        // add product to order_detail
        else{
            // if purchase user if status_id is NULL or not exists then insert
            $purchase = DB::table('purchase')
                        ->where('user_id', '=', $user_id)
                        ->WhereNull('status_id')
                        ->get();
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
                $pur_id = $count_purchaseID + 1;
                
                $total = DB::table('order_detail')
                            ->where('purchase_id', $pur_id)
                            ->sum('total');
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
                $pur_id = $purchase[0]->id;
                
                if($t->count() == 0){
                    $count_order_detailID = DB::table('order_detail')->count();
                    // insert product to order_detail
                    DB::table('order_detail')
                        ->insert([
                            'id'=> $count_order_detailID + 1,
                            'purchase_id' => $pur_id,
                            'product_id' => $product_id[0]->id,
                            'quantity' => $request->quantity,
                            'price' => $request->price,
                            'total' => $request->price * $request->quantity
                        ]);

                }
                else{
                    DB::table('order_detail')
                            ->where('id', $t[0]->id)
                            ->where('purchase_id', $pur_id)
                            ->where('product_id', $product_id[0]->id)
                            ->update([
                                'quantity' => $t[0]->quantity + $request->quantity,
                                'total' => $request->price * ($t[0]->quantity + $request->quantity)
                            ]);
                }
                // sum total in order_detail
                $total = DB::table('order_detail')
                        ->where('purchase_id', $pur_id)
                        ->sum('total');
            }
        }
        // update total in purchase
        DB::table('purchase')
            ->where('id', $pur_id)
            ->update(['total' => $total]);

        return redirect()->route('getCart');
        
    }
}