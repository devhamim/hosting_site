
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Premium Shared, BDIX, VPS, Domain Hosting in Bangladesh - Nugortech</title>

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
    <!--header section start-->
    @include('frontend.layouts.header')
    <!--header section end-->

    <div class="main">
        @yield('content')
    </div>

    <!--footer section start-->
    @include('frontend.layouts.footer')
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <!--facebook live chat-->
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "146127888587557");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/653a133ef2439e1631e88d9d/1hdldmc35';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
    <!--End of Tawk.to Script-->
    
    
    <script src="{{ asset('frontend') }}/js/vendors/jquery-3.5.1.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
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
    <script>
        $('.inventory_id').change(function(){
            var inventory_id = $(this).val();
            var host_btn = $(this).closest('.card-header').siblings('.host-btn'); // Find the corresponding button
    
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
    
            $.ajax({
                type:'POST',
                url:'/getinventory',
                data:{'inventory_id':inventory_id},
                success:function(data){
                    host_btn.attr('href', data);
                }
            });
        });
    </script>
    @include('sweetalert::alert')
    
    @yield('footer_script')
    
</body>
</html>