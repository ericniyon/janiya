@extends('layouts.auth')

@section('content')
<div class="card tab2-card">
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
            <div class="form-group">
                <input required name="location" type="text" class="form-control @error('location') is-invalid @enderror" 
                value="{{old('location')}}"  placeholder="Location">
                @error('location')
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
</div>
@endsection
