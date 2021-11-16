@extends('layouts.index',[
    'title' => "$category->Title | northeastorchestra.org",
    'description' => "$category->Description",
])
@section('content')


<link rel="stylesheet" href="{{asset('assets/css/blog.css') }}" type="text/css" />

<main id="content" role="main">

    <div class="container space-top-3 space-top-lg-4 space-bottom-1 space-bottom-md-2">
        <div class="w-md-80 w-lg-75 text-center mx-md-auto">
            <h1 class="display-4">{{$category->Title}}</h1>
            <p class="lead">{{$category->Description}}</p>
        </div>
    </div>


    <div class="container space-top-md-1 space-bottom-1 space-bottom-lg-2">
        @if (Request::get('page') == null || Request::get('page')==1)
        <article class="card mb-11">
            <div class="row no-gutters">
                <div class="col-lg-8">
                    <div class="position-relative overflow-hidden">
                        <img class="card-img" src="{{$post1->Img}}" alt="{{$post1->Title}}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-body d-flex flex-column h-100 p-4 p-lg-5">
                        <h2><a class="text-inherit" href="/{{$post1->URL}}">{{$post1->Title}}</a></h2>
                        <p>{{$post1->Description}}</p>
                        <div class="media align-items-center mt-auto">
                            <div class="avatar-group">
                                <div class="avatar avatar-xs avatar-circle" data-bs-toggle="tooltip" data-placement="top" title="Author: {{$post1->Author}}">
                                    <img class="avatar-img" src="/storage/{{$post1->authorImage()}}" alt="{{$post1->Author}} Avatar">
                                </div>
                            </div>
                            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                {{$post1->getDataString()}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <div>
            <p class="small mb-5">Support aspiring artists!</p>
        </div>

        <div class="row mb-5">
            <div class="col-6">
                <h2 class="h3 mb-0">Artists</h2>
            </div>
        </div>
        @endif
        <div class="row mb-3">
            @foreach($posts as $post)
            <div class="col-sm-6 col-lg-4 mb-3 mb-sm-8">

                <article class="card h-100">
                    <div class="card-img-top position-relative">
                        <img class="card-img-top" src="{{$post->Img}}" alt="{{$post->Title}}" style="height: 220px;">
                    </div>
                    <div class="card-body">
                        <h3><a class="text-inherit" href="/{{$post->URL}}">{{$post->Title}}</a></h3>
                        <p>{{$post->Description}}</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="media align-items-center">
                            <div class="avatar-group">
                                <div class="avatar avatar-xs avatar-circle" data-bs-toggle="tooltip" data-placement="top"  title="Author: {{$post->Author}}">
                                    <img class="avatar-img" src="/storage/{{$post1->authorImage()}}" alt="{{$post->Author}} Avatar">
                                </div>
                            </div>
                            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                {{$post->getDataString()}}
                            </div>
                        </div>
                    </div>
                </article>

            </div>
            @endforeach
        </div>

        {{ $posts->links("pagination::bootstrap-4") }}

    </div>

</main>

@endsection
