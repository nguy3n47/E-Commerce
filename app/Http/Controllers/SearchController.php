<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function find(Request $request) {
        $product = Product::where('pro_name', 'like', '%' . $request->get('q') . '%')->get();
        return response()->json($product);
      }
}
