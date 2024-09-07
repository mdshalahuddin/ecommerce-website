<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MyCommerceController extends Controller
{
    function index(){
        return view('website.home.index',[
            'categories'=>Category::all(),
        ]);
    }
    function category(){
        return view('website.category.index');
    }
    function details(){
        return view('website.details.index');
    }

}
