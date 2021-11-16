<?php

namespace App\Http\Controllers;


use App\Models\Artist;

class ArtistController extends Controller
{

    public function blog()
    {
        $category = Artist::where('URL','artists')->where('Type','1')->first();
        $post1 = Artist::where('Url_cat',$category->URL)->where('Type',0)->first();
        $posts = Artist::where('Url_cat',$category->URL)->where('Type',0)->where('Title','<>',$post1->Title)->paginate(9);

        return view('artists.blog',compact('category','posts','post1'));
    }

}
