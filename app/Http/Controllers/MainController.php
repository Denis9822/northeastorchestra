<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index()
    {
        $reviewIds = "1792,908,46,1116,1127,1971,1745,913,1011,1746,1959,1135,156";
        $artist3 = Artist::where('Type',0)->limit(3)->get();
        $featuredReviews = Review::orderBy('created_at','desc')->limit(9)->get();
        $selectedReviews = Review::whereIn('Review_id',explode(',',$reviewIds))->orderByRaw(DB::raw("FIELD(Review_id, $reviewIds)"))->get();
        return view('index',compact('artist3','featuredReviews','selectedReviews'));
    }

}
