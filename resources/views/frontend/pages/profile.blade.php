@extends('frontend.base')


@section('title')
<title>{{config('app.name')}} | My Profile</title>

@endsection

@section('content')
<section class="section-b-space">
    <div class="container">
        <div class="row">
            @include('frontend.includes.sidenav')
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>My Profile</h2>
                        </div>
                        <div class="box-account box-info">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-sm-12">
                                        <form class="theme-form" action="{{route('profile.update')}}" method="POST" 
                                        enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <h3>PERSONAL DETAIL</h3>
                                            <div class="form-row row">
                                                <div class="col-md-12">
                                                    <label for="name">Full Name</label>
                                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                                     id="name" value="{{old('name',Auth::user()->name)}}"
                                                        required="">
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                        @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="review">Phone number</label>
                                                    <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                                     id="review" value="{{old('phone',Auth::user()->phone)}}"
                                                        required="">
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                        @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" disabled name="email" class="form-control @error('email') is-invalid @enderror"
                                                     id="email" placeholder="Email" value="{{old('email',Auth::user()->email)}}">
                                                     @error('email')
                                                         <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                     @enderror
                                                </div>
                                                <div class="col-md-12 d-flex flex-column mt-3">
                                                    <label for="review">Profile Picture</label>
                                                    <input type="file" name="profile" class="form-control-file @error('profile') is-invalid @enderror">
                                                    @error('profile')
                                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <h3 class="mt-3">Address Information</h3>
                                            <div class="form-row row">
                                                <div class="col-md-4">
                                                    <label for="review">Address Line</label>
                                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                                      value="{{old('address',Auth::user()->address1)}}" placeholder="Kigali, Gasabo, Gatsata"
                                                        required="">
                                                        @error('address')
                                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                        @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="neighborhood">Neighborhood</label>
                                                    <input type="text" name="neighborhood" class="form-control @error('neighborhood') is-invalid @enderror"
                                                     id="neighborhood" placeholder="Karuruma" 
                                                     value="{{old('neighborhood',Auth::user()->neighborhood)}}">
                                                     @error('neighborhood')
                                                         <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                     @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="review">Street Name</label>
                                                    <input type="text" name="street" class="form-control @error('street') is-invalid @enderror"
                                                     value="{{old('street',Auth::user()->street_name)}}" placeholder="KG 230 Street">
                                                     @error('street')
                                                         <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                     @enderror
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-8">
                                                    <button class="btn btn-sm btn-solid" type="submit">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection