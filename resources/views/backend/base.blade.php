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
    <!-- Datatables css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">

    <!-- Bootstrap css-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css')}}">
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
        @include('backend.includes.sidebar')
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

<!-- Datatable js-->
<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>

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
@livewireScripts
@stack('extrajs')
</body>
</html>
