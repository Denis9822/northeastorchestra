<!DOCTYPE html>
<html lang="uk">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
       
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}"
        type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}"
        type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css') }}" type="text/css" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITNESS</title>
    <meta name="description" lang="ru" content="#">
    <meta name="keywords" content="#">
    <meta property="og:title" content="#">
    <meta property="og:type" content="#">
    <meta property="og:description" content="#">
</head>

<body>

    <header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
        data-hs-header-options="{
        &quot;fixMoment&quot;: 1000,
        &quot;fixEffect&quot;: &quot;slide&quot;
      }" hsheader="true">
        <div class="container">
            <nav class="js-mega-menu navbar-nav-wrap hs-menu-initialized hs-menu-horizontal">
                <!-- Default Logo -->
                <a class="navbar-brand" href="./index.html" aria-label="Front">
                    <img class="navbar-brand-logo" src="/assets/svg/logos/logo.svg" alt="Logo">
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
                            <!-- Landings -->
                            <li class="hs-has-mega-menu nav-item">
                                <a id="landingsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active"
                                    aria-current="page" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Landings</a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100 hs-mega-menu-desktop-lg fadeOut animated"
                                    aria-labelledby="landingsMegaMenu"
                                    style="min-width: 30rem; display: none; animation-duration: 300ms;">
                                    <div class="row">
                                        <div class="col-lg-6 d-none d-lg-block">
                                            <!-- Banner Image -->
                                            <div class="navbar-dropdown-menu-banner"
                                                style="background-image: url(./assets/svg/components/shape-3.svg);">
                                                <div class="navbar-dropdown-menu-banner-content">
                                                    <div class="mb-4">
                                                        <span class="h2 d-block">Branding Works</span>
                                                        <p>Experience a level of our quality in both design &amp;
                                                            customization works.</p>
                                                    </div>
                                                    <a class="btn btn-primary btn-transition" href="#">Learn more <i
                                                            class="bi-chevron-right small"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Banner Image -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-lg-6">
                                            <div class="navbar-dropdown-menu-inner">
                                                <div class="row">
                                                    <div class="col-sm mb-3 mb-sm-0">
                                                        <span class="dropdown-header">Classic</span>
                                                        <a class="dropdown-item active"
                                                            href="./landing-classic-corporate.html">Corporate</a>
                                                        <a class="dropdown-item "
                                                            href="./landing-classic-analytics.html">Analytics <span
                                                                class="badge bg-primary rounded-pill ms-1">Hot</span></a>
                                                        <a class="dropdown-item "
                                                            href="./landing-classic-studio.html">Studio</a>
                                                        <a class="dropdown-item "
                                                            href="./landing-classic-marketing.html">Marketing</a>
                                                        <a class="dropdown-item "
                                                            href="./landing-classic-advertisement.html">Advertisement</a>
                                                        <a class="dropdown-item "
                                                            href="./landing-classic-consulting.html">Consulting</a>
                                                        <a class="dropdown-item "
                                                            href="./landing-classic-portfolio.html">Portfolio</a>
                                                        <a class="dropdown-item "
                                                            href="./landing-classic-software.html">Software</a>
                                                        <a class="dropdown-item "
                                                            href="./landing-classic-business.html">Business</a>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="col-sm">
                                                        <div class="mb-3">
                                                            <span class="dropdown-header">App</span>
                                                            <a class="dropdown-item "
                                                                href="./landing-app-ui-kit.html">UI Kit</a>
                                                            <a class="dropdown-item "
                                                                href="./landing-app-saas.html">SaaS</a>
                                                            <a class="dropdown-item "
                                                                href="./landing-app-workflow.html">Workflow</a>
                                                            <a class="dropdown-item "
                                                                href="./landing-app-payment.html">Payment</a>
                                                            <a class="dropdown-item "
                                                                href="./landing-app-tool.html">Tool</a>
                                                        </div>

                                                        <span class="dropdown-header">Onepage</span>
                                                        <a class="dropdown-item "
                                                            href="./landing-onepage-corporate.html">Corporate</a>
                                                        <a class="dropdown-item "
                                                            href="./landing-onepage-saas.html">SaaS <span
                                                                class="badge bg-primary rounded-pill ms-1">Hot</span></a>
                                                    </div>
                                                    <!-- End Col -->
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Landings -->

                            <!-- Company -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut animated"
                                    aria-labelledby="companyMegaMenu"
                                    style="min-width: 14rem; display: none; animation-duration: 300ms;">
                                    <a class="dropdown-item " href="./page-about.html">About</a>
                                    <a class="dropdown-item " href="./page-services.html">Services</a>
                                    <a class="dropdown-item " href="./page-customer-stories.html">Customer Stories</a>
                                    <a class="dropdown-item " href="./page-customer-story.html">Customer Story</a>
                                    <a class="dropdown-item " href="./page-careers.html">Careers</a>
                                    <a class="dropdown-item " href="./page-careers-overview.html">Careers Overview</a>
                                    <a class="dropdown-item " href="./page-hire-us.html">Hire Us</a>
                                    <a class="dropdown-item " href="./page-pricing.html">Pricing</a>
                                    <a class="dropdown-item " href="./page-contacts-agency.html">Contacts: Agency</a>
                                    <a class="dropdown-item " href="./page-contacts-startup.html">Contacts: Startup</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Company -->

                            <!-- Account -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="accountMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut animated"
                                    aria-labelledby="accountMegaMenu"
                                    style="min-width: 14rem; display: none; animation-duration: 300ms;">
                                    <!-- Authentication -->
                                    <div class="hs-has-sub-menu nav-item">
                                        <a id="authenticationMegaMenu"
                                            class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#"
                                            role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Authentication</a>

                                        <div class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg animated"
                                            aria-labelledby="authenticationMegaMenu"
                                            style="min-width: 14rem; display: none; animation-duration: 300ms;">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#signupModal">Signup Modal</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item " href="./page-login.html">Login</a>
                                            <a class="dropdown-item " href="./page-signup.html">Signup</a>
                                            <a class="dropdown-item " href="./page-reset-password.html">Reset
                                                Password</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item " href="./page-login-simple.html">Login Simple</a>
                                            <a class="dropdown-item " href="./page-signup-simple.html">Signup Simple</a>
                                            <a class="dropdown-item " href="./page-reset-password-simple.html">Reset
                                                Password Simple</a>
                                        </div>
                                    </div>
                                    <!-- End Authentication -->

                                    <a class="dropdown-item " href="./account-overview.html">Personal Info</a>
                                    <a class="dropdown-item " href="./account-security.html">Security</a>
                                    <a class="dropdown-item " href="./account-notifications.html">Notifications</a>
                                    <a class="dropdown-item " href="./account-preferences.html">Preferences</a>
                                    <a class="dropdown-item " href="./account-orders.html">Orders</a>
                                    <a class="dropdown-item " href="./account-wishlist.html">Wishlist</a>
                                    <a class="dropdown-item " href="./account-payments.html">Payments</a>
                                    <a class="dropdown-item " href="./account-address.html">Address</a>
                                    <a class="dropdown-item " href="./account-teams.html">Teams</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Account -->

                            <!-- Pages -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut animated"
                                    aria-labelledby="pagesMegaMenu"
                                    style="min-width: 14rem; display: none; animation-duration: 300ms;">
                                    <a class="dropdown-item " href="./page-faq.html">FAQ</a>
                                    <a class="dropdown-item " href="./page-terms.html">Terms &amp; Conditions</a>
                                    <a class="dropdown-item " href="./page-privacy.html">Privacy &amp; Policy</a>
                                    <a class="dropdown-item " href="./page-coming-soon.html">Coming Soon</a>
                                    <a class="dropdown-item " href="./page-maintenance-mode.html">Maintenance Mode</a>
                                    <a class="dropdown-item " href="./page-status.html">Status</a>
                                    <a class="dropdown-item " href="./page-invoice.html">Invoice</a>
                                    <a class="dropdown-item " href="./page-error-404.html">Error 404</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Pages -->

                            <!-- Blog -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut animated"
                                    aria-labelledby="blogMegaMenu"
                                    style="min-width: 14rem; display: none; animation-duration: 300ms;">
                                    <a class="dropdown-item " href="./blog-journal.html">Journal</a>
                                    <a class="dropdown-item " href="./blog-metro.html">Metro</a>
                                    <a class="dropdown-item " href="./blog-newsroom.html">Newsroom</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item " href="./blog-article.html">Article</a>
                                    <a class="dropdown-item " href="./blog-author-profile.html">Author Profile</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Blog -->

                            <!-- Portfolio -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="portfolioMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle "
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut animated"
                                    aria-labelledby="portfolioMegaMenu"
                                    style="min-width: 14rem; display: none; animation-duration: 300ms;">
                                    <a class="dropdown-item " href="./portfolio-grid.html">Grid</a>
                                    <a class="dropdown-item " href="./portfolio-product-article.html">Product
                                        Article</a>
                                    <a class="dropdown-item " href="./portfolio-case-studies-branding.html">Case
                                        Studies: Branding</a>
                                    <a class="dropdown-item " href="./portfolio-case-studies-product.html">Case
                                        Studies: Product</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Portfolio -->

                            <!-- Button -->
                            <li class="nav-item">
                                <a class="btn btn-primary btn-transition"
                                    href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/"
                                    target="_blank">Buy now</a>
                            </li>
                            <!-- End Button -->
                        </ul>
                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="bg-light">
        <div class="container pb-1 pb-lg-7">
            <div class="row content-space-t-2">
                <div class="col-lg-3 mb-7 mb-lg-0">
                    <!-- Logo -->
                    <div class="mb-5">
                        <a class="navbar-brand" href="./index.html" aria-label="Space">
                            <img class="navbar-brand-logo" src="/assets/svg/logos/logo.svg" alt="Image Description">
                        </a>
                    </div>
                    <!-- End Logo -->

                    <!-- List -->
                    <ul class="list-unstyled list-py-1">
                        <li><a class="link-sm link-secondary" href="#"><i class="bi-geo-alt-fill me-1"></i> 153
                                Williamson Plaza, Maggieberg</a></li>
                        <li><a class="link-sm link-secondary" href="tel:1-062-109-9222"><i
                                    class="bi-telephone-inbound-fill me-1"></i> +1 (062) 109-9222</a></li>
                    </ul>
                    <!-- End List -->

                </div>
                <!-- End Col -->

                <div class="col-sm mb-7 mb-sm-0">
                    <h5 class="mb-3">Company</h5>

                    <!-- List -->
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-secondary" href="#">About</a></li>
                        <li><a class="link-sm link-secondary" href="#">Careers <span
                                    class="badge bg-warning text-dark rounded-pill ms-1">We're hiring</span></a></li>
                        <li><a class="link-sm link-secondary" href="#">Blog</a></li>
                        <li><a class="link-sm link-secondary" href="#">Customers <i
                                    class="bi-box-arrow-up-right small ms-1"></i></a></li>
                        <li><a class="link-sm link-secondary" href="#">Hire us</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->

                <div class="col-sm mb-7 mb-sm-0">
                    <h5 class="mb-3">Features</h5>

                    <!-- List -->
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-secondary" href="#">Press <i
                                    class="bi-box-arrow-up-right small ms-1"></i></a></li>
                        <li><a class="link-sm link-secondary" href="#">Release Notes</a></li>
                        <li><a class="link-sm link-secondary" href="#">Integrations</a></li>
                        <li><a class="link-sm link-secondary" href="#">Pricing</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->

                <div class="col-sm">
                    <h5 class="mb-3">Documentation</h5>

                    <!-- List -->
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-secondary" href="#">Support</a></li>
                        <li><a class="link-sm link-secondary" href="#">Docs</a></li>
                        <li><a class="link-sm link-secondary" href="#">Status</a></li>
                        <li><a class="link-sm link-secondary" href="#">API Reference</a></li>
                        <li><a class="link-sm link-secondary" href="#">Tech Requirements</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->

                <div class="col-sm">
                    <h5 class="mb-3">Resources</h5>

                    <!-- List -->
                    <ul class="list-unstyled list-py-1 mb-5">
                        <li><a class="link-sm link-secondary" href="#"><i class="bi-question-circle-fill me-1"></i>
                                Help</a></li>
                        <li><a class="link-sm link-secondary" href="#"><i class="bi-person-circle me-1"></i> Your
                                Account</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="border-top my-7"></div>

            <div class="row mb-7">
                <div class="col-sm mb-3 mb-sm-0">
                    <!-- Socials -->
                    <ul class="list-inline list-separator mb-0">
                        <li class="list-inline-item">
                            <a class="text-body" href="#">Privacy &amp; Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-body" href="#">Terms</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-body" href="#">Site Map</a>
                        </li>
                    </ul>
                    <!-- End Socials -->
                </div>

                <div class="col-sm-auto">
                    <!-- Socials -->
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-soft-secondary btn-xs btn-icon" href="#">
                                <i class="bi-facebook"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a class="btn btn-soft-secondary btn-xs btn-icon" href="#">
                                <i class="bi-google"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a class="btn btn-soft-secondary btn-xs btn-icon" href="#">
                                <i class="bi-twitter"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a class="btn btn-soft-secondary btn-xs btn-icon" href="#">
                                <i class="bi-github"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-soft-secondary btn-xs dropdown-toggle"
                                    id="footerSelectLanguage" data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-dropdown-animation="">
                                    <span class="d-flex align-items-center">
                                        <img class="avatar avatar-xss avatar-circle me-2"
                                            src="/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description"
                                            width="16">
                                        <span>English (US)</span>
                                    </span>
                                </button>

                                <div class="dropdown-menu" aria-labelledby="footerSelectLanguage">
                                    <a class="dropdown-item d-flex align-items-center active" href="#">
                                        <img class="avatar avatar-xss avatar-circle me-2"
                                            src="/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description"
                                            width="16">
                                        <span>English (US)</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <img class="avatar avatar-xss avatar-circle me-2"
                                            src="/assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description"
                                            width="16">
                                        <span>Deutsch</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <img class="avatar avatar-xss avatar-circle me-2"
                                            src="/assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description"
                                            width="16">
                                        <span>Español</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <img class="avatar avatar-xss avatar-circle me-2"
                                            src="/assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description"
                                            width="16">
                                        <span>中文 (繁體)</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </li>
                    </ul>
                    <!-- End Socials -->
                </div>
            </div>

            <!-- Copyright -->
            <div class="w-md-85 text-lg-center mx-lg-auto">
                <p class="text-muted small">© Front. 2021 Htmlstream. All rights reserved.</p>
                <p class="text-muted small">When you visit or interact with our sites, services or tools, we or our
                    authorised service providers may use cookies for storing information to help provide you with a
                    better, faster and safer experience and for marketing purposes.</p>
            </div>
            <!-- End Copyright -->
        </div>
    </footer>

    <!--Libs-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    @yield('script')
    <script>

    </script>
</body>

</html>
