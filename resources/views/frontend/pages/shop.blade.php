@extends('frontend.base')

@section('title')
    <title>Shops</title>
@endsection
@push('extra-css')
    @livewireStyles
@endpush
@section('content')
    <section class="inner-section single-banner"
        style="background: url({{ asset('front/images/single-banner.jpg') }}) no-repeat center;">
        <div class="container">
            <h2>Shops </h2>

        </div>
    </section>
    
    <section class="inner-section shop-part">
        <div class="container">
            @livewire('front.all-products')
        </div>
    </section>
@endsection
@section('scripts')
    @livewireScripts
@endsection
