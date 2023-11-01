<div class="row">
    <div class="col-sm-3 collection-filter">
        <!-- side-bar colleps block stat -->
        <div class="collection-filter-block">
            <!-- brand filter start -->
            <h4 class="text-gray-700 fw-bolder">FILTERS</h4>

            <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>

            <div class="collection-collapse-block open">
                <h3 class="collapse-block-title">Categories</h3>
                <div class="collection-collapse-block-content">
                    <ul class="collection-brand-filter">
                        <div class="form-check collection-filter-checkbox">
                            <a href="">
                                <input value="0,25" type="radio" name="pricefilter" id="under25" wire:model="filters.price" class="form-check-input">
                            </a>
                                <label class="form-check-label ps-2" for="under25">
                            Under $25
                        </label>
                        </div>  
                    </ul>
                </div>
            </div>
            <!-- color filter start here -->
            <!-- size filter start here -->
            <div class="collection-collapse-block border-0 open">
                <h3 class="collapse-block-title">Shop</h3>
                <div class="collection-collapse-block-content">
                    <div class="collection-brand-filter">
                        {{-- @foreach ($shops as $shop)
                        <div class="form-check collection-filter-checkbox">
                            <input type="checkbox" value="{{$shop->id}}"
                            name="category"
                            wire:model="category"
                            class="form-check-input"
                             id="category{{$shop->id}}">
                            <label class="form-check-label" for="category{{$shop->id}}">{{ $shop->name }}</label>
                        </div>
                        @endforeach --}}
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
        {{-- @livewire('front.new-products') --}}
        <!-- side-bar single product slider end -->
        <!-- side-bar banner start here -->

        <!-- side-bar banner end here -->
    </div>
    <div class="collection-content col">
        <div class="page-main-content">
            <div class="row">
                <div class="col-sm-12">
                    {{-- @if ($shop_name) --}}
                    <div class="top-banner-wrapper">
                        <a href="#"></a>
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
                    {{-- @endif --}}
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
                                            <h5>Showing  Result</h5>
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


                            </div>
                        </div>
                        <div class="product-pagination">
                            <div class="theme-paggination-block">
                                {{-- {{$products->link()}}
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
</script> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
