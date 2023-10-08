@extends('frontend.base_details')
@section('title')
    <title>Go-Green</title>
@endsection
@section('content')
    <section class="single-banner inner-section" style="background: url({{ $product->cover_image }}) no-repeat center;">
        <div class="container">
            <h2>{{ $product->product_name }} </h2>
            
        </div>
    </section>





    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-gallery">
                        <div class="details-label-group"><label class="details-label new">new</label><label
                                class="details-label off">-10%</label></div>
                        <ul class="details-preview slick-initialized slick-slider">
                            <div class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 2280px;">
                                    <li class="slick-slide slick-current slick-active" data-slick-index="0"
                                        aria-hidden="false" tabindex="0"
                                        style="width: 456px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                        <img src="{{ $product->product_image }}" alt="product"></li>
                                    <li class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1"
                                        style="width: 456px; position: relative; left: -456px; top: 0px; z-index: 998; opacity: 0;">
                                        <img src="{{ $product->product_image }}" alt="product"></li>
                                    <li class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1"
                                        style="width: 456px; position: relative; left: -912px; top: 0px; z-index: 998; opacity: 0;">
                                        <img src="{{ $product->product_image }}" alt="product"></li>
                                    <li class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1"
                                        style="width: 456px; position: relative; left: -1368px; top: 0px; z-index: 998; opacity: 0;">
                                        <img src="{{ $product->product_image }}" alt="product"></li>
                                    <li class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1"
                                        style="width: 456px; position: relative; left: -1824px; top: 0px; z-index: 998; opacity: 0;">
                                        <img src="{{ $product->product_image }}" alt="product"></li>
                                </div>
                            </div>
                        </ul>
                        <ul class="details-thumb slick-initialized slick-slider">
                            <div class="slick-list draggable">
                                <div class="slick-track"
                                    style="opacity: 1; width: 1976px; transform: translate3d(-456px, 0px, 0px);">
                                    <li class="slick-slide slick-cloned" tabindex="-1" style="width: 136px;"
                                        data-slick-index="-3" aria-hidden="true"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                    <li class="slick-slide slick-cloned" tabindex="-1" style="width: 136px;"
                                        data-slick-index="-2" aria-hidden="true"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                    <li class="slick-slide slick-cloned" tabindex="-1" style="width: 136px;"
                                        data-slick-index="-1" aria-hidden="true"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                    <li class="slick-slide slick-current slick-active" tabindex="0" style="width: 136px;"
                                        data-slick-index="0" aria-hidden="false"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                    <li class="slick-slide slick-active" tabindex="0" style="width: 136px;"
                                        data-slick-index="1" aria-hidden="false"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                    <li class="slick-slide slick-active" tabindex="0" style="width: 136px;"
                                        data-slick-index="2" aria-hidden="false"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                    <li class="slick-slide" tabindex="-1" style="width: 136px;" data-slick-index="3"
                                        aria-hidden="true"><img src="{{ $product->product_image }}" alt="product"></li>
                                    <li class="slick-slide" tabindex="-1" style="width: 136px;" data-slick-index="4"
                                        aria-hidden="true"><img src="{{ $product->product_image }}" alt="product"></li>
                                    <li class="slick-slide slick-cloned" tabindex="-1" style="width: 136px;"
                                        data-slick-index="5" aria-hidden="true"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                    <li class="slick-slide slick-cloned" tabindex="-1" style="width: 136px;"
                                        data-slick-index="6" aria-hidden="true"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                    <li class="slick-slide slick-cloned" tabindex="-1" style="width: 136px;"
                                        data-slick-index="7" aria-hidden="true"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                    <li class="slick-slide slick-cloned" tabindex="-1" style="width: 136px;"
                                        data-slick-index="8" aria-hidden="true"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                    <li class="slick-slide slick-cloned" tabindex="-1" style="width: 136px;"
                                        data-slick-index="9" aria-hidden="true"><img src="{{ $product->product_image }}"
                                            alt="product"></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="product-navigation">
                        <li class="product-nav-prev"><a href="#"><i class="icofont-arrow-left"></i>prev product
                                <span class="product-nav-popup"><img src="images/product/02.jpg"
                                        alt="product"><small>green chilis</small></span></a></li>
                        <li class="product-nav-next"><a href="#">next product <i
                                    class="icofont-arrow-right"></i><span class="product-nav-popup"><img
                                        src="images/product/03.jpg" alt="product"><small>green chilis</small></span></a>
                        </li>
                    </ul>
                    <div class="details-content">
                        <h3 class="details-name"><a href="#">{{ $product->product_name }}</a></h3>
                        <div class="details-meta">
                            <p>SKU:<span>1234567</span></p>
                            <p>BRAND:<a href="#">radhuni</a></p>
                        </div>
                        
                        <h3 class="details-price"><span>{{ $product->price }}<small>/per {{ $product->unit }}</small></span></h3>
                        <p class="details-desc">{{$product->description}}
                        </p>
                        <div class="details-list-group"><label class="details-list-title">tags:</label>
                            <ul class="details-tag-list">
                                <li><a href="#">organic</a></li>
                                <li><a href="#">fruits</a></li>
                                <li><a href="#">chilis</a></li>
                            </ul>
                        </div>
                        <div class="details-list-group"><label class="details-list-title">Share:</label>
                            <ul class="details-share-list">
                                <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                            </ul>
                        </div>
                        <div class="details-add-group"><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                        <div class="details-action-group"><a class="details-wish wish" href="#"
                                title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to wish</span></a><a
                                class="details-compare" href="compare.html" title="Compare This Item"><i
                                    class="fas fa-random"></i><span>Compare This</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
