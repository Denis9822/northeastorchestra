<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\Author;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{

    public function reviews($name,$name2 = null)
    {
        $productInfo = ($name2 != null) ? Review::where('URL',$name.'/'.$name2)->first() : Review::where('URL',$name)->first();
        $productInfoMain = ($name2 != null) ? Review::where('URL',$name)->first() : null;

        if($productInfo != null) {
            $arr = explode(',', str_replace(' ', '', $productInfo->Item_numbers));
            $limit = 3;
            $products = Product::whereIn('Item_number', $arr)->orderByRaw(DB::raw("FIELD(Item_number, $productInfo->Item_numbers)"))->limit($limit)->get();
            $productsAll = Product::whereIn('Item_number', $arr)->orderByRaw(DB::raw("FIELD(Item_number, $productInfo->Item_numbers)"))->get();
            $productCount = $productsAll->count();
            $maxpage = ceil($productCount / $limit);

            $scores = explode(',', $productInfo->Item_scores);
            foreach ($products as $key => $prod)
                $prod->score = $scores[$key];

            foreach ($productsAll as $key => $prod)
                $prod->score = $scores[$key];

            $productsTop3 = $productsAll->take(3);
            $productsTop10 = ($productsAll->count() > 9) ? $productsAll->take(10) : $productsAll->all();
            $productsRandom10 = ($productsAll->count() > 9) ? $productsAll->random(10) : $productsAll->random($productCount);
            $author = Author::where('Category', $productInfo->Category)->where('Name', $productInfo->Author)->first();

            $featuresTopics = ($name2 == null) ? Review::where('Parent', $productInfo->Title)->get() : Review::where('Parent', $productInfoMain->Title)->where('Title', '<>', $productInfo->Title)->orWhere(function ($q) use ($productInfoMain) {
                $q->where('Parent', null)
                    ->where('Title', $productInfoMain->Title);
            })->get();

            $subCategories = Review::where('Sub_category', $productInfo->Sub_category)->where('Parent', null)->get();
            return view('reviews', compact('products', 'name', 'productInfo', 'productsTop3', 'author', 'productsTop10', 'productsRandom10', 'featuresTopics', 'subCategories','maxpage','name2'));
        }
        elseif ($post = Artist::where('URL',$name)->first())
        {
            $post1 = Artist::where('URL',$name)->first();

            $relatedPost = Artist::where('Cat',$post->Cat)->where('Type',0)->where('Title','<>',$post->Title)->inRandomOrder()->limit(4)->get();
            return view('artists.post',compact('post1','relatedPost'));
        }
        else
        {
            abort(404);
        }
    }
}
