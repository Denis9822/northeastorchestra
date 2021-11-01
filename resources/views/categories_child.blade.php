@extends('layouts.index',[
    'title' => "$name2 Guide of ".date('Y')." - Reviews by ".request()->getHost(),
    'description' => "We researched thousands of $name2 products to find the top picks for you. Read this ".date('Y')." ultimate guide before you buy.",
])
@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/categoryChild.css') }}" type="text/css" />

    @include('layouts.breadcrumb', ['deep' => '3','name'=>$name,'name2'=>$name2,'url'=>$catParent->URL])
    <div class="container space-2">
        <h1 class="h2 mb-3">{{$name2}} List </h1>
        <p class="text-muted">
            We researched and compared thousands of Refrigerators, Freezers &amp; Ice Makers to find the top picks for you.
            Read this 2021 ultimate guide before you buy.
        </p>
        <div class="row mt-8">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="mr-lg-3">
                    <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
                        <button type="button" class="navbar-toggler btn btn-block border py-3" aria-label="Toggle navigation"
                            aria-expanded="false" aria-controls="sidebarNav" data-toggle="collapse"
                            data-target="#sidebarNav">
                            <span class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">View all categories</span>
                                <span class="navbar-toggler-default">
                                    <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor"
                                            d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="navbar-toggler-toggled">
                                    <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor"
                                            d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z">
                                        </path>
                                    </svg>
                                </span>
                            </span>
                        </button>
                        <div id="sidebarNav" class="collapse navbar-collapse">
                            <div class="p-2 p-lg-0">
                                <div class="mt-3 mt-lg-0">
                                    <h2 class="h4">{{$name}} Categories</h2>

                                    @foreach($catsParent as $catParent)
                                    <a class="dropdown-item d-flex justify-content-between align-items-center px-0  {{$name2 == $catParent->Sub_category ? 'active' : ''}}"
                                        href="{{$catParent->URL}}">
                                        {{$catParent->Sub_category}}
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 column-divider-lg">
                <div class="ml-lg-2">
                    <div class="row mb-5">
                        @foreach($cats as $cat)
                        <div class="col-md-6 mb-5">
                            <div class="card border h-100 p-3">
                                <div class="media">
                                    <div class="avatar avatar-lg mr-3">
                                        <a class="text-inherit"
                                            href="{{route('reviews.index',['name'=>$cat->URL])}}"><img
                                                class="avatar-img lazyload"
                                                data-original="{{$cat->reviewImage()}}"
                                                src="{{$cat->reviewImage()}}"
                                                alt="{{$cat->Title}}" width="68" height="68"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="h6"><a class="text-inherit"
                                                href="{{route('reviews.index',['name'=>$cat->URL])}}">{{$cat->Title}}</a></h5>
                                        <div class="text-body font-size-1">
                                            <span>{{number_format($cat->Num_products_total)}} reviews analyzed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-8">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
