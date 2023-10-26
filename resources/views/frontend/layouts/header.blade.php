<header id="header" class="header-main">
    <!--main header menu start-->
    <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
        <div class="container">
            <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                <!--logo start-->
                <a class="navbar-brand pt-0" href="{{ url('/') }}"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt="logo" class="img-fluid" /></a>
                <!--logo end-->

                <!--responsive toggle button start-->
                <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                    <span id="hamburgerTrigger">
                      <span class="ti-menu"></span>
                    </span>
                </button>
                <!--responsive toggle button end-->

                <!--main menu start-->
                <div id="navBar" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto main-navbar-nav">
                        <!--home start-->
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="{{ url('/') }}" >Home</a>
                        </li>
                        <!--home end-->

                        <!--hosting start-->
                        <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                            <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Hosting</a>

                            <!-- Demos - Mega Menu -->
                            <div class="hs-mega-menu main-sub-menu" style="width: 415px" aria-labelledby="hostingMegaMenu">
                                <div class="row no-gutters">
                                    <div class="col-md-12">
                                        <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                            <!--menu title with subtitle and icon item start-->
                                            @foreach ($categorys as $category)
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{ route('hosting.view', $category->id) }}">
                                                    <div class="media align-items-center">
                                                        <div class="menu-item-icon rounded-circle">
                                                            <img width="30px" src="{{ asset('uplodes/hosting') }}/{{ $category->cat_img }}" alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">{{ $category->name }}</span>
                                                            <small class="u-header__promo-text">{{ $category->title }}</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                            <!--menu title with subtitle and icon item end-->
                                            
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                            <!-- End Demos - Mega Menu -->
                        </li>
                        <!--hosting end-->

                        <!--domain start-->
                        <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                            <a id="domainMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Domain</a>
                            <!-- Demos - Mega Menu -->
                            <div class="hs-mega-menu main-sub-menu" style="width: 660px" aria-labelledby="domainMegaMenu">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="menu-item-wrap p-3">
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="http://bill.nugortech.com/index.php">
                                                    <div class="d-flex align-items-center pb-1">
                                                        <i class="fas fa-globe mr-2 color-primary"></i>
                                                        <span class="u-header__promo-title">Domain Checker</span>
                                                    </div>
                                                    <small class="u-header__promo-text">Find the perfect domain for your business</small>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="http://bill.nugortech.com/cart.php?a=add&domain=transfer">
                                                    <div class="d-flex align-items-center pb-1">
                                                        <i class="fas fa-exchange-alt mr-2 color-accent"></i>
                                                        <span class="u-header__promo-title">Domain Transfer</span>
                                                    </div>
                                                    <small class="u-header__promo-text">Transfer your domain easily using this tool</small>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="http://bill.nugortech.com/cart.php?a=add&domain=register">
                                                    <div class="d-flex align-items-center pb-1">
                                                        <i class="fas fa-copyright mr-2 instagram-color"></i>
                                                        <span class="u-header__promo-title">Domain Registration </span>
                                                    </div>
                                                    <small class="u-header__promo-text">Register your domain name for lifetime</small>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 gray-light-bg custom-radius-right">
                                        <div class="menu-item-wrap p-4">
                                            <h6>#1 Web Hosting Company</h6>
                                            <ul class="list-unstyled tech-feature-list">
                                                <li class="py-1"><small><span class="fad fa-check-circle text-success mr-2"></span><strong>Flexible</strong> Easy to Use Control Panel</small></li>
                                                <li class="py-1"><small><span class="fad fa-check-circle text-success mr-2"></span><strong>99%</strong> Uptime Guarantee</small></li>
                                                <li class="py-1"><small><span class="fad fa-check-circle text-success mr-2"></span><strong>45-Day</strong> Money-Back Guarantee</small></li>
                                                <li class="py-1"><small><span class="fad fa-check-circle text-success mr-2"></span><strong>Free SSL</strong> Certificate Included</small></li>
                                            </ul>
                                            <a class="btn btn-brand-03 btn-block mt-3" href="http://bill.nugortech.com/index.php?rp=/store/web-hosting">Learn More <span
                                                    class="fas fa-angle-right ml-2"></span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Demos - Mega Menu -->
                        </li>
                        <!--domain end-->

                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="{{ route('affiliates') }}">Affiliates</a>
                        </li>

                        <!--about start-->
                        <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                            <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Company</a>

                            <!--about submenu start-->
                            <div class="hs-mega-menu main-sub-menu" style="width: 320px" aria-labelledby="aboutMegaMenu">
                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{ route('contact.us') }}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="{{ asset('frontend') }}/img/chat-mobile.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Contact Us</span>
                                                <small class="u-header__promo-text">Face any problem contact with us
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{ route('about.us') }}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="{{ asset('frontend') }}/img/community.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">About Us</span>
                                                <small class="u-header__promo-text">We are leading hosting company
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{ route('partners') }}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="{{ asset('frontend') }}/img/partner.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Our Partner</span>
                                                <small class="u-header__promo-text">We have trusted partners globally
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{ route('network') }}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="{{ asset('frontend') }}/img/network.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Network</span>
                                                <small class="u-header__promo-text">Keep your data save and secure
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{ route('terms.condition') }}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="{{ asset('frontend') }}/img/blog.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Terms Condition</span>
                                                
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->
                            </div>
                            <!--about submenu end-->
                        </li>
                        <!--about end-->

                        <!--button start-->
                        <li class="nav-item header-nav-last-item d-flex align-items-center">
                            <a class="btn btn-brand-03 animated-btn" href="https://bill.nugortech.com/index.php?rp=/login" target="_blank">
                                <span class="fa fa-user pr-2"></span> Client Area
                            </a>
                        </li>
                        <!--button end-->
                    </ul>
                </div>
                <!--main menu end-->
            </nav>
        </div>
    </div>
    <!--main header menu end-->
</header>