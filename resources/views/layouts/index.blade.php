<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    @yield('links')
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}"
        type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}"
        type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css') }}" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="https://northeastorchestra.org/storage/favicon.ico">
    <!-- Meta -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{$title ?? ''}}</title>
    @if($description)<meta name="description" content="{{$description ?? ''}}">@endif
    <link rel="canonical" href="{{url()->full()}}">
    <meta content="en-US" http-equiv="Content-Language">
    <meta property="og:locale" content="en_US">
    @if(isset($title))<meta property="og:title" content="{{$title ?? ''}}">@endif
    @if(isset($description))<meta property="og:description" content="{{$description ?? ''}}">@endif
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:site_name" content="{{request()->getHost()}}">
    @if(isset($type))<meta property="og:type" content="{{$type ?? ''}}">@endif
    @if(isset($section))<meta property="article:section" content="{{$section ?? ''}}">@endif
    @if(isset($published_time))<meta property="article:published_time" content="{{$published_time ?? ''}}">@endif
    @if(isset($modified_time))<meta property="article:modified_time" content="{{$modified_time ?? ''}}">@endif
    @if(isset($modified_time))<meta property="og:updated_time" content="{{$modified_time ?? ''}}">@endif
    @if(isset($image))<meta property="og:image" content="{{$image ?? ''}}">@endif
    @if(isset($card))<meta name="twitter:card" content="summary_large_image">@endif
    @if(isset($site))<meta name="twitter:site" content="@northeastorchestra.org">@endif
    @if(isset($title_t))<meta name="twitter:title" content="{{$title ?? ''}}">@endif
    @if(isset($description_t))<meta name="twitter:description" content="{{$description ?? ''}}">@endif
    @if(isset($image_t))<meta name="twitter:image" content="{{$image ?? ''}}">@endif
    <meta name="robots" content="noindex">
</head>

<body>
    @if(isset($header))
    <header id="header" class="header_index navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
      @else
        <header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
          @endif
        data-hs-header-options="{
        &quot;fixMoment&quot;: 1000,
        &quot;fixEffect&quot;: &quot;slide&quot;
      }" hsheader="true">
        <div class="container">
            <nav class="js-mega-menu navbar-nav-wrap hs-menu-initialized hs-menu-horizontal">
                <!-- Default Logo -->
                <a class="navbar-brand" href="/" aria-label="Front">
                    @if(isset($header))
                    <img src="https://northeastorchestra.org/storage/logo-2.svg" alt="Logo" width="199" height="39">
                    @else
                        <img src="https://northeastorchestra.org/storage/logo-1.svg" alt="Logo" width="199" height="39">
                    @endif
                </a>
                <!-- End Default Logo -->

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                    </span>
                    <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                    </span>
                </button>
                <!-- End Toggler -->

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="navbar-absolute-top-scroller">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>

                            <!-- Dropdown -->
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('blog')}}">Artists</a>
                            </li>

                            <!-- End Dropdown -->

                            <li class="hs-has-mega-menu nav-item">
                                <a id="landingsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100 hs-position-right hs-mega-menu-desktop-lg animated" aria-labelledby="landingsMegaMenu" style="min-width: 30rem; animation-duration: 300ms; display: none;">
                                    <div class="navbar-dropdown-menu-inner">
                                        <span class="dropdown-header"><a href="/categories">All Categories</a></span>


                                            <div class="col-auto mb-3 mb-sm-0 d-flex flex-wrap">
                                                @foreach($header_categories as $category)
                                                <a class="dropdown-item w-25" href="{{$category->URL}}">{{$category->Category}}</a>
                                                @endforeach
                                            </div>
                                            <!-- End Col -->
                                            <!-- End Col -->

                                    </div>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </div>
    </header>

    @yield('content')

        <footer class="bg-light">
            <div class="container">
                <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-6 mb-5 mb-lg-0">

                            <div class="mb-4">
                                <a href="/" aria-label="logo" class="navbar-brand-footer">
                                    <img class="brand" src="https://northeastorchestra.org/storage/logo-1.svg" alt="Logo" width="199" height="39">
                                </a>
                            </div>

                            <p class="pb-2 pb-sm-3">Finding the best musical instruments online has never been easier. northeastorchestra.org features everything you need to sound your best & thrive in the modern music industry.</p>
                            <ul class="list-inline mb-0">

                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary" target="_blank" rel="nofollow noopener noreferrer" href="/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary" target="_blank" rel="nofollow noopener noreferrer" href="/">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary" target="_blank" rel="nofollow noopener noreferrer" href="/">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary" target="_blank" rel="nofollow noopener noreferrer" href="/">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-6 col-lg-3 mb-5 mb-lg-0">
                            <h5>Visit</h5>
                            <ul class="nav nav-sm nav-x-0 flex-column">
                                <li class="nav-item"><a class="nav-link" href="{{route('category.index')}}">Categories</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('category.directory')}}">Lists</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('brand')}}">Brands</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-3 mb-5 mb-lg-0">
                            <h5>About</h5>
                            <ul class="nav nav-sm nav-x-0 flex-column">
                                @foreach($pages as $page)
                                <li class="nav-item"><a class="nav-link" href="{{$page->URL}}">{{$page->Title}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <br>
                <div class="space-1">

                    <div class="w-md-75 text-lg-center mx-lg-auto">
                        <p class="text-muted small">Copyright © 2021 · northeastorchestra.org</p>
                        <p class="text-muted small">northeastorchestra.org is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to amazon.com. Amazon, the Amazon logo, AmazonSupply, and the AmazonSupply logo are trademarks of Amazon.com, Inc. or its affiliates. As an Amazon Associate we earn affiliate commissions from qualifying purchases.</p>
                    </div>

                </div>
            </div>
        </footer>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <!-- JS Global Compulsory  -->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->

        <script src="/assets/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="/assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>

    <!-- JS Front -->
    <script src="/assets/js/theme.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JS Plugins Init. -->
    <script>
        (function() {
            new HSHeader('#header').init()
            // INITIALIZATION OF MEGA MENU
            // =======================================================
            new HSMegaMenu('.js-mega-menu', {
                desktop: {
                    position: 'left'
                }
            })


            // INITIALIZATION OF BOOTSTRAP DROPDOWN
            // =======================================================
            HSBsDropdown.init()


            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')


            const HSCore = {
                init: () => {
                    // Botostrap Tootltips
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl)
                    })

                    // Bootstrap Popovers
                    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                        return new bootstrap.Popover(popoverTriggerEl)
                    })
                }
            }

            HSCore.init()

        })()
    </script>
    <script>
        $(document).ready(function (){
            $('img').lazyload();
        })
    </script>
    @yield('script')

</body>

</html>
