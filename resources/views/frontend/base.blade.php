<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="{{config('app.name')}}">
    <meta name="keywords" content="{{config('app.name')}}">
    <meta name="author" content="{{config('app.name')}}">
    <link rel="icon" href="{{asset('assets/img/janiya-logo.jpg')}}" type="image/x-icon">
    <link rel="shortcut icon" href=".{{asset('assets/img/janiya-logo.jpg')}}" type="image/x-icon">

    @yield('title')

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">


    <!--Slick slider css-->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fontawesome.css')}}">
    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css')}}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/price-range.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify-icons.css')}}">

    <!-- Theme css -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">





    @stack('extra-css')
    @livewireStyles


</head>

<body class="theme-color-1">

    <!-- header1 start -->
    <!-- header1 end -->



    <!-- header2 start -->
    @include('frontend.includes.nav')
    <!-- header2 end -->



    <!-- main section start-->
    @yield('content')
    <!-- main section end -->




    <!-- footer -->
    @include('frontend.includes.footer')
    <!-- footer end -->








    <!-- facebook chat section start -->
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src =
                'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your customer chat code -->

    <!-- facebook chat section end -->


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


   <!-- latest jquery-->
   <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>


   <script src="{{ asset('assets/js/menu.js')}}"></script>
   <!-- fly cart ui jquery-->

   <script src="{{ asset('assets/js/lazysizes.min.js')}}"></script>
   <!-- menu js-->
   <script src="{{ asset('assets/js/price-range.js')}}"></script>
   <script src="{{ asset('assets/js/slick.js')}}"></script>
   <!-- lazyload js-->

   <!-- Bootstrap js-->
   <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

   <!-- Bootstrap Notification js-->
   <script src="{{ asset('assets/js/bootstrap-notify.min.js')}}"></script>

   <!-- Fly cart js-->
   <script src="{{ asset('assets/js/fly-cart.js')}}"></script>

   <!-- Theme js-->
   <script src="{{ asset('assets/js/theme-setting.js')}}"></script>
   <script src="{{ asset('assets/js/script.js')}}"></script>




    @yield('scripts')
    @livewireScripts
    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

</body>

</html>
