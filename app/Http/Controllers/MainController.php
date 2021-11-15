<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index()
    {
        $reviewIds = "2,5,88,23,15,12,74,13,33";
        $artist3 = Artist::where('Type',0)->limit(3)->get();
        $featuredReviews = Review::orderBy('created_at','desc')->limit(9)->get();
        $selectedReviews = Review::whereIn('Review_id',explode(',',$reviewIds))->orderByRaw(DB::raw("FIELD(Review_id, $reviewIds)"))->get();
        return view('index',compact('artist3','featuredReviews','selectedReviews'));
    }

}
