@extends('layouts.index',[
    'title' => "About $author->Name | northeastorchestra.org",
    'description' => "$author->Bio",
])
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/post.css') }}" type="text/css" />

<main id="content" role="main">

    <div class="container space-top-3 space-bottom-2">
        <div class="border-bottom w-md-75 w-lg-60 space-bottom-2 mx-md-auto">
            <div class="media d-block d-sm-flex">
                <div class="position-relative mx-auto mb-3 mb-sm-0 mr-sm-4" style="width: 160px; height: 160px;">
                    <img class="img-fluid rounded-circle" src="/{{$author->Avatar}}" alt="{{$author->Name}} Abels Avatar" width="160" height="160">
                    <img class="bg-white position-absolute bottom-0 right-0 rounded-circle p-1" src="https://cdn.findthisbest.com/assets/svg/illustrations/top-vendor.svg" alt="Icon" width="36" height="36" title="Top Writer">
                </div>
                <div class="media-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h1 class="h3">{{$author->Name}}</h1>
                    </div>
                    <p class="mb-0">{{$author->Bio}}</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container space-bottom-3">
        <div class="row mb-5">
            @foreach($reviews as $review)
            <article class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 bp-card">
                    <div class="card-img-top position-relative bp-cover">
                        <a href="/{{$review->URL}}">
                            <img class="card-img-top lazyload" src="{{$review->reviewImage()}}" width="300" height="300" data-src="" alt="{{$review->Title}} thumbnail" style="object-fit: contain;">
                        </a>
                    </div>
                    <div class="card-body">
                        <small class="d-block small font-weight-bold text-cap mb-2">
                            <a href="{{route('category.id',['name' => Str::slug($review->Category)])}}">
                                {{$review->Category}}
                            </a>
                        </small>
                        <div class="mb-3 bp-title">
                            <div class="h4">
                                <a class="text-inherit" href="/{{$review->URL}}">{{$review->Title}}</a>
                            </div>
                        </div>
                        <p class="bp-summary">{{$review->Preview_title}}</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="small text-muted mr-2">
                                {{$review->getDataString()}}
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>

</main>
<style>
    @media (min-width: 576px) {
        .mr-sm-4, .mx-sm-4 {
            margin-right: 1.5rem !important;
        }
    }
</style>
@endsection
