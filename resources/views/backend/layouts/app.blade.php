
<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Premium Shared, BDIX, VPS, Domain Hosting in Bangladesh - Nugortech</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes" />
    <link rel="icon" type="image/x-icon" href="{{ asset('backend') }}/img/favicon.png">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('backend') }}/fonts/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/fonts/ionicons.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/fonts/linearicons.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/fonts/open-iconic.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bootstrap-material.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/shreerang-material.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('backend') }}/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/libs/flot/flot.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/libs/morris/morris.css">

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            @include('backend.layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                @include('backend.layouts.header')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    @yield('content')
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                    @include('backend.layouts.footer')
                    <!-- [ Layout footer ] End -->

                </div>
                <!-- [ Layout content ] Start -->

            </div>
            <!-- [ Layout container ] End -->

        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper ] end -->

    @include('sweetalert::alert')
    <!-- Core scripts -->
    <script src="{{ asset('backend') }}/js/pace.js"></script>
    <script src="{{ asset('backend') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('backend') }}/libs/popper/popper.js"></script>
    <script src="{{ asset('backend') }}/js/bootstrap.js"></script>
    <script src="{{ asset('backend') }}/js/sidenav.js"></script>
    <script src="{{ asset('backend') }}/js/layout-helpers.js"></script>
    <script src="{{ asset('backend') }}/js/material-ripple.js"></script>

    <!-- Libs -->
    <script src="{{ asset('backend') }}/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('backend') }}/libs/chart-am4/core.js"></script>
    <script src="{{ asset('backend') }}/libs/chart-am4/charts.js"></script>
    <script src="{{ asset('backend') }}/libs/chart-am4/animated.js"></script>
    <script src="{{ asset('backend') }}/libs/eve/eve.js"></script>
    <script src="{{ asset('backend') }}/libs/flot/flot.js"></script>
    <script src="{{ asset('backend') }}/libs/flot/curvedLines.js"></script>
    <script src="{{ asset('backend') }}/libs/raphael/raphael.js"></script>
    <script src="{{ asset('backend') }}/libs/morris/morris.js"></script>

    <!-- Demo -->
    <script src="{{ asset('backend') }}/js/demo.js"></script><script src="assets/js/analytics.js"></script>
    <script src="{{ asset('backend') }}/js/pages/dashboards_analytics.js"></script>

    @yield('footer_script')
</body>

</html>
