<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Review;


class AuthorController extends Controller
{

    public function author($name)
    {
        $author = Author::where('URL',$name)->first();
        $reviews = Review::where('Author',$author->Name)->limit(21)->orderBy('created_at')->get();
        return view('author.index',compact('author','reviews'));
    }

}
