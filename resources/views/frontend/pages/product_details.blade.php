    @extends('frontend.base')

    @section('title')
    <title>{{$product->name}}</title>
    @endsection
    @section('content')
    <!-- breadcrumb start -->
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
    <section class="section-b-space">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 collection-filter">
                        <div class="collection-filter-block">
                            <div class="product-service">
                                <div class="media">
                                    <svg>
                                        <use xlink:href="../assets/svg/icons.svg#returnable"></use>
                                    </svg>
                                    <div class="media-body">
                                        <h4>10 days returnable</h4>
                                        <p>easy returnable policies</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480"
                                        style="enable-background:new 0 0 480 480;" xml:space="preserve" width="512px"
                                        height="512px">
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M472,432h-24V280c-0.003-4.418-3.588-7.997-8.006-7.994c-2.607,0.002-5.05,1.274-6.546,3.41l-112,160     c-2.532,3.621-1.649,8.609,1.972,11.14c1.343,0.939,2.941,1.443,4.58,1.444h104v24c0,4.418,3.582,8,8,8s8-3.582,8-8v-24h24     c4.418,0,8-3.582,8-8S476.418,432,472,432z M432,432h-88.64L432,305.376V432z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M328,464h-94.712l88.056-103.688c0.2-0.238,0.387-0.486,0.56-0.744c16.566-24.518,11.048-57.713-12.56-75.552     c-28.705-20.625-68.695-14.074-89.319,14.631C212.204,309.532,207.998,322.597,208,336c0,4.418,3.582,8,8,8s8-3.582,8-8     c-0.003-26.51,21.486-48.002,47.995-48.005c10.048-0.001,19.843,3.151,28.005,9.013c16.537,12.671,20.388,36.007,8.8,53.32     l-98.896,116.496c-2.859,3.369-2.445,8.417,0.924,11.276c1.445,1.226,3.277,1.899,5.172,1.9h112c4.418,0,8-3.582,8-8     S332.418,464,328,464z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M216.176,424.152c0.167-4.415-3.278-8.129-7.693-8.296c-0.001,0-0.002,0-0.003,0     C104.11,411.982,20.341,328.363,16.28,224H48c4.418,0,8-3.582,8-8s-3.582-8-8-8H16.28C20.283,103.821,103.82,20.287,208,16.288     V40c0,4.418,3.582,8,8,8s8-3.582,8-8V16.288c102.754,3.974,185.686,85.34,191.616,188l-31.2-31.2     c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l44.656,44.656c0.841,1.018,1.925,1.807,3.152,2.296     c0.313,0.094,0.631,0.172,0.952,0.232c0.549,0.198,1.117,0.335,1.696,0.408c0.08,0,0.152,0,0.232,0c0.08,0,0.152,0,0.224,0     c0.609-0.046,1.211-0.164,1.792-0.352c0.329-0.04,0.655-0.101,0.976-0.184c1.083-0.385,2.069-1.002,2.888-1.808l45.264-45.248     c3.069-3.178,2.982-8.242-0.196-11.312c-3.1-2.994-8.015-2.994-11.116,0l-31.976,31.952     C425.933,90.37,331.38,0.281,216.568,0.112C216.368,0.104,216.2,0,216,0s-0.368,0.104-0.568,0.112     C96.582,0.275,0.275,96.582,0.112,215.432C0.112,215.632,0,215.8,0,216s0.104,0.368,0.112,0.568     c0.199,115.917,91.939,210.97,207.776,215.28h0.296C212.483,431.847,216.013,428.448,216.176,424.152z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M323.48,108.52c-3.124-3.123-8.188-3.123-11.312,0L226.2,194.48c-6.495-2.896-13.914-2.896-20.408,0l-40.704-40.704     c-3.178-3.069-8.243-2.981-11.312,0.197c-2.994,3.1-2.994,8.015,0,11.115l40.624,40.624c-5.704,11.94-0.648,26.244,11.293,31.947     c9.165,4.378,20.095,2.501,27.275-4.683c7.219-7.158,9.078-18.118,4.624-27.256l85.888-85.888     C326.603,116.708,326.603,111.644,323.48,108.52z M221.658,221.654c-0.001,0.001-0.001,0.001-0.002,0.002     c-3.164,3.025-8.148,3.025-11.312,0c-3.125-3.124-3.125-8.189-0.002-11.314c3.124-3.125,8.189-3.125,11.314-0.002     C224.781,213.464,224.781,218.53,221.658,221.654z"
                                                        fill="#ff4c3b" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="media-body">
                                        <h4>24 X 7 service</h4>
                                        <p>easy and fast services</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <svg>
                                        <use xlink:href="../assets/svg/icons.svg#warranty"></use>
                                    </svg>
                                    <div class="media-body">
                                        <h4>1 Year Warranty</h4>
                                        <p>from the date of purchase</p>
                                    </div>
                                </div>
                                <div class="media border-0 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px"
                                        height="512px">
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M498.409,175.706L336.283,13.582c-8.752-8.751-20.423-13.571-32.865-13.571c-12.441,0-24.113,4.818-32.865,13.569     L13.571,270.563C4.82,279.315,0,290.985,0,303.427c0,12.442,4.82,24.114,13.571,32.864l19.992,19.992     c0.002,0.001,0.003,0.003,0.005,0.005c0.002,0.002,0.004,0.004,0.006,0.006l134.36,134.36H149.33     c-5.89,0-10.666,4.775-10.666,10.666c0,5.89,4.776,10.666,10.666,10.666h59.189c0.014,0,0.027,0.001,0.041,0.001     s0.027-0.001,0.041-0.001l154.053,0.002c5.89,0,10.666-4.776,10.666-10.666c0-5.891-4.776-10.666-10.666-10.666l-113.464-0.002     L498.41,241.434C516.53,223.312,516.53,193.826,498.409,175.706z M483.325,226.35L226.341,483.334     c-4.713,4.712-11.013,7.31-17.742,7.32h-0.081c-6.727-0.011-13.025-2.608-17.736-7.32L56.195,348.746L302.99,101.949     c4.165-4.165,4.165-10.919,0-15.084c-4.166-4.165-10.918-4.165-15.085,0.001L41.11,333.663l-12.456-12.456     c-4.721-4.721-7.321-11.035-7.321-17.779c0-6.744,2.6-13.059,7.322-17.781L285.637,28.665c4.722-4.721,11.037-7.321,17.781-7.321     c6.744,0,13.059,2.6,17.781,7.322l57.703,57.702l-246.798,246.8c-4.165,4.164-4.165,10.918,0,15.085     c2.083,2.082,4.813,3.123,7.542,3.123c2.729,0,5.459-1.042,7.542-3.124l246.798-246.799l89.339,89.336     C493.128,200.593,493.127,216.546,483.325,226.35z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M262.801,308.064c-4.165-4.165-10.917-4.164-15.085,0l-83.934,83.933c-4.165,4.165-4.165,10.918,0,15.085     c2.083,2.083,4.813,3.124,7.542,3.124c2.729,0,5.459-1.042,7.542-3.124l83.934-83.933     C266.966,318.982,266.966,312.229,262.801,308.064z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M228.375,387.741l-34.425,34.425c-4.165,4.165-4.165,10.919,0,15.085c2.083,2.082,4.813,3.124,7.542,3.124     c2.731,0,5.459-1.042,7.542-3.124l34.425-34.425c4.165-4.165,4.165-10.919,0-15.085     C239.294,383.575,232.543,383.575,228.375,387.741z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M260.054,356.065l-4.525,4.524c-4.166,4.165-4.166,10.918-0.001,15.085c2.082,2.083,4.813,3.125,7.542,3.125     c2.729,0,5.459-1.042,7.541-3.125l4.525-4.524c4.166-4.165,4.166-10.918,0.001-15.084     C270.974,351.901,264.219,351.9,260.054,356.065z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M407.073,163.793c-2-2-4.713-3.124-7.542-3.124c-2.829,0-5.541,1.124-7.542,3.124l-45.255,45.254     c-2,2.001-3.124,4.713-3.124,7.542s1.124,5.542,3.124,7.542l30.17,30.167c2.083,2.083,4.813,3.124,7.542,3.124     c2.731,0,5.459-1.042,7.542-3.124l45.253-45.252c4.165-4.165,4.165-10.919,0-15.084L407.073,163.793z M384.445,231.673     l-15.085-15.084l30.17-30.169l15.084,15.085L384.445,231.673z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M320.339,80.186c2.731,0,5.461-1.042,7.543-3.126l4.525-4.527c4.164-4.166,4.163-10.92-0.003-15.084     c-4.165-4.164-10.92-4.163-15.084,0.003l-4.525,4.527c-4.164,4.166-4.163,10.92,0.003,15.084     C314.881,79.146,317.609,80.186,320.339,80.186z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M107.215,358.057l-4.525,4.525c-4.165,4.164-4.165,10.918,0,15.085c2.083,2.082,4.813,3.123,7.542,3.123     s5.459-1.041,7.542-3.123l4.525-4.525c4.165-4.166,4.165-10.92,0-15.085C118.133,353.891,111.381,353.891,107.215,358.057z"
                                                        fill="#ff4c3b" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="media-body">
                                        <h4>online payment</h4>
                                        <p>Contrary to popular belief.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- side-bar single product slider start -->
                        @livewire('front.new-products')
                        <!-- side-bar single product slider end -->
                    </div>
                    <div class="col-lg-9 col-sm-12">
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="filter-main-btn mb-2"><span class="filter-btn"><i class="fa fa-filter"
                                                aria-hidden="true"></i> Sidebar</span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-slick">
                                        <div>
                                            <img src="{{ asset(Storage::url($product->product->thumb->image))}}" alt=""
                                                class="img-fluid blur-up lazyload image_zoom_cls-0">
                                        </div>
                                        @foreach ($product->product->images as $image) 
                                        <div>
                                            <img src="{{ asset(Storage::url($image->image))}}" alt=""
                                                class="img-fluid blur-up lazyload image_zoom_cls-0">
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <div class="slider-nav">
                                                <div>
                                                    <img src="{{ asset(Storage::url($product->product->thumb->image))}}" alt=""
                                                        class="img-fluid blur-up lazyload">
                                                </div>
                                                @foreach ($product->product->images as $image) 
                                                <div><img src="{{ asset(Storage::url($image->image))}}" alt=""
                                                    class="img-fluid blur-up lazyload"></div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 rtl-text product_data">
                                    <div class="product-right">
                                        <div class="product-count">
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('assets/images/fire.gif')}}" class="img-fluid" alt="image">
                                                    <span class="p-counter">37 <input type="hidden" name="" value="{{$product->id}}"></span>
                                                    <span class="lang">orders in last 24 hours</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/images/person.gif')}}" class="img-fluid user_img"
                                                        alt="image">
                                                    <span class="p-counter">44</span>
                                                    <span class="lang">active view this</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2>{{$product->name}}</h2>
                                        <div class="rating-section">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <h6>120 ratings</h6>
                                        </div>
                                        <div class="label-section">
                                            <span class="badge badge-grey-color">{{$vendor->shop_name}}</span>
                                            <span class="label-text">in {{$product->product->product_categories->category_name}}</span>
                                        </div>
                                        {{-- @livewire('front.add-to-cart',
                                        ['product' => $product], key($product->id)) --}}
                                        <div class="product-count">
                                            <ul>
                                                <li>
                                                    <img src="{{asset('assets/images/icon/truck.png')}}" class="img-fluid" alt="image">
                                                    <span class="lang">Free shipping for orders above $500 USD</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="border-product">
                                            <h6 class="product-title">Sales Ends In</h6>
                                            <div class="timer">
                                                <p id="demo">EXPIRED</p>
                                            </div>
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
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="tab-product m-0">
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="top-home-tab"
                                                data-bs-toggle="tab" href="#top-home" role="tab" aria-selected="true"><i
                                                    class="icofont icofont-ui-home"></i>Details</a>
                                            <div class="material-border"></div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" id="contact-top-tab"
                                                data-bs-toggle="tab" href="#top-contact" role="tab"
                                                aria-selected="false"><i class="icofont icofont-contacts"></i>Video</a>
                                            <div class="material-border"></div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" id="review-top-tab"
                                                data-bs-toggle="tab" href="#top-review" role="tab"
                                                aria-selected="false"><i class="icofont icofont-contacts"></i>Write
                                                Review</a>
                                            <div class="material-border"></div>
                                        </li>
                                    </ul>
                                    <div class="tab-content nav-material" id="top-tabContent">
                                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                            aria-labelledby="top-home-tab">
                                            <div class="product-tab-discription">
                                                {{$product->product->description}}
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                            aria-labelledby="contact-top-tab">
                                            <div class="">
                                                <iframe width="560" height="315"
                                                    src="https://www.youtube.com/embed/BUWzX78Ye_8"
                                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="top-review" role="tabpanel"
                                            aria-labelledby="review-top-tab">
                                            <form class="theme-form">
                                                <div class="form-row row">
                                                    <div class="col-md-12">
                                                        <div class="media">
                                                            <label>Rating</label>
                                                            <div class="media-body ms-3">
                                                                <div class="rating three-star"><i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i></div>
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
                                                        <textarea class="form-control"
                                                            placeholder="Wrire Your Testimonial Here"
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
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- related products -->
    <section class="section-b-space pt-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>related products</h2>
                </div>
            </div>
            <div class="row search-product">
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="#"><img src="{{ asset('assets/images/pro3/33.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="#"><img src="{{ asset('assets/images/pro3/34.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                    data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="#"><img src="{{ asset('assets/images/pro3/1.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="#"><img src="{{ asset('assets/images/pro3/2.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                    data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="#"><img src="{{ asset('assets/images/pro3/27.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="#"><img src="{{ asset('assets/images/pro3/28.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                    data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="#"><img src="{{ asset('assets/images/pro3/35.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="#"><img src="{{ asset('assets/images/pro3/36.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                    data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="#"><img src="{{ asset('assets/images/pro3/2.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="#"><img src="{{ asset('assets/images/pro3/1.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                    data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="#"><img src="{{ asset('assets/images/pro3/28.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="#"><img src="{{ asset('assets/images/pro3/27.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                    data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
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
    </section>
    <!-- related products -->
    <!-- recently purchase product -->
    <div class="media recently-purchase">
        <img src="{{ asset('assets/images/pro3/sm.jpg')}}" alt="Floral Dress ">
        <div class="media-body">
            <div>
                <div class="title">
                    Some recently purchase this item
                </div>
                <a href="#">
                    <span class="product-name">
                        Floral Dress
                    </span>
                </a>
                <small class="timeAgo">50 minutes ago</small>
            </div>
        </div>
        <a href="javascript:void(0)" class="close-popup fa fa-times"></a>
    </div>
    <!-- recently purchase product -->

    @endsection

    @section('scripts')
    <script src="{{ asset('assets/js/timer.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
    @endsection
