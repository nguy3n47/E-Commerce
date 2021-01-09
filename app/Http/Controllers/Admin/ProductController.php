<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Contracts\ProdcutContract;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::select('pro_id', 'pro_name', 'pro_active', 'pro_price', 'pro_thumbnail', 'pro_quantity')->orderBy('created_at', 'desc')->get();
        $images = Image::select('product_id', 'filename')->get();
        $viewdata = [
            'products' => $products,
            'images' => $images
        ];

        //dd($viewdata);
        return view('admin.products.index', $viewdata);
    }

    public function create()
    {
        $categories = $this->getCategories();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $product = Product::create([
            'pro_name' => $request->name,
            'pro_slug' => Str::slug($request->name, '-'),
            'pro_sku' => $request->sku,
            'pro_quantity' => $request->quantity,
            'pro_category_id' => $request->category_id,
            'pro_price' => $request->price,
            'pro_description' => $request->description,
            'pro_thumbnail' => 'img/'.$request->file('thumbnail')->getClientOriginalName(),
        ]);
        Storage::disk('uploads')->put($request->file('thumbnail')->getClientOriginalName(), file_get_contents($request->file('thumbnail')->getRealPath()));

        $photos = $request->file('images');
        foreach ($photos as $photo) {
            //$filename = $photo->store('photos');
            $filename = 'img/'.$photo->getClientOriginalName();
            Storage::disk('uploads')->put($photo->getClientOriginalName(), file_get_contents($photo->getRealPath()));
            Image::create([
                'product_id' => $product->pro_id,
                'filename' => $filename
            ]);
        }
        return redirect()->back();

    }

    public function getCategories()
    {
        return Category::all();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $images = Image::where('product_id', $id)->get();
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'images', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->pro_name = $request->name;
        $product->pro_slug = Str::slug($request->name, '-');
        $product->pro_sku = $request->sku;
        $product->pro_quantity = $request->quantity;
        $product->pro_category_id = $request->category_id;
        $product->pro_price = $request->price;
        $product->pro_description = $request->description;
        if($request->file('thumbnail')){
            $product->pro_thumbnail = 'img/'.$request->file('thumbnail')->getClientOriginalName();
            Storage::disk('uploads')->put($request->file('thumbnail')->getClientOriginalName(), file_get_contents($request->file('thumbnail')->getRealPath()));
        }
        $product->save();
        return redirect()->back()->withInput();
    }

    public function delete($id)
    {
        Image::where('product_id', '=', $id)->delete();
        $product = Product::find($id)->delete();
        return redirect()->back();
    }

}
