@extends('frontend.base')

@section('title')
<title>Failed </title>
@endsection

@section('content')

<div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Transaction failed</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transaction failed</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="error-section">
                        <h4>Transaction failed</h4>
                        <p>Please check your balance or contact administrator</p>
                        <a href="{{ route('home') }}" class="btn btn-solid">back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
