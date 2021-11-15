@extends('layouts.index',[
    'title' => "$page->Title | northeastorchestra.org",
    'description' => "$page->Description",
])
@section('content')


<link rel="stylesheet" href="{{asset('assets/css/service.css') }}" type="text/css" />

<div class="container space-top-3 space-top-lg-4 space-bottom-2">
    <div class="mb-5">
        <h1>{{$page->Title}}</h1>
        {!! $page->Text !!}
    </div>
</div>

@endsection
