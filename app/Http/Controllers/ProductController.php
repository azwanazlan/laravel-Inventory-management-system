<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class ProductController extends Controller
{
    public function addProductForm() {
        $dataBrand = Brand::all();
        $dataCategory = Category::all();
        return view('admin.add',['dataBrand'=>$dataBrand],['dataCategory'=>$dataCategory]);
    }

    public function addNewProduct(Request $request) {
        $this->validate($request,[
            'modelNumber'=>'required|unique:products',
            'productLabel'=>'required|unique:products',
            'category'=>'required|not_in:0',
            'brand'=>'required|not_in:0',
            'price'=>'required',
        ]);


        $product = new Product;
        $product->modelNumber = $request->modelNumber;
        $product->productlabel = $request->productLabel;
        $product->brand_id = $request->brand;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $register = $product->save();

        if($register){
            return back()->with('success', 'Product has been successfully added');
        }else{
            return back()->with('fail', 'Something went wrong');
        }


    }
}
