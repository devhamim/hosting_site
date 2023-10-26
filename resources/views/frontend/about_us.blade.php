@extends('frontend.layouts.app')

@section('content')
<div class="main">

    <!--page header section start-->
    <section class="ptb-120 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-8">
                    <div class="hero-content-wrap text-white text-center position-relative">
                        <h1 class="text-white">About Us</h1>
                        <p class="lead">Web hosting made easy & affordable, choose a fine-tuned web hosting services solution for successful personal and business websites.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page header section end-->

    <!--feature section tab style start-->
    <section id="about" class="about-section position-relative overflow-hidden ptb-100 ">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12 col-lg-6">
                    <div class="feature-contents section-heading">
                        <h2>We Share the Same Values which Makes our Team Stronger</h2>
                        <p>Objectively deliver professional value with diverse web-readiness.
                            Collaboratively transition wireless customer service without goal-oriented catalysts for
                            change. Collaboratively.</p>

                        <ul class="check-list-wrap list-two-col py-3">
                            <li>Data driven quality review</li>
                            <li>Secure work environment</li>
                            <li>24x7 coverage</li>
                            <li>Lifetime updates</li>
                            <li>Management team</li>
                            <li>Tech support</li>
                            <li>Integration ready</li>
                            <li>Tons of assets</li>
                            <li>Compliance driven process</li>
                            <li>Workforce management</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="image-wrap">
                        <img class="img-fluid" src="{{ asset('frontend') }}/img/feature-17.svg" alt="animation image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section tab style end-->

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
                        <a href="tel: +8801303523442" class="mb-0"><i class="fas fa-phone-alt mr-1 color-accent"></i> <span> +8801303523442</span></a>
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

    <!--feature section start-->
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
                        <img src="{{ asset('frontend') }}/img/services.svg" class="img-fluid" alt="server room">
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="{{ asset('frontend') }}/img/create-website.svg" class="img-fluid" alt="server room">
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

    <!--feature section end-->

    <!--testimonial and review section start-->
    <section class="review-section ptb-100 gray-light-bg">
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
    <!--testimonial and review section end-->

</div>
@endsection