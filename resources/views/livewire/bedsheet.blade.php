<div class="slick-track"
                                style="opacity: 1; width: 1404px; transform: translate3d(0px, 0px, 0px);"
                                bis_skin_checked="1">
                                
                            @forelse ($bedsheets as $bedsheet)
                                <div class="slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" style="width: 234px;" bis_skin_checked="1">
                                    <div bis_skin_checked="1">
                                        <div class="product-box product-wrap product-style-3"
                                            style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                            <div class="img-wrapper" bis_skin_checked="1">
                                                <div class="front" bis_skin_checked="1">
                                                    <a href="product-page(no-sidebar).html"
                                                        class="bg-size blur-up lazyloaded"
                                                        style="background-image: url(&quot;../assets/images/marketplace/pro/43.jpg&quot;); background-size: cover; background-position: center center; display: block;"
                                                        tabindex="0" bis_skin_checked="1"><img alt=""
                                                            src="../assets/images/marketplace/pro/43.jpg"
                                                            class="img-fluid blur-up lazyload bg-img"
                                                            style="display: none;"></a>
                                                </div>
                                                <div class="cart-detail" bis_skin_checked="1"><a
                                                        href="javascript:void(0)" title="Add to Wishlist" tabindex="0"
                                                        bis_skin_checked="1"><i class="ti-heart"
                                                            aria-hidden="true"></i></a> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#quick-view"
                                                        title="Quick View" tabindex="0"><i class="ti-search"
                                                            aria-hidden="true"></i></a> <a href="compare.html"
                                                        title="Compare" tabindex="0" bis_skin_checked="1"><i
                                                            class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-info" bis_skin_checked="1">
                                                <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="0"
                                                    bis_skin_checked="1">
                                                    <h6>Virtual reality headset</h6>
                                                </a>
                                                <h4>$160.20</h4>
                                                <div class="add-btn" bis_skin_checked="1">
                                                    <a href="javascript:void(0)" class="" tabindex="0"
                                                        bis_skin_checked="1">
                                                        <i class="ti-shopping-cart"></i> add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                             <p>There is no product in this category yet !</p>   
                            @endforelse
                            </div>