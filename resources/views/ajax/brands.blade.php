@foreach($products as $product)
    <div class="bp-cards card border p-3 p-lg-5 mb-5" id="{{$product->Item_number}}">
        <div class="mb-2">
            <div class="flex justify-content-start align-items-center mb-2"
                 style="max-width: 100%;flex-wrap: nowrap;overflow-x: auto;">

                @foreach($product->brandLinks($brandInfo->Brand) as $review)
                    <a class="badge badge-pill badge-secondary"
                       style="background-color: rgba(55,125,255,.1);color: #377dff;"
                       href="/{{$review->URL}}">
                        Best {{$review->Brand}}
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
                         data-original="{{$product->ta_picture}}" width="162"
                         height="220" src="{{$product->ta_picture}}"
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
                                 src="{{$img}}"
                                 alt="{{$product->ta_name}}"
                                 width="100" height="100">
                        </a>
                    @endforeach
                @endif
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

<script>
    $('.collap').each(function (index,value){
        $(this).children().children('.col-features-10').each(function (index,value){
            if (index>2)
                $(this).hide();
        })
    })
    // $('.collapse-rewrite').click(function (){
    //     let className = $(this).attr('collapce-first-3');
    //     $('.'+className).slideToggle(100);
    // })
</script>
