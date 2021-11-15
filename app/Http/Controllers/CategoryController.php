<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Review;

class CategoryController extends Controller
{

    public function categories()
    {
        $cat = Category::where('Sub_category','=',null)->get();
        return view('categories.categories',compact('cat'));
    }
    public function categoriesId($name)
    {
        $reviews = null;

        $cat = Category::where('URL','/categories/'.$name)->where('Sub_category','=',null)->first();
        if($cat == null)
            abort('404');
        if ($cat->Most_views_block != null)
        {
            $reviews = Review::whereIn('Review_id',explode(',',$cat->Most_views_block))->get();

        }

        return view('categories.categories_id',compact('cat','reviews'));
    }
    public function categoriesChild($name, $name2)
    {

        $cat = Category::where('URL','/categories/'.$name.'/'.$name2)->first();
        if($cat == null)
            abort('404');

        $name2 = $cat->Sub_category;
        $cats = Review::where('Sub_category',$name2)->where('Parent',null)->get();
        $catParent = Category::where('URL','/categories/'.$name)->first();
        $catsParent = Category::where('Category',$catParent->Category)->where('Sub_category','<>',null)->get();
        $name = $catParent->Category;
        return view('categories.categories_child',compact('name','name2','cats','catsParent','catParent'));
    }
    public function category_directory($letter = null)
    {

        $reviews = ($letter == null) ? Review::inRandomOrder()->paginate(50) : Review::where('Title','like',$letter.'%')->inRandomOrder()->paginate(50);
        return view('categories.directory',compact('reviews','letter'));
    }
}
