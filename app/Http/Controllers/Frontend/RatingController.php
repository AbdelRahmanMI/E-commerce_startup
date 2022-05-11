<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Rating;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function add(Request $request)
    {
        $stars_rated = $request->input('rating');
        $product_id = $request->input('product_id');
        $phone= $request->input('phone');
        $content= $request->input('content');
        $product_check = Product::where('id',$product_id)->where('status','1')->first();

        if($stars_rated && $product_check)
        {
            $existing = Rating::where('user_id',Auth::id())->where('product_id',$product_id)->first();
            if($existing)
            {
                $existing->stars_rated = $stars_rated;
                $existing->phone = $phone;
                $existing->content = $content;
                $existing->update();
            }
            else
            {
                Rating::create([
                'user_id'=>Auth::id(),
                'product_id'=>$product_id,
                'name'=>Auth::user()->name,
                'email'=>Auth::user()->email,
                'phone'=>$phone,
                'content'=>$content,
                'stars_rated'=>$stars_rated
                ]);
            }
            return redirect()->back()->with('message',"Thank You For Rating This Product")->with('status',"success");
        }
        else    
        {
            return redirect()->back()->with('message',"Invalid Tokens")->with('status',"error");
        }
            
            
    }
}
