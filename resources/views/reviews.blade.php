@extends('layouts.index',[
    'title' => "Top $productInfo->Num_products_article Best $productInfo->Title of ".date('Y')." (Reviews) | northeastorchestra.org",
    'description' => "What are the best $productInfo->Title in ".date('Y')."? We analyzed $productInfo->Num_reviews dedicated $productInfo->Title reviews to do the research for you.",
    'section' => $productInfo->Sub_category,
    'published_time' => $productInfo->created_at,
    'modified_time' => $productInfo->updated_at,
    'image' => 'https://northeastorchestra.org'.$products[0]->ta_picture,
    'type' => 'article',
    'card' => 'summary_large_image',
    'site' => '@northeastorchestra.org',
    'title_t' => "Top $productInfo->Num_products_article Best $productInfo->Title of ".date('Y')." (Reviews) | northeastorchestra.org",
    'description_t' => "What are the best $productInfo->Title in ".date('Y')."? We analyzed $productInfo->Num_reviews dedicated $productInfo->Title reviews to do the research for you.",
    'image_t' => 'https://northeastorchestra.org'.$products[0]->ta_picture,
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
                            Best {{$productInfo->Title}}
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
                <p style="white-space: normal!important"><i class="bi bi-person-check"></i> By <strong>{{$author->Name}}</strong> | <i class="far fa-clock"></i>
                Last Updated on
                {{$productInfo->getDataString()}}</p>
            </div>
        </div>
    </div>
    @if ($productsTop3->count() == 3)
    <div class="container mb-5 bg-dark rounded" id="quick-pick">
        <div class="mx-lg-auto px-2 px-md-8 px-lg-10 py-5">
            <h3 class="pt-3 pb-4 text-white text-center"><span class="text-warning">In Hurry? </span>Editor's Choice:</h3>
            <div class="row">
                @foreach($productsTop3 as $product)
                <div class="col-sm-12 col-lg-4 mb-3">
                    <div class="card border shadow-none text-center h-100 d-none d-lg-block">
                        <div class="position-relative">
                            <a href="{{($product->a_url == "null") ? $product->t_url : $product->a_url}}"
                                rel="nofollow" target="_blank">
                                <img style="height: 220px;object-fit: contain;padding: 2rem;" class="card-img-top"
                                     data-original="{{$product->ta_picture}}"
                                    alt="{{$product->ta_name}}"
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
                                src="/assets/svg/illustrations/review-rating-shield.svg"
                                alt="TR score rating icon">
                            <span
                                class="position-absolute top-0 right-0 left-0 z-index-2 text-white font-size-2 font-weight-bold mt-2">{{$product->score}}</span>
                            <div class="small pt-2">TR Score <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="TR Score was created through our research into consumer purchasing patterns as well as interviewing company representatives from key industries. It takes into account the features, trustworthiness, price with other factors which all come together in one number."></i>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-3 pb-4 px-4">

                            @if($product->a_url != "null")
                            <a class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover"
                                href="{{$product->a_url}}"
                                rel="nofollow" target="_blank">View on Amazon<i
                                    class="fas fa-angle-right ml-1"></i></a>

                            <a class="mt-2 btn btn-sm btn-outline-primary btn-pill transition-3d-hover"
                               href="{{$product->t_url}}"
                               rel="nofollow" target="_blank">View on Thomann <i
                                    class="fas fa-angle-right ml-1"></i></a>
                            @else
                                <a class="mt-2 btn btn-sm btn-outline-primary btn-pill transition-3d-hover"
                                   href="{{$product->t_url}}"
                                   rel="nofollow" target="_blank">View on Thomann <i
                                        class="fas fa-angle-right ml-1"></i></a>
                            @endif
                            <a class="d-block mt-2" href="#{{$product->Item_number}}"><span class="text-muted small">Read Our Review</span></a>
                        </div>
                    </div>
                    <div class="card border shadow-none text-center h-100 d-lg-none p-3">
                        <div class="media">
                            <div class="avatar avatar-lg mr-3">
                                <a class="text-inherit"
                                    href="{{($product->a_url == "null") ? $product->t_url : $product->a_url}}"
                                    rel="nofollow" target="_blank">
                                    <img class="avatar-img"
                                         data-original="{{$product->ta_picture}}"
                                         alt="{{$product->ta_name}}"
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
                <span class="sdivider sdivider-xs divider-text">How To Choose {{$productInfo->Title}}: Methodology</span>
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
        <p class="small">* Our experienced editors are constantly reviewing the latest news, looking at data analytics in order to recommend only products worth your time and money. As Amazon Associate, we earn from qualifying purchases.</p>
    </div>
    <div class="container bp-container">
        <h2 class="h3 pt-1 pb-4 text-center">A Detailed List of Top {{$products->count()}} {{$productInfo->Title}} in 2021</h2>
    </div>

    <div class="container bp-container">
        <div class="row">
            <div class="col-lg-9 product_wrap">
                <div class="cards">
                    @foreach($products as $product)
                    <div class="bp-cards card border p-3 p-lg-5 mb-5" id="{{$product->Item_number}}">
                        <div class="mb-2">
                            <div class="flex justify-content-start align-items-center mb-2"
                                style="max-width: 100%;flex-wrap: nowrap;overflow-x: auto;">
                                <small class="badge badge-primary badge-pill">#TOP {{$loop->index+1}}</small>
                                @foreach($product->productLinks($productInfo->Title) as $review)
                                    <a class="badge badge-pill badge-secondary"
                                       style="background-color: rgba(55,125,255,.1);color: #377dff;"
                                       href="/{{$review->URL}}">
                                        Best {{$review->Title}}
                                    </a>
                                @endforeach
                            </div>
                            <h3 class="text-dark line-2-hidden">{{$product->ta_name}}</h3>
                        </div>
                        <div class="flex justify-content-start align-items-center small text-muted mb-2">
                            @if($product->option()->count() > 0)
                                @foreach($product->option() as $option)
                                @if(isset($option[1]))
                                <div class="d-inline-block mr-2" data-bs-toggle="tooltip" data-placement="bottom"
                                    title="{{$option[1] ?? ''}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                    </svg>
                                    {{$option[0] ?? ''}}
                                </div>
                                @endif
                                 @endforeach
                            @endif
                        </div>
                        <div class="px-md-2 mb-md-0 w-100 mt-5">
                            <div class="text-center">
                                <a href="{{$product->a_url != null ? $product->a_url : $product->t_url}}"
                                    rel="nofollow" target="_blank">
                                    <img class="img-fluid lazyload bp-product-thumb"
                                          width="162"
                                        height="220" data-original="{{$product->ta_picture}}"
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

                                        alt="{{$product->ta_name}}"
                                        width="100" height="100">
                                </a>
                                 @endforeach
                                 @endif
                            </div>
                            <div class="text-center pt-5">
                                <h4 class="h5 mb-4">
                                    @if ($product->ta_brand_link != null)
                                        Reviews for <a href="{{$product->ta_brand_link}}">{{$product->ta_brand}}</a> (TA Score)
                                    @else
                                        Reviews for {{$product->ta_brand}} (TA Score)
                                    @endif
                                    <i class="fas fa-question-circle small" data-bs-toggle="tooltip" data-placement="top"
                                        title="TR Score was created through our research into consumer purchasing patterns as well as interviewing company representatives from key industries. It takes into account the features, trustworthiness, price with other factors which all come together in one number."></i>
                                </h4>
                                <div class="position-relative max-w-13rem mx-auto mb-2">
                                    <img class="img-fluid"
                                        src="/assets/svg/illustrations/review-rating-shield.svg"
                                        alt="TR score rating icon">
                                    <span
                                        class="position-absolute top-0 right-0 left-0 z-index-2 text-white font-size-2 font-weight-bold mt-2">{{$product->score}}</span>
                                </div>
                            </div>

                            <div class="mt-3 text-center">
                                @if ($product->a_url != "null")
                                <a class="btn btn-sm btn-primary mb-2 mx-1"
                                    href="{{$product->a_url}}"
                                    rel="nofollow" target="_blank">View on Amazon</a>

                                <a class="btn btn-sm btn-primary mb-2 mx-1"
                                    href="{{$product->t_url}}"
                                    rel="nofollow" target="_blank">View on Thomann</a>
                                @else
                                    <a class="btn btn-sm btn-primary mb-2 mx-1"
                                       href="{{$product->t_url}}"
                                       rel="nofollow" target="_blank">View on Thomann</a>
                                @endif
                            </div>
                        </div>


                        @if($product->audios()->count() > 1)
                            <hr class="my-6">

                            <h4 class="mb-4 h5">Sound Samples</h4>
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
                <div id="showmore-triger" data-page="1" data-name="{{$name}}" data-name2="{{$name2 ?? null}}" data-max="{{$maxpage}}">
                    <img src="{{asset('assets/gif/load.gif')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3 mb-5 mb-md-0">
                <nav class="card shadow-none bg-light bp-nav">
                    <div class="card-body">
                        <h5>Navigate Our Best {{$productInfo->Title}}</h5>
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
                        <h5>Also Great</h5>
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
                <h3 class="pb-3">Our Verdict</h3>
                <p>
                    With so many {{$productInfo->Title}} available, it's difficult to know which one is best. Fortunately, our research team compiled an unbiased list of {{$productInfo->Num_products_article}} best {{$productInfo->Title}} that will fit every budget. During this study there were over {{$productInfo->Num_products_total}} products across {{$productInfo->Num_products_article}} brands. Our verdict: most customers choose {{$productInfo->Title}} with an average price tag of ${{$productInfo->Avg_price}}!
                </p>
            </div>
            <div class="media d-block d-sm-flex align-items-center border-top border-bottom py-5 my-3">
                <div class="position-relative mx-auto mb-3 mb-sm-0 mr-sm-4" style="width: 100px; height: 100px;">
                    <img class="img-fluid rounded-circle lazyload"
                        src="../storage/{{$author->Avatar}}" width="300" height="300"
                        data-src="{{$author->Avatar}}"
                        alt="{{$author->Name}}">
                </div>
                <div class="media-body ml-3">
                    <small class="d-block small font-weight-bold text-cap">ABOUT THE AUTHOR</small>
                    <div class="h3 mb-0"><a href="{{route('author',['name' => $author->URL])}}">{{$author->Name}}</a></div>
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
    <script src="../assets/js/reviews.js"></script>

@endsection

@endsection

