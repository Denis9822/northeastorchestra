@extends('layouts.index',[
    'title' => "All Categories of Reviews - FindThisBest",
    'description' => "All categories to help you find the best: Electronics, Patio, Lawn & Garden Hot, Sports & Outdoors Hot and so on.",
])
@section('content')

@include('layouts.breadcrumb', ['deep' => '1'])

<link rel="stylesheet" href="{{asset('assets/css/category.css') }}" type="text/css" />
<div class="container space-2">

    <h1 class="h2 mb-8">All Categories to Help You Find The Best</h1>
    <div class="card-sm-columns card-sm-2-count card-lg-3-count">
        @foreach($cat as $category)
        <div class="navbar-vertical mb-5 mr-5">
            <div class="card border">
                <img class="card-img-top" src="{{asset($category->Image)}}"
                    alt="{{$category->Category}}">
                <div class="card-body">
                    <h3 class="h4 text-cap mb-2"><a
                            href="{{route('category.id',['name' => $category->Category])}}">{{$category->Category}}</a></h3>
                    <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                        <li class="nav-item">
                            @foreach($category->childCategories() as $childCategory)
                            <a class="nav-link"
                                href="{{route('category.child',['name' => $childCategory->Category, 'name2'=>$childCategory->Sub_category])}}">
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
    <div class="mt-5">
        <div class="text-center mt-5">
            <ul class="nav nav-segment">
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory">HOT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/a">A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/b">B</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/c">C</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/d">D</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/e">E</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/f">F</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/g">G</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/h">H</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/i">I</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/j">J</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/k">K</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/l">L</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/m">M</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/n">N</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/o">O</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/p">P</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/q">Q</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/r">R</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/s">S</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/t">T</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/u">U</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/v">V</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/w">W</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/x">X</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/y">Y</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="padding:.625rem .95rem;"
                        href="https://www.findthisbest.com/topics-directory/z">Z</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
