<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.index',[
            'categories'=>Category::all(),
            'sub_categories'=>SubCategory::all(),
            'brands'=>Brand::all(),
            'units'=>Unit::all(),

        ]);
    }
    public function getSubCategoryByCategory(){

        return response()->json(SubCategory::where('category_id',$_GET['id'])->get());
    }
    public function manage(){
        return view('admin.product.manage',['products'=>Product::all()]);
    }
    public function edit($id){
        return view('admin.product.edit',['product'=>Product::find($id)]);
    }

    public function update(Request $request,$id){
Product::updateCategory($request,$id);
return redirect('/product/manage')->with('message','Product info Update successfully');

    }

public  function create(Request $request){
    Product::newCategory($request);
return redirect('/product/manage')->with('message','Product info create successfully');
}
public function delete($id){
    Product::deleteCategory($id);
    return redirect('/product/manage')->with('message','Product info delete successfully');
}


}