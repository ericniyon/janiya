<div class="collection-product-wrapper">
    <div class="product-top-filter">
        <div class="row">
            <div class="col-12">
                <div class="popup-filter">
                    <div class="collection-view">
                        <ul>
                            <li><i class="fa fa-th grid-layout-view"></i></li>
                            <li><i class="fa fa-list-ul list-layout-view"></i></li>
                        </ul>
                    </div>
                    <div class="collection-grid-view">
                        <ul>
                            <li><img src="../assets/images/icon/2.png" alt=""
                                    class="product-2-layout-view"></li>
                            <li><img src="../assets/images/icon/3.png" alt=""
                                    class="product-3-layout-view"></li>
                            <li><img src="../assets/images/icon/4.png" alt=""
                                    class="product-4-layout-view"></li>
                            <li><img src="../assets/images/icon/6.png" alt=""
                                    class="product-6-layout-view"></li>
                        </ul>
                    </div>
                    <div class="product-page-per-view">
                        <select wire:model.lazy="perPage">
                            <option value="25">25 Products Par Page
                            </option>
                            <option value="50">50 Products Par Page
                            </option>
                            <option value="100">100 Products Par Page
                            </option>
                        </select>
                    </div>
                    <div class="product-page-filter">
                        <select wire:model.lazy="sortBy">
                            <option value="">Sort By</option>
                            <option value="name">Sort By Product Name</option>
                            <option value="created_at">Created Date</option>
                        </select>
                    </div>
                    <div class="product-page-per-view">
                        <select wire:model.lazy="sortKey">
                            <option value="ASC">Ascending Order
                            </option>
                            <option value="DESC">Descending Order
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-wrapper-grid">
        <div class="row margin-res">
            @forelse ($products as $product)
            <div class="col-xl-3 col-6 col-grid-box">
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="{{route('al_product_details',Crypt::encryptString($product->product->id))}}">
                                <img src="{{ asset(Storage::url($product->product->thumb->image))}}"
                                    class="img-fluid blur-up lazyload bg-img"
                                    alt="{{$product->name}}"></a>
                        </div>
                        <div class="back">
                            <a href="{{route('al_product_details',Crypt::encryptString($product->product->id))}}">
                                <img src="{{ asset(Storage::url($product->product->thumb->image))}}"
                                    class="img-fluid blur-up lazyload bg-img"
                                    alt="{{$product->name}}"></a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div>
                            <div class="rating"><i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i
                                    class="fa fa-star"></i></div>
                            <a href="{{route('al_product_details',Crypt::encryptString($product->product->id))}}">
                                <h6>{{$product->name}}</h6>
                            </a>
                            <p>{{$product->product->description}}</p>
                            <h4>{{money($product->product->price)}}</h4>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
    <div class="product-pagination">
        <div class="theme-paggination-block">
            <div class="row">
                {{-- pagination --}}
            </div>
        </div>
    </div>
</div>
