@extends('frontend.base')

@section('title')
<title>Shops</title>
@endsection
@push('extra-css')
    @livewireStyles
@endpush
@section('content')


<section class="container">
<div class="full-banner small-banner p-left">
<img src="{{ asset('assets/img/kids.jpg') }}" alt="" class="bg-img blur-up lazyload">
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
</section>

<section class="section-b-space ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
          <div class="row">
    <div class="col-sm-3 collection-filter">
        <!-- side-bar colleps block stat -->
        <div class="collection-filter-block">
            <!-- brand filter start -->
            <div class="collection-mobile-back">
                <span class="filter-back">
                    <i class="fa fa-angle-left" aria-hidden="true">
                        </i> back</span></div>

            <!-- color filter start here -->
            <!-- size filter start here -->
            <div class="collection-collapse-block border-0 open">
                <h3 class="collapse-block-title">Shops</h3>
                <div class="collection-collapse-block-content">
                    <div class="collection-brand-filter">
                        @foreach ($shops as $shop)
                        <div class="form-check collection-filter-checkbox">
                            <a href="" >
                                <input type="radio" value="{{$shop->id}}" class="form-check-input">
                            </a>
                            <a href="{{ route('shops-products',  Crypt::encryptString($shop->id)) }}" {{ $shop->id }} >
                                <label class="form-check-label" for="shop{{$shop->id}}">
                                    {{$shop->shop_name}}
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
                                            <select  name="sortBy" id="sortBy">
                                                <option value="">---- Sort by price ----</option>
                                                <option value="HighToLow">Higher Price to Lower
                                                </option>
                                                <option value="LowToHigh">Lower Price To Higher
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



<div class="d-flex justify-content-center">
{!! $products->links() !!}
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
