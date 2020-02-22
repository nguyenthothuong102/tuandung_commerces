<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Image;

class ProductController extends Controller
{
  public function index(){
    $products = Product::all();
    return view('admin.products.index', ['products' => $products]);
  }

  public function create(){
    $categories = Category::pluck('name', 'id');
    return view('admin.products.create', compact('categories'));
  }

  public function store(Request $request){
    $data_product = [
            'name'        => $request->name_product,
            'brand'        => $request->brand_product,
            'description' => $request->description,
            'price'       => $request->price,
            'category_id' => $request->category_id,
            'quantity'       => $request->quantity,
        ];
        //dd($data_product);
        $product_id = Product::create($data_product)->id;
        $images = $request->images;

         if ($request->hasFile('images')) {
            foreach ($images as $image) {
                $name = time() . $image->getClientOriginalName();
                $image->move(public_path() . '/uploads/', $name);

                $data_product_image = [
                'name'       => $request->name_image,
                'path'      => '/uploads/' . $name,
                'product_id' => $product_id,
                ];
                Image::create($data_product_image);
            }
          }

         Session::flash('success','Create successfly!');
         return redirect()->route('admin.products.index');
  }
}
