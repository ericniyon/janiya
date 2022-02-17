    @extends('frontend.base')

    @section('title')
    <title>Product Details</title>
    @endsection

    @section('content')
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-slick slick-initialized slick-slider">
                            <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2544px;"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 636px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/001.jpg" alt="" class="img-fluid blur-up image_zoom_cls-0 lazyloaded"></div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 636px; position: relative; left: -636px; top: 0px; z-index: 998; opacity: 0;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/002.jpg" alt="" class="img-fluid blur-up image_zoom_cls-1 lazyloaded"></div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 636px; position: relative; left: -1272px; top: 0px; z-index: 998; opacity: 0;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/003.jpg" alt="" class="img-fluid blur-up image_zoom_cls-2 lazyloaded"></div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 636px; position: relative; left: -1908px; top: 0px; z-index: 998; opacity: 0;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/004.jpg" alt="" class="img-fluid blur-up image_zoom_cls-3 lazyloaded"></div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button></div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav slick-initialized slick-slider"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2420px; transform: translate3d(-660px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/002.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/003.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/004.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/001.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/002.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/003.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/004.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div><div class="slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/001.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/002.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/003.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 220px;"><div><div style="width: 100%; display: inline-block;"><img src="../assets/images/fashion/pro/004.jpg" alt="" class="img-fluid blur-up lazyloaded"></div></div></div></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text product_data">
                        <div class="product-right">
                            <div class="product-count">
                                <ul>
                                    <li>
                                        <img src="../assets/images/fire.gif" class="img-fluid" alt="image">
                                        <span class="p-counter">37 <input type="hidden" name="" value="{{$product->id}}"></span>
                                        <span class="lang">orders in last 24 hours</span>
                                    </li>
                                    <li>
                                        <img src="../assets/images/person.gif" class="img-fluid user_img" alt="image">
                                        <span class="p-counter">44</span>
                                        <span class="lang">active view this</span>
                                    </li>
                                </ul>
                            </div>
                            <h2>{{$product->name}}</h2>
                            <div class="rating-section">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <h6>120 ratings</h6>
                            </div>
                            <div class="label-section">
                                <span class="badge badge-grey-color">#1 Best seller</span>
                                <span class="label-text">in fashion</span>
                            </div>
                            <h3 class="price-detail">$32.96 <del>$459.00</del><span>55% off</span></h3>
                            <ul class="color-variant">
                                <li class="bg-light0 active"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div id="selectSize" class="addeffect-section product-description border-product">
                                <h6 class="product-title size-text">select size <span><a href="" data-bs-toggle="modal" data-bs-target="#sizemodal">size
                                            chart</a></span></h6>
                                <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Sheer
                                                    Straight Kurta</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body"><img src="../assets/images/size-chart.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="error-message">please select size</h6>
                                <div class="size-box">
                                    <ul>
                                        <li><a href="javascript:void(0)">s</a></li>
                                        <li><a href="javascript:void(0)">m</a></li>
                                        <li><a href="javascript:void(0)">l</a></li>
                                        <li><a href="javascript:void(0)">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                        <input type="number" name="quantity" class="form-control input-number" value="1" id="quantity">
                                        <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="{{$product->id}}" id="product_id">
                            <div class="product-buttons  ">

                                <a href="{{ route('add.to.cart', $product->id) }}" id="cartEffect" class="btn btn-solid hover-solid btn-animation ">
                                <i class="fa fa-shopping-cart me-1" aria-hidden="true">
                                    </i> add to cart</a>

                                    <a href="#" class="btn btn-solid">
                                    <i class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>wishlist</a></div>
                            <div class="product-count">
                                <ul>
                                    <li>
                                        <img src="../assets/images/icon/truck.png" class="img-fluid" alt="image">
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
                            <div class="border-product">
                                <h6 class="product-title">Frequently bought together</h6>
                                <div class="bundle">
                                    <div class="bundle_img">
                                        <div class="img-box">
                                            <a href="#"><img src="../assets/images/fashion/pro/001.jpg" alt="" class="img-fluid blur-up lazyloaded"></a>
                                        </div>
                                        <span class="plus">+</span>
                                        <div class="img-box">
                                            <a href="#"><img src="../assets/images/fashion/pro/skirt.jpg" alt="" class="img-fluid blur-up lazyloaded"></a>
                                        </div>
                                        <span class="plus">+</span>
                                        <div class="img-box">
                                            <a href="#"><img src="../assets/images/fashion/pro/shoes.jpg" alt="" class="img-fluid blur-up lazyloaded"></a>
                                        </div>
                                    </div>
                                    <div class="bundle_detail">
                                        <div class="theme_checkbox">
                                            <label>this product: WOMEN PINK SHIRT <span class="price_product">$55</span>
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label>black long skirt <span class="price_product">$20</span>
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label>women heeled boots <span class="price_product " >$15</span>
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <a href="#" class="btn btn-solid btn-xs ">buy this bundle</a>
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
    <script type="text/javascript">




        $(document).ready(function(){


            $('.bambe').click(function(e){
                e.preventDefault();

                var product_id = $(this).closest('.product_data').find('.').val()
                var product_quantity = $(this).closest('.product_data').find('.quantity').val()

                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: '/add-to-cart',
                    data: {
                        'product_id': product_id,
                        'product_quantity': product_quantity
                    },
                    success: function(response){
                        alert(response.status)
                    }
                })
            })
        })


    // $(document).ready(function(){

    //     })



        // var qty = document.getElementById('qty0').value;
        // var prodt_price = document.getElementById('prod_price').value;
        // let sub = document.getElementById('subtotal').innerHTML = qty * prodt_price;
        // let total = document.getElementById('total').innerHTML = qty * prodt_price;

    </script>
    @endsection
