<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{

    public function reviews($name,$name2 = null)
    {
        $productInfo = ($name2 != null) ? Review::where('URL',$name.'/'.$name2)->first() : Review::where('URL',$name)->first();
        if($productInfo == null)
            abort('404');
        $products = Product::whereIn('Item_number',explode(',',$productInfo->Item_numbers))->get();
        $scores = explode(',', $productInfo->Item_scores);
        foreach ($products as $key => $prod)
            $prod->score = $scores[$key];
        $productsTop3 = $products->take(3);
        $productsTop10 = ($products->count() > 9) ? $products->take(10) : $products->all();
        $productsRandom10 = ($products->count() > 9) ? $products->random(10): $products->random($products->count());
        $author = Author::where('Category',$productInfo->Category)->where('Name',$productInfo->Author)->first();
        $featuresTopics = Review::where('Parent',$productInfo->Title)->get();
        $subCategories = Review::where('Sub_category',$productInfo->Sub_category)->where('Parent','<>',$productInfo->Parent)->get();
        return view('reviews',compact('products','name','productInfo','productsTop3','author','productsTop10','productsRandom10','featuresTopics','subCategories'));
    }
}
