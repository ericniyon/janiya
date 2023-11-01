@extends('backend.base')
@push('extracss')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.css')}}">
@endpush
@section('title')
<title>{{isset($vendor)?'Edit '.$vendor->shop_name:'Add new shop'}}</title>
@endsection
@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Create SHOP
                        <small>{{config('app.name')}}</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Vendors</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row product-adding">
        <div class="card">
            <div class="card-body">
                @livewire('create-shop')
            </div>
        </div>
    </div>
</div>
@endsection
@push('extrajs')
<script src="{{asset('assets/js/dropzone/dropzone.js') }}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js') }}"></script>
@endpush
