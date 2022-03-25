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
                    <h3>EDIT SHOP
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
                <div class="digital-add needs-validation">
                    <form class="digits"
                    action="{{isset($vendor)?route('admin.shops.update',$vendor->id):route('admin.shops.store')}}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($vendor)
                    @method('put')
                    @endisset

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                        <label for="shop" class="col-form-label pt-0"><span>*</span> Shop/Vendor Name</label>
                        <input name="shop" value="{{isset($vendor)?$vendor->shop_name:old('shop')}}" class="form-control @error('shop')
                            is-invalid @enderror" id="shop" type="text" >
                        @error('shop')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="name" class="col-form-label pt-0"><span>*</span> Person Of Contact</label>
                            <input name="name" value="{{isset($vendor)?$vendor->name:old('name')}}" class="form-control @error('name')
                                is-invalid @enderror" id="name" type="text" required="">
                            @error('name')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" class="col-form-label pt-0"><span>*</span>Email Address</label>
                            <input name="email" value="{{isset($vendor)?$vendor->email:old('email')}}" class="form-control @error('email')
                                is-invalid @enderror" id="email" type="email" required="">
                            @error('email')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone" class="col-form-label pt-0"><span>*</span> Phone Number</label>
                            <input name="phone" value="{{isset($vendor)?$vendor->phone:old('phone')}}" class="form-control @error('phone')
                                is-invalid @enderror" id="phone" type="tel" required="">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                        <label class="col-form-label pt-0"> Shop logo/image</label>
                        <input name="logo" class="form-control @error('logo')
                            is-invalid @enderror" id="logo" type="file">
                        @error('logo')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label class="col-form-label pt-0"> Shop Description</label>
                        <textarea name="details" class="form-control @error('details') is-invalid @enderror"
                        cols="30" rows="3" >{{isset($vendor)?$vendor->details:old('details')}}</textarea>
                        @error('details')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    </div>

                    {{-- <div class="dropzone" id="singleFileUpload" >
                        <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                            <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                        </div>
                    </div> --}}
                    <button class="btn btn-sm btn-primary" type="submit">{{isset($vendor)?'Update':'Submit'}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('extrajs')
<script src="{{asset('assets/js/dropzone/dropzone.js') }}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js') }}"></script>
@endpush
