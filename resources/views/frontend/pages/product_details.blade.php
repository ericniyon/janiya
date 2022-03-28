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
                        <h2>{{$product->product->name}}</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{config('app.name')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$product->product->name}}</li>
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
                @foreach ($images as $image)
{{-- {{ $image }} --}}
                    <div>
                        <img src="{{ asset(Storage::url($image->image))}}" alt=""
                            class="img-fluid blur-up lazyload image_zoom_cls-">
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-slick">
                            <div>
                                <img src="{{ asset(Storage::url($product->product->images->image))}}" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-">
                            </div>
                            @foreach ($images as $image)
                            <div>
                                <img src="{{ asset(Storage::url($image->image))}}" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-">
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">

                                    @foreach ($images as $image)
                                    <div>
                                        <img src="{{ asset(Storage::url($image->image))}}" alt=""
                                            class="img-fluid blur-up lazyload">
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">

                            <h2>{{ $product->product->name }}</h2>
                            <div class="rating-section">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <h6>120 ratings </h6>
                            </div>
                            <form action="{{route('add.to.cart',$product->id)}}" method="POST" id="Add-to-cart-form">
                                @csrf
                                <div class="label-section">
                                    <span class="badge badge-grey-color">#1 Best seller</span>
                                    <span class="label-text">in {{$product->product->product_categories->name}}</span>
                                </div>
                                <h3 class="price-detail">{{ money($product->product->price) }} </h3>
                                <ul class="color-variant">
                                    @foreach ($colors as $item)
                                    <label for="color{{$item->id}}">
                                        <li class="active" style="background: {{ $item->color }}">
                                            <input type="radio" required name="color" id="color{{$loop->iteration}}" hidden
                                            value="{{ $item->color }}">
                                        </li></label>
                                    @endforeach
                                </ul>
                                <input type="hidden" value="{{$vendor->id}}" name="vendor">
                                <div id="selectSize" class="addeffect-section product-description border-product">
                                    <h6 class="product-title size-text">select size <span>
                                        <a href="" data-bs-toggle="modal"
                                                data-bs-target="#sizemodal">size
                                                chart</a>
                                            </span></h6>
                                    <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Sheer
                                                        Straight Kurta</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body"><img src="../assets/images/size-chart.jpg" alt=""
                                                        class="img-fluid blur-up lazyload"></div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <h6 class="error-message">please select size</h6> --}}
                                    <div class="size-box">
                                        <ul>
                                            @foreach ($sizes as $item)
                                            <label for="size{{$item->id}}"><li>
                                                    {{ $item->size }}
                                                    <input type="radio" required id="size{{$loop->iteration}}" name="size" hidden value="{{ $item->size }}">
                                                </li></label>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" wire:model.lazy="quantity" required
                                            class="form-control input-number" value="1" min="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <button type="submit" class="btn btn-solid hover-solid btn-animation"
                                   >
                                        <i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> add to cart</button>
                                    <a href="#" class="btn btn-solid">
                                        <i class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>wishlist</a>
                                </div>
                            </form>

                            <div class="added-notification">
                                <img src="../assets/images/fashion/pro/1.jpg" class="img-fluid" alt="">
                                <h3>added to cart</h3>
                            </div>

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
                                    <p>{{$product->product->description}}</p>
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
                                    <img src="{{$product->product->thumb()->exists()? asset(Storage::url($product->thumb->image)): asset('assets/images/2.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="{{route('al_product_details',Crypt::encryptString($product->id))}}">
                                    <img src="{{$product->product->thumb()->exists()? asset(Storage::url($product->thumb->image)): asset('assets/images/2.jpg')}}"
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
                                <h6>{{$product->product->name}}</h6>
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

