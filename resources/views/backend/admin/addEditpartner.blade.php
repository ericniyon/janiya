@extends('backend.base')
@push('extracss')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/users/dropzone.css')}}">
@endpush
@section('title')
<title>Add Partner</title>
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
                    <li class="breadcrumb-item"><a href="{{route('admin.partners.add')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Partners</li>
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
                    action="{{isset($user)?route('admin.partners.update',$user->id):route('admin.partners.store')}}"  
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($user) 
                    @method('put')
                    @endisset
                    <div class="form-group">
                        <label for="promo_code" class="col-form-label pt-0"><span>*</span>Promo Code</label>
                        <input name="promo_code" value="{{isset($user)?$user->promo_code:old('promo_code')}}" class="form-control @error('promo_code')
                            is-invalid @enderror" id="promo_code" type="text" required="">
                        @error('promo_code')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name" class="col-form-label pt-0"><span>*</span> Full Names</label>
                            <input name="name" value="{{isset($user)?$user->name:old('name')}}" class="form-control @error('name')
                                is-invalid @enderror" id="name" type="text" required="">
                            @error('name')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" class="col-form-label pt-0"><span>*</span>Email Address</label>
                            <input name="email" value="{{isset($user)?$user->email:old('email')}}" class="form-control @error('email')
                                is-invalid @enderror" id="email" type="email" required="">
                            @error('email')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone" class="col-form-label pt-0"><span>*</span> Phone Number</label>
                            <input name="phone" value="{{isset($user)?$user->phone:old('phone')}}" class="form-control @error('phone')
                                is-invalid @enderror" id="phone" type="tel" required="">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label pt-0"> Profile Image</label>
                        <input name="profile" class="form-control @error('profile')
                            is-invalid @enderror" id="profile" type="file">
                        @error('profile')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    {{-- <div class="dropzone" id="singleFileUpload" >
                        <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                            <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                        </div>
                    </div> --}}
                    <button class="btn btn-sm btn-primary" type="submit">{{isset($user)?'Update':'Submit'}}</button>
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
