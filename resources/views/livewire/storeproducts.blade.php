<div class="row">
    <div class="col-sm-3 collection-filter">
        <!-- side-bar colleps block stat -->
        <div class="collection-filter-block">
            <!-- brand filter start -->
            <div class="collection-mobile-back">
                <span class="filter-back">
                    <i class="fa fa-angle-left" aria-hidden="true">
                        </i> back</span></div>
            <div class="collection-collapse-block open">
                <h3 class="collapse-block-title">Categories</h3>
                <div class="collection-collapse-block-content">
                    <ul class="collection-brand-filter">

                        @foreach (App\Models\ProductCategory::all() as $category)
                        <div class="form-check collection-filter-checkbox">
                            <a href="" >
                                <input type="radio" value="{{$category->id}}" class="form-check-input">
                            </a>
                            <a href="{{ route('categories-products',  Crypt::encryptString($category->id)) }}" {{ $category->id }} >
                                <label class="form-check-label" for="shop{{$category->id}}">
                                    {{$category->category_name}}
                            </label>
                            </a>
                        </div>
                        @endforeach

                    </ul>
                </div>
            </div>
            <!-- color filter start here -->
            <!-- size filter start here -->
            <div class="collection-collapse-block border-0 open">
                <h3 class="collapse-block-title">Shop</h3>
                <div class="collection-collapse-block-content">
                    <div class="collection-brand-filter">
                        @foreach ($shops as $shop)
                        <div class="form-check collection-filter-checkbox">
                            <a href="" >
                                <input type="radio" value="{{$shop->id}}" class="form-check-input">
                            </a>
                            <a href="{{ route('shops-products',  Crypt::encryptString($shop->id)) }}" {{ $shop->id }} >
                                <label class="form-check-label" for="shop{{$shop->id}}">
                                    {{$shop->name}}
                            </label>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="collection-content col">
        <div class="page-main-content">
            <div class="row">
                <div class="col-sm-12">

                    <div class="top-banner-wrapper">
                        <a href="#"></a>
                        <div class="top-banner-content small-section">
                            <h4>BIGGEST DEALS ON TOP BRANDS </h4>
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
                    <div class="collection-product-wrapper">
                        <div class="product-top-filter">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                </div>
                            </div>
                            <div class="row">
                                <form action="{{ route('shops.list') }}" id="form">

                                <div class="col-12">
                                    <div class="product-filter-content">
                                        <div class="search-count">
                                            <h5>Showing {{ $products->count() }} Result</h5>
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
                                            <select onchange="this.form.submit()" name="sortBy" id="sortBy">
                                                <option value="HighToLow">24 Products Par Page
                                                </option>
                                                <option value="LowToHigh">50 Products Par Page
                                                </option>
                                                {{-- <option value="Low to High">100 Products Par Page
                                                </option> --}}
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
                                        </form>

                            </div>
                        </div>
                        <div class="product-wrapper-grid">
                            <div class="row margin-res">

                                @forelse ($products as $store)
                                <div class="col-xl-3 col-6 col-grid-box">
                                    <div class="product-box">
                                        <div class="img-wrapper" style="height: 14rem">
                                            <div class="front">
                                                {{-- <a href="{{route('product.single',[$store->shop->slug,$store->slug])}}" {{asset(Storage::url($store->product->lastThumb->image))}} {{asset(Storage::url($store->product->thumb->image))}} --}}
                                                    <a href="{{route('al_product_details',Crypt::encryptString($store->id))}}"
                                                    class="bg-size blur-up lazyloaded"
                                                style="background-image: url(&quot;&quot;);
                                                background-size: cover; background-position: center center; display: block;">
                                                <img src="{{asset(Storage::url($store->thumb->image))}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                {{-- <a href="{{route('product.single',[$store->shop->slug,$store->slug])}}"  --}}
                                                    <a href="{{route('al_product_details',Crypt::encryptString($store->id))}}"
                                                    class="bg-size blur-up lazyloaded"
                                                style="background-image: url(&quot;&quot;);
                                                background-size: cover; background-position: center center; display: block;">
                                                <img src="{{asset(Storage::url($store->thumb->image))}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="{{route('al_product_details', Crypt::encryptString($store->id))}}" title="Add to cart" >
                                                    <i class="ti-shopping-cart" aria-hidden="true"></i></a>

                                                <button data-toggle="modal" data-target="#addtocart" title=" Add to Wishlist"><i class="ti-heart"></i></button>

                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="text-center">

                                                {{-- <a href="{{route('product.single',[$store->shop->slug,$store->slug])}}"> --}}
                                                <h5>{{number_format($store->price)}} Rwf</h5>
                                                    <a href="{{route('al_product_details',$store->id)}}">
                                                    <h6>{{$store->name}}</h6>
                                                </a>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
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


