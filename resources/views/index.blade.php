@extends('layouts.index',[
    'title' => "Best Musical Instruments - Top Reviews In 2021 | northeastorchestra.org",
    'description' => "Expert music gear and equipment reviews. Don't know what kind of gear you need? Get personal recommendations from our biggest music nerds.",
    'header' => 2,
])
@section('content')

@section('links')
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" type="text/css">
@endsection
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" type="text/css" />

    <main id="content" role="main">
        <div class="position-relative bg-primary overflow-hidden">
            <div class="container position-relative z-index-2 space-top-3 space-top-md-4 space-bottom-3 space-bottom-md-4">
                <div class="w-md-80 w-xl-60 text-center mx-md-auto">
                    <div class="mb-7">
                        <h1 class="display-4 text-white mb-3">
                            Help you find the <br>best
                            <span class="text-indigo ">
                                <span class="js-typedjs"
                                      data-hs-typed-options='{
                                        "strings": ["guitars", "drums", "microphones", "DJ equipment"],
                                        "typeSpeed": 90,
                                        "loop": true,
                                        "backSpeed": 30,
                                        "backDelay": 2500
                                      }'></span>
                              </span>
                        </h1>
                        <p class="text-white-70 mb-4">Check out our tests before buying anything<br>From Studio Equipment to Traditional Instruments we do research for you</p>
                    </div>
                    <form action="/search">
                        <div class="card p-2 mb-3">
                            <div class="form-row input-group-borderless search">
                                <div class="col-sm">
                                    <input type="text" name="query" class="form-control shadow-none" placeholder="Search..." aria-label="Search...">
                                </div>
                                <div class="col-sm-auto">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        <i class="fas fa-search"></i>
                                        <span class="d-sm-none ml-1">Search</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container space-2 space-bottom-lg-3 space-bottom-1">
            <div class="row mb-5">
                <div class="col-6">
                    <h2 class="h3 mb-0">Our Favourite Artists</h2>
                </div>
                <div class="col-6 text-right">
                    <a class="font-weight-bold" href="{{route('blog')}}">View all <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
            </div>
            <div class="row mb-3">
                @foreach($artist3 as $artist)
                <div class="col-sm-6 col-lg-4 mb-3 mb-sm-8">

                    <article class="card h-100">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="{{$artist->Img}}" alt="{{$artist->Title}}" style="height: 220px;">
                        </div>
                        <div class="card-body">
                            <h3><a class="text-inherit" href="/{{$artist->URL}}">{{$artist->Title}}</a></h3>
                            <p>{{$artist->Description}}</p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="media align-items-center">
                                <div class="avatar-group">
                                    <div class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Author: {{$artist->Author}}">
                                        <img class="avatar-img" src="/storage/{{$artist->authorImage()}}" alt="{{$artist->Author}} Avatar">
                                    </div>
                                </div>
                                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                    {{$artist->getDataString()}}
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
                @endforeach
            </div>
        </div>

        <div class="bg-light">
            <div class="container space-sm-2 space-bottom-lg-3 space-bottom-1">
                <div class="w-md-80 text-center mx-md-auto mb-9 pt-5">
                    <h2>Latest From TRecords</h2>
                    <p>We analyzed thousands of articles and customer reviews to find the top-rated products at today’s lowest prices. Get trusted advice and in-depth reporting on what matters most.</p>
                </div>

                <div class="row mb-5">
                    @foreach($featuredReviews as $review)
                    <article class="col-md-6 col-lg-4 mb-5">
                        <div class="card border h-100 bp-card">
                            <div class="card-img-top position-relative bp-cover">
                                <a href="{{$review->URL}}">
                                    <img class="card-img-top lazyload scale-down" src="{{$review->reviewImage()}}" width="300" height="300" data-src="{{$review->reviewImage()}}" alt="{{$review->Title}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <small class="d-block small font-weight-bold text-cap mb-2">
                                    <a href="{{route('category.id',['name' => Str::slug($review->Category)])}}">
                                        {{$review->Category}}
                                    </a>
                                </small>
                                <div class="mb-3">
                                    <div class="h4">
                                        <a class="text-inherit" href="{{$review->URL}}">{{$review->Preview_title}}</a>
                                    </div>
                                </div>
                                <p class="bp-summary">{{$review->Description}}</p>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="small text-muted mr-2">
                                        {{$review->getDataString()}}
                                    </div>
                                    <div class="avatar-group">
                                        <span class="avatar avatar-xs avatar-circle" data-bs-toggle="tooltip" data-placement="top" title="{{$review->Author}}">
                                            <img class="avatar-img lazyload" src="/storage/{{$review->authorImage()}}"  alt="{{$review->Author}}Avatar" width="100" height="100">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>

                <div class="text-center">
                    <a class="font-weight-bold" href="{{route('category.directory')}}">View All Posts <i class="fa fa-angle-right fa-sm ml-1"></i></a>
                </div>
            </div>
        </div>


        <div class="content-space-b-2 content-space-b-lg-3 bg-img-start" style="background: url(../assets/svg/components/shape-5.svg) center no-repeat; background-color:white;">
            <div class="position-relative">
                <div class="container content-space-2">
                    <div class="row align-items-md-center mb-7">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h2>Popular Buying Guides</h2>
                        </div>
                        <!-- End Col -->

                        <div class="col-md-6 text-md-end">
                            <a class="link" href="{{route('category.index')}}">View all Guides<i class="bi-chevron-right small ms-1"></i></a>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->

                    <!-- Swiper Slider -->
                    <div class="swiper-center-mode-end">
                        <div class="js-swiper-course-hero swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($selectedReviews as $review)
                                <!-- Slide -->
                                <div class="swiper-slide pt-2">
                                    <!-- Card -->
                                    <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="{{$review->URL}}" style="background-image: url(../assets/img/400x500/img14.jpg); min-height: 15rem;">
                                        <div class="card-body">
                                            <span class="card-subtitle text-white-70">{{$review->Category}}</span>
                                            <h4 class="card-title text-white">{{$review->Title}}</h4>

                                            <div class="card-footer pt-0">
                                                <span class="card-link text-white">Read now</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- End Card -->
                                </div>
                                <!-- End Slide -->
                                @endforeach

                            </div>

                            <!-- Arrows -->

                            <div class="js-swiper-course-hero-button-next swiper-button-next"></div>
                            <div class="js-swiper-course-hero-button-prev swiper-button-prev"></div>
                        </div>
                    </div>
                    <!-- End Swiper Slider -->
                    <div class="mt-5">
                        <div class="text-center mt-5">
                            <ul class="nav nav-segment">
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory')}}">HOT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'a'])}}">A</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'b'])}}">B</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'c'])}}">C</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'd'])}}">D</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'e'])}}">E</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'f'])}}">F</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'g'])}}">G</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'h'])}}">H</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'i'])}}">I</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'j'])}}">J</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'k'])}}">K</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'l'])}}">L</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'm'])}}">M</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'n'])}}">N</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'o'])}}">O</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'p'])}}">P</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'q'])}}">Q</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'r'])}}">R</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 's'])}}">S</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 't'])}}">T</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'u'])}}">U</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'v'])}}">V</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'w'])}}">W</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'x'])}}">X</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'y'])}}">Y</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'z'])}}">Z</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="w-100 w-md-65 bg-light position-absolute top-0 end-0 bottom-0 zi-n1"></div>
            </div>
        </div>

    </main>

@section('script')
    <script src="/assets/vendor/typed.js/lib/typed.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script>
        HSCore.components.HSTyped.init('.js-typedjs')

        // INITIALIZATION OF SWIPER
        // =======================================================
        var swiper = new Swiper('.js-swiper-course-hero',{
            preloaderClass: 'custom-swiper-lazy-preloader',
            navigation: {
                nextEl: '.js-swiper-course-hero-button-next',
                prevEl: '.js-swiper-course-hero-button-prev',
            },
            slidesPerView: 1,
            loop: 1,
            breakpoints: {
                380: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                580: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 15,
                },
            },
            on: {
                'imagesReady': function (swiper) {
                    const preloader = swiper.el.querySelector('.js-swiper-course-hero-preloader')
                    preloader.parentNode.removeChild(preloader)
                }
            }
        });

    </script>
@endsection

@endsection

