@extends('frontend.base')

@section('title')
<title>Product Shop</title>
@endsection
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>{{$vendor->shop_name}}</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{config('app.name')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('shops.list')}}">Shops List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$vendor->shop_name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<!-- section start -->
<section class="section-b-space ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="top-banner-wrapper">
                                    <img src="{{asset($vendor->banner?Storage::url($vendor->banner):'assets/images/mega-menu/2.jpg')}}"
                                        class="img-fluid blur-up lazyload" alt="{{$vendor->shop_name}}">
                                    <div class="top-banner-content small-section">
                                        <h4>BIGGEST DEALS ON TOP BRANDS</h4>
                                        <p>{{$vendor->details}}</p>
                                    </div>
                                </div>
                                @livewire('front.single-shop', ['vendor' => $vendor], key($vendor->id))
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection