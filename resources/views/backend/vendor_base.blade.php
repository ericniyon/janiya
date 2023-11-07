<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/img/janiya-logo.jpg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/img/janiya-logo.jpg')}}" type="image/x-icon">
    @yield('title')

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fontawesome.css')}}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css')}}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css')}}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css')}}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/chartist.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/Toastr/toastr.min.css') }}">
    @livewireStyles
    @stack('extracss')
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css')}}">
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    @include('backend.includes.header')
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="/admin"><img class="blur-up lazyloaded" src="{{asset('assets/img/janiya-logo.jpg')}}" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    {{-- @auth('vendor') --}}
                    <div>
                        <img class="img-60 rounded-circle lazyloaded blur-up"
                        src="../assets/images/dashboard/man.png" alt="#">
                    </div>
                    {{-- @endauth --}}
                    <h6 class="mt-3 f-14">
                        {{-- {{Auth::guard('vendor')->user()->shop_name}} --}}
                    </h6>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="{{route('vendor.dashboard')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Shops</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('vendor.shop')}}"><i class="fa fa-circle"></i>My Shop</a></li>
                            <li><a href="{{route('vendor.store')}}"><i class="fa fa-circle"></i>Add To Store</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('vendor.orders')}}"><i class="fa fa-circle"></i>Orders</a></li>
                            <li><a href="transactions.html"><i class="fa fa-circle"></i>Invoice</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{route('vendor.coupons')}}">
                        <i data-feather="tag"></i><span>Coupons</span></a>
                    </li>
                    <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
                    <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li>
                        </ul>
                    </li>
                    {{-- @endauth --}}
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->


        <div class="page-body">



            <!-- Container-fluid starts-->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        @include('backend.includes.footer')
        <!-- footer end-->
    </div>

</div>

<!-- latest jquery-->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>

<!--chartist js-->
<script src="{{ asset('assets/js/chart/chartist/chartist.js')}}"></script>

<!--chartjs js-->
<script src="{{ asset('assets/js/chart/chartjs/chart.min.js')}}"></script>

<!-- lazyload js-->
<script src="{{ asset('assets/js/lazysizes.min.js')}}"></script>

<!--copycode js-->
<script src="{{ asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js')}}"></script>

<!--counter js-->
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js')}}"></script>

<!--peity chart js-->
<script src="{{ asset('assets/js/chart/peity-chart/peity.jquery.js')}}"></script>

<!--sparkline chart js-->
<script src="{{ asset('assets/js/chart/sparkline/sparkline.js')}}"></script>

<!--Customizer admin-->
{{-- <script src="{{ asset('assets/js/admin-customizer.js')}}"></script> --}}

<!--dashboard custom js-->
<script src="{{ asset('assets/js/dashboard/default.js')}}"></script>

<!--right sidebar js-->
<script src="{{ asset('assets/js/chat-menu.js')}}"></script>

<!--height equal js-->
<script src="{{ asset('assets/js/height-equal.js')}}"></script>

<!-- lazyload js-->
<script src="{{ asset('assets/js/lazysizes.min.js')}}"></script>

<!--script admin-->
<script src="{{ asset('assets/js/admin-script.js')}}"></script>
<script src="{{ asset('assets/Toastr/Toastr.min.js') }}" defer></script>
<script>
    window.livewire.on('alert',param=>{
        toastr[param['type']](param['message'],param['type']);
    });

    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}");
    @elseif(Session::has('warning'))
        toastr.warning("{{Session::get('warning')}}");
    @endif
</script>
@livewireScripts
@stack('extrajs')
</body>
</html>
