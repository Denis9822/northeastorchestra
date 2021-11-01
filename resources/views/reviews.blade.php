@extends('layouts.index',[
    'title' => "Top $productInfo->Num_products_article Best $productInfo->Title of ".date('Y')." (Reviews) | Site.com",
    'description' => "What are the best $productInfo->Title in ".date('Y')."? We analyzed $productInfo->Num_reviews dedicated $productInfo->Title reviews to do the research for you.",
    'section' => $productInfo->Sub_category,
    'published_time' => $productInfo->created_at,
    'modified_time' => $productInfo->updated_at,
    'image' => 'https://northeastorchestra.org'.$products[0]->ta_picture,
])
@section('content')

    @include('layouts.breadcrumb', ['deep' => '4','productInfo'=>$productInfo])
    <link rel="stylesheet" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('assets/css/reviews.css') }}" type="text/css" />
    <div class="container space-top-1">
        <div class="mx-lg-auto">
            <div class="row mb-1">
                <div class="col-md-8 mb-md-0">
                    <h1 class="h2">
                        <a class="text-dark" href="{{$productInfo->URL}}">
                            Best {{$productInfo->Title}}
                        </a>
                    </h1>
                </div>

            </div>
            <div class="py-2 mb-0 pb-4 text-nowrap small">
                <i class="far fa-clock"></i>
                Last Updated:
                {{$productInfo->getDataString()}}
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
                            <a href="{{($product->a_url == "null") ? $product->t_url : $product->a_url}}"
                                rel="nofollow" target="_blank">
                                <img style="height: 220px;object-fit: contain;padding: 2rem;" class="card-img-top"
                                    src="{{$product->ta_picture}}"
                                    alt="{{$product}}"
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
                            <div class="small pt-2">FTB Score <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="FTB Score is our proprietary scoring system that helps us evaluate each product on a scale of 1 to 10. The score is based on product features, online popularity, price, brand reputation, and other expert reviews."></i>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-3 pb-4 px-4">

                            @if($product->a_url != "null")
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
                            <a class="d-block mt-2" href="#{{$product->Item_number}}"><span class="text-muted small">Read
                                    Review</span></a>
                        </div>
                    </div>
                    <div class="card border shadow-none text-center h-100 d-lg-none p-3">
                        <div class="media">
                            <div class="avatar avatar-lg mr-3">
                                <a class="text-inherit"
                                    href="{{($product->a_url == "null") ? $product->t_url : $product->a_url}}"
                                    rel="nofollow" target="_blank">
                                    <img class="avatar-img"
                                         src="{{$product->ta_picture}}"
                                         alt="{{$product}}"
                                        width="68" height="68"></a>
                            </div>
                            <div class="media-body text-left">
                                <h5 class="h6"
                                    style="height: 40px;overflow: hidden;white-space: wrap;word-wrap: break-word;word-break: break-all;">
                                    <a class="text-inherit"
                                        href="{{($product->a_url == "null") ? $product->t_url : $product->a_url}}"
                                        rel="nofollow" target="_blank">
                                        {{$product->ta_name}}
                                    </a>
                                </h5>
                                <div class="text-body font-size-1">
                                    <span class="badge badge-soft-primary">
                                        <span class="legend-indicator bg-primary"></span>TOP {{ $loop->index+1 }}
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
                <p style="word-break:break-word;">The best <strong>{{$productInfo->Title}}</strong> ranking is based on our detailed
                    evaluation and analysis of over {{number_format($productInfo->Num_reviews)}} consumer satisfaction surveys.
                    We have come up with the top {{$products->count()}}
                    {{$productInfo->Title}} you might be interested in and rated them on factors such as {{$productInfo->Tips}}
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
                <div class="bp-cards card border p-3 p-lg-5 mb-5" id="{{$product->Item_number}}">
                    <div class="mb-2">
                        <div class="flex justify-content-start align-items-center mb-2"
                            style="max-width: 100%;flex-wrap: nowrap;overflow-x: auto;white-space: nowrap;">
                            <small class="badge badge-primary badge-pill">#TOP {{$loop->index+1}}</small>

                        </div>
                        <h3 class="text-dark line-2-hidden">{{$product->ta_name}}</h3>
                    </div>
                    <div class="flex justify-content-start align-items-center small text-muted mb-2">
                        @if ($product->option(0) != null)
                        <div class="d-inline-block mr-2" data-bs-toggle="tooltip" data-placement="bottom"
                            title="Model">
                            <i class="fas fa-copyright mr-1"></i>
                            {{$product->option(0)}}
                        </div>
                        @endif
                        @if ($product->option(1) != null)
                        <div class="d-inline-block mr-2" data-bs-toggle="tooltip" data-placement="bottom"
                            title="Dimension">
                            <i class="fas fa-box mr-1"></i>
                            {{$product->option(1)}}
                        </div>
                        @endif
                        @if ($product->option(2) != null)
                        <div class="d-inline-block mr-2" data-bs-toggle="tooltip" data-placement="bottom"
                            title="Weight">
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
                                     data-original="{{$product->ta_picture}}" width="162"
                                    height="220" data-src="{{$product->ta_picture}}"
                                    alt="{{$product->ta_name}}">
                            </a>
                        </div>
                        <div class="bp-product-thumblist">
                            @if ($product->thumbnails() != null)
                            @foreach($product->thumbnails() as $img)
                            <a href="{{$product->a_url == "null" ? $product->t_url : $product->a_url}}"
                                rel="nofollow" target="_blank">
                                <img class="shadow rounded lazyload card-img-top"
                                     data-original="{{$img}}"
                                    data-src="{{$img}}"
                                    alt="{{$product->ta_name}}"
                                    width="100" height="100">
                            </a>
                             @endforeach
                             @endif
                        </div>
                        <div class="text-center pt-5">
                            <h4 class="h5 mb-4">
                                Reviews for {{$product->ta_brand}}
                                <i class="fas fa-question-circle small" data-bs-toggle="tooltip" data-placement="top"
                                    title="FTB Score is our proprietary scoring system that helps us evaluate each product on a scale of 1 to 10. The score is based on product features, online popularity, price, brand reputation, and other expert reviews."></i>
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
                            @if ($product->a_url != "null")
                            <a class="btn btn-sm btn-primary mb-2 mx-1"
                                href="{{$product->a_url}}"
                                rel="nofollow" target="_blank">
                                <i class="fab fa-amazon mr-1"></i> View on Amazon</a>
                            @else
                                <a class="btn btn-sm btn-primary mb-2 mx-1"
                                   href="{{$product->t_url}}"
                                   rel="nofollow" target="_blank">
                                    <i class="fab fa-amazon mr-1"></i> View on thomannmusic</a>
                            @endif
                        </div>
                    </div>


                    @if($product->audios()->count() > 1)
                        <hr class="my-6">

                        <h4 class="mb-4 h5">Audio</h4>
                        <div class="line-3-hidden pb-0">
                        @foreach($product->audios() as $audio)
                         @if ($loop->index < 2)
                                    <span class="ml-2 mb-1 d-block"> {{$audio[1]}} </span>
                            <audio controls style="width: 100%;">
                                <source src="{{$audio[0]}}" type="audio/mpeg">
                            </audio>
                            @endif
                        </div>
                        <div class="collapse" id="collapseAudioItem{{$product->Item_number}}" style="">
                            @if ($loop->index > 2)
                                    <span class="ml-2 mb-1 d-block"> {{$audio[1]}} </span>
                                    <audio controls style="width: 100%;">
                                        <source src="{{$audio[0]}}" type="audio/mpeg">
                                    </audio>
                             @endif
                        @endforeach
                        </div>
                        <div class="col-lg-12">
                            <a class="pt-2 link link-collapse collapse-rewrite-audio collapsed font-size-1 font-weight-bold pt-1" data-bs-toggle="collapse" collapce-first-3="collapseAudioItem{{$product->Item_number}}" href="#collapseAudioItem{{$product->Item_number}}" role="button" aria-expanded="false" aria-controls="collapseDescriptionSection-1">
                                <span class="link-collapse-default">Load more</span>
                                <span class="link-collapse-active">Load less</span>
                                <span class="link-icon ml-1">+</span>
                            </a>
                        </div>

                    @endif

                    <hr class="my-6">
                    <div style="">
                        <h4 class="mb-4 h5">Features</h4>
                        <div class="pb-0 collap collapseCourseDescriptionSection{{$product->Item_number}}">
                            {!! $product->ta_features!!}
                        </div>
                        <div class="collapse" id="collapseCourseDescriptionSection{{$product->Item_number}}" style="">
                            {!! $product->ta_features!!}
                        </div>


                        <div class="col-lg-12">
                            <a class="pt-3 link link-collapse collapse-rewrite collapsed font-size-1 font-weight-bold pt-1" data-bs-toggle="collapse" collapce-first-3="collapseCourseDescriptionSection{{$product->Item_number}}"  href="#collapseCourseDescriptionSection{{$product->Item_number}}" role="button" aria-expanded="false" aria-controls="collapseDescriptionSection-1">
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
    <a class="js-go-to go-to position-fixed animated hs-go-to-prevent-event fadeInUp" href="javascript:;" style="right: 2rem; bottom: 2rem;" data-hs-go-to-options="{
       &quot;offsetTop&quot;: 700,
       &quot;position&quot;: {
         &quot;init&quot;: {
           &quot;right&quot;: &quot;2rem&quot;
         },
         &quot;show&quot;: {
           &quot;bottom&quot;: &quot;2rem&quot;
         },
         &quot;hide&quot;: {
           &quot;bottom&quot;: &quot;-2rem&quot;
         }
       }
     }">
        <i class="bi-chevron-up"></i>
    </a>
@section('script')
    <script src="../assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","name":"Best {{$productInfo->Title}}","datePublished":"{{$productInfo->created_at}}","dateModified":"{{$productInfo->updated_at}}","keywords":"{{$productInfo->Sub_category}}","description":"What are the best {{$productInfo->Title}} in 2021? We analyzed {{$productInfo->Num_reviews}} dedicated {{$productInfo->Title}} reviews to do the research for you.","headline":"Best {{$productInfo->Title}}","author":"{{$productInfo->Author}}","publisher":{"@type":"Organization","name":"northeastorchestra","logo":{"@type":"ImageObject","url":"https://northeastorchestra.org/assets/img/logo.png"}},"image":"https://northeastorchestra.org{{$productInfo->reviewImage()}}"}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","name":"Home","position":1,"item":"https://www.northeastorchestra.org"},{"@type":"ListItem","name":"Categories","position":2,"item":"https://www.northeastorchestra.org/categories"},{"@type":"ListItem","name":"{{$productInfo->Sub_category}}","position":3,"item":"https://www.northeastorchestra.org/{{$productInfo->getUrlCategory()}}"},{"@type":"ListItem","name":"Best {{$productInfo->Title}}","position":4}]}</script>
    <script>
        (function() {
            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')
        });

        $('.collapse-rewrite').click(function (){
            let className = $(this).attr('collapce-first-3');
            $('.'+className).slideToggle(100);
        })
        $('.collapse-rewrite-audio').click(function (){

            let className = $(this).attr('collapce-first-3');
            $('.'+className).slideToggle(100);
        })
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $('.collap').each(function (index,value){
            $(this).children().children('.col-features-10').each(function (index,value){
                if (index>2)
                    $(this).hide();

            })

        })
    </script>
@endsection

@endsection

