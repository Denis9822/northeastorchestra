@extends('layouts.index')
@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/categoryChild.css') }}" type="text/css" />

    @include('layouts.breadcrumb')
    <div class="container space-2">
        <h1 class="h2 mb-3">Refrigerators, Freezers &amp; Ice Makers List </h1>
        <p class="text-muted">
            We researched and compared thousands of Refrigerators, Freezers &amp; Ice Makers to find the top picks for you.
            Read this 2021 ultimate guide before you buy.
        </p>
        <div class="row mt-8">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="mr-lg-3">
                    <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
                        <button type="button" class="navbar-toggler btn btn-block border py-3" aria-label="Toggle navigation"
                            aria-expanded="false" aria-controls="sidebarNav" data-toggle="collapse"
                            data-target="#sidebarNav">
                            <span class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">View all categories</span>
                                <span class="navbar-toggler-default">
                                    <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor"
                                            d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="navbar-toggler-toggled">
                                    <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor"
                                            d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z">
                                        </path>
                                    </svg>
                                </span>
                            </span>
                        </button>
                        <div id="sidebarNav" class="collapse navbar-collapse">
                            <div class="p-2 p-lg-0">
                                <div class="mt-3 mt-lg-0">
                                    <h2 class="h4">Appliances Categories</h2>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center px-0 active"
                                        href="https://www.findthisbest.com/categories/appliances/refrigerators-freezers-ice-makers">
                                        Refrigerators, Freezers &amp; Ice Makers
                                    </a>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                        href="https://www.findthisbest.com/categories/appliances/laundry-appliances">
                                        Laundry Appliances
                                    </a>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                        href="https://www.findthisbest.com/categories/appliances/appliances-dishwashers">
                                        Dishwashers
                                    </a>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                        href="https://www.findthisbest.com/categories/appliances/ranges-ovens-cooktops">
                                        Ranges, Ovens &amp; Cooktops
                                    </a>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                        href="https://www.findthisbest.com/categories/appliances/large-appliance-accessories">
                                        Large Appliance Accessories
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 column-divider-lg">
                <div class="ml-lg-2">
                    <div class="row mb-5">
                        <div class="col-md-6 mb-5">
                            <div class="card border h-100 p-3">
                                <div class="media">
                                    <div class="avatar avatar-lg mr-3">
                                        <a class="text-inherit"
                                            href="https://www.findthisbest.com/best-upright-freezers"><img
                                                class="avatar-img lazyload"
                                                src="https://m.media-amazon.com/images/I/31u1dq+IUxL._SL500_.jpg"
                                                data-src="https://m.media-amazon.com/images/I/31u1dq+IUxL._SL500_.jpg"
                                                alt="Upright Freezers thumbnail" width="68" height="68"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="h6"><a class="text-inherit"
                                                href="https://www.findthisbest.com/best-upright-freezers">Upright
                                                Freezers</a></h5>
                                        <div class="text-body font-size-1">
                                            <span>29,451 reviews analyzed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card border h-100 p-3">
                                <div class="media">
                                    <div class="avatar avatar-lg mr-3">
                                        <a class="text-inherit"
                                            href="https://www.findthisbest.com/best-chest-freezers"><img
                                                class="avatar-img lazyload"
                                                src="https://m.media-amazon.com/images/I/31uZis2ZraL._SL500_.jpg"
                                                data-src="https://m.media-amazon.com/images/I/31uZis2ZraL._SL500_.jpg"
                                                alt="Chest Freezers thumbnail" width="68" height="68"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="h6"><a class="text-inherit"
                                                href="https://www.findthisbest.com/best-chest-freezers">Chest Freezers</a>
                                        </h5>
                                        <div class="text-body font-size-1">
                                            <span>25,961 reviews analyzed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card border h-100 p-3">
                                <div class="media">
                                    <div class="avatar avatar-lg mr-3">
                                        <a class="text-inherit" href="https://www.findthisbest.com/best-ice-makers"><img
                                                class="avatar-img lazyload"
                                                src="https://m.media-amazon.com/images/I/31EiFEFdIkS._SL500_.jpg"
                                                data-src="https://m.media-amazon.com/images/I/31EiFEFdIkS._SL500_.jpg"
                                                alt="Ice Makers thumbnail" width="68" height="68"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="h6"><a class="text-inherit"
                                                href="https://www.findthisbest.com/best-ice-makers">Ice Makers</a></h5>
                                        <div class="text-body font-size-1">
                                            <span>117,790 reviews analyzed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card border h-100 p-3">
                                <div class="media">
                                    <div class="avatar avatar-lg mr-3">
                                        <a class="text-inherit"
                                            href="https://www.findthisbest.com/best-refrigerators"><img
                                                class="avatar-img lazyload"
                                                src="https://m.media-amazon.com/images/I/51fuMDyIqHL._SL500_.jpg"
                                                data-src="https://m.media-amazon.com/images/I/51fuMDyIqHL._SL500_.jpg"
                                                alt="Refrigerators thumbnail" width="68" height="68"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="h6"><a class="text-inherit"
                                                href="https://www.findthisbest.com/best-refrigerators">Refrigerators</a>
                                        </h5>
                                        <div class="text-body font-size-1">
                                            <span>5,245 reviews analyzed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card border h-100 p-3">
                                <div class="media">
                                    <div class="avatar avatar-lg mr-3">
                                        <a class="text-inherit" href="https://www.findthisbest.com/best-freezers"><img
                                                class="avatar-img lazyload"
                                                src="https://m.media-amazon.com/images/I/31uZis2ZraL._SL500_.jpg"
                                                data-src="https://m.media-amazon.com/images/I/31uZis2ZraL._SL500_.jpg"
                                                alt="Freezers thumbnail" width="68" height="68"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="h6"><a class="text-inherit"
                                                href="https://www.findthisbest.com/best-freezers">Freezers</a></h5>
                                        <div class="text-body font-size-1">
                                            <span>34,535 reviews analyzed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card border h-100 p-3">
                                <div class="media">
                                    <div class="avatar avatar-lg mr-3">
                                        <a class="text-inherit"
                                            href="https://www.findthisbest.com/best-beverage-refrigerators"><img
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
                        <div class="col-md-6 mb-5">
                            <div class="card border h-100 p-3">
                                <div class="media">
                                    <div class="avatar avatar-lg mr-3">
                                        <a class="text-inherit" href="https://www.findthisbest.com/best-kegerators"><img
                                                class="avatar-img lazyload"
                                                src="https://m.media-amazon.com/images/I/31dkhM1RY5L._SL500_.jpg"
                                                data-src="https://m.media-amazon.com/images/I/31dkhM1RY5L._SL500_.jpg"
                                                alt="Kegerators thumbnail" width="68" height="68"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="h6"><a class="text-inherit"
                                                href="https://www.findthisbest.com/best-kegerators">Kegerators</a></h5>
                                        <div class="text-body font-size-1">
                                            <span>8,332 reviews analyzed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-8">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
