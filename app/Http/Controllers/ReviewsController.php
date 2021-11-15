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
        $arr = explode(',',str_replace(' ', '',$productInfo->Item_numbers));

        $products = Product::whereIn('Item_number',$arr) ->orderByRaw(DB::raw("FIELD(Item_number, $productInfo->Item_numbers)"))->get();

        $scores = explode(',', $productInfo->Item_scores);
        foreach ($products as $key => $prod)
            $prod->score = $scores[$key];
        $productsTop3 = $products->take(3);
        $productsTop10 = ($products->count() > 9) ? $products->take(10) : $products->all();
        $productsRandom10 = ($products->count() > 9) ? $products->random(10): $products->random($products->count());
        $author = Author::where('Category',$productInfo->Category)->where('Name',$productInfo->Author)->first();
        $featuresTopics = ($name2 == null) ? Review::where('Parent',$productInfo->Title)->get() : Review::where('Parent',$productInfo->Parent)->where('Title','<>',$productInfo->Title)->orWhere(function($q) use ($productInfo){
            $q->where('Parent',null)
                ->where('Title', $productInfo->Parent);
        })->get();

        $subCategories = Review::where('Sub_category',$productInfo->Sub_category)->where('Parent',null)->get();
//        dd($products[0]->option());
        return view('reviews',compact('products','name','productInfo','productsTop3','author','productsTop10','productsRandom10','featuresTopics','subCategories'));
    }
}
