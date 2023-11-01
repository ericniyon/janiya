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
                            <h2>{{ $product->name }}</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ config('app.name') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb End -->



        
        <section>
            <div class="collection-wrapper" bis_skin_checked="1">
                <div class="container" bis_skin_checked="1">
                    <div class="row" bis_skin_checked="1">
                        <div class="col-lg-1 col-sm-2 col-xs-12" bis_skin_checked="1">
                            <div class="row" bis_skin_checked="1">
                                <div class="col-12 p-0" bis_skin_checked="1">
                                    <div class="slider-right-nav slick-initialized slick-slider slick-vertical"
                                        bis_skin_checked="1">
                                        <div class="slick-list draggable" style="height: 306px;" bis_skin_checked="1">
                                            <div class="slick-track"
                                                style="opacity: 1; height: 1122px; transform: translate3d(0px, -306px, 0px);"
                                                bis_skin_checked="1">
                                            @foreach ($product->attributes as $image)
                                        
                                                <div class="slick-slide slick-cloned" data-slick-index="-3"
                                                    aria-hidden="true" tabindex="-1" style="width: 95px;"
                                                    bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <div style="width: 100%; display: inline-block;"
                                                            bis_skin_checked="1"><img src="{{ asset(Storage::url($image->image)) }}"
                                                                alt="" class="img-fluid blur-up lazyloaded"></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="slick-slide slick-current slick-active" data-slick-index="0"
                                                    aria-hidden="false" style="width: 95px;" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <div style="width: 100%; display: inline-block;"
                                                            bis_skin_checked="1"><img src="{{ asset(Storage::url($image->image)) }}"
                                                                alt="" class="img-fluid blur-up lazyloaded"></div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                 @endforeach
                                                
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-sm-10 col-xs-12 order-up" bis_skin_checked="1">
                            <div class="product-right-slick slick-initialized slick-slider" bis_skin_checked="1"><button
                                    class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                    style="display: block;">Previous</button>
                                <div class="slick-list draggable" bis_skin_checked="1">
                                    <div class="slick-track" style="opacity: 1; width: 1044px;" bis_skin_checked="1">
                                        @foreach ($product->attributes as $image)
                                        
                                            
                                                <div class="slick-slide slick-current slick-active" data-slick-index="{{ $image->id }}"
                                                    aria-hidden="false"
                                                    style="width: 261px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                                                    bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <div style="width: 100%; display: inline-block;" bis_skin_checked="1"><img
                                                                src="{{ asset(Storage::url($image->image)) }}" alt=""
                                                                class="img-fluid blur-up image_zoom_cls-0 lazyloaded"></div>
                                                    </div>
                                                </div>
                                        @endforeach

                                       




                                    </div>
                                </div><button class="slick-next slick-arrow" aria-label="Next" type="button"
                                    style="display: block;">Next</button>
                            </div>
                        </div>



                        <div class="col-lg-4" bis_skin_checked="1">
                            <div class="product-right product-description-box" bis_skin_checked="1">
                                <div class="product-count" bis_skin_checked="1">
                                    <ul>
                                        <li>
                                            <img src="../assets/images/fire.gif" class="img-fluid" alt="image">
                                            <span class="p-counter">37</span>
                                            <span class="lang">orders in last 24 hours</span>
                                        </li>
                                        <li>
                                            <img src="../assets/images/person.gif" class="img-fluid user_img"
                                                alt="image">
                                            <span class="p-counter">44</span>
                                            <span class="lang">active view this</span>
                                        </li>
                                    </ul>
                                </div>
                                <h2>{{ $product->name }}</h2>
                                <div class="border-product" bis_skin_checked="1">
                                    <h6 class="product-title">product details</h6>
                                    <p>{{$product->description}}</p>
                                </div>
                                <div class="single-product-tables border-product detail-section" bis_skin_checked="1">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Made by:</td>
                                                <td>Jania</td>
                                            </tr>
                                            <tr>
                                                <td>Color:</td>
                                                <td>
                                                    @forelse ($product->attributes as $color)
                                                        
                                                   <span class="capitalize" style="text-transform: capitalize">{{ $color->color}}</span>
                                                    @empty
                                                        
                                                    @endforelse
                                                </td>
                                            </tr>
                                            <tr>
                                                 <td>Material:</td>
                                                <td>....</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-product" bis_skin_checked="1">
                                    <h6 class="product-title">share it</h6>
                                    <div class="product-icon" bis_skin_checked="1">
                                        <ul class="product-social">
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" class="social-button " id="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                            </svg>
                                            </a></li>

                                            <li><a href="https://twitter.com/intent/tweet?text=={{ $product->name }}&amp;url=={{ url()->current() }}" class="social-button " id="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                                            </svg>
                                            </a></li>
                                            
                                            <li><a href="https://wa.me/?text=={{ url()->current() }}" class="social-button " id="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                                </svg>
                                            </a></li>


                                            		<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ url()->current() }}&amp;title={{ $product->name }}&amp;summary={{ $product->description }}" class="social-button " id="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                                    </svg>
                                                    </a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="border-product" bis_skin_checked="1">
                                    <h6 class="product-title">100% SECURE PAYMENT</h6>
                                    <div class="payment-card-bottom" bis_skin_checked="1">
                                        <ul>
                                            
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-phone-vibrate" viewBox="0 0 16 16">
                                                <path d="M10 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z"/>
                                                <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z"/>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
                                            <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
                                            <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
                                            </svg>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" bis_skin_checked="1">
                            @livewire('front.add-to-cart', ['product' => $product], key($product->id))
                            {{-- @livewire('front.add-to-cart', ['product' => $product], key($product->id)) --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section start -->


        <section>
            <div class="collection-wrapper">
                <div class="container">
                    @foreach ($product as $image)
                        {{-- {{ $image }} --}}
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

                                        @foreach ($product->attributes as $image)
                                        
                                            <div>
                                                <img src="{{ asset(Storage::url($image->image)) }}" alt=""
                                                    class="img-fluid blur-up lazyload">
                                            </div>
                                        @endforeach


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
                                @livewire('front.add-to-cart', ['product' => $product], key($product->id))
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
                                        <p>{{ $product->description }}</p>
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
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Enter Your name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="review">Review Title</label>
                                            <input type="text" class="form-control" id="review"
                                                placeholder="Enter your Review Subjects" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="review">Review Title</label>
                                            <textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1"
                                                rows="6"></textarea>
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
                    @foreach ($product->rel_products as $product)
                        <div class="col-xl-2 col-md-4 col-6">
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('al_product_details', Crypt::encryptString($product->id)) }}">
                                            <img src="{{ $product->thumb()->exists() ? asset(Storage::url($product->thumb->image)) : asset('assets/images/2.jpg') }}"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('al_product_details', Crypt::encryptString($product->id)) }}">
                                            <img src="{{ $product->thumb()->exists() ? asset(Storage::url($product->thumb->image)) : asset('assets/images/2.jpg') }}"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                                class="ti-shopping-cart"></i></button>
                                        <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" title="Quick View"><i class="ti-search"
                                                aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i
                                                class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">

                                    <a href="product-page(no-sidebar).html">
                                        <h6>{{ $product->name }}</h6>
                                    </a>
                                    <h4>{{ money($product->price) }}</h4>

                                </div>
                            </div>
                        </div>
                    @endforeach

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
