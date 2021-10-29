@extends('layouts.index')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/categoryId.css') }}" type="text/css" />

    @include('layouts.breadcrumb')
    <div class="gradient-y-overlay-sm-gray-900 bg-img-hero"
        style="background-image: url(https://cdn.findthisbest.com/assets/img/categories/appliances.jpg);">
        <div class="container space-top-2 position-relative z-index-2">
            <div class="w-md-100 text-center mx-md-auto p-4 p-lg-7 mb-3 mb-sm-5 mb-lg-11">
                <h1 class="text-white">
                    Appliances
                </h1>
                <p class="text-white">Looking for the best products to buy? Find here the top appliances products</p>
            </div>
        </div>
    </div>

    <div class="container space-1">
        <div class="card-deck d-block">
            <div class="row mx-n2">
                <div class="col-sm-6 col-md-4 px-2">
                    <div class="card border mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4 text-nowrap" style="overflow: hidden;">
                                <a
                                    href="https://www.findthisbest.com/categories/appliances/refrigerators-freezers-ice-makers">Refrigerators,
                                    Freezers &amp; Ice Makers</a>
                            </h5>
                            <p class="card-text">7 topics</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 px-2">
                    <div class="card border mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4 text-nowrap" style="overflow: hidden;">
                                <a href="https://www.findthisbest.com/categories/appliances/laundry-appliances">Laundry
                                    Appliances</a>
                            </h5>
                            <p class="card-text">5 topics</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 px-2">
                    <div class="card border mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4 text-nowrap" style="overflow: hidden;">
                                <a
                                    href="https://www.findthisbest.com/categories/appliances/appliances-dishwashers">Dishwashers</a>
                            </h5>
                            <p class="card-text">4 topics</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 px-2">
                    <div class="card border mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4 text-nowrap" style="overflow: hidden;">
                                <a href="https://www.findthisbest.com/categories/appliances/ranges-ovens-cooktops">Ranges,
                                    Ovens &amp; Cooktops</a>
                            </h5>
                            <p class="card-text">11 topics</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 px-2">
                    <div class="card border mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4 text-nowrap" style="overflow: hidden;">
                                <a href="https://www.findthisbest.com/categories/appliances/large-appliance-accessories">Large
                                    Appliance Accessories</a>
                            </h5>
                            <p class="card-text">36 topics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mb-5 mt-5">Popular Lists</h2>
        <div class="row mb-5">
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit" href="https://www.findthisbest.com/best-dishwashers"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/314jUDkncML._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/314jUDkncML._SL500_.jpg"
                                    alt="Dishwashers thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-dishwashers">Dishwashers</a></h5>
                            <div class="text-body font-size-1">
                                <span>17,520 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit" href="https://www.findthisbest.com/best-washing-machines"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/31BJnFykRoL._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/31BJnFykRoL._SL500_.jpg"
                                    alt="Washing Machines thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-washing-machines">Washing Machines</a></h5>
                            <div class="text-body font-size-1">
                                <span>10,623 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit" href="https://www.findthisbest.com/best-beverage-refrigerators"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/51CugfHZVOL._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/51CugfHZVOL._SL500_.jpg"
                                    alt="Beverage Refrigerators thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-beverage-refrigerators">Beverage
                                    Refrigerators</a></h5>
                            <div class="text-body font-size-1">
                                <span>24,924 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit" href="https://www.findthisbest.com/best-ranges"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/41ZjMBngw0L._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/41ZjMBngw0L._SL500_.jpg"
                                    alt="Ranges thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-ranges">Ranges</a></h5>
                            <div class="text-body font-size-1">
                                <span>4,334 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit"
                                href="https://www.findthisbest.com/best-dishwasher-replacement-hoses"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/51pmtjx7vrL._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/51pmtjx7vrL._SL500_.jpg"
                                    alt="Dishwasher Replacement Hoses thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-dishwasher-replacement-hoses">Dishwasher
                                    Replacement Hoses</a></h5>
                            <div class="text-body font-size-1">
                                <span>21,045 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit"
                                href="https://www.findthisbest.com/best-clothes-washer-replacement-drain-pumps"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/41Sx+L9B53L._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/41Sx+L9B53L._SL500_.jpg"
                                    alt="Clothes Washer Replacement Drain Pumps thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-clothes-washer-replacement-drain-pumps">Clothes
                                    Washer Replacement Drain Pumps</a></h5>
                            <div class="text-body font-size-1">
                                <span>21,749 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit"
                                href="https://www.findthisbest.com/best-clothes-washer-replacement-doors"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/41MTK6AKVRL._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/41MTK6AKVRL._SL500_.jpg"
                                    alt="Clothes Washer Replacement Doors thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-clothes-washer-replacement-doors">Clothes Washer
                                    Replacement Doors</a></h5>
                            <div class="text-body font-size-1">
                                <span>4,192 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit"
                                href="https://www.findthisbest.com/best-refrigerator-replacement-ice-makers"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/41FcdbgGbVL._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/41FcdbgGbVL._SL500_.jpg"
                                    alt="Refrigerator Replacement Ice Makers thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-refrigerator-replacement-ice-makers">Refrigerator
                                    Replacement Ice Makers</a></h5>
                            <div class="text-body font-size-1">
                                <span>17,994 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit"
                                href="https://www.findthisbest.com/best-refrigerator-replacement-motors"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/41yX+tdEMnL._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/41yX+tdEMnL._SL500_.jpg"
                                    alt="Refrigerator Replacement Motors thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-refrigerator-replacement-motors">Refrigerator
                                    Replacement Motors</a></h5>
                            <div class="text-body font-size-1">
                                <span>5,759 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit"
                                href="https://www.findthisbest.com/best-refrigerator-replacement-shelves"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/313RCu7jnJL._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/313RCu7jnJL._SL500_.jpg"
                                    alt="Refrigerator Replacement Shelves thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-refrigerator-replacement-shelves">Refrigerator
                                    Replacement Shelves</a></h5>
                            <div class="text-body font-size-1">
                                <span>17,464 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit"
                                href="https://www.findthisbest.com/best-refrigerator-replacement-handles"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/21Pozw06lQL._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/21Pozw06lQL._SL500_.jpg"
                                    alt="Refrigerator Replacement Handles thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-refrigerator-replacement-handles">Refrigerator
                                    Replacement Handles</a></h5>
                            <div class="text-body font-size-1">
                                <span>48,880 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card border h-100 p-3">
                    <div class="media">
                        <div class="avatar avatar-lg mr-3">
                            <a class="text-inherit"
                                href="https://www.findthisbest.com/best-refrigerator-replacement-grills"><img
                                    class="avatar-img lazyload"
                                    src="https://m.media-amazon.com/images/I/413yO8mMFhL._SL500_.jpg"
                                    data-src="https://m.media-amazon.com/images/I/413yO8mMFhL._SL500_.jpg"
                                    alt="Refrigerator Replacement Grills thumbnail" width="68" height="68"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="h6"><a class="text-inherit"
                                    href="https://www.findthisbest.com/best-refrigerator-replacement-grills">Refrigerator
                                    Replacement Grills</a></h5>
                            <div class="text-body font-size-1">
                                <span>4,967 reviews analyzed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
