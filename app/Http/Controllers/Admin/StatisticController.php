<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;

class StatisticController extends Controller
{
    public function index(Request $request){

        return view('admin.statistics.index');

    }

    public function run(Request $request){
        $fromDate = $request->fromDate;
        $toDate = $request->toDate;

        $orders = Order::where('status', 'delivered')
                        ->whereDate('created_at', '>=', $fromDate)
                        ->whereDate('created_at', '<=', $toDate)
                        ->select(\DB::raw('sum(sub_total) as total'))
                        ->get()->toArray();

        $temp = array();
        foreach ($orders as $order){
            array_push($temp, $order['total']);
        }

        return ($temp);
    }
}
