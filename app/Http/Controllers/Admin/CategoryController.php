<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Contracts\CategoryContract;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('c_id', 'c_name', 'c_active', 'created_at')->get();
        $data = [
            'categories' => $categories
        ];
        return view('admin.categories.index', $data);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        if (Category::where('c_name', '=', $request->input('name'))->exists()) {
            return redirect()->back()->withInput();
        }
        else{
            $category = new Category();
            $category->c_name = $request->name;
            $category->c_slug = Str::slug($request->name, '-');
            $category->save();
    
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        if (Category::where('c_name', '=', $request->input('name'))->exists()) {
            return redirect()->back()->withInput();
        }
        else{
            $category = Category::find($id);
            $category->c_name = $request->name;
            $category->c_slug = Str::slug($request->name, '-');
            $category->save();
    
            return redirect()->back()->withInput();
        }
    }

    public function delete($id)
    {
        $category = Category::find($id)->delete();
        return redirect()->back();
    }
}
