@extends('frontend.base')
@section('title')
    <title>Go-Green | Shop</title>
@endsection


@push('extra-css')
    @livewireStyles
@endpush
@section('content')

    @include('frontend.includes.mobile-sidebar')





    @livewire('frontend.product-view')


    <section class="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="banner-category">
                        <div class="banner-category-head"><i class="fas fa-bars"></i><span>top categories</span></div>
                        @livewire('frontend.product-category')
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="home-grid-slider slider-dots">
                                <div class="banner-wrap bg1">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-content">
                                                <h2>we are delivered organic foods item within 24 hours.</h2><a
                                                    href="#" class="btn btn-inline"><i
                                                        class="fas fa-shopping-basket"></i><span>shop now</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-image"><img
                                                    src="{{ asset('front/images/home/index/01.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-wrap bg2">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-content">
                                                <h2>get your organic healthy foods item online today.</h2><a href="#"
                                                    class="btn btn-inline"><i class="fas fa-shopping-basket"></i><span>shop
                                                        now</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-image"><img
                                                    src="{{ asset('front/images/home/index/02.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-wrap bg3">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-content">
                                                <h2>we are delivered organic foods item within 24 hours.</h2><a
                                                    href="#" class="btn btn-inline"><i
                                                        class="fas fa-shopping-basket"></i><span>shop now</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-image"><img
                                                    src="{{ asset('front/images/home/index/03.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="banner-promo"><a href="#"><img
                                        src="{{ asset('front/images/promo/home/04.jpg') }}" alt="promo"></a></div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="banner-promo"><a href="#"><img
                                        src="{{ asset('front/images/promo/home/05.jpg') }}" alt="promo"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-truck"></i></div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section deals-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>best on shops</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown deals-clock" data-countdown="2022/12/22"><span
                            class="countdown-time"><span>00</span><small>days</small></span><span
                            class="countdown-time"><span>00</span><small>hours</small></span><span
                            class="countdown-time"><span>00</span><small>minutes</small></span><span
                            class="countdown-time"><span>00</span><small>seconds</small></span></div>
                </div>
            </div>



            @livewire('frontend.shops')




        </div>
    </section>


    <section class="section countdown-part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto">
                    <div class="countdown-content">
                        <h3>special discount offer for vegetable items</h3>
                        <p>Reprehenderit sed quod autem molestiae aut modi minus veritatis iste dolorum suscipit quis
                            voluptatum fugiat mollitia quia minima</p>
                        <div class="countdown countdown-clock" data-countdown="2022/12/22"><span
                                class="countdown-time"><span>00</span><small>days</small></span> <span
                                class="countdown-time"><span>00</span><small>hours</small></span> <span
                                class="countdown-time"><span>00</span><small>minutes</small></span> <span
                                class="countdown-time"><span>00</span><small>seconds</small></span></div><a
                            href="shop-4column.html" class="btn btn-inline"><i
                                class="fas fa-shopping-basket"></i><span>shop now</span></a>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="countdown-img"><img src="{{ asset('front/images/countdown.png') }}" alt="countdown">
                        <div class="countdown-off"><span>20%</span><span>off</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@section('scripts')
    @livewireScripts
@endsection
<!-- instagram section -->
@endsection
