@extends('frontend.layouts.app')

@section('content')
<div class="main">

    <!--hero section start-->
    <section class="ptb-120 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-8">
                    <div class="hero-content-wrap text-white text-center position-relative">
                        <h1 class="text-white">Hosting Affiliate Program</h1>
                        <p class="lead">We offer nice commissions, however most of our affiliates endorse US for a unique reason the standard of service. If you would like to advocate a number that will not fail your customers, readers, be part of our affiliate program!</p>
                        <a href="#" class="btn btn-brand-03 btn-lg">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--affiliates promo contents start-->
    <section id="features" class="feature-tab-section ptb-100 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="cta-new-wrap">
                        <h2>High Commissions with Weekly Payouts Thresholds</h2>
                        <p class="lead">Globally parallel task granular alignments through excellent intellectual capital. Globally deploy vertical leadership.</p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="fas fa-check-circle text-success mr-2"></span>Easy Setup With Instant Activation</li>
                            <li class="py-1"><span class="fas fa-check-circle text-success mr-2"></span>DNS Management</li>
                            <li class="py-1"><span class="fas fa-check-circle text-success mr-2"></span>No Hidden Cost</li>
                            <li class="py-1"><span class="fas fa-check-circle text-success mr-2"></span>Full Domain Control Panel</li>
                            <li class="py-1"><span class="fas fa-check-circle text-success mr-2"></span><strong>24/7</strong> Customer Support</li>
                        </ul>
                        <div class="action-btns mt-4">
                            {{-- <a href="#" class="btn btn-outline-brand-01">Learn More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="cta-new-wrap">
                        <img src="{{ asset('frontend') }}/img/affliate.png" alt="hosting" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-md-6 col-lg-6">
                    <div class="cta-new-wrap">
                        <img src="{{ asset('frontend') }}/img/affliate-1.png" alt="hosting" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="cta-new-wrap">
                        <h2>Easy Ways to Refer Clients and Earn Commissions</h2>
                        <p>In the dynamic realm of web hosting, there exists a unique opportunity for you to transform your network and connections into a source of consistent earnings. Our hosting services are not only reliable and feature-rich but also come with a rewarding referral program that allows you to effortlessly generate income by referring clients to us. In this comprehensive guide, we will unveil a multitude of strategies and tactics, making it easy for you to refer clients and earn generous commissions while establishing yourself as a trusted partner in the hosting landscape. </p>
                        <div class="action-btns mt-4">
                            {{-- <a href="#" class="btn btn-outline-brand-01">Learn More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--affiliates promo contents end-->

    <!--feature section start-->
    <section class="feature-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center">
                        <h2>Best Features For Affiliate Success</h2>
                        <p class="lead">These features come standard in all of our hosting plans. Dynamically extend
                            imperatives through open-source quickly niche markets.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="features-box mt-4 text-center border rounded p-4 bg-white">
                        <div class="features-box-icon mb-3">
                            <span class="ti-panel icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Attractive visuals</h5>
                            <p>Our intuitive control panel gives you admin access to all of your DreamHost products
                                easily.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="features-box mt-4 text-center border rounded p-4 bg-white">
                        <div class="features-box-icon mb-3">
                            <span class="ti-thumb-up icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Complimentary hosting</h5>
                            <p>Tech veterans, geeks, and nerds are all standing by to optimize your experience whether.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="features-box mt-4 text-center border rounded p-4 bg-white">
                        <div class="features-box-icon mb-3">
                            <span class="ti-mouse-alt icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Reliable in-house tracking</h5>
                            <p>No need to dig into a bunch of documentation. Simply install web apps like WordPress,
                                Joomla!.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="features-box mt-4 text-center border rounded p-4 bg-white">
                        <div class="features-box-icon mb-3">
                            <span class="ti-timer icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Campaign tools</h5>
                            <p>With multiple datacenter locations, redundant cooling, emergency generators and
                                monitoring.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="features-box mt-4 text-center border rounded p-4 bg-white">
                        <div class="features-box-icon mb-3">
                            <span class="ti-harddrives icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Great affiliate support</h5>
                            <p>With SSDs, your website, caching, and database queries are faster by our calculations. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="features-box mt-4 text-center border rounded p-4 bg-white">
                        <div class="features-box-icon mb-3">
                            <span class="ti-cup icon-size-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Custom landing page</h5>
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
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="cta-content-wrap text-white text-center">
                        <h2 class="text-white">Ready To Become An Affiliate?</h2>
                        <p class="lead">Holisticly optimize enterprise networks and intuitive supply chains. Enthusiastically embrace standards compliant growth.</p>
                        <a href="#" class="btn btn-brand-03 mt-2">Join Now</a>
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

</div>
@endsection