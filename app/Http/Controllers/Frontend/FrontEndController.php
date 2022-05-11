<?php

namespace App\Http\Controllers\frontend;

use App\Models\Rating;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        return view('frontend.index',compact('product','category'));
    }

    public function category()
    {
        $category = Category::where('status','1')->get();
        return view('frontend.category',compact('category'));
    }

    public function viewcategory($slug)
    {
        if(Category::where('slug',$slug)->exists())
        {
            $category = Category::where('slug',$slug)->first();
            $product = Product::where('category_id',$category->id)->where('status','1')->get();
            return view('frontend.products.index',compact('category','product'));
        }
        else
        {
            return redirect('/')->with('message',"No Category with this Slug")->with('status',"error");
        }
       
    }

    public function productview($slug , $name)      
    {
        if(Category::where('slug',$slug)->exists())
        {
            if(Product::where('name',$name)->exists())
            {
                $product = Product::where('name',$name)->first();
                $ratings =Rating::where('product_id',$product->id)->get();
                $total_rating = Rating::where('product_id',$product->id)->sum('stars_rated');
                if($ratings->count()>0)
                {
                    $average_rating = $total_rating / $ratings->count();
                }
                else
                {
                    $average_rating =0;
                }
                
                return view('frontend.products.show',compact('product','ratings','average_rating'));
            }
            else
            {
                return redirect('/')->with('message',"No Product with this name")->with('status',"error");
            }
        }
        else
        {
            return redirect('/')->with('message',"No Category with this Slug")->with('status',"error");
        }
    }
}
