<div class="row">
    <div class="col-sm-3 collection-filter">
        <!-- side-bar colleps block stat -->
        <div class="collection-filter-block">
            <!-- brand filter start -->
            <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
            <div class="collection-collapse-block open">
                <h3 class="collapse-block-title">Shops</h3>
                <div class="collection-collapse-block-content">
                    <div class="collection-brand-filter">
                        @foreach ($shops as $item)
                            
                        <div class="form-check collection-filter-checkbox">
                            <input type="radio" value="{{$item->id}}" class="form-check-input"
                             name="shop_name" 
                             wire:model="shop_name"
                             id="shop{{$item->id}}">
                            <label class="form-check-label" for="shop{{$item->id}}">{{$item->shop_name}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- color filter start here -->
            <!-- size filter start here -->
            <div class="collection-collapse-block border-0 open">
                <h3 class="collapse-block-title">Categories</h3>
                <div class="collection-collapse-block-content">
                    <div class="collection-brand-filter">
                        @foreach ($categories as $item)
                        <div class="form-check collection-filter-checkbox">
                            <input type="checkbox" value="{{$item->id}}" 
                            name="category" 
                            wire:model="category"
                            class="form-check-input"
                             id="category{{$item->id}}">
                            <label class="form-check-label" for="category{{$item->id}}">{{ucfirst($item->category_name)}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- price filter start here -->
            {{-- <div class="collection-collapse-block border-0 open">
                <h3 class="collapse-block-title">price</h3>
                <div class="collection-collapse-block-content">
                    <div class="wrapper mt-3">
                        <div class="range-slider">
                            <span class="irs js-irs-0"><span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">$0</span><span class="irs-max" style="visibility: hidden;">$1.500</span><span class="irs-from" style="visibility: visible; left: 0%;">$0</span><span class="irs-to" style="visibility: visible; left: 81.9672%;">$1.500</span><span class="irs-single" style="visibility: hidden; left: 35.6557%;">$0 - $1.500</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 1.63934%; width: 96.7213%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 0%;"></span><span class="irs-slider to" style="left: 96.7213%;"></span></span><input type="text" class="js-range-slider irs-hidden-input" value="" readonly="">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- silde-bar colleps block end here -->
        <!-- side-bar single product slider start -->
        @livewire('front.new-products')
        <!-- side-bar single product slider end -->
        <!-- side-bar banner start here -->
        <div class="collection-sidebar-banner">
            <a href="#"><img src="{{ asset('assets/images/side-banner.png')}}" class="img-fluid blur-up lazyload" alt=""></a>
        </div>
        <!-- side-bar banner end here -->
    </div>
    <div class="collection-content col">
        <div class="page-main-content">
            <div class="row">
                <div class="col-sm-12">
                    @if ($shop_name)
                    <div class="top-banner-wrapper">
                        <a href="#"><img src="{{ asset('assets/images/mega-menu/2.jpg')}}" class="img-fluid blur-up lazyloaded" alt=""></a>
                        <div class="top-banner-content small-section">
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
                    @endif
                    <div class="collection-product-wrapper">
                        <div class="product-top-filter">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-filter-content">
                                        <div class="search-count">
                                            <h5>Showing Products 1-24 of 10 Result</h5>
                                        </div>
                                        <div class="collection-view">
                                            <ul>
                                                <li><i class="fa fa-th grid-layout-view"></i></li>
                                                <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                            </ul>
                                        </div>
                                        <div class="collection-grid-view">
                                            <ul>
                                                <li><img src="{{ asset('assets/images/icon/2.png')}}" alt="" class="product-2-layout-view"></li>
                                                <li><img src="{{ asset('assets/images/icon/3.png')}}" alt="" class="product-3-layout-view"></li>
                                                <li><img src="{{ asset('assets/images/icon/4.png')}}" alt="" class="product-4-layout-view"></li>
                                                <li><img src="{{ asset('assets/images/icon/6.png')}}" alt="" class="product-6-layout-view"></li>
                                            </ul>
                                        </div>
                                        <div class="product-page-per-view">
                                            <select>
                                                <option value="High to low">24 Products Par Page
                                                </option>
                                                <option value="Low to High">50 Products Par Page
                                                </option>
                                                <option value="Low to High">100 Products Par Page
                                                </option>
                                            </select>
                                        </div>
                                        <div class="product-page-filter">
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
                        <div class="product-wrapper-grid">
                            <div class="row margin-res">
                                @forelse ($products as $store)
                                <div class="col-xl-3 col-6 col-grid-box">
                                    <div class="product-box">
                                        <div class="img-wrapper" style="height: 14rem">
                                            <div class="front">
                                                <a href="{{route('product_details'
                                                ,[$store->owner->slug,$store->product->slug])}}" class="bg-size blur-up lazyloaded" 
                                                style="background-image: url(&quot;{{ asset('assets/images/pro3/35.jpg')}}&quot;); background-size: cover; background-position: center center; display: block;"><img src="{{ asset('assets/images/pro3/35.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="{{route('product_details'
                                                ,[$store->owner->slug,$store->product->slug])}}" class="bg-size blur-up lazyloaded" 
                                                style="background-image: url(&quot;{{ asset('assets/images/pro3/36.jpg')}}&quot;); background-size: cover; background-position: center center; display: block;"><img src="{{ asset('assets/images/pro3/36.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="{{route('add.to.cart',$store->product->id)}}" title="Add to Wishlist"><i class="ti-shopping-cart" aria-hidden="true"></i></a> 
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-heart"></i></button> 
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="{{route('product_details'
                                                ,[$store->owner->slug,$store->product->slug])}}">
                                                    <h6>{{$store->product->name}}</h6>
                                                </a>
                                                {{-- <h4>$500.00</h4> --}}
                                                {{-- <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                   <div class="col-md-12 d-flex align-items-center justify-content-center">
                                       <h4 class="m-5">No products found!</h4>
                                   </div> 
                                @endforelse
                            </div>
                        </div>
                        <div class="product-pagination">
                            <div class="theme-paggination-block">
                                {{-- {{$products->link()}} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>