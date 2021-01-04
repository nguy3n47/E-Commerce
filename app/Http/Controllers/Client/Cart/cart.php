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
        //dd($request->route('message'));
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
                        ->select('order_detail.*', 'product.pro_Name', 'purchase.total')
                        ->get();
        }
        
        return view('../Shop/cart')->with('order_details', $order_details);
    }

    private function subQuantity($purchase_id, $product_id, $product_color, $quantity, $price){
        // update order_detail
        DB::table('order_detail')
                ->where('purchase_id', $purchase_id)
                ->where('product_id', $product_id)
                ->where('product_color', $product_color)
                ->update([
                    'quantity' => $quantity,
                    'total' => $price * $quantity
                ]);

        // plus 1 to quantity of product
        // $oldQuantity = DB::table('proc_colors')
        //                 ->join('quantity_product', 'proc_colors.id','=','quantity_product.color_id')
        //                 ->where('proc_colors.name_color', $product_color)
        //                 ->select('quantity_product.*')
        //                 ->first();

        // DB::table('quantity_product')
        //         ->where('id', $oldQuantity->id)
        //         ->update(['quantity' => $oldQuantity->quantity + 1]);
                
        $total = DB::table('purchase')
                ->where('id', $purchase_id)
                ->select('total')
                ->first();
        return $total->total - $price;
    }

    private function addQuantity($purchase_id, $product_id, $product_color, $quantity, $price){
        // update order_detail
        DB::table('order_detail')
                ->where('purchase_id', $purchase_id)
                ->where('product_id', $product_id)
                ->where('product_color', $product_color)
                ->update([
                    'quantity' => $quantity,
                    'total' => $price * $quantity
                ]);

        // // minus 1 to quantity of product
        // $oldQuantity = DB::table('proc_colors')
        //                 ->join('quantity_product', 'proc_colors.id','=','quantity_product.color_id')
        //                 ->where('proc_colors.name_color', $product_color)
        //                 ->select('quantity_product.*')
        //                 ->first();

        // DB::table('quantity_product')
        //         ->where('id', $oldQuantity->id)
        //         ->update(['quantity' => $oldQuantity->quantity - 1]);
                
        $total = DB::table('purchase')
                ->where('id', $purchase_id)
                ->select('total')
                ->first();
        return $total->total + $price;
    }

    private function delProductInCart($purchase_id, $product_id, $product_color, $quantity, $price){
        // del product in order_detail
        DB::table('order_detail')
                ->where('purchase_id', $purchase_id)
                ->where('product_id', $product_id)
                ->where('product_color', $product_color)
                ->delete();
        // // plus quantity
        // $oldQuantity = DB::table('proc_colors')
        //                 ->join('quantity_product', 'proc_colors.id','=','quantity_product.color_id')
        //                 ->where('proc_colors.name_color', $product_color)
        //                 ->select('quantity_product.*')
        //                 ->first();

        // DB::table('quantity_product')
        //         ->where('id', $oldQuantity->id)
        //         ->update(['quantity' => $oldQuantity->quantity + $quantity]);
        
        // get total in purchase
        $total = DB::table('purchase')
                ->where('id', $purchase_id)
                ->select('total')
                ->first();
        return $total->total - ($quantity * $price);
    }


    public function postToCart(Request $request){
        // if not loggin
        $user = session('user_id');
        if($user == null){
            session()->put('detailProduct', $request->product_name);
            return redirect()->route('login');
        }
        // loggin
        $total = 0;
        $pur_id = NULL;
        $user_id = session('user_id');
        
        // if purchase user if status_id is NULL or not exists then insert
        $purchase = DB::table('purchase')
                    ->where('user_id', '=', $user_id)
                    ->WhereNull('status_id')
                    ->get();
        // if not exists => creat new
        if($purchase->count() == 0){
            // step 1: insert (user_id) to purchase with status_id is NULL
            $count_purchaseID = DB::table('purchase')->count(); // count number of column in `purchase`
            DB::table('purchase')->insert(['id'=>$count_purchaseID + 1,'user_id'=>$user_id]);
            
            // step 2: find product_id with product_Name and update minus quantity
            $product = DB::table('product')
                        ->join('images', 'images.product_id', '=', 'product.id')
                        ->join('proc_colors', 'images.id', '=', 'proc_colors.image_id')
                        ->join('quantity_product', 'quantity_product.color_id', '=', 'proc_colors.id')
                        ->where('proc_colors.id', $request->product_color)
                        ->where('product.pro_Name', $request->product_name)
                        ->select('product.id', 'quantity_product.color_id as qtyPro','quantity_product.quantity', 'proc_colors.name_color')->first();
            $qty = $product->quantity;
            DB::table('quantity_product')
                    ->where('color_id', $product->qtyPro)
                    ->update(['quantity' => $qty-$request->quantity]);
                    
            // step 3: insert (purchase_id, product_id, quantity, price, total = quantity * price) to order_detail
            $count_order_detailID = DB::table('order_detail')->count();
            DB::table('order_detail')
                    ->insert([
                        'id'=> $count_order_detailID + 1,
                        'purchase_id' => $count_purchaseID + 1,
                        'product_id' => $product->id,
                        'quantity' => $request->quantity,
                        'price' => $request->price,
                        'product_color' => $product->name_color,
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
            $product = DB::table('product')
                        ->join('images', 'images.product_id', '=', 'product.id')
                        ->join('proc_colors', 'images.id', '=', 'proc_colors.image_id')
                        ->join('quantity_product', 'quantity_product.color_id', '=', 'proc_colors.id')
                        ->where('proc_colors.id', $request->product_color)
                        ->where('product.pro_Name', $request->product_name)
                        ->select('product.id', 'quantity_product.color_id as qtyPro','quantity_product.quantity', 'proc_colors.name_color')->first();
            $qty = $product->quantity;
            DB::table('quantity_product')
                    ->where('color_id', $product->qtyPro)
                    ->update(['quantity' => $qty-$request->quantity]);
            
            $t = DB::table('purchase')
                        ->join('order_detail', 'purchase.id', '=', 'order_detail.purchase_id')
                        ->where('purchase.id', $purchase[0]->id)
                        ->where('order_detail.product_id', $product->id)
                        ->where('order_detail.product_color', $product->name_color)
                        ->select('order_detail.*')
                        ->get();
            $pur_id = $purchase[0]->id;
            // if not exist in order_detail
            if($t->count() == 0){
                $count_order_detailID = DB::table('order_detail')->count();
                // insert product to order_detail
                DB::table('order_detail')
                    ->insert([
                        'id'=> $count_order_detailID + 1,
                        'purchase_id' => $pur_id,
                        'product_id' => $product->id,
                        'quantity' => $request->quantity,
                        'price' => $request->price,
                        'product_color' => $product->name_color,
                        'total' => $request->price * $request->quantity
                    ]);

            }// if exist in order_detail then update
            else{
                DB::table('order_detail')
                        ->where('id', $t[0]->id)
                        ->where('purchase_id', $pur_id)
                        ->where('product_id', $product->id)
                        ->where('product_color', $product->name_color)
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
        
        // update total in purchase
        DB::table('purchase')
            ->where('id', $pur_id)
            ->update(['total' => $total]);

        return redirect()->route('getCart');
        
    }

    public function editcart(Request $request){
        $total = 0;
        if($request->name == "sub"){
            $total = self::subQuantity($request->purchase_id,
                                        $request->product_id,
                                        $request->product_color,
                                        $request->quantity,
                                        $request->price);
        }
        else if($request->name == "add"){
            $total = self::addQuantity($request->purchase_id,
                                        $request->product_id,
                                        $request->product_color,
                                        $request->quantity,
                                        $request->price);
        }
        else{
            $total = self::delProductInCart($request->purchase_id,
                                        $request->product_id,
                                        $request->product_color,
                                        $request->quantity,
                                        $request->price);
        }
        if($total != 0){
            DB::table('purchase')
                ->where('id', $request->purchase_id)
                ->update(['total' => $total]);
            $msg[0] = $total;
        }
        else{
            DB::table('purchase')
                ->where('id', $request->purchase_id)
                ->delete();
            $msg[0] = "empty";
        }
        return json_encode($msg);
        exit;  
    }
}