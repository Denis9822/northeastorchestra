@extends('layouts.index',[
    'title' => "$cat->Category Guide of ".date('Y')." - Reviews by ".request()->getHost(),
    'description' => "We researched thousands of $cat->Category products to find the top picks for you. Read this ".date('Y')." ultimate guide before you buy.",
])
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/categoryId.css') }}" type="text/css" />

    @include('layouts.breadcrumb', ['deep' => '2','name'=>$cat->Category])
    <div class="gradient-y-overlay-sm-gray-900 bg-img-hero"
        style="background-image: url(https://cdn.findthisbest.com/assets/img/categories/appliances.jpg);">
        <div class="container space-top-2 position-relative z-index-2">
            <div class="w-md-100 text-center mx-md-auto p-4 p-lg-7 mb-3 mb-sm-5 mb-lg-11">
                <h1 class="text-white">
                    {{$cat->Category}}
                </h1>
                <p class="text-white">Looking for the best products to buy? Find here the top appliances products</p>
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
                            <h5 class="card-title mb-4 text-nowrap" style="overflow: hidden;">
                                <a
                                    href="{{$childCategory->URL}}">
                                    {{$childCategory->Sub_category}}</a>
                            </h5>
                            <p class="card-text">{{$childCategory->Number_of_reviews ?? 0}} topics</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @if($reviews)
            <h2 class="mb-5 mt-5">Popular Lists</h2>
            <div class="row mb-5">
                @foreach($reviews as $review)
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card border h-100 p-3">
                        <div class="media">
                            <div class="avatar avatar-lg mr-3">
                                <a class="text-inherit" href="{{route('reviews.index',['name'=>$review->URL])}}">
                                    <img class="avatar-img lazyload"
                                         data-original="{{$review->reviewImage()}}"
                                        data-src="{{$review->reviewImage()}}"
                                        alt="{{$review->Title}}" width="68" height="68">
                                </a>
                            </div>
                            <div class="media-body">
                                <h5 class="h6"><a class="text-inherit"
                                        href="{{route('reviews.index',['name'=>$review->URL])}}">{{$review->Title}}</a></h5>
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
