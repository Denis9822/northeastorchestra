<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\Author;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{

    public function ajax_reviews($name,$name2 = null,$id)
    {
        if ($name2 == "null")
            $name2 = null;

        $productInfo = ($name2 != null) ? Review::where('URL',$name.'/'.$name2)->first() : Review::where('URL',$name)->first();
        $productInfoMain = ($name2 != null) ? Review::where('URL',$name)->first() : null;
        if($productInfo != null) {
            $arr = explode(',', str_replace(' ', '', $productInfo->Item_numbers));

            $limit = 3;
            $products = Product::whereIn('Item_number', $arr)->orderByRaw(DB::raw("FIELD(Item_number, $productInfo->Item_numbers)"))->skip($limit*($id-1))->limit($limit)->get();

            $productCount = Product::whereIn('Item_number', $arr)->orderByRaw(DB::raw("FIELD(Item_number, $productInfo->Item_numbers)"))->count();
            $maxpage = ceil($productCount / $limit);

            $scores = explode(',', $productInfo->Item_scores);
            foreach ($products as $key => $prod)
                $prod->score = $scores[$key];
            $productsTop3 = $products->take(3);
            $productsTop10 = ($products->count() > 9) ? $products->take(10) : $products->all();
            $productsRandom10 = ($products->count() > 9) ? $products->random(10) : $products->random($products->count());
            $author = Author::where('Category', $productInfo->Category)->where('Name', $productInfo->Author)->first();

            $featuresTopics = ($name2 == null) ? Review::where('Parent', $productInfo->Title)->get() : Review::where('Parent', $productInfoMain->Title)->where('Title', '<>', $productInfo->Title)->orWhere(function ($q) use ($productInfoMain) {
                $q->where('Parent', null)
                    ->where('Title', $productInfoMain->Title);
            })->get();

            $subCategories = Review::where('Sub_category', $productInfo->Sub_category)->where('Parent', null)->get();
            return view('ajax.reviews', compact('products', 'name', 'productInfo', 'productsTop3', 'author', 'productsTop10', 'productsRandom10', 'featuresTopics', 'subCategories','maxpage'));
        }

    }

    public function ajax_brands($name,$id)
    {
        $brandInfo = Brand::where('URL','/brand/'.$name)->first();
        if($brandInfo == null)
            abort('404');

        $arr = explode(',',str_replace(' ', '',$brandInfo->Item_numbers));
        $limit = 3;
        $products = Product::whereIn('Item_number',$arr) ->orderByRaw(DB::raw("FIELD(Item_number, $brandInfo->Item_numbers)"))->skip($limit*($id-1))->limit($limit)->get();
        $productCount = Product::whereIn('Item_number',$arr) ->orderByRaw(DB::raw("FIELD(Item_number, $brandInfo->Item_numbers)"))->count();
        $maxpage = ceil($productCount / $limit);

        $scores = explode(',', $brandInfo->Item_scores);
        foreach ($products as $key => $prod)
            $prod->score = $scores[$key];
        $productsTop3 = $products->take(3);
        $author = Author::where('Category',$brandInfo->Category)->where('Name',$brandInfo->Author)->first();
        $similarBrands10 = Brand::where('Category',$brandInfo->Category)->where('Brand','<>',$brandInfo->Brand)->inRandomOrder()->limit(12)->get();

        return view('ajax.brands',compact('brandInfo','products','scores','productsTop3','author','similarBrands10','maxpage','name'));
    }
}
