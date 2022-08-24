<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function addProductForm() {
        return view('admin.add');
    }

    public function addNewProduct(Request $request) {
        $this->validate($request,[
            'serialNumber'=>'required|unique:products',
            'productLabel'=>'required|unique:products',
            'category_id'=>'required',
            'brand_id'=>'required',
            'price'=>'required',
        ]);


        $product = new Product;
        $product->serialNumber = $request->serialNumber;
        $product->productlabel = $request->productLabel;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $register = $product->save();

        if($register){
            return back()->with('success', 'Data have been successfully inserted');
        }else{
            return back()->with('fail', 'Something went wrong');
        }


    }
}
