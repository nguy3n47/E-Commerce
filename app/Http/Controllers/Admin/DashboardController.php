<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $totalProduct = Product::count();
        $totalOrder = Order::count();
        $totalCustomer = User::count();
        $totalSale = DB::table("orders")->where("status", 'delivered')->get()->sum("sub_total");

        $data  = [
            'totalProduct' => $totalProduct,
            'totalSale' => $totalSale,
            'totalOrder' => $totalOrder,
            'totalCustomer' => $totalCustomer,
        ];

        return view('admin.dashboard.index', $data);
    }
}
