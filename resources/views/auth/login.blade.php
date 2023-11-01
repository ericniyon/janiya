@extends('frontend.base')
@section('title')
    <title>Jania - Login</title>
@endsection
@section('content')

<div class="breadcrumb-section" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-sm-6" bis_skin_checked="1">
                    <div class="page-title" bis_skin_checked="1">
                        <h2>customer's login</h2>
                    </div>
                </div>
                <div class="col-sm-6" bis_skin_checked="1">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<section class="login-page section-b-space">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                
                <div class="col-lg-6" bis_skin_checked="1">
                    <h3>Login</h3>
                    <div class="theme-card" bis_skin_checked="1">
                        @if ($errors->any())
                        <div class="font-medium text-red-600">
                            {{ __('Whoops! Something went wrong.') }}
                        </div>
                        @endif
                    @isset($url)

                    <form class="theme-form" method="POST" action="{{ url('/'.$url.'/login') }}">
                        @else
                        <form class="theme-form" method="POST" action="{{ route('login') }}">

                    @endisset
                    @csrf
                            <div class="form-group" bis_skin_checked="1">
                                <label for="email">Email</label>
                                <input required name="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                value="{{old('email')}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="review">Password</label>
                                <input required name="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                value="{{old('password')}}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                                @enderror
                            </div><button type="submit"  class="btn btn-solid">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login" bis_skin_checked="1">
                    <h3>New Customer</h3>
                    <div class="theme-card authentication-right" bis_skin_checked="1">
                        <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                            able to order from our shop. To start shopping click register.</p><a href="#" class="btn btn-solid">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- <div class="card tab2-card">
    <div class="card-body px-5 py-5">
        <div class="card-header">
            @if ($errors->any())
            <div class="font-medium text-red-600">
                {{ __('Whoops! Something went wrong.') }}
            </div>
            @endif
        </div>

        @isset($url)
        <form method="POST" action="{{ url('/'.$url.'/login') }}" class="form-horizontal auth-form">
        @else
        <form method="POST" action="{{ route('login') }}" class="form-horizontal auth-form">
        @endisset
            @csrf
            <div class="form-group">
                <input required name="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                value="{{old('email')}}">
                @error('email')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input required name="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                value="{{old('password')}}">
                @error('password')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-terms">
                <div class="form-check mesm-2">
                    <input type="checkbox" class="form-check-input" name="remember" 
                    id="remember customControlAutosizing" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label ps-2" for="customControlAutosizing">Remember me</label>
                    <a href="#" class="btn btn-default forgot-pass">lost your password</a>
                </div>
            </div>
            <div class="form-button">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <div class="form-footer">
                <span>Or Login up with social platforms</span>
                <ul class="social">
                    <li><a class="ti-facebook" href=""></a></li>
                    <li><a class="ti-twitter" href=""></a></li>
                    <li><a class="ti-instagram" href=""></a></li>
                    <li><a class="ti-pinterest" href=""></a></li>
                </ul>
            </div>
        </form>
    </div>
</div> --}}
@endsection
