@extends('layouts.index',[
    'title' => "Brands | northeastorchestra.org",
    'description' => "All brands",
])
@section('content')

    @include('layouts.breadcrumb', ['deep' => '6'])
<link rel="stylesheet" href="{{asset('assets/css/brand.css') }}" type="text/css" />

<div class="container space-2">
    <h1 class="h2 mb-8">Featured Brands Reviews List</h1>
    <div class="row mb-5">
        @foreach($brands as $brand)
        <div class="col-md-6 col-lg-4 mb-5">
            <div class="card border h-100 p-3">
                <div class="media">
                    <div class="avatar avatar-lg mr-3">
                        <a class="text-inherit" href="{{$brand->URL}}">
                            <img class="avatar-img lazyload"
                                 src="{{$brand->image()}}"
                                 data-src="{{$brand->image()}}" alt="{{$brand->Brand}}">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="h6">
                            <a class="text-inherit" href="{{$brand->URL}}">{{$brand->Brand}}</a>

                        </h5>
                        <div class="small">{{$brand->Category}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    {{ $brands->links("pagination::bootstrap-4") }}
</div>

@endsection
