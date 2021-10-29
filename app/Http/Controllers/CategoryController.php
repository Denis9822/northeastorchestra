<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{

    public function categories()
    {
        $cat = Category::where('Sub_category','=',null)->get();
        return view('categories',compact('cat'));
    }
    public function categoriesId($name)
    {
        $cat = Category::where('Category',$name)->where('Sub_category','=',null)->first();
        return view('categories_id',compact('cat'));
    }
    public function categoriesChild()
    {
        return view('categories_child');
    }
}
