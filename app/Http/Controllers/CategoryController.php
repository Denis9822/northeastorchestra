<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{

    public function categories()
    {
        return view('categories');
    }
    public function categoriesId()
    {
        return view('categories_id');
    }
    public function categoriesChild()
    {
        return view('categories_child');
    }
}
