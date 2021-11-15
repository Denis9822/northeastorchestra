@extends('layouts.index',[
    'title' => "$post->Title | northeastorchestra.org",
    'description' => "$post->Description",
])
@section('content')

    @include('layouts.breadcrumb', ['deep' => '5'])

    <link rel="stylesheet" href="{{asset('assets/css/post.css') }}" type="text/css"/>

    <div class="container space-top-2 space-bottom-2">
        <div class="w-lg-75 mx-lg-auto">
            <div class="mb-4">
                <h1 class="h2">{{$post->Title}}</h1>
            </div>

            <div class="border-top border-bottom py-4 mb-5">
                <div class="row align-items-md-center">
                    <div class="col-md-7 mb-5 mb-md-0">
                        <div class="media align-items-center">
                            <div class="avatar avatar-circle">
                                <img class="avatar-img lazyload"
                                     src="/storage/{{$post->authorImage()}}" width="300"
                                     height="300"
                                     data-src="/storage/{{$post->authorImage()}}"
                                     alt="{{$post->Author}} Avatar">
                            </div>
                            <div class="media-body font-size-1 ml-3">
                                {{$post->Author}}
                                <span class="d-block text-muted">Last Updated: {{$post->getDataString()}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex justify-content-md-end align-items-center social-share-action">
                            <span class="d-block small font-weight-bold text-cap mr-2">Share:</span>
                            <span class="btn btn-xs btn-icon btn-soft-secondary rounded-circle mr-2 sb-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </span>
                            <span class="btn btn-xs btn-icon btn-soft-secondary rounded-circle mr-2 sb-twitter">
                                <i class="fab fa-twitter"></i>
                            </span>
                            <span class="btn btn-xs btn-icon btn-soft-secondary rounded-circle mr-2 sb-pinterest">
                                <i class="fab fa-pinterest"></i>
                            </span>
                            <span class="btn btn-xs btn-icon btn-soft-secondary rounded-circle mr-2 sb-linkedin">
                                <i class="fab fa-linkedin"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-lg-75 mx-lg-auto article-content">
            {!!$post->Text  !!}
        </div>
        <div class="w-lg-75 mx-lg-auto">

            <div class="row justify-content-sm-between align-items-sm-center mt-5">
                <div class="col-sm-6 mb-2 mb-sm-0">
                    <div class="d-flex align-items-center social-share-action">
                        <span class="d-block small font-weight-bold text-cap mr-2">Share:</span>
                        <span class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2 sb-facebook">
<i class="fab fa-facebook-f"></i>
</span>
                        <span class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2 sb-twitter">
<i class="fab fa-twitter"></i>
</span>
                        <span class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2 sb-pinterest">
<i class="fab fa-pinterest"></i>
</span>
                        <span class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2 sb-linkedin">
<i class="fab fa-linkedin"></i>
</span>
                    </div>
                </div>
            </div>


            <div class="media align-items-center border-top border-bottom py-5 my-8">
                <div class="avatar avatar-circle avatar-xl">
                    <img class="avatar-img lazyload" src="/storage/{{$post->authorImage()}}"
                         width="300" height="300"
                         data-src="/storage/{{$post->authorImage()}}"
                         alt="{{$post->Author}} Avatar">
                </div>
                <div class="media-body ml-3">
                    <small class="d-block small font-weight-bold text-cap">Written by</small>
                    <h4 class="h3 mb-1">{{$post->Author}}</h4>
                    <p class="mb-0">Sarah Cole is a contributing writer and editor on <span class="skimlinks-unlinked">findthisbest.com</span>.
                        She specializes in writing articles in various fields. Her work has spanned topics that include
                        home product reviews, social media research, and has appeared in publications such as The
                        Spruce, Wirecutter, and VeryWell, among others. She has also been involved in the financial
                        industry, and she has many creative and unique insights when it comes to articles.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="w-lg-75 border-top space-2 mx-lg-auto">
            <div class="mb-3 mb-sm-5">
                <h3>Related articles</h3>
            </div>
            <div class="row">
                @foreach($relatedPost as $post)
                <div class="col-md-6">
                    <article class="border-bottom h-100 py-5">
                        <div class="row justify-content-between">
                            <div class="col-6">
                                <h4 class="mb-0">
                                    <a class="text-inherit"
                                       href="{{route('post',['name' => $post->URL])}}">{{$post->Title}}</a>
                                </h4>
                            </div>
                            <div class="col-5">
                                <img class="img-fluid rounded lazyload"
                                     src="{{$post->Img}}"
                                     width="300" height="300"
                                     alt="{{$post->Title}}">
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
