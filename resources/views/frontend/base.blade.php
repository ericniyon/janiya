<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="gogreen">
    <meta name="title" content="go green">
    <meta name="keywords" content="organic, food, shop, ecommerce, store, agriculture, vegetables, products, farm, grocery, natural">
    <title>Go - Green</title>
    <link rel="icon" href="i{{ asset('front/mages/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('front/fonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('front/fonts/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/fonts/fontawesome/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/vendor/venobox/venobox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/vendor/slickslider/slick.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/vendor/niceselect/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/home-standard.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/faq.css') }}" />
    @stack('extraCss')
    @livewireStyles
</head>

<body>
    <div class="backdrop"></div><a class="backtop fas fa-arrow-up" href="#"></a>
    <div class="header-top alert fade show">
        <p>20% Discount All New Customers <a href="register.html">get register</a></p><button data-bs-dismiss="alert"><i
                class="fas fa-times"></i></button>
    </div>
    

    {{-- navigation --}}
    @include('frontend.includes.nav')
    

    {{-- home --}}
    @yield('content')
    
    {{-- <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form"><input type="text"
                            placeholder="Enter Your Email Address"><button><span><i
                                    class="icofont-ui-email"></i>Subscribe</span></button></form>
                </div>
            </div>
        </div>
    </section> --}}
    
{{-- footer --}}


@include('frontend.includes.footer')

    <script src="{{ asset('front/vendor/bootstrap/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('front/vendor/bootstrap/popper.min.js')}}"></script>
    <script src="{{ asset('front/vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('front/vendor/countdown/countdown.min.js')}}"></script>
    <script src="{{ asset('front/vendor/niceselect/nice-select.min.js')}}"></script>
    <script src="{{ asset('front/vendor/slickslider/slick.min.js')}}"></script>
    <script src="{{ asset('front/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{ asset('front/js/nice-select.js')}}"></script>
    <script src="{{ asset('front/js/countdown.js')}}"></script>
    <script src="{{ asset('front/js/accordion.js')}}"></script>
    <script src="{{ asset('front/js/venobox.js')}}"></script>
    <script src="{{ asset('front/js/slick.js')}}"></script>
    <script src="{{ asset('front/js/main.js')}}"></script>
    @livewireScripts
</body>

</html>
