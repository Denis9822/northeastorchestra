<div class="bg-light">
    <div class="container py-3">
        <div class="row justify-content-md-between align-items-md-center">
            <div class="col-md-8 py-2 mb-md-0">
                <nav class="d-inline-block rounded" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter font-size-1 mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item {{$deep == '1' ? 'active' : ''}}" aria-current="page"><a
                                href="{{route('category.index')}}">Categories</a></li>
                        @if ($deep == 2)
                            <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
                        @endif
                        @if ($deep == 3)
                            <li class="breadcrumb-item" aria-current="page"><a href="{{route('category.id',['name' => $name])}}">{{$name}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$name2}}</li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
