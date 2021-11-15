@extends('layouts.index',[
    'title' => "All Categories | northeastorchestra.org",
    'description' => "All categories: Guitars and Basses, Drums and Percussion, DJ Equipment, Microphones, Studio and Recording Equipment, etc",
])
@section('content')

@include('layouts.breadcrumb', ['deep' => '1'])

<link rel="stylesheet" href="{{asset('assets/css/category.css') }}" type="text/css" />
<div class="container space-2">

    <h1 class="h2 mb-8">All Categories</h1>
    <div class="card-sm-columns card-sm-2-count card-lg-3-count">
        @foreach($cat as $category)
        <div class="navbar-vertical mb-5 mr-5">
            <div class="card border">
                <img class="card-img-top" src="{{asset($category->Image)}}"
                    alt="{{$category->Category}}">
                <div class="card-body">
                    <h3 class="h4 text-cap mb-2"><a
                            href="{{$category->URL}}">{{$category->Category}}</a></h3>
                    <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                        <li class="nav-item">
                            @foreach($category->childCategories() as $childCategory)
                            <a class="nav-link"
                                href="{{$childCategory->URL}}">
                                {{$childCategory->Sub_category}}
                            </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection
