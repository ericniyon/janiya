@extends('frontend.base')

@section('title')
<title>Shops</title>
@endsection
@push('extra-css')
    @livewireStyles
@endpush
@section('content')

<div class="breadcrumb-section" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-sm-6" bis_skin_checked="1">
                    <div class="page-title" bis_skin_checked="1">
                        <h2>collection</h2>
                    </div>
                </div>
                <div class="col-sm-6" bis_skin_checked="1">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">shops</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


{{-- <section class="container">
<div class="full-banner small-banner p-left">
<img src="{{ asset('assets/img/LOGOSLOG.png') }}" alt="" class="bg-img blur-up lazyload" style="width: 100%">
<div class="container">
<div class="row">
<div class="col">
<div class="banner-contain app-detail">
<h3 class="font-fraunces">huge saving</h3>
<h4>special offer</h4>
</div>
</div>
</div>
</div>
</div>
</section> --}}


<section class="section-b-space ratio_asos">
        <div class="collection-wrapper" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-3 collection-filter" bis_skin_checked="1">
                        <!-- side-bar colleps block stat -->
                        <div class="collection-filter-block" bis_skin_checked="1">
                            <!-- brand filter start -->
                            <div class="collection-mobile-back" bis_skin_checked="1"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                            <div class="collection-collapse-block open" bis_skin_checked="1">
                                <h3 class="collapse-block-title">brand</h3>
                                <div class="collection-collapse-block-content" bis_skin_checked="1">
                                    <div class="collection-brand-filter" bis_skin_checked="1">
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="zara">
                                            <label class="form-check-label" for="zara">zara</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="vera-moda">
                                            <label class="form-check-label" for="vera-moda">vera-moda</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="forever-21">
                                            <label class="form-check-label" for="forever-21">forever-21</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="roadster">
                                            <label class="form-check-label" for="roadster">roadster</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="only">
                                            <label class="form-check-label" for="only">only</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- color filter start here -->
                            <div class="collection-collapse-block open" bis_skin_checked="1">
                                <h3 class="collapse-block-title">colors</h3>
                                <div class="collection-collapse-block-content" bis_skin_checked="1">
                                    <div class="color-selector" bis_skin_checked="1">
                                        <ul>
                                            <li class="color-1 active"></li>
                                            <li class="color-2"></li>
                                            <li class="color-3"></li>
                                            <li class="color-4"></li>
                                            <li class="color-5"></li>
                                            <li class="color-6"></li>
                                            <li class="color-7"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- size filter start here -->
                            <div class="collection-collapse-block border-0 open" bis_skin_checked="1">
                                <h3 class="collapse-block-title">size</h3>
                                <div class="collection-collapse-block-content" bis_skin_checked="1">
                                    <div class="collection-brand-filter" bis_skin_checked="1">
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="hundred">
                                            <label class="form-check-label" for="hundred">s</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="twohundred">
                                            <label class="form-check-label" for="twohundred">m</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="threehundred">
                                            <label class="form-check-label" for="threehundred">l</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="fourhundred">
                                            <label class="form-check-label" for="fourhundred">xl</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- price filter start here -->
                            <div class="collection-collapse-block border-0 open" bis_skin_checked="1">
                                <h3 class="collapse-block-title">price</h3>
                                <div class="collection-collapse-block-content" bis_skin_checked="1">
                                    <div class="wrapper mt-3" bis_skin_checked="1">
                                        <div class="range-slider" bis_skin_checked="1">
                                            <span class="irs js-irs-0"><span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">$0</span><span class="irs-max" style="visibility: hidden;">$1.500</span><span class="irs-from" style="visibility: visible; left: 0%;">$0</span><span class="irs-to" style="visibility: visible; left: 77.8894%;">$1.500</span><span class="irs-single" style="visibility: hidden; left: 32.4121%;">$0 - $1.500</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 2.01005%; width: 95.9799%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 0%;"></span><span class="irs-slider to" style="left: 95.9799%;"></span></span><input type="text" class="js-range-slider irs-hidden-input" value="" readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here -->
                        <!-- side-bar single product slider start -->
                        <div class="theme-card" bis_skin_checked="1">
                            <h5 class="title-border">new product</h5>
                            <div class="offer-slider slide-1 slick-initialized slick-slider" bis_skin_checked="1"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button><div class="slick-list draggable" bis_skin_checked="1"><div class="slick-track" style="opacity: 1; width: 1305px; transform: translate3d(-261px, 0px, 0px);" bis_skin_checked="1"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 261px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/001.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>black White Printed Dresses</h6>
                                            </a>
                                            <h4>$32.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/4.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>Dotted Black Dresses</h6>
                                            </a>
                                            <h4>$38.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/19.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>Blue Printed Dresses</h6>
                                            </a>
                                            <h4>$36.00</h4>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 261px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="0"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/1.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="0">
                                                <h6>Green Printed Dresses</h6>
                                            </a>
                                            <h4>30.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="0"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/011.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="0">
                                                <h6>Pink Printed Dresses</h6>
                                            </a>
                                            <h4>$35.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="0"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/16.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="0">
                                                <h6>Solid Green Dresses</h6>
                                            </a>
                                            <h4>$33.00</h4>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 261px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/001.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>black White Printed Dresses</h6>
                                            </a>
                                            <h4>$32.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/4.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>Dotted Black Dresses</h6>
                                            </a>
                                            <h4>$38.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/19.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>Blue Printed Dresses</h6>
                                            </a>
                                            <h4>$36.00</h4>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 261px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/1.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>Green Printed Dresses</h6>
                                            </a>
                                            <h4>30.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/011.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>Pink Printed Dresses</h6>
                                            </a>
                                            <h4>$35.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/16.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>Solid Green Dresses</h6>
                                            </a>
                                            <h4>$33.00</h4>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 261px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/001.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>black White Printed Dresses</h6>
                                            </a>
                                            <h4>$32.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/4.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>Dotted Black Dresses</h6>
                                            </a>
                                            <h4>$38.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/19.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1">
                                                <h6>Blue Printed Dresses</h6>
                                            </a>
                                            <h4>$36.00</h4>
                                        </div>
                                    </div>
                                </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button></div>
                        </div>
                        <!-- side-bar single product slider end -->
                        <!-- side-bar banner start here -->
                        <div class="collection-sidebar-banner" bis_skin_checked="1">
                            <a href="#"><img src="../assets/images/side-banner.png" class="img-fluid blur-up lazyloaded" alt=""></a>
                        </div>
                        <!-- side-bar banner end here -->
                    </div>
                    <div class="collection-content col" bis_skin_checked="1">
                        <div class="page-main-content" bis_skin_checked="1">
                            <div class="row" bis_skin_checked="1">
                                <div class="col-sm-12" bis_skin_checked="1">
                                    <div class="top-banner-wrapper" bis_skin_checked="1">
                                        <a href="#"><img src="{{ asset('assets/img/LOGOSLOG.png') }}" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="top-banner-content small-section" bis_skin_checked="1">
                                            <h4>BIGGEST DEALS ON TOP BRANDS</h4>
                                            <p>The trick to choosing the best wear for yourself is to keep in mind your
                                                body type, individual style, occasion and also the time of day or
                                                weather.
                                                In addition to eye-catching products from top brands, we also offer an
                                                easy 30-day return and exchange policy, free and fast shipping across
                                                all pin codes, cash or card on delivery option, deals and discounts,
                                                among other perks. So, sign up now and shop for westarn wear to your
                                                heart’s content on Multikart. </p>
                                        </div>
                                    </div>
                                    <div class="collection-product-wrapper" bis_skin_checked="1">
                                        <div class="product-top-filter" bis_skin_checked="1">
                                            <div class="row" bis_skin_checked="1">
                                                <div class="col-xl-12" bis_skin_checked="1">
                                                    <div class="filter-main-btn" bis_skin_checked="1"><span class="filter-btn btn btn-theme"><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                                </div>
                                            </div>
                                            <div class="row" bis_skin_checked="1">
                                                <div class="col-12" bis_skin_checked="1">
                                                    <div class="product-filter-content" bis_skin_checked="1">
                                                        <div class="search-count" bis_skin_checked="1">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
                                                        </div>
                                                        <div class="collection-view" bis_skin_checked="1">
                                                            <ul>
                                                                <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="collection-grid-view" bis_skin_checked="1">
                                                            <ul>
                                                                <li><img src="../assets/images/icon/2.png" alt="" class="product-2-layout-view"></li>
                                                                <li><img src="../assets/images/icon/3.png" alt="" class="product-3-layout-view"></li>
                                                                <li><img src="../assets/images/icon/4.png" alt="" class="product-4-layout-view"></li>
                                                                <li><img src="../assets/images/icon/6.png" alt="" class="product-6-layout-view"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-page-per-view" bis_skin_checked="1">
                                                            <select>
                                                                <option value="High to low">24 Products Par Page
                                                                </option>
                                                                <option value="Low to High">50 Products Par Page
                                                                </option>
                                                                <option value="Low to High">100 Products Par Page
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="product-page-filter" bis_skin_checked="1">
                                                            <select>
                                                                <option value="High to low">Sorting items</option>
                                                                <option value="Low to High">50 Products</option>
                                                                <option value="Low to High">100 Products</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper-grid" bis_skin_checked="1">
                                            <div class="row margin-res" bis_skin_checked="1">
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div bis_skin_checked="1">
                                                                <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                                <a href="product-page(no-sidebar).html">
                                                                    <h6>Candy red solid tshirt</h6>
                                                                </a>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum has been the
                                                                    industry's standard dummy text ever since the 1500s,
                                                                    when an unknown printer took a galley
                                                                    of type and scrambled it to make a type specimen
                                                                    book</p>
                                                                <h4>$45.00</h4>
                                                                <ul class="color-variant">
                                                                    <li class="bg-light0"></li>
                                                                    <li class="bg-light1"></li>
                                                                    <li class="bg-light2"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Purple polo tshirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$40.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Sleevless white top</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$65.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>multi color polo tshirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$65.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Purple polo tshirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$40.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Candy red solid tshirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen
                                                                book</p>
                                                            <h4>$45.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Purple polo tshirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$40.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Sleevless white top</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$65.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Purple polo tshirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$40.00</h4>

                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Sleevless white top</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$65.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>multi color polo tshirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$65.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box" bis_skin_checked="1">
                                                    <div class="product-box" bis_skin_checked="1">
                                                        <div class="img-wrapper" bis_skin_checked="1">
                                                            <div class="front" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="back" bis_skin_checked="1">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap" bis_skin_checked="1">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail" bis_skin_checked="1">
                                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Sleevless white top</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$65.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-pagination" bis_skin_checked="1">
                                            <div class="theme-paggination-block" bis_skin_checked="1">
                                                <div class="row" bis_skin_checked="1">
                                                    <div class="col-xl-6 col-md-6 col-sm-12" bis_skin_checked="1">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-sm-12" bis_skin_checked="1">
                                                        <div class="product-search-count-bottom" bis_skin_checked="1">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
@section('scripts')
<script>
    $('#sortBy').change(function() {
        var sort = $("#sortBy").val();
        window.location = "{{ url(''.$route.'') }}?sort="+sort;
    })
</script>
<script>
    function loadingData(page) {
        $.ajax({
            url: '?page='+page,
            type: 'get',
            beforeSend:function(){
                $('.ajax-load').show()
            }
        })
        .done(function(data){
            if(data.html == ''){
                $('ajax-load').html('No more products available')
                return;
            }
            $('ajax-load').hide()
            $('product-data').append(data.html)

        })
        .fail(function(){
            alert('Something went wrong')
        })
    }

    var page = 1;
    $(window).scroll(function(){
        if($(winow).scrollTop() + $(window).height()+120>=$(document).height()){
            page++;
            loadingData(page)
        }
    })
</script>
@endsection
