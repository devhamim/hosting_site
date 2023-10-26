
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Sign UP - Modern Web Hosting & WHMCS Template</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
    <!-- endbuild -->
</head>

<body>
    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="{{ asset('frontend/img/logo/reg_logo.png') }}" alt="logo" class="img-fluid" />
            <div class="preloader">
                <i>.</i>
                <i>.</i>
                <i>.</i>
            </div>
        </div>
    </div>
    <!--preloader end-->
    <section class="page-header-section ptb-100 bg-image full-height" data-overlay="8">
        <div class="background-image-wraper" style="background: url('{{ asset('frontend') }}/img/hero-6.jpg'); opacity: 1;"></div>
        <div class="container">
            @yield('auth_content')
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="copyright-wrap small-text text-center mt-5 text-white">
                        <p class="mb-0">&copy; Nugortechit, All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="{{ asset('frontend') }}/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/bootstrap-slider.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/jquery.easing.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/countdown.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/jquery.waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/jquery.rcounterup.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/validator.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendors/hs.megamenu.js"></script>
    <script src="{{ asset('frontend') }}/js/app.js"></script>
    <!--endbuild-->
</body>


<!-- Mirrored from kohost.themetags.com/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Aug 2021 06:41:47 GMT -->
</html>