@extends('layouts.index',[
    'title' => "Not Found",
    'description' => "404 page"
])
@section('content')

    <div class="container error">
        <div class="error_title">
            Not Found, Error 404
        </div>
        <div class="error_text">
            The page you are looking for no longer exists. Perhaps you can return back to the site’s homepage and see if you can find what you are looking for.
        </div>
    </div>
    <style>
        .error
        {
            min-height: 50vh;
        }
        .error_title
        {
            margin-top: 15vh;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }
        .error_text
        {
            width: 60%;
            margin: 0 auto;
            text-align: center;
            margin-top: 20px;
        }
    </style>
@endsection
