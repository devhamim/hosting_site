@extends('frontend.layouts.app')

@section('content')
<div class="main">

    <!--hero section start-->
    <section class="ptb-120 gradient-bg position-relative min-vh-100 flex-column d-flex justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="hero-content-wrap text-white text-center position-relative">
                        <h1 class="text-white">More Then 150 Ultra-Fast Data Center Worldwide</h1>
                        <p class="lead">Web hosting made easy & affordable, choose a fine-tuned web hosting services solution for successful personal and business websites.</p>
                    </div>
                    <div class="network-map-wrap mt-5">
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
    <!--hero section end-->

    <section class="feature-tab-section ptb-100 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 order-lg-last">
                    <div class="image-box fadein text-xl-right text-center">
                        <img src="{{ asset('frontend') }}/img/network-1.jpg" alt="wp-hosting" class="img-fluid rounded" />
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 order-xl-first">
                    <h2>Advanced Search to Make your Life Fester and Easier</h2>
                    <p class="lead">Progressively matrix mission-critical core competencies without magnetic
                        paradigms.</p>
                    <div class="row pt-2">
                        <div class="col-12">
                            <h5>Multi-layered security</h5>
                            <p>Continually empower goal-oriented niche markets whereas interoperable outsourcing. Assertively incubate standardized methods of empowerment </p>
                        </div>
                        <div class="col-12">
                            <h5>Green-friendly hosting</h5>
                            <p>Monotonectally negotiate multifunctional applications whereas unique niche markets. Continually recaptiualize open-source catalysts for change whereas adaptive content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mt-5">
                <div class="col-xl-6 col-lg-6 col-12 order-lg-last">
                    <div class="image-box fadein text-xl-right text-center">
                        <img src="{{ asset('frontend') }}/img/network-2.jpg" alt="wp-hosting" class="img-fluid rounded" />
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 order-xl-last">
                    <h2>Fast connectivity & low latency</h2>
                    <p class="lead">Efficiently reintermediate long-term high-impact channels without equity
                        invested technology.</p>
                    <div class="row pt-2">
                        <div class="col-12">
                            <h5>Exclusive Features</h5>
                            <p>Globally seize functional products rather than compelling supply chains capital before frictionless quality vectors. Holisticly envisioneer worldwide niche markets for efficient services.</p>
                        </div>
                        <div class="col-12">
                            <h5>Ultra-Fast Network</h5>
                            <p>Dramatically aggregate granular resources vis-a-vis process-centric process deliver enterprise-wide scenarios improvements. Quickly target compelling e-services after cross functional schemas. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--call to action section start-->
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
    <!--call to action section end-->

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

</div>
@endsection