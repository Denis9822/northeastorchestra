@extends('layouts.index',[
    'title' => "$name2 | The ".date('Y')." Guide to $name2",
    'description' => "New to $name2? Our lists will tell you everything you need to know, from our $name2 experts.",
])
@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/categoryChild.css') }}" type="text/css" />

    @include('layouts.breadcrumb', ['deep' => '3','name'=>$name,'name2'=>$name2,'url'=>$catParent->URL])
    <div class="container space-2">
        <h1 class="h2 mb-3">{{$name2}} List </h1>
        <p class="text-muted">
            New to {{$name2}}? Our lists will tell you everything you need to know, from our {{$name2}} experts.
        </p>
        <div class="row mt-8">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="mr-lg-3">
                    <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
                        <button type="button" class="navbar-toggler btn btn-block border py-3" aria-label="Toggle navigation"
                            aria-expanded="false" aria-controls="sidebarNav" data-bs-toggle="collapse"
                            data-bs-target="#sidebarNav">
                            <span class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0 mr-2">View all categories</span>
                                <span class="navbar-toggler-default">

                                </span>
                                <span class="navbar-toggler-toggled">

                                </span>
                            </span>
                        </button>
                        <div id="sidebarNav" class="collapse navbar-collapse">
                            <div class="p-2 p-lg-0">
                                <div class="mt-3 mt-lg-0">
                                    <strong class="h4">{{$name}} Categories</strong>

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
                            <h2 class="h3">Latest</h2>

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
                                                src="/{{$cat->reviewImage()}}"
                                                alt="{{$cat->Title}}" width="68" height="68"></a>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="h6"><a class="text-inherit"
                                                href="{{route('reviews.index',['name'=>$cat->URL])}}">{{$cat->Title}}</a>
                                        </h3>
                                        <div class="text-body font-size-1">
                                            <span>{{number_format($cat->Num_products_total)}} reviews checked</span>
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
@section('script')
    <script src="/assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script>
        (function() {
            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')
        });
    </script>
@endsection
