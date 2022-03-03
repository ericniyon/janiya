@extends('backend.vendor_base')
@section('title')
<title>Shop: {{$product->name}}</title>
@endsection
@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Dashboard
                        <small>{{config('app.name')}}</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{route('vendor.dashboard')}}">
                        <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Shop</li>
                    <li class="breadcrumb-item active">{{$product->name}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Add {{$product->name}} to your store</h5>
                    </div>
                    <div class="card-body pt-0 mt-0" >
                        @livewire('vendor.single-shop',['product' => $product], key($product->id))
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
