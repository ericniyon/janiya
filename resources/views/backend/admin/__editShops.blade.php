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
                    <h3>Update {{ $vendor->shop_name }}
                        <small>{{ $vendor->shop_name }}</small>
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

    <form  enctype="multipart/form-data" method="POST"  action="{{route('admin.shops.update',$vendor->id)}}">
        @csrf
        
        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <label for="shop" class="col-form-label pt-0"><span>*</span> Shop/Vendor Name</label>
                    <input name="shop" value="{{ isset( $vendor) ?  $vendor->shop_name : old('shop') }}"
                        class="form-control @error('shop')
                            is-invalid @enderror"
                        id="shop" type="text">
                    @error('shop')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="name" class="col-form-label pt-0"><span>*</span> Person Of Contact</label>
                <input name="name" value="{{ isset( $vendor) ?  $vendor->name : old('name') }}"
                    class="form-control @error('name')
                                is-invalid @enderror"
                    id="name" type="text" >
                @error('name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="email" class="col-form-label pt-0"><span>*</span>Email Address</label>
                <input name="email" value="{{ isset( $vendor) ?  $vendor->email : old('email') }}"
                    class="form-control @error('email')
                                is-invalid @enderror"
                    id="email" type="email" >
                @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="brand" class="col-form-label pt-0"><span>*</span>Shop Brand</label>
                <input name.lazy="brand" value="{{ isset( $vendor) ?  $vendor->brand : old('brand') }}"
                    class="form-control @error('brand')
                                is-invalid @enderror"
                    id="brand" type="file" >
                @error('brand')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="phone" class="col-form-label pt-0"><span>*</span> Phone Number</label>
                <input name="phone" value="{{ isset( $vendor) ?  $vendor->phone : old('phone') }}"
                    class="form-control @error('phone')
                                is-invalid @enderror"
                    id="phone" type="tel" >
                @error('phone')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label class="col-form-label pt-0"><span>*</span> Shop profile/image</label>
                <input name.lazy="profile"
                    class="form-control @error('profile')
                            is-invalid @enderror" id="profile"
                    type="file">
                @error('profile')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label pt-0"><span>*</span> Shop Description</label>
                <textarea name="details" class="form-control @error('details') is-invalid @enderror" cols="30" rows="3">{{ isset( $vendor) ?  $vendor->details : old('details') }}</textarea>
                @error('details')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button class="btn btn-sm btn-primary" type="submit">Update</button>
    </form>
</div>


            </div>
        </div>
    </div>
</div>
@endsection
@push('extrajs')
@endpush
