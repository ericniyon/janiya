@extends('frontend.base')
@section('title')
<title>{{ $category_name }} | category</title>
@endsection

@section('content')

<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>product</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $category_name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-b-space ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                <h2> {{ $category_name }} Category </h2>
            </div>
        </div>
        <div class="row search-product">
            @if ($products_list->count() > 0)
            @foreach ($products_list as $product)

            <div class="col-xl-2 col-md-4 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="{{route('al_product_details', Crypt::encryptString($product->id))}}" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{$product->thumb()->exists()? asset(Storage::url($product->thumb->image)): asset('assets/images/2.jpg')}}&quot;); background-size: cover; background-position: center center; display: block;">
                                <img src="{{$product->thumb()->exists()? asset(Storage::url($product->thumb->image)): asset('assets/images/2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="back">
                            <a href="{{route('al_product_details',Crypt::encryptString($product->id))}}" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{$product->thumb()->exists()? asset(Storage::url($product->thumb->image)): asset('assets/images/2.jpg')}}&quot;); background-size: cover; background-position: center center; display: block;">
                                <img src="{{$product->thumb()->exists()? asset(Storage::url($product->thumb->image)): asset('assets/images/2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="cart-info cart-wrap">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="{{route('al_product_details',Crypt::encryptString($product->id))}}" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                        <a href="">
                            <h6>{{ $product->name }}</h6>
                        </a>
                        <h4>{{ $product->price }}Rwf</h4>

                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="text-center">
                <p>No product in this category yet !</p>
            </div>
            @endif

<div class="d-flex justify-content-center">
    {!! $products_list->links() !!}
</div>
        </div>
    </div>
</section>
@endsection

