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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="shop_name" class="col-form-label pt-0"><span>*</span> Shop/Vendor Name</label>
                                <input name="shop_name" 
                                    value="{{isset($vendor)?$vendor->shop_name:old('shop_name')}}" 
                                    class="form-control @error('shop_name') is-invalid @enderror" id="shop_name" type="text" >
                                @error('shop_name')
                                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="email" class="col-form-label pt-0"><span>*</span>Email Address</label>
                            <input name="email" value="{{isset($vendor)?$vendor->email:old('email')}}" class="form-control @error('email')
                                is-invalid @enderror" id="email" type="email" required="">
                            @error('email')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="phone" class="col-form-label pt-0"><span>*</span> Phone Number</label>
                            <input name="phone" value="{{isset($vendor)?$vendor->phone:old('phone')}}" class="form-control @error('phone')
                                is-invalid @enderror" id="phone" type="tel" required="">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="location" class="col-form-label pt-0"><span>*</span>Shop Address/Location</label>
                            <input name="location" 
                            value="{{isset($vendor)?$vendor->location:old('location')}}" 
                            class="form-control @error('location') is-invalid @enderror" 
                            id="location" type="text" required="">
                            @error('location')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="contact_person" class="col-form-label pt-0"><span>*</span> Person Of Contact</label>
                            <input name="contact_person" 
                                value="{{isset($vendor)?$vendor->contact_person:old('contact_person')}}" 
                                class="form-control @error('contact_person') is-invalid @enderror" 
                                id="contact_person" type="text" required
                            >
                            @error('contact_person')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="contact_person_phone" class="col-form-label pt-0"><span>*</span> Person Of Contact Phone Number</label>
                            <input name="contact_person_phone" 
                                value="{{isset($vendor)?$vendor->contact_person_phone:old('contact_person_phone')}}" 
                                class="form-control @error('contact_person_phone') is-invalid @enderror" 
                                id="contact_person_phone" type="tel"
                            >
                            @error('contact_person_phone')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="contact_person_email" class="col-form-label pt-0"><span>*</span> Person Of Contact Email</label>
                            <input name="contact_person_email" 
                                value="{{isset($vendor)?$vendor->contact_person_email:old('contact_person_email')}}" 
                                class="form-control @error('contact_person_email') is-invalid @enderror" 
                                id="contact_person_email" type="email"
                            >
                            @error('contact_person_email')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label pt-0"> Shop logo/image</label>
                            <input name="profile_image" class="form-control @error('profile_image')
                                is-invalid @enderror" id="profile_image" type="file">
                            @error('profile_image')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label pt-0"> Cover image</label>
                            <input name="cover_image" class="form-control @error('cover_image')
                                is-invalid @enderror" id="cover_image" type="file">
                            @error('cover_image')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-form-label pt-0"> Shop Description</label>
                            <textarea name="details" class="form-control @error('details') is-invalid @enderror"
                            cols="30" rows="3" >{{isset($vendor)?$vendor->details:old('details')}}</textarea>
                            @error('details')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
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
