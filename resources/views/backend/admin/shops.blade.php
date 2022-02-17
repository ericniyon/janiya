@extends('backend.base')

@section('title', 'Our Vendors')
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
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Vendors</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Vendors</h5>
                    <a href="{{route('admin.shops.add')}}" class="btn btn-sm btn-primary">Add new shop</a>
                </div>
                <div class="card-body pt-0 mt-0" >
                    @livewire('admin.shops')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
