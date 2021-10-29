<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;

class CategoryController extends Controller
{

    public function categories()
    {
        $cat = Category::where('Sub_category','=',null)->get();
        return view('categories',compact('cat'));
    }
    public function categoriesId($name)
    {
        $reviews = null;
        $cat = Category::where('Category',$name)->where('Sub_category','=',null)->first();
        if ($cat->Most_views_block != null)
        {
            $reviews = Review::whereIn('Review_id',explode(',',$cat->Most_views_block))->get();
        }
        return view('categories_id',compact('cat','reviews'));
    }
    public function categoriesChild($name, $name2)
    {
        $cats = Review::where('Sub_category',$name2)->where('Parent',null)->get();
        $catsParent = Category::where('Category',$name)->where('Sub_category','<>',null)->get();

        return view('categories_child',compact('name','name2','cats','catsParent'));
    }
}
