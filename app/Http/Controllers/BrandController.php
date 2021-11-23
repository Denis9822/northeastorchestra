<?php

namespace App\Http\Controllers;


use App\Models\Author;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{

    public function brand()
    {
        $brands = Brand::orderBy('created_at','desc')->paginate(60);

        return view('brands.index',compact('brands'));
    }
    public function brand_name($name)
    {
        $brandInfo = Brand::where('URL','/brand/'.$name)->first();
        if($brandInfo == null)
            abort('404');

        $arr = explode(',',str_replace(' ', '',$brandInfo->Item_numbers));
        $limit = 3;
        $products = Product::whereIn('Item_number',$arr) ->orderByRaw(DB::raw("FIELD(Item_number, $brandInfo->Item_numbers)"))->limit($limit)->get();
        $productCount = Product::whereIn('Item_number',$arr) ->orderByRaw(DB::raw("FIELD(Item_number, $brandInfo->Item_numbers)"))->count();
        $maxpage = ceil($productCount / $limit);

        $scores = explode(',', $brandInfo->Item_scores);
        foreach ($products as $key => $prod)
            $prod->score = $scores[$key];
        $productsTop3 = $products->take(3);
        $author = Author::where('Category',$brandInfo->Category)->where('Name',$brandInfo->Author)->first();
        $similarBrands10 = Brand::where('Category',$brandInfo->Category)->where('Brand','<>',$brandInfo->Brand)->inRandomOrder()->limit(12)->get();

        return view('brands.brand',compact('brandInfo','products','scores','productsTop3','author','similarBrands10','maxpage','name'));
    }
}
