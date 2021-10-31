@extends('layouts.index',[
    'title' => "Top $productInfo->Num_products_article Best $productInfo->Title of ".date('Y')." (Reviews) | Site.com",
    'description' => "What are the best $productInfo->Title in ".date('Y')."? We analyzed $productInfo->Num_reviews dedicated $productInfo->Title reviews to do the research for you.",
    'section' => $productInfo->Sub_category,
    'published_time' => "2021-10-16T06:55:11+00:00",
    'modified_time' => "2021-10-17T09:17:36+00:00",
    'image' => "https://m.media-amazon.com/images/I/41ZjMBngw0L._SL500_.jpg",
])
@section('content')

    @include('layouts.breadcrumb', ['deep' => '4','name'=>$productInfo->Title])
    <link rel="stylesheet" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('assets/css/reviews.css') }}" type="text/css" />
    <div class="container space-top-1">
        <div class="mx-lg-auto">
            <div class="row mb-1">
                <div class="col-md-8 mb-md-0">
                    <h1 class="h2">
                        <a class="text-dark" href="https://www.findthisbest.com/best-ranges">
                            Best {{$productInfo->Title}}
                        </a>
                    </h1>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-md-end align-items-center social-share-action pt-2">
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
            <div class="py-2 mb-0 pb-4 text-nowrap small">
                <i class="far fa-clock"></i>
                Last Updated: Oct 17, 2021
            </div>
        </div>
    </div>

    @if ($productsTop3->count() == 3)
    <div class="container mb-5 bg-dark rounded" id="quick-pick">
        <div class="mx-lg-auto px-2 px-md-8 px-lg-10 py-5">
            <h3 class="pt-3 pb-4 text-white text-center"><span class="text-warning">At a Glance: </span>Our Top Picks</h3>
            <div class="row">
                @foreach($productsTop3 as $product)
                <div class="col-sm-12 col-lg-4 mb-3">
                    <div class="card border shadow-none text-center h-100 d-none d-lg-block">
                        <div class="position-relative">
                            <a href="https://buy.geni.us/Proxy.ashx?TSID=123727&amp;GR_URL=https%3A%2F%2Fwww.amazon.com%2Fdp%2FB0831RCGT1&amp;rf_source=amazon"
                                rel="nofollow" target="_blank">
                                <img style="height: 220px;object-fit: contain;padding: 2rem;" class="card-img-top"
                                    src="{{$product->ta_picture}}"
                                    alt="Frigidaire FGIH3047VF Gallery Series 30 Inch Stainless Steel Induction Electric Convection Freestanding Range Cover"
                                    width="162" height="220">
                            </a>
                            <div class="position-absolute top-0 left-0 pt-3 pl-3">
                                <span class="badge badge-soft-primary">
                                    <span class="legend-indicator bg-primary"></span>TOP {{ $loop->index+1 }}
                                </span>
                            </div>
                        </div>
                        <div class="card-body pt-4 px-4 pb-0 mb-2 line-2-hidden" style="height: 74px;">
                            {{$product->ta_name}}
                        </div>
                        <div class="position-relative max-w-13rem mx-auto mb-2">
                            <img class="img-fluid"
                                src="https://cdn.findthisbest.com/assets/svg/illustrations/review-rating-shield.svg"
                                alt="ftb score rating icon">
                            <span
                                class="position-absolute top-0 right-0 left-0 z-index-2 text-white font-size-2 font-weight-bold mt-2">{{$product->score}}</span>
                            <div class="small pt-2">FTB Score <i class="far fa-question-circle" data-toggle="tooltip"
                                    data-placement="top" title=""
                                    data-original-title="FTB Score is our proprietary scoring system that helps us evaluate each product on a scale of 1 to 10. The score is based on product features, online popularity, price, brand reputation, and other expert reviews."></i>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-3 pb-4 px-4">
                            @if($product->a_url)
                            <a class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover"
                                href="{{$product->a_url}}"
                                rel="nofollow" target="_blank"><i class="fas fa-check-circle mr-1"></i> CLICK FOR PRICE <i
                                    class="fas fa-angle-right ml-1"></i></a>

                            <a class="mt-2 btn btn-sm btn-outline-primary btn-pill transition-3d-hover"
                               href="{{$product->t_url}}"
                               rel="nofollow" target="_blank"><i class="fas fa-check-circle mr-1"></i> CLICK FOR PRICE <i
                                    class="fas fa-angle-right ml-1"></i></a>
                            @else
                                <a class="mt-2 btn btn-sm btn-outline-primary btn-pill transition-3d-hover"
                                   href="{{$product->t_url}}"
                                   rel="nofollow" target="_blank"><i class="fas fa-check-circle mr-1"></i> CLICK FOR PRICE <i
                                        class="fas fa-angle-right ml-1"></i></a>
                            @endif
                            <a class="d-block mt-2" href="#p-B0831RCGT1"><span class="text-muted small">Read
                                    Review</span></a>
                        </div>
                    </div>
                    <div class="card border shadow-none text-center h-100 d-lg-none p-3">
                        <div class="media">
                            <div class="avatar avatar-lg mr-3">
                                <a class="text-inherit"
                                    href="https://buy.geni.us/Proxy.ashx?TSID=123727&amp;GR_URL=https%3A%2F%2Fwww.amazon.com%2Fdp%2FB0831RCGT1&amp;rf_source=amazon"
                                    rel="nofollow" target="_blank">
                                    <img class="avatar-img"
                                        src="https://m.media-amazon.com/images/I/41ZjMBngw0L._SL500_.jpg"
                                        alt="Frigidaire FGIH3047VF Gallery Series 30 Inch Stainless Steel Induction Electric Convection Freestanding Range Cover"
                                        width="68" height="68"></a>
                            </div>
                            <div class="media-body text-left">
                                <h5 class="h6"
                                    style="height: 40px;overflow: hidden;white-space: wrap;word-wrap: break-word;word-break: break-all;">
                                    <a class="text-inherit"
                                        href="https://buy.geni.us/Proxy.ashx?TSID=123727&amp;GR_URL=https%3A%2F%2Fwww.amazon.com%2Fdp%2FB0831RCGT1&amp;rf_source=amazon"
                                        rel="nofollow" target="_blank">
                                        Frigidaire FGIH3047VF Gallery Series 30 Inch Stainless Steel Induction Electric
                                        Convection Freestanding Range
                                    </a>
                                </h5>
                                <div class="text-body font-size-1">
                                    <span class="badge badge-soft-primary">
                                        <span class="legend-indicator bg-primary"></span>TOP 1
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-3">
                <span class="sdivider sdivider-xs divider-text">Tips</span>
            </div>
            <div class="py-3 font-size-1">
                <p style="word-break:break-word;">The best<strong>{{$productInfo->Title}}</strong> ranking is based on our detailed
                    evaluation and analysis of over {{number_format($productInfo->Num_reviews)}} consumer satisfaction surveys. We have come up with the top {{$products->count()}}
                    ranges you might be interested in and rated them on factors such as value for money, popularity, usage
                    experience.</p>
            </div>
        </div>
    </div>
    @endif

    <div class="container mb-8">
        <p class="small">* Our editing teams independently research, review, and recommend the best products based on extensive data analysis; if
        you click on the product links, we may earn a commission from qualifying purchases.</p>
    </div>
    <div class="container bp-container">
        <h2 class="h3 pt-1 pb-4 text-center">Top {{$products->count()}} {{$productInfo->Title}} Reviews 2021</h2>
    </div>

    <div class="container bp-container">
        <div class="row">
            <div class="col-lg-9">
                @foreach($products as $product)
                <div class="bp-cards card border p-3 p-lg-5 mb-5" id="p-B0831RCGT1">
                    <div class="mb-2">
                        <div class="flex justify-content-start align-items-center mb-2"
                            style="max-width: 100%;flex-wrap: nowrap;overflow-x: auto;white-space: nowrap;">
                            <small class="badge badge-primary badge-pill">#TOP {{$loop->index+1}}</small>
                            <a class="badge badge-pill badge-secondary"
                                style="background-color: rgba(55,125,255,.1);color: #377dff;"
                                href="https://www.findthisbest.com/best-freestanding-ranges">Best Freestanding Range</a>
                        </div>
                        <h3 class="text-dark line-2-hidden">{{$product->ta_name}}</h3>
                    </div>
                    <div class="flex justify-content-start align-items-center small text-muted mb-2">
                        @if ($product->option(0) != null)
                        <div class="d-inline-block mr-2" data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="Brand">
                            <i class="fas fa-copyright mr-1"></i>
                            {{$product->option(0)}}
                        </div>
                        @endif
                        @if ($product->option(1) != null)
                        <div class="d-inline-block mr-2" data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="Dimension">
                            <i class="fas fa-box mr-1"></i>
                            {{$product->option(1)}}
                        </div>
                        @endif
                        @if ($product->option(2) != null)
                        <div class="d-inline-block mr-2" data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="Weight">
                            <i class="fas fa-weight mr-1"></i>
                            {{$product->option(2)}}
                        </div>
                        @endif
                    </div>
                    <div class="px-md-2 mb-md-0 w-100 mt-5">
                        <div class="text-center">
                            <a href="{{$product->a_url != null ? $product->a_url : $product->t_url}}"
                                rel="nofollow" target="_blank">
                                <img class="img-fluid lazyload bp-product-thumb"
                                    src="{{$product->ta_picture}}" width="162"
                                    height="220" data-src="{{$product->ta_picture}}"
                                    alt="Frigidaire FGIH3047VF Gallery Series 30 Inch Stainless Steel Induction Electric Convection Freestanding Range Cover">
                            </a>
                        </div>
                        <div class="bp-product-thumblist">
                            @if ($product->thumbnails() != null)
                            @foreach($product->thumbnails() as $img)
                            <a href="{{$product->a_url == null ? $product->t_url : $product->a_url}}"
                                rel="nofollow" target="_blank">
                                <img class="shadow rounded lazyload"
                                    src="{{$img}}"
                                    data-src="{{$img}}"
                                    alt="{{$productInfo->Preview_title}}"
                                    width="100" height="100">
                            </a>
                             @endforeach
                             @endif
                        </div>
                        <div class="text-center pt-5">
                            <h4 class="h5 mb-4">
                                Reviews for {{$product->ta_brand}}
                                <i class="fas fa-question-circle small" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="FTB Score is our proprietary scoring system that helps us evaluate each product on a scale of 1 to 10. The score is based on product features, online popularity, price, brand reputation, and other expert reviews."></i>
                            </h4>
                            <div class="position-relative max-w-13rem mx-auto mb-2">
                                <img class="img-fluid"
                                    src="https://cdn.findthisbest.com/assets/svg/illustrations/review-rating-shield.svg"
                                    alt="ftb score rating icon">
                                <span
                                    class="position-absolute top-0 right-0 left-0 z-index-2 text-white font-size-2 font-weight-bold mt-2">{{$product->score}}</span>
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <a class="btn btn-sm btn-primary mb-2 mx-1"
                                href="{{$product->a_url}}"
                                rel="nofollow" target="_blank">
                                <i class="fab fa-amazon mr-1"></i> View on Amazon</a>

                        </div>
                    </div>
                    <hr class="my-6">
                    <div style="overflow: hidden;">
                        <h4 class="mb-4 h5">Features</h4>
                        <div class="line-3-hidden">
                            {!! $product->ta_features!!}
                        </div>
                        <div class="col-lg-12">
                            <a class="pt-2 link link-collapse font-size-1 font-weight-bold pt-1" data-toggle="collapse" href="#collapseDescriptionSection-1" role="button" aria-expanded="false" aria-controls="collapseDescriptionSection-1">
                                <span class="link-collapse-default">Read more</span>
                                <span class="link-collapse-active">Read less</span>
                                <span class="link-icon ml-1">+</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-3 mb-5 mb-md-0">
                <nav class="card shadow-none bg-light bp-nav">
                    <div class="card-body">
                        <h5>Top {{$productInfo->Title}}</h5>
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            @foreach($productsTop10 as $product)
                            <li class="nav-item line-2-hidden">
                                <div class="nav-link">
                                    <span>{{$loop->index+1}}.</span>
                                    <a href="#{{$product->Item_number}}">{{$product->ta_name}}</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
                <nav class="card shadow-none bg-light bp-nav mt-3">
                    <div class="card-body">
                        <h5>Most Popular</h5>
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            @foreach($productsRandom10 as $product)
                            <li class="nav-item line-2-hidden">
                                <div class="nav-link">
                                    <span>{{$loop->index+1}}.</span>
                                    <a href="#{{$product->Item_number}}">{{$product->ta_name}}</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
                @if(count($featuresTopics) > 0)
                <nav class="card shadow-none bg-light bp-nav mt-3">
                    <div class="card-body">
                        <h5>Featured Topics</h5>
                        <ul class="nav nav-sm nav-x-0 flex-column mt-3">
                            @foreach($featuresTopics as $topic)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('reviews.index',['name'=>$topic->URL])}}">{{$topic->Title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
                @endif

                @if(count($subCategories) > 0)
                    <nav class="card shadow-none bg-light bp-nav mt-3">
                        <div class="card-body">
                            <h5>Related Picks</h5>
                            <ul class="nav nav-sm nav-x-0 flex-column mt-3">
                                @foreach($subCategories as $subCategory)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('reviews.index',['name'=>$subCategory->URL])}}">{{$subCategory->Title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                @endif
            </div>
        </div>
    </div>

    <div class="container space-top-1 space-bottom-1" id="guide">
        <div class="card bg-light border p-4 p-md-7">
            <h2 class="pb-3">Best {{$productInfo->Title}} — FAQ </h2>
            @if($productInfo->PAA)
            <div class="pb-5 border-bottom">
                {!! $productInfo->PAA !!}
            </div>
            @endif
            <div class="pt-5">
                <h3 class="pb-3">Editor's Notes</h3>
                <p>
                    With so many {{$productInfo->Title}} available, it's difficult to know which one is best. Fortunately, our research team compiled an unbiased list of {{$productInfo->Num_products_article}} best {{$productInfo->Title}} that will fit every budget. During this study there were over {{$productInfo->Num_products_total}} products across {{$productInfo->Num_products_article}} brands. Our verdict: most customers choose {{$productInfo->Title}} with an average price tag of ${{$productInfo->Avg_price}}!
                </p>
            </div>
            <div class="media d-block d-sm-flex align-items-center border-top border-bottom py-5 my-3">
                <div class="position-relative mx-auto mb-3 mb-sm-0 mr-sm-4" style="width: 100px; height: 100px;">
                    <img class="img-fluid rounded-circle lazyload"
                        src="storage/{{$author->Avatar}}" width="300" height="300"
                        data-src="{{$author->Avatar}}"
                        alt="{{$author->Name}}">
                </div>
                <div class="media-body ml-3">
                    <small class="d-block small font-weight-bold text-cap">WRITTEN BY</small>
                    <div class="h3 mb-0">{{$author->Name}}</div>
                    <p class="mb-0">{{$author->Bio}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
