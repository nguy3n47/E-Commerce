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
    public function index(){

        // Doanh thu theo ngày
        $odersDay = Order::where('status', 'process')
                        ->whereDay('created_at', date('d'))
                        ->select(\DB::raw('sum(sub_total) as total'), \DB::raw('DATE(created_at) day'))
                        ->groupBy('day')
                        ->get()->toArray();
        
        // Doanh thu theo tháng
        $month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
        $odersMonth = Order::where('status', 'delivered')
                        ->whereMonth('created_at', date('m'))
                        ->select(\DB::raw('sum(sub_total) as total'))
                        ->get()->toArray();

        // Doanh thu theo năm
        $odersYear = Order::where('status', 'process')
                        ->whereYear('created_at', date('Y'))
                        ->select(\DB::raw('sum(sub_total) as total'), \DB::raw('DATE(created_at) day'))
                        ->groupBy('day')
                        ->get()->toArray();
                        
        $temp = array();
        foreach ($odersMonth as $or){
            array_push($temp, $or['total']);
        }

        return view('admin.statistics.index')
            ->with('odersMonth',json_encode($temp,JSON_NUMERIC_CHECK));
        
    }
}
