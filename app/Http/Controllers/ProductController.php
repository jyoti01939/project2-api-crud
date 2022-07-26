<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view ('product.create');
    }

    public function create(Request $request)
    {
      $request->validate([
            'product_name' => 'required',
            'category' => 'required'
      ]);

      $product = new Product();
      $product->product_name = $request->product_name;
      $product->category = $request->category;
      $product->status = $request->status;
      $product->save();
      return redirect()->back()->with('message','Product added Successfully!');
    }

    public function edit($id){

        $productObj = Product::find($id);
        return view('product.edit',compact('productObj'));
    }

    public function update(Request $request,$id){
        $productObj = Product::find($id);
        $productObj->product_name = $request->product_name;
        $productObj->category = $request->category;
        $productObj->status = $request->status;
        $productObj->save();
        return redirect()->back()->with('edit','Product updated Successfully!');
    }
    public function delete($id)
    {
        $productObj = Product::find($id);
        $productObj->delete();
       return redirect()->back();

    }
}
