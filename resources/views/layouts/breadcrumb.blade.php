<div class="bg-light">
    <div class="container py-3">
        <div class="row justify-content-md-between align-items-md-center">
            <div class="col-md-8 py-2 mb-md-0">
                <nav class="d-inline-block rounded" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter font-size-1 mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        @if ($deep == 1 || $deep == 2 || $deep == 3 || $deep == 4)
                        <li class="breadcrumb-item {{$deep == '1' ? 'active' : ''}}" aria-current="page"><a
                                href="{{route('category.index')}}">Categories</a></li>
                        @endif
                        @if ($deep == 2)
                            <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
                        @endif
                        @if ($deep == 3)
                            <li class="breadcrumb-item" aria-current="page"><a href="{{$url}}">{{$name}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$name2}}</li>
                        @endif
                        @if ($deep == 4)
                            <li class="breadcrumb-item dms-none" aria-current="page"><a href="{{$productInfo->getUrlCategory()}}">{{$productInfo->Sub_category}}</a></li>
                            <li class="breadcrumb-item active dm-none" aria-current="page">{{$productInfo->Title}}</li>
                        @endif
                        @if ($deep == 5)
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{route('blog')}}">Artists</a></li>
                        @endif
                        @if ($deep == 6)
                            <li class="breadcrumb-item dms-none" aria-current="page">Brands</li>
                        @endif
                        @if ($deep == 7)
                            <li class="breadcrumb-item dms-none" aria-current="page">Lists Directory</li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
