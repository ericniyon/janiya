@extends('frontend.base')


@section('title')
<title>{{config('app.name')}} | update my password</title>

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
                                        <form class="theme-form" action="{{route('profile.password.update')}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-row row">
                                                <div class="col-md-12">
                                                    <label>Current Password</label>
                                                    <input type="password" name="current_password" class="form-control 
                                                    @error('current_password') is-invalid @enderror" required="">
                                                    @error('current_password')
                                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="review">New Password</label>
                                                    <input type="password" name="password" class="form-control 
                                                    @error('password') is-invalid @enderror"required="">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label >Confirm Password</label>
                                                    <input type="password" name="password_confirmation" class="form-control 
                                                    @error('password_confirmation') is-invalid @enderror"
                                                    >
                                                     @error('password_confirmation')
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