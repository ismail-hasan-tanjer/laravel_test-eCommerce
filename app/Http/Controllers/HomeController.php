<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
        {
            $categories = category::all();
            return view('frontend.home.index',['categories'=>$categories]);
        }
    
    public function product()
    {
        $products = Product::all();
        $categories = category::all();
        return view('frontend.product.product',compact('categories','products'));
    }
}
