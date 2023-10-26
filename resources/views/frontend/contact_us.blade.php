@extends('frontend.layouts.app')

@section('content')
<div class="main">

    <!--page header section start-->
    <section class="ptb-120 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="hero-content-wrap text-white text-center position-relative">
                        <h1 class="text-white">Contact Us</h1>
                        <p class="lead">Web hosting made easy & affordable, choose a fine-tuned web hosting services solution for successful personal and business websites.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page header section end-->

    <!--our contact promo start-->
    <section class="promo-section pt-100 ">
        <div class="container">
            <div class="row justify-content-md-center justify-content-sm-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card single-promo-card text-center p-3 my-3">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-envelope icon-size-lg color-primary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Mail Us</h5>
                                <p class="mb-0">Say something to start a live chat nugortech@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card single-promo-card text-center p-3 my-3">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-headset icon-size-lg color-primary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>24/7 Live Chat</h5>
                                <p class="mb-0">We endeavour to answer all enquiries within 24 hours on business days.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card single-promo-card text-center p-3 my-3">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-map-marker-alt icon-size-lg color-primary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Visit Us</h5>
                                <p class="mb-0">House # 85/2, Road # 4, Mohommadia Housing ltd, Mohommadpur Dhaka-1207</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our contact promo end-->

    <!--our contact section start-->
    <section class="contact-us-section ptb-100" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="contact-us-form-wrap gray-light-bg position-relative">
                        <form action="{{ route('sendMessage.store') }}" method="POST" class="contact-us-form">
                        @csrf
                            {{-- <input type="hidden" name="csrfToken" id="csrfToken" value="" /> --}}
                            <div class="form-row">
                                <div class="col-md-9 col-12">
                                    <h2>Send Us a Message</h2>
                                </div>
                                <div class="col-md-9 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-md-9 col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required">
                                    </div>
                                </div>
                                <div class="col-md-9 col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="5" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn btn-brand-01">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="contact-us-content primary-bg text-white shadow-lg mt-5 mt-md-0 mt-lg-0">
                            <h3 class="text-white">Looking for a excellent Business idea?</h3>
                            <p>Drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.</p>
                            <ul class="contact-info-list mt-3">
                                <li class="d-flex py-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fas fa-location-arrow color-accent"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h6 class="mb-1 text-white font-weight-normal">Company Location</h6>
                                        <small>
                                            House # 85/2, Road # 4, Mohommadia Housing ltd, Mohommadpur Dhaka-1207
                                        </small>
                                    </div>
                                </li>
                                <li class="d-flex py-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fas fa-envelope color-accent"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h6 class="mb-1 text-white font-weight-normal">Email Address</h6>
                                        <small>
                                            nugortech@gmail.com
                                        </small>
                                    </div>
                                </li>
                            </ul>
                            {{-- <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
                                <li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                                <li class="list-inline-item"><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--our contact section end-->

    <!--google map start-->
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14606.664225825174!2d90.35012622648928!3d23.759285063002395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1695627840375!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--google map end-->

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