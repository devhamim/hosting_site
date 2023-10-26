@extends('frontend.layouts.app')

@section('content')
<!--hero section start-->
<section class="ptb-100 overflow-hidden primary-bg">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <div class="col-md-12 col-lg-6">
                <div class="hero-slider-content text-white py-5">
                    <div class="headline mb-4">
                        <p class="mb-0"><i class="fas fa-bell rounded-circle mr-2"></i> <span class="font-weight-bold">30% Discount </span> first annual purchase</p>
                    </div>
                    <h1 class="text-white">Unlimited Domain & Hosting in One Platform</h1>
                    <p class="lead">At Nugortech, you will find one of the best shared web hosting solutions for portfolios, e-commerce and any website you could imagine. Our services includes Search Engine Optimization, email marketing, Develop and more!</p>
                    
                    <div class="action-btns mt-4">
                        <a href="#" class="btn btn-brand-03 btn-lg">Get Started Now </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
                <div class="img-wrap">
                    <img src="{{ asset('frontend') }}/img/hero-home.svg" alt="hosting" class="img-fluid">
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
<!--hero section end-->

<!--domain search promo start-->
<section class="position-relative zindex-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8 col-12">
                <div class="domain-search-wrap border gray-light-bg">
                    <h4 class="text-center">Looking For Domain Name?</h4>
                    <form action="https://kohost.themetags.com/domain-search-result.php" method="GET" class="domain-search-form my-4">
                        <input type="text" name="domain" id="domain" class="form-control" placeholder="yourdomainname.com" />
                        <div class="select-group">
                            <select name="domainType" class="form-control">
                                <option value="com" selected>.com</option>
                                <option value="net">.net</option>
                                <option value="io">.io</option>
                                <option value="info">.info</option>
                                <option value="store">.store</option>
                                <option value="store">.org</option>
                            </select>
                            <button type="submit" class="btn btn-brand-01"><i class="fas fa-search pr-1"></i> Search</button>
                        </div>
                    </form>
                    <div class="domain-list-wrap text-center">
                        <ul class="list-inline domain-search-list">
                            <li class="list-inline-item bg-white border rounded"><a href="#"><img src="{{ asset('frontend') }}/img/com.png" alt="com" width="70" class="img-fluid"> <span>$8.99</span></a>
                            </li>
                            <li class="list-inline-item bg-white border rounded"><a href="#"><img src="{{ asset('frontend') }}/img/online.png" alt="com" width="70" class="img-fluid"> <span>$0.99</span></a>
                            </li>
                            <li class="list-inline-item bg-white border rounded"><a href="#"><img src="{{ asset('frontend') }}/img/net.png" alt="com" width="70" class="img-fluid"> <span>$4.99</span></a>
                            </li>
                            <li class="list-inline-item bg-white border rounded"><a href="#"><img src="{{ asset('frontend') }}/img/org.png" alt="com" width="70" class="img-fluid"> <span>$2.99</span></a>
                            </li>
                            <li class="list-inline-item bg-white border rounded"><a href="#"><img src="{{ asset('frontend') }}/img/store.png" alt="com" width="70" class="img-fluid"> <span>$0.99</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--domain search promo end-->

<!--promo section start-->
<section class="promo-section ptb-100 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-7">
                <div class="section-heading text-center">
                    <h2>We Provide You World Class Best Hosting Features For You</h2>
                    <p>If you are looking premium quality web hosting package for your website, you are right place! We offer outstanding user friendly web hosting package for all!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center justify-content-sm-center">
            <div class="col-md-6 col-lg-4">
                <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                    <div class="card-body">
                        <div class="">
                            <span class="icon-size-lg color-primary"><i class="fa-solid fa-microchip"></i></span>
                        </div>
                        <div class=" ">
                            <h5>Powerful Hardware</h5>
                            <p class="mb-0">We are using enterprise grade hardware to give your site extra speed boost! All of our servers comes with SSD RAID-10..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                    <div class="card-body">
                        <div class="pb-2">
                            <span class="fas fa-headset icon-size-lg color-primary"></span>
                        </div>
                        <div class="pt-2 pb-3">
                            <h5>24/7 Live Chat</h5>
                            <p class="mb-0">Our customer support is 24x7x365. With your hosting package you also gain 24x7 accesses to our expert support team.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                    <div class="card-body">
                        <div class="pb-2">
                            <span class="fas fa-lock icon-size-lg color-primary"></span>
                        </div>
                        <div class="pt-2 pb-3">
                            <h5>Feed & High-Security</h5>
                            <p class="mb-0">Protection against all known attacks up to 30 Gbps, our network protects from over 95% of the most common DDoS attacks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--promo section end-->

 <!--pricing section start-->
 {{-- <section class="pricing-section ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>Managed Our Hosting Price</h2>
                    <p class="lead">
                        Professional hosting at an affordable price. Distinctively recaptiualize principle-centered
                        core competencies through client-centered
                        core competencies.
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-12">
                <div class="switch-wrap text-center mb-5">
                    <label class="form-switch">
                        <span class="beforeinput text-success">
                            Monthly
                        </span>
                        <input type="checkbox" id="js-contcheckbox">
                        <span class="switch-icon gray-light-bg"></span>
                        <span class="afterinput">
                            Yearly
                        </span>
                    </label>
                </div>
            </div>
            @foreach ($hosting_packages->take(3) as $hosting)
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center">
                        <div class="pt-5">
                            <h5 class="mb-0">{{ $hosting->name }}</h5>
                            <p>{{ $hosting->title }}</p>
                        </div>
                        <div class="card-header py-4 border-0 ">
                            <select name="inventory_id" id="inventory_id" class="form-control inventory_id">
                                @foreach ($inventoryData[$hosting->id] as $inventory)
                                    <option value="{{ $inventory->id }}" class="form-control">@if ($inventory->month != 0)
                                        {{ $inventory->month }} Month - 
                                    @endif @if ($inventory->year != 0)
                                    {{ $inventory->year }}  Year - 
                                    @endif{{ $inventory->price }} TK</option>
                                @endforeach
                            </select>
                        </div>
                        <a href="{{ $inventoryData[$hosting->id]->first()->link }}" id="host_btn" class="btn btn-brand-01 host-btn mb-3" target="_blank">Purchase now</a>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>{{ $hosting->storage }}</span> SSD Storage</li>
                                <li><span>{{ $hosting->bandwidth }}</span> Bandwidth</li>
                                <li><span>{{ $hosting->addon_domain }}</span> Addon Domain</li>
                                <li><span>{{ $hosting->sub_domain }}</span> Sub Domain</li>
                                <li><span>{{ $hosting->ftp_account }}</span> FTP Account</li>
                                <li><span>{{ $hosting->transfer }}</span> Data Transfer</li>
                                <li><span>{{ $hosting->database }}</span> Database</li>
                                <li><span>{{ $hosting->email }}</span> Email Account</li>
                                <li><span>{{ $hosting->cpu_limit }}</span> CPU Limit</li>
                                <li><span>{{ $hosting->ram }}</span> RAM</li>
                                <li><span>{{ $hosting->email_limit }}</span> hour Email Limit</li>
                                @if ($hosting->cpanel == 1)
                                    <li>cPanel Control Panel</li>
                                @endif
                                @if ($hosting->ssl == 1)
                                    <li>Free SSL Certificate</li>
                                @endif
                                @if ($hosting->litespeed == 1)
                                    <li>LiteSpeed Server</li>
                                @endif
                                @if ($hosting->cloudlinux == 1)
                                    <li>CloudLinux OS</li>
                                @endif
                                @if ($hosting->firewall == 1)
                                    <li>Imunify360 Firewall</li>
                                @endif
                                @if ($hosting->softaclus == 1)
                                    <li>Softaclus Scripts</li>
                                @endif
                                @if ($hosting->instant == 1)
                                    <li>Instant Activation</li>
                                @endif
                                @if ($hosting->upgradation == 1)
                                    <li>Any Time Upgradation</li>
                                @endif
                                @if ($hosting->backup == 1)
                                    <li>Full Remote Backup</li>
                                @endif
                                @if ($hosting->grantee == 1)
                                    <li>99.9% Uptime Grantee</li>
                                @endif
                                @if ($hosting->support == 1)
                                    <li>24/7 Phone Support</li>
                                @endif
                               
                            </ul>
                           
                            
                        </div>
                    </div>
                </div>
            @endforeach    
            
            <div class="col-12">
                <div class="support-cta mt-5">
                    <h5 class="mb-1 d-flex align-items-center justify-content-center"><span class="ti-loop color-primary mr-3 icon-sm"></span>Choose Your <a href="pricing-comparison.html" class="ml-2">Compare Hosting Plans</a></h5>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--pricing section end-->

<!--call to action start-->
<section class="ptb-60 primary-bg">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-7 col-lg-6">
                <div class="cta-content-wrap text-white">
                    <h2 class="text-white">Best Cloud Hosting <br> With Trusted Service</h2>
                    <p>Website performance is enhanced by combining the cloud based server with Latest PHP Version, makes your website more lighten.</p>
                </div>
                <div class="action-btns mt-4">
                    {{-- <a href="#" class="btn btn-brand-03"> Get Start Now </a> --}}
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="cta-img-wrap text-center">
                    <img src="{{ asset('frontend') }}/img/cta-new.svg" class="img-fluid" alt="server room">
                </div>
            </div>
        </div>
    </div>
</section>
<!--call to action end-->

<!--services section start-->
<section class="ptb-100 service-section-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-7">
                <div class="section-heading text-center">
                    <h2>Our Tools And Services For Optimize Website Building</h2>
                    <p>Credibly supply 24/365 web services with customer directed methods of empowerment.
                        Collaboratively extend sustainable e-markets architectures. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="single-service p-5 rounded border gray-light-bg">
                    <div class="service-header d-flex align-items-center justify-content-between">
                        <h4><span class="h5 text-uppercase">Easy & First</span> <br>Website Building</h4>
                        <span class="fas fa-shield-alt fa-3x color-primary"></span>
                    </div>
                    <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                    {{-- <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single-service p-5 rounded border gray-light-bg">
                    <div class="service-header d-flex align-items-center justify-content-between">
                        <h4><span class="h5 text-uppercase">Suitable For All Users</span> <br>Managed WordPress</h4>
                        <span class="fab fa-wordpress fa-3x color-primary"></span>
                    </div>
                    <p>It is now possible to build fast and secure WordPress websites with Hostnin's fully managed WordPress web hosting platform.</p>
                    {{-- <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single-service p-5 rounded border gray-light-bg">
                    <div class="service-header d-flex align-items-center justify-content-between">
                        <h4><span class="h5 text-uppercase">Commitment To</span> <br>Dedicated Support</h4>
                        <span class="fas fa-headset fa-3x color-primary"></span>
                    </div>
                    <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                    {{-- <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single-service p-5 rounded border gray-light-bg">
                    <div class="service-header d-flex align-items-center justify-content-between">
                        <h4><span class="h5 text-uppercase">Easy & Smooth</span> <br>Website Transfer</h4>
                        <span class="fas fa-dolly-flatbed fa-3x color-primary"></span>
                    </div>
                    <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                    {{-- <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--services section end-->

<!--pricing section start-->
<section class="pricing-section ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-4">
                    <h2>Our Hosting Category</h2>
                    <p>
                        Professional hosting at an affordable price. Distinctively recaptiualize principle-centered
                        core competencies through client-centered
                        core competencies.
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-md-center justify-content-center">
            @foreach ($hosting_categorys as $categorys)
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
                    <div class="pricing-icon">
                        <img src="{{ asset('uplodes/hosting') }}/{{ $categorys->cat_img }}" width="60" alt="hosing">
                    </div>
                    <h4 class="package-title">{{ $categorys->name }}</h4>
                    <p class="mb-4">{{ $categorys->title }}</p>
                    
                    <a href="{{ route('hosting.view',$categorys->id) }}" class="btn btn-brand-01">Click Now</a>
                </div>
            </div>        
            @endforeach
        </div>
    </div>
</section>
<!--pricing section end-->

<!--features section start-->
<div class="feature-section ptb-100 ">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-7 col-lg-6">
                <div class="feature-content-wrap">
                    <h2>99% Cloud Hosing High-speed Cutting-edge Platform</h2>
                    <p>In the ever-evolving landscape of web hosting, the term "cloud hosting" has become somewhat of a buzzword. It promises scalability, speed, and reliability, but how much of it is true, and how much of it is just smoke and mirrors? In this comprehensive exploration, we will peel back the layers of cloud hosting to separate fact from fiction and discover the true potential of this high-speed, cutting-edge platform.</p>
                    {{-- <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                <div class="feature-img-wrap text-center">
                    <img src="{{ asset('frontend') }}/img/feature-new-1.svg" class="img-fluid" alt="server room">
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between mt-5">
            <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                <div class="feature-img-wrap text-center">
                    <img src="{{ asset('frontend') }}/img/feature-new-2.svg" class="img-fluid" alt="server room">
                </div>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="feature-content-wrap">
                    <h2>Our Own Interfaces for All Management Processes</h2>
                    <p>In the evolving world of business and technology, the ability to manage processes efficiently and effectively is paramount to success. While there are numerous off-the-shelf management solutions available, an increasing number of businesses are realizing the benefits of developing their own interfaces for all management processes. In this comprehensive exploration, we will delve into the advantages and considerations of crafting custom interfaces to streamline management across various domains.</p>
                    {{-- <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<!--features section end-->

<!--call to action start-->
<section class="ptb-60 primary-bg">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-6">
                <div class="cta-content-wrap text-white">
                    <h2 class="text-white">24/7 Expert Hosting Support Our Customers Love</h2>
                    <p>Experience Our Exceptional 24/7 Hosting Support: A Customer-Favorite Service You Can Rely On. </p>
                </div>
                <div class="support-action d-inline-flex flex-wrap">
                    <a href="mailto:nugortech@gmail.com" class="mr-3"><i class="fas fa-comment mr-1 color-accent"></i> <span>nugortech@gmail.com</span></a>
                    <a href="tel:+8801303523442" class="mb-0"><i class="fas fa-phone-alt mr-1 color-accent"></i> <span>+8801303523442</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-none d-lg-block">
                <div class="cta-img-wrap text-center">
                    <img src="{{ asset('frontend') }}/img/call-center-support.svg" width="250" class="img-fluid" alt="server room">
                </div>
            </div>
        </div>
    </div>
</section>
<!--call to action end-->

<!--network map section start-->
<section class="network-map-section ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>Our Data centers Location</h2>
                    <p class="lead">Cloudhub offers a low latency worldwide network, enabling you to deploy your
                        service infrastructure in close proximity to your customer base.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="network-map-wrap">
                    <ul class="custom-map-location">
                        <li style="top: 29%; left: 15.5%;">
                            <span data-toggle="tooltip" data-placement="top" title="Canada"></span>
                        </li>
                        <li style="top: 42%; left: 20%;">
                            <span data-toggle="tooltip" data-placement="top" title="United States"></span>
                        </li>
                        <li style="top: 70%; left: 32%;">
                            <span data-toggle="tooltip" data-placement="top" title="Brazil"></span>
                        </li>
                        <li style="top: 57%; left: 48%;">
                            <span data-toggle="tooltip" data-placement="top" title="Nigeria"></span>
                        </li>
                        <li style="top: 18%; left: 53%;">
                            <span data-toggle="tooltip" data-placement="top" title="Finland"></span>
                        </li>
                        <li style="top: 51%; left: 72%;">
                            <span data-toggle="tooltip" data-placement="top" title="Bangladesh"></span>
                        </li>
                        <li style="top: 45%; left: 68%;">
                            <span data-toggle="tooltip" data-placement="top" title="India"></span>
                        </li>
                        <li style="top: 35%; left: 80%;">
                            <span data-toggle="tooltip" data-placement="top" title="China"></span>
                        </li>
                        <li style="top: 77%; left: 85%;">
                            <span data-toggle="tooltip" data-placement="top" title="Australia"></span>
                        </li>
                    </ul>
                    <img src="{{ asset('frontend') }}/img/map-dark.svg" alt="location map">
                </div>
            </div>
        </div>
    </div>
</section>
<!--network map section end-->

<!--testimonial section start-->
<section class="review-section ptb-100 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-7">
                <div class="section-heading text-center">
                    <h2>Our Lovely Client Say About Us</h2>
                    <p>Hear What Our Customers Have to Say About Our Hosting Services! </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme client-testimonial-1 dot-bottom-center custom-dot">
                @foreach ($clients as $client)
                <div class="item">
                    <div class="border single-review-wrap bg-white p-4 m-3">
                        <div class="review-body">
                            <h5>{{ $client->title }}</h5>
                            <p>{{ $client->description }}</p>
                        </div>
                        <div class="review-author d-flex align-items-center">
                            <div class="author-avatar">
                                <img src="{{ asset('uplodes/client') }}/{{ $client->image }}" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                <span>“</span>
                            </div>
                            <div class="review-info">
                                <h6 class="mb-0">{{ $client->name }}</h6>
                                <span>{{ $client->company }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--testimonial section end-->


<!--our team section start-->
<section class="client-section  ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-heading text-center mb-5">
                    <h2>Lots of Customer Love Us</h2>
                    <p>
                        Rapidiously morph transparent internal or sources whereas resource sucking e-business. Conveniently innovate formulate clicks-and-mortar manufactured products compelling internal.
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                    <div class="item single-customer">
                        <img src="{{ asset('frontend') }}/img/customers/clients-logo-01.png" alt="client logo" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('frontend') }}/img/customers/clients-logo-02.png" alt="client logo" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('frontend') }}/img/customers/clients-logo-03.png" alt="client logo" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('frontend') }}/img/customers/clients-logo-04.png" alt="client logo" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('frontend') }}/img/customers/clients-logo-05.png" alt="client logo" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('frontend') }}/img/customers/clients-logo-06.png" alt="client logo" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('frontend') }}/img/customers/clients-logo-07.png" alt="client logo" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('frontend') }}/img/customers/clients-logo-08.png" alt="client logo" class="customer-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--our team section end-->

@endsection


@section('footer_script')


@endsection