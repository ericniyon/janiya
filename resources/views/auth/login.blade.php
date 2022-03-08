@extends('layouts.auth')

@section('content')





<div class="card tab2-card">
    <div style="justify-content: center; text-align: center; margin: 1.3em 0">
        <img src="{{asset('assets/img/janiya-logo.jpg')}}" alt="" srcset="">

    </div>
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

        </form>
    </div>
</div>
@endsection
