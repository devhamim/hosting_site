@extends('frontend.layouts.app')

@section('content')
<div class="main">
    <!--hero section start-->
    <section class="hero-slider-section">
        <div class="owl-carousel owl-theme hero-slider-one custom-dot dot-bottom-center">
            <div class="item">
                <div class="bg-image hero-equal-height ptb-120" data-overlay="8">
                    <div class="background-image-wraper" style="background: url('{{ asset('frontend') }}/img/hero-1.jpg')no-repeat center center / cover; opacity: 1;"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8 col-lg-7">
                                <div class="hero-content-wrap text-white position-relative z-index">
                                    <span class="text-white h5 font-weight-normal">Reliable hosting to make any website</span>
                                    <h1 class="text-white">We Offer Shared Hosting Fast, Secure & Easy To Manage</h1>
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span><strong>Unmetered</strong> Sub Domains, Accounts</li>
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span><strong>99%</strong> Uptime Guarantee</li>
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span><strong>45-Day</strong> Money-Back Guarantee</li>
                                    </ul>
                                    <div class="action-btns mt-2">
                                        <p>Get all the essentials features <strong>Starting at ৳ 99/mo</strong></p>
                                        <a href="#" class="btn btn-brand-03 mr-3">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-md-none d-lg-block">
                                <div class="big-price-wrap position-relative">
                                    <div class="price-block d-flex justify-content-center text-white">
                                        <span class="price-currency">৳</span>
                                        <div class="offer-price">99</div>
                                        <div class="right-block d-flex">
                                            <span class="cent-value">.00</span>
                                            <span class="per-value">/mo</span>
                                        </div>
                                    </div>
                                    <span class="d-block text-white regular-price text-center">Regular Price <strong>৳ 100.00</strong> *</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bg-image hero-equal-height ptb-120" data-overlay="8">
                    <div class="background-image-wraper" style="background: url('{{ asset('frontend') }}/img/hero-4.jpg')no-repeat center center / cover; opacity: 1;"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="hero-content-wrap text-white">
                                    <span class="text-white h5 font-weight-normal">Trusted by 700,500 Website Owners</span>
                                    <h1 class="text-white">Your Websites Deserve Faster, Secure & Reliable Hosting</h1>
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span>Industry-leading Performance & Speed</li>
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span>Free & Effortless Migration</li>
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span>Free SSL Certificates For ALL Websites</li>
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span>99.9% Uptime Guarantee</li>
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span>30-day Money-back Guarantee</li>
                                    </ul>
                                    <div class="action-btns mt-2">
                                        <a href="#" class="btn btn-brand-03 mr-3">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bg-image hero-equal-height ptb-120" data-overlay="8">
                    <div class="background-image-wraper" style="background: url('{{ asset('frontend') }}/img/hero-5.jpg')no-repeat center center / cover; opacity: 1;"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="hero-content-wrap text-white">
                                    <span class="text-white h5 font-weight-normal">Build your own website</span>
                                    <h1 class="text-white">Own VPS, Fully Managed by Experts, Simple, affordable</h1>
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span>24/7 fully managed support</li>
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span>Industry-leading performance & load speed</li>
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span>Robust control panel & advanced security</li>
                                        <li class="py-1"><span class="fas fa-check-circle color-accent mr-2"></span>99.9% Uptime Guarantee</li>
                                    </ul>
                                    <div class="action-btns mt-2">
                                        <a href="#" class="btn btn-brand-03 mr-3">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--pricing section start-->
    <section id="pricing" class="pricing-section ptb-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h2>Choose Your {{ $hosting_packages->first()->rel_to_host->name }} Plan</h2>
                        <p class="lead">
                            Professional hosting at an affordable price. Distinctively recaptiualize principle-centered
                            core competencies through client-centered
                            core competencies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-md-center justify-content-center">
                @foreach ($hosting_packages as $hosting)
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="popular-price bg-white pricing-new-wrapper mt-4 p-5 shadow-sm border">
                                                
                        <div class="pricing-info mt-3">
                            <h5>{{ $hosting->name }}</h5>
                            <p class="text-muted">{{ $hosting->title }}</p>
                        </div>
                        <div class="pricing-price d-flex justify-content-between align-items-center pb-4">
                            {{-- <span class="p-icon"><i class="fad fa-rocket color-secondary"></i></span> --}}
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
                        <a href="{{ $inventoryData[$hosting->id]->first()->link }}" class="btn btn-outline-brand-01 btn-block" target="_blank">Purchase Now</a>
                        <div class="pricing-content">
                            <ul class="list-unstyled pricing-feature-list-2 mt-4">
                                <li><span class="mr-1">{{ $hosting->storage }}</span> SSD Storage</li>
                                <li><span class="mr-1">{{ $hosting->bandwidth }}</span> GB Bandwidth</li>
                                <li><span class="mr-1">{{ $hosting->addon_domain }}</span> Addon Domain</li>
                                <li><span class="mr-1">{{ $hosting->sub_domain }}</span> Sub Domain</li>
                                <li><span class="mr-1">{{ $hosting->ftp_account }}</span> FTP Account</li>
                                <li><span class="mr-1">{{ $hosting->transfer }}</span> GB Data Transfer</li>
                                <li><span class="mr-1">{{ $hosting->database }}</span> Database</li>
                                <li><span class="mr-1">{{ $hosting->email }}</span> Email Account</li>
                                <li><span class="mr-1">{{ $hosting->cpu_limit }}</span> CPU Limit</li>
                                <li><span class="mr-1">{{ $hosting->ram }}</span> RAM</li>
                                <li><span class="mr-1">{{ $hosting->email_limit }}</span> hour Email Limit</li>
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
                            {{-- <a href="pricing-specifications.html" class="mb-4 d-block">Full specifications <i class="far fa-arrow-right pl-2"></i></a> --}}
                            
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12">
                    <div class="support-cta text-center mt-5">
                        <a href="pricing-comparision.html" target="_blank">
                            {{-- <h5 class="mb-1"><span class="ti-loop color-primary mr-2"></span>Compare Hosting Plans
                            </h5> --}}
                        </a>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!--pricing section end-->

    <!--operating system promo start-->
    <section class="appliction-hosting ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Available Operating Systems With Maximum Speed</h2>
                        <p class="lead">Our web hosting platform has been fully optimised to offer outstanding performance for your web applications, delivering speeds of up to16x faster.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="application-hosting-wrap">
                        <ul class="app-list operating-list">
                            <li><a href="#" class="bg-white shadow text-dark"><img src="{{ asset('frontend') }}/img/os-img-1.png" alt="icon"> <span>CentOS</span></a></li>
                            <li><a href="#" class="bg-white shadow text-dark"><img src="{{ asset('frontend') }}/img/os-img-2.png" alt="icon"> <span>Debian GNU/Linux</span></a></li>
                            <li><a href="#" class="bg-white shadow text-dark"><img src="{{ asset('frontend') }}/img/os-img-3.png" alt="icon"> <span>cPanel</span></a></li>
                            <li><a href="#" class="bg-white shadow text-dark"><img src="{{ asset('frontend') }}/img/os-img-4.png" alt="icon"> <span>Fedora</span></a></li>
                            <li><a href="#" class="bg-white shadow text-dark"><img src="{{ asset('frontend') }}/img/os-img-5.png" alt="icon"> <span>Plesk</span></a></li>
                            <li><a href="#" class="bg-white shadow text-dark"><img src="{{ asset('frontend') }}/img/os-img-6.png" alt="icon"> <span>Suse</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--operating system promo end-->

    <!--feature section start-->
    <section class="feature-section ptb-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center">
                        <h2>Best Hosting Features For You</h2>
                        <p class="lead">These features come standard in all of our hosting plans. Dynamically extend
                            imperatives through open-source quickly niche markets.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="features-box p-5 ">
                        <div class="features-box-icon mb-3">
                            <span class="ti-panel icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Custom Control Panel</h5>
                            <p>Our intuitive control panel gives you admin access to all of your DreamHost products
                                easily.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="features-box p-5 ">
                        <div class="features-box-icon mb-3">
                            <span class="ti-thumb-up icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Real-Life Human Beings</h5>
                            <p>Tech veterans, geeks, and nerds are all standing by to optimize your experience whether.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="features-box p-5 ">
                        <div class="features-box-icon mb-3">
                            <span class="ti-mouse-alt icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>1-Click Installer</h5>
                            <p>No need to dig into a bunch of documentation. Simply install web apps like WordPress,
                                Joomla!.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="features-box p-5 ">
                        <div class="features-box-icon mb-3">
                            <span class="ti-timer icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>100% Uptime Guarantee</h5>
                            <p>With multiple datacenter locations, redundant cooling, emergency generators and
                                monitoring.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="features-box p-5 ">
                        <div class="features-box-icon mb-3">
                            <span class="ti-harddrives icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Solid State Drives (SSD)</h5>
                            <p>With SSDs, your website, caching, and database queries are faster by our calculations. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="features-box p-5 ">
                        <div class="features-box-icon mb-3">
                            <span class="ti-cup icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Award-Winning Support</h5>
                            <p>No question is too simple, or too complex for our team of experts. Synergistically
                                synergize.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--call to action new section start-->
    <section class="ptb-60 primary-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="cta-content-wrap text-white">
                        <h2 class="text-white">24/7 Expert Hosting Support Our Customers Love</h2>
                        <p>Objectively innovate high compellingly maintain progressively pursue mission-critical information quality imperatives. </p>
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
    <!--call to action new section end-->

    <!--faq section start-->
    <section id="faq" class="ptb-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Frequently Asked Queries</h2>
                        <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize frictionless expertise whereas tactical relationships. Still have questions? Contact us</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div id="accordion" class="accordion faq-wrap">
                        <div class="card mb-3">
                            <a class="card-header " data-toggle="collapse" href="#collapse0" aria-expanded="false">
                                <h6 class="mb-0 d-inline-block">If I have a WordPress site hosted somewhere else, can I move it to Nugortech?</h6>
                            </a>
                            <div id="collapse0" class="collapse show" data-parent="#accordion" style="">
                                <div class="card-body white-bg">
                                    <p>Yes, you can move your WordPress site from its current hosting provider to Nugortech (assuming Nugortech is a hosting provider that supports WordPress). Here are the general steps to migrate your WordPress site to a new hosting provider like Nugortech. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3">
                            <a class="card-header collapsed" data-toggle="collapse" href="#collapse1" aria-expanded="false">
                                <h6 class="mb-0 d-inline-block">What’s the difference between WordPress Hosting and shared Web Hosting?</h6>
                            </a>
                            <div id="collapse1" class="collapse " data-parent="#accordion" style="">
                                <div class="card-body white-bg">
                                    <p>WordPress Hosting and Shared Web Hosting are two common hosting solutions, but they have some distinct differences. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3">
                            <a class="card-header collapsed" data-toggle="collapse" href="#collapse2" aria-expanded="false">
                                <h6 class="mb-0 d-inline-block">How do I know what WordPress Hosting plan is best for me?</h6>
                            </a>
                            <div id="collapse2" class="collapse " data-parent="#accordion" style="">
                                <div class="card-body white-bg">
                                    <p>Choosing the right WordPress Hosting plan depends on several factors, including your specific needs, budget, and technical expertise. Here are steps to help you determine the best WordPress Hosting plan for you. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <a class="card-header collapsed" data-toggle="collapse" href="#collapse3" aria-expanded="false">
                                <h6 class="mb-0 d-inline-block">Is email included with WordPress Hosting?</h6>
                            </a>
                            <div id="collapse3" class="collapse " data-parent="#accordion" style="">
                                <div class="card-body white-bg">
                                    <p>Email hosting is not always included with WordPress Hosting. The inclusion of email services can vary depending on the hosting provider and the specific WordPress Hosting plan you choose. Here are some common scenarios. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--faq section end-->

    <!--testimonial and review section start-->
    <section class="review-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-4">
                    <div class="section-heading">
                        <h2>Trusted By Clients And Industry Experts</h2>
                        <p>where your online presence is often the first interaction with your audience, trust is the currency of the digital age. </p>
                        {{-- <a href="#" class="btn btn-outline-brand-01 btn-sm"> Write About Us</a> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="owl-carousel owl-theme client-testimonial-2 dot-bottom-center custom-dot">
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
                                        <h6 class="mb-0">{{  $client->name  }}</h6>
                                        <span>{{ $client->company }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial and review section end-->

</div>
@endsection