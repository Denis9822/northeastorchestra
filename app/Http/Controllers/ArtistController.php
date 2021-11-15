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

    public function post($name)
    {
        $post = Artist::where('URL',$name)->first();
        if ($post == false)
            abort(404);
        $relatedPost = Artist::where('Cat',$post->Cat)->where('Type',0)->where('Title','<>',$post->Title)->inRandomOrder()->limit(4)->get();
        return view('artists.post',compact('post','relatedPost'));
    }
}
