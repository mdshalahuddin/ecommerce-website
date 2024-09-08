<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MyCommerceController extends Controller
{
    function index(){
        return view('website.home.index',[
            'categories'=>Category::all(),
            'products'=>Product::orderBy('id','desc')->take('8')->get(['id','category_id','name','selling_price','regular_price','image']),
        ]);
    }
    function category($id){
        return view('website.category.index',[
            'products'=> Product::where('category_id',$id)->orderBy('id','desc')->get()
        ]);
    }
    function details(){
        return view('website.details.index');
    }

}