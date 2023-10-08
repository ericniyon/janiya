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
   

    @livewire('frontend.shops')

<section class="intro-part"><div class="container"><div class="row intro-content"><div class="col-sm-6 col-lg-3"><div class="intro-wrap"><div class="intro-icon"><i class="fas fa-truck"></i></div><div class="intro-content"><h5>free home delivery</h5><p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p></div></div></div><div class="col-sm-6 col-lg-3"><div class="intro-wrap"><div class="intro-icon"><i class="fas fa-sync-alt"></i></div><div class="intro-content"><h5>instant return policy</h5><p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p></div></div></div><div class="col-sm-6 col-lg-3"><div class="intro-wrap"><div class="intro-icon"><i class="fas fa-headset"></i></div><div class="intro-content"><h5>quick support system</h5><p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p></div></div></div><div class="col-sm-6 col-lg-3"><div class="intro-wrap"><div class="intro-icon"><i class="fas fa-lock"></i></div><div class="intro-content"><h5>secure payment way</h5><p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p></div></div></div></div></div></section>
@endsection
@section('scripts')
    @livewireScripts
@endsection
