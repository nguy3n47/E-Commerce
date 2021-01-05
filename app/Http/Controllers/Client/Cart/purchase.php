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
        $user_id = session('user_id');
        $list_purId = DB::table('purchase')
                            ->where('user_id', $user_id)
                            ->whereNotNull('status_id')
                            ->groupBy('id')
                            ->orderBy('create_at', 'desc')
                            ->select('id')
                            ->get()
                            ->toArray();

        

                            
        $list = [];
        foreach($list_purId as $pur){
            
            $offer = DB::table('order_detail')
                        ->join('product', 'product.id','=','order_detail.product_id')
                        ->join('images', 'images.product_id','=','order_detail.product_id')
                        ->join('purchase', 'order_detail.purchase_id','=','purchase.id')
                        ->join('purchase_status', 'purchase_status.id', '=', 'purchase.status_id')
                        ->where('order_detail.purchase_id', $pur->id)
                        ->select('order_detail.*',
                                    'purchase.total',
                                    'product.pro_Name',
                                    'purchase_status.content')
                        ->get()
                        ->toArray();
                        
            array_push($list, $offer);
        }

        return view('../Shop/listpurchase')->with('list_purchase', $list);
    }

    public function postpurchase(Request $request){
        DB::table('purchase')
            ->where('id', $request->pur_id)
            ->update(['fullname' =>  $request->name,
                        'telephone' => $request->phone,
                        'address' => $request->address,
                        'status_id' => 1,
                        'payment_id' => $request->pay]);
        
        return redirect()->route('get_purchase');
    }
}