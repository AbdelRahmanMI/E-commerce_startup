<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        return view('admin.product.index' , compact('product','category'));
    }

    public function add()
    {
        $category = Category::all();
        return view('admin.product.add',compact('category'));
    }

    public function insert(Request $request)
    {
        $product = new Product();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product/',$filename);
            $product->image = $filename;

        }
        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->status = $request->input('status') == TRUE ? '1':'0';
        $product->save();
        return redirect('product')->with('message',"Product Added Successfully")->with('status',"success");
    }
}
