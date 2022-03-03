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
                    <h2>our Shops</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{config('app.name')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shpos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="collection section-b-space ratio_square ">
    @livewire('front.shop-by-district')
</section>
@endsection