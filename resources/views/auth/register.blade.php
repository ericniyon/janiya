@extends('frontend.base')
@section('title')
    <title>Janiya - Registration</title>
@endsection
@section('content')


<div class="breadcrumb-section" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-sm-6" bis_skin_checked="1">
                    <div class="page-title" bis_skin_checked="1">
                        <h2>create account</h2>
                    </div>
                </div>
                <div class="col-sm-6" bis_skin_checked="1">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">create account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<section class="register-page section-b-space">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-lg-12" bis_skin_checked="1">
                    <h3>create account</h3>
                    <div class="theme-card" bis_skin_checked="1">
                        @isset($url)
                        <form method="POST" action="{{ url('/'.$url.'/register') }}" class="theme-form">
                        @else
                        <form method="POST" action="{{ route('register') }}" class="theme-form">
                        @endisset
                            @csrf
                        <form class="theme-form">
                            <div class="form-row row" bis_skin_checked="1">
                                <div class="col-md-6" bis_skin_checked="1">
                                    <label for="email">First Name</label>
                                    <input required name="name" type="name" class="form-control @error('name') is-invalid @enderror" 
                                    value="{{old('name')}}" placeholder="Full Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6" bis_skin_checked="1">
                                    <label for="review">Phone Number</label>
                                     <input required name="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" 
                                        value="{{old('phone')}}"  placeholder="Phone Number">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="col-md-6" bis_skin_checked="1">
                                    <label for="review">Shop Name</label>
                                     <input required name="shop_name" type="shop_name" class="form-control @error('shop_name') is-invalid @enderror" 
                                        value="{{old('shop_name')}}"  placeholder="Shop Name">
                                        @error('shop_name')
                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="col-md-6" bis_skin_checked="1">
                                    <label for="email">email</label>
                                    <input required name="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                    value="{{old('email')}}" placeholder="Email Address">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row row" bis_skin_checked="1">
                                
                                <div class="col-md-6" bis_skin_checked="1">
                                    <label for="review">Password</label>
                                    <input required name="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                    value="{{old('password')}}" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6" bis_skin_checked="1">
                                    <label for="review">Comfirm Password</label>
                                    <input required name="password_confirmation" type="password" required class="form-control" 
                                        placeholder="Confirm Password">
                                </div>
                                
                            </div>
                            <button type="submit"  class="btn btn-solid w-auto">create Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- <div class="card tab2-card">
    <div class="card-body px-5 py-5">
        @isset($url)
        <form method="POST" action="{{ url('/'.$url.'/register') }}" class="form-horizontal auth-form">
        @else
        <form method="POST" action="{{ route('register') }}" class="form-horizontal auth-form">
        @endisset
            @csrf
            <div class="form-group">
                <input required name="name" type="name" class="form-control @error('name') is-invalid @enderror" 
                value="{{old('name')}}" placeholder="Full Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input required name="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                value="{{old('email')}}" placeholder="Email Address">
                @error('email')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input required name="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" 
                value="{{old('phone')}}"  placeholder="Phone Number">
                @error('phone')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            @isset($url)
            <div class="form-group">
                <input required name="shop_name" type="shop_name" class="form-control @error('shop_name') is-invalid @enderror" 
                value="{{old('shop_name')}}"  placeholder="Shop Name">
                @error('shop_name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            @endisset
            <div class="form-group">
                <input required name="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                value="{{old('password')}}" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input required name="password_confirmation" type="password" required class="form-control" 
                placeholder="Confirm Password">
            </div>
            <div class="form-button">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
        </form>
    </div>
</div> --}}
@endsection
