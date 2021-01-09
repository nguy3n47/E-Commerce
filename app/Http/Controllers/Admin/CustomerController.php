<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customers = User::all();
        //dd($customers);
        return view('admin.customers.index', compact('customers'));
    }
}
