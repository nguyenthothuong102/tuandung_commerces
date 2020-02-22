<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;

class ProductController extends Controller
{
    public function index(){
      $products=Product::with('images')->orderBy('created_at', 'desc')->paginate(20);
      // dd($products);
      return view('home',compact('products'));
    }

    public function show(Product $product)
    {
        //dd($product);
        return view('product-countdown',compact('product'));
    }
}
