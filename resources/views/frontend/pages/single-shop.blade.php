@extends('frontend.base_shop')

@section('title')
    <title>{{ $vendor->shop_name }}</title>
@endsection
@section('content')
        <section class="home-classic-slider slider-arrow">
        <div class="banner-part" style="background: url({{ asset($vendor->cover_image) }}) no-repeat center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <div class="banner-content">
                            <h1>{{ $vendor->shop_name }}</h1>
                            <p>{{ $vendor->location }}</p>
                            <div class="banner-btn">
                                {{-- <a class="btn btn-inline" href="shop-4column.html"><i
                                        class="fas fa-shopping-basket"></i><span>shop now</span></a> --}}
                                        
                                        <a
                                    class="btn btn-outline" href="#"><i
                                        class="icofont-sale-discount"></i><span>get offer</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </section>
    
    


    @livewire('front.single-shop', ['vendor' => $vendor], key($vendor->id))
@endsection
