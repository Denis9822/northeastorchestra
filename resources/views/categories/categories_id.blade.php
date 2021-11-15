@extends('layouts.index',[
    'title' => "$cat->Category | The ".date('Y')." Guide to $cat->Category",
    'description' => "New to $cat->Category? Our lists will tell you everything you need to know, from our $cat->Category experts.",
])
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/categoryId.css') }}" type="text/css" />

    @include('layouts.breadcrumb', ['deep' => '2','name'=>$cat->Category])
    <div class="gradient-y-overlay-sm-gray-900 bg-img-hero"
        style="background-image: url('{{$cat->Image}}'); background-repeat: no-repeat; background-size: 100%; background-position: center">
        <div class="container space-top-2 position-relative z-index-2">
            <div class="w-md-100 text-center mx-md-auto p-4 p-lg-7 mb-3 mb-sm-5 mb-lg-11">
                <h1 class="text-white">
                    {{$cat->Category}}
                </h1>
                <h2 class="text-white">All the latest {{$cat->Category}} news, reviews and tips</h2>
            </div>
        </div>
    </div>

    <div class="container space-1">
        <div class="card-deck d-block">
            <div class="row mx-n2">
                @foreach($cat->childCategories() as $childCategory)
                <div class="col-sm-6 col-md-4 px-2">
                    <div class="card border mb-3">
                        <div class="card-body">
                            <h3 class="card-title mb-4 text-nowrap" style="overflow: hidden; white-space: normal!important;">
                                <a
                                    href="{{$childCategory->URL}}">
                                    {{$childCategory->Sub_category}}</a>
                            </h3>
                            <p class="card-text">{{$childCategory->Number_of_reviews ?? 0}} topics</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @if($reviews)
            <h2 class="mb-5 mt-5">Latest {{$cat->Category}} Lists</h2>
            <div class="row mb-5">
                @foreach($reviews as $review)
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card border h-100 p-3">
                        <div class="media">
                            <div class="avatar avatar-lg mr-3">
                                <a class="text-inherit" href="{{route('reviews.index',['name'=>$review->URL])}}">
                                    <img class="avatar-img lazyload"
                                         data-original="{{$review->reviewImage()}}"
                                        src="{{$review->reviewImage()}}"
                                        alt="{{$review->Title}}" width="68" height="68">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="h6"><a class="text-inherit"
                                        href="{{route('reviews.index',['name'=>$review->URL])}}">{{$review->Title}}</a></h3>
                                <div class="text-body font-size-1">
                                    <span>{{number_format($review->Num_products_total)}} reviews analyzed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
