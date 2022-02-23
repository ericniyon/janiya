@extends('frontend.base')

@section('title')
<title>Product Shop</title>
@endsection
@push('extra-css')
    @livewireStyles
@endpush
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>collection</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{config('app.name')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-b-space ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
            @livewire('front.shop')
        </div>
    </div>
</section>

@endsection
@section('scripts')
@livewireScripts
@endsection