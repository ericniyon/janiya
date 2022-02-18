@extends('backend.vendor_base')

@section('title', 'Shop from store')
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
                    <li class="breadcrumb-item active">Shop</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    @livewire('vendor.store')
</div>
@endsection