@extends('frontend.base')
@section('title')
<title>Janiya</title>
@endsection
@section('content')
<body class="theme-color-1">
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{$product->name}}</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{config('app.name')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
 @foreach ($product as $image)
{{ $image }}
                            {{-- <div>
                                <img src="{{ asset(Storage::url($image->image))}}" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-">
                                </div> --}}
                                    @endforeach
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-slick">
                            @foreach ($product as $image)

                            {{-- <div>
                                <img src="{{ asset(Storage::url($image->image))}}" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-">
                                </div> --}}
                                    @endforeach

                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">

                                    {{-- @foreach ($product->attributes as $image)
                                    <div>
                                        <img src="{{ asset(Storage::url($image->image))}}" alt=""
                                            class="img-fluid blur-up lazyload">
                                        </div>
                                    @endforeach --}}


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">

                            <h2>{{ $product->name }}</h2>
                            <div class="rating-section">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <h6>120 ratings </h6>
                            </div>
                            @livewire('front.add-to-cart',
                                        ['product' => $product], key(Crypt::encryptString($product->id)))

                            <div class="product-count">
                                <ul>
                                    <li>
                                        <img src="../assets/images/icon/truck.png" class="img-fluid" alt="image">
                                        <span class="lang">Free shipping for orders above 2000 Rwf</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="border-product">
                                <h6 class="product-title">shipping info</h6>
                                <ul class="shipping-info">
                                    <li>100% Original Products</li>
                                    <li>Free Delivery on order above Rs. 799</li>
                                    <li>Pay on delivery is available</li>
                                    <li>Easy 30 days returns and exchanges</li>
                                </ul>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">share it</h6>
                                <div class="product-icon">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        {{-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        {{-- <li><a href="#"><i class="fa fa-rss"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts -->
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                href="#top-home" role="tab" aria-selected="true"><i
                                    class="icofont icofont-ui-home"></i>Details</a>
                            <div class="material-border"></div>
                        </li>


                        <li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab"
                                href="#top-review" role="tab" aria-selected="false"><i
                                    class="icofont icofont-contacts"></i>Write Review</a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <div class="product-tab-discription">
                                <div class="part">
                                    <p>{{$product->description}}</p>
                                </div>

                            </div>
                        </div>


                        <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                            <form class="theme-form">
                                <div class="form-row row">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <label>Rating</label>
                                            <div class="media-body ms-3">
                                                <div class="rating three-star"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Review Title</label>
                                        <input type="text" class="form-control" id="review"
                                            placeholder="Enter your Review Subjects" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Review Title</label>
                                        <textarea class="form-control" placeholder="Wrire Your Testimonial Here"
                                            id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-solid" type="submit">Submit YOur
                                            Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->


    <!-- product section start -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>related products</h2>
                </div>
            </div>
            <div class="row search-product">
                {{-- @foreach ($product->rel_products as $product)
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="{{route('al_product_details',Crypt::encryptString($product->id))}}">
                                    <img src="{{$product->thumb()->exists()? asset(Storage::url($product->thumb->image)): asset('assets/images/2.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="{{route('al_product_details',Crypt::encryptString($product->id))}}">
                                    <img src="{{$product->thumb()->exists()? asset(Storage::url($product->thumb->image)): asset('assets/images/2.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button>
                                        <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                    data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">

                            <a href="product-page(no-sidebar).html">
                                <h6>{{$product->name}}</h6>
                            </a>
                            <h4>{{ money($product->price) }}</h4>

                        </div>
                    </div>
                </div>
                @endforeach --}}

            </div>
        </div>
    </section>
    <!-- product section end -->


    <!-- added to cart notification -->
    <div class="added-notification">
        <img src="../assets/images/fashion/pro/1.jpg" class="img-fluid" alt="">
        <h3>added to cart</h3>
    </div>
    <!-- added to cart notification -->
@endsection

