@extends('layouts.index',[
    'title' => "All Categories | northeastorchestra.org",
    'description' => "All categories: Guitars and Basses, Drums and Percussion, DJ Equipment, Microphones, Studio and Recording Equipment, etc",
])
@section('content')

@include('layouts.breadcrumb', ['deep' => '7'])

<link rel="stylesheet" href="{{asset('assets/css/category.css') }}" type="text/css" />
<link rel="stylesheet" href="{{asset('assets/css/directory.css') }}" type="text/css" />

<div class="container space-2">
    @if ( $letter == null)
    <h1 class="h2 mb-8">Featured Picks</h1>
    @else
        <h1 class="h2 mb-8">Lists Start with "{{strtoupper($letter)}}"</h1>
    @endif
    <div class="text-center mt-3">
        <ul class="nav nav-segment">
            <li class="nav-item">
                <a class="nav-link {{($letter == null) ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory')}}">HOT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'a') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'a'])}}">A</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'b') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'b'])}}">B</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'c') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'c'])}}">C</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'd') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'd'])}}">D</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'e') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'e'])}}">E</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'f') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'f'])}}">F</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'g') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'g'])}}">G</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'h') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'h'])}}">H</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'i') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'i'])}}">I</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'j') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'j'])}}">J</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'k') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'k'])}}">K</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'l') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'l'])}}">L</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'm') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'm'])}}">M</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'n') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'n'])}}">N</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'o') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'o'])}}">O</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'p') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'p'])}}">P</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'q') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'q'])}}">Q</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'r') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'r'])}}">R</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 's') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 's'])}}">S</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 't') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 't'])}}">T</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'u') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'u'])}}">U</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'v') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'v'])}}">V</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'w') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'w'])}}">W</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'x') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'x'])}}">X</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'y') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'y'])}}">Y</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($letter == 'z') ? 'active' : ''}}" style="padding:.625rem .95rem;" href="{{route('category.directory',['letter' => 'z'])}}">Z</a>
            </li>
        </ul>
    </div>

    <div class="row mt-5">
        @foreach($reviews as $review)
            @if ( $letter == null)
                <article class="col-md-6 col-lg-4 mb-5">
            <div class="card border h-100 bp-card">
                <div class="card-img-top position-relative bp-cover">
                    <a href="/{{$review->URL}}">
                        <img class="card-img-top lazyload scale-down" src="{{$review->reviewImage()}}" width="300" height="300" alt="{{$review->Category}}">
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
                        <a class="font-weight-bold" href="/{{$review->URL}}">Read Review</a>
                    </div>
                </div>
            </div>
        </article>
            @else
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card border h-100 p-3">
                        <div class="media">
                            <div class="avatar avatar-lg mr-3">
                                <a class="text-inherit" href="/{{$review->URL}}"><img class="avatar-img lazyload" src="{{$review->reviewImage()}}" data-src="{{$review->reviewImage()}}" alt="{{$review->Title}}" width="68" height="68"></a>
                            </div>
                            <div class="media-body">
                                <h5 class="h6"><a class="text-inherit" href="/{{$review->URL}}">{{$review->Title}}</a></h5>
                                <div class="text-body font-size-1">
                                    <span>{{number_format($review->Num_reviews)}} reviews analyzed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <div class="d-flex justify-content-between align-items-center mt-8">
        {{ $reviews->links("pagination::bootstrap-4") ?? ''}}
    </div>
</div>

@endsection
@section('script')
    <script>
        $('.nav-item').click(function (){
            $('.nav-link').removeClass('active');
            $(this).children('.nav-link').addClass('active');
        })
    </script>
@endsection
