@extends('frontend.base')

@section('title')
    <title>Shops</title>
@endsection
@push('extra-css')
    @livewireStyles
@endpush
@section('content')
    <section class="inner-section single-banner"
        style="background: url({{ asset('front/images/single-banner.jpg') }}) no-repeat center;">
        <div class="container">
            <h2>Shop </h2>

        </div>
    </section>
    
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-3">
                    <div class="shop-widget-promo"><a href="#"><img src="{{ asset('front/images/promo/shop/01.jpg')}}" alt="promo"></a>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Price</h6>
                        <form>
                            <div class="shop-widget-group"><input type="text" placeholder="Min - 00"><input
                                    type="text" placeholder="Max - 5k"></div><button class="shop-widget-btn"><i
                                    class="fas fa-search"></i><span>search</span></button>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Rating</h6>
                        <form>
                            <ul class="shop-widget-list">
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="feat1"><label
                                            for="feat1"><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star active"></i></label>
                                    </div><span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="feat2"><label
                                            for="feat2"><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star"></i></label></div>
                                    <span class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="feat3"><label
                                            for="feat3"><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i></label></div><span
                                        class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="feat4"><label
                                            for="feat4"><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i></label></div><span
                                        class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="feat5"><label
                                            for="feat5"><i class="fas fa-star active"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i></label></div><span
                                        class="shop-widget-number">(59)</span>
                                </li>
                            </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                    
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Category</h6>
                        <form><input class="shop-widget-search" type="text" placeholder="Search...">
                            <ul class="shop-widget-list shop-widget-scroll">
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate1"><label
                                            for="cate1">vegetables</label></div><span
                                        class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate2"><label
                                            for="cate2">groceries</label></div><span
                                        class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate3"><label
                                            for="cate3">fruits</label></div><span
                                        class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate4"><label
                                            for="cate4">dairy farm</label></div><span
                                        class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate5"><label
                                            for="cate5">sea foods</label></div><span
                                        class="shop-widget-number">(59)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate6"><label
                                            for="cate6">diet foods</label></div><span
                                        class="shop-widget-number">(64)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate7"><label
                                            for="cate7">dry foods</label></div><span
                                        class="shop-widget-number">(77)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate8"><label
                                            for="cate8">fast foods</label></div><span
                                        class="shop-widget-number">(85)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate9"><label
                                            for="cate9">drinks</label></div><span
                                        class="shop-widget-number">(92)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate10"><label
                                            for="cate10">coffee</label></div><span
                                        class="shop-widget-number">(21)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate11"><label
                                            for="cate11">meats</label></div><span class="shop-widget-number">(14)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate12"><label
                                            for="cate12">fishes</label></div><span
                                        class="shop-widget-number">(56)</span>
                                </li>
                            </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-filter">
                                <div class="filter-show"><label class="filter-label">Show :</label><select
                                        class="form-select filter-select">
                                        <option value="1">12</option>
                                        <option value="2">24</option>
                                        <option value="3">36</option>
                                    </select></div>
                                <div class="filter-short"><label class="filter-label">Short by :</label><select
                                        class="form-select filter-select">
                                        <option selected="">default</option>
                                        <option value="3">trending</option>
                                        <option value="1">featured</option>
                                        <option value="2">recommend</option>
                                    </select></div>
                                <div class="filter-action"><a href="shop-3column.html" class="active"
                                        title="Three Column"><i class="fas fa-th"></i></a><a href="shop-2column.html"
                                        title="Two Column"><i class="fas fa-th-large"></i></a><a href="shop-1column.html"
                                        title="One Column"><i class="fas fa-th-list"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="{{ asset('front/images/product/01.jpg')}}"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity"
                                            value="1"><button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text sale">sale</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="{{ asset('front/images/product/02.jpg')}}"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity"
                                            value="1"><button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text off">-10%</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="{{ asset('front/images/product/03.jpg')}}"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity"
                                            value="1"><button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text feat">feature</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="{{ asset('front/images/product/04.jpg')}}"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity"
                                            value="1"><button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </div>
                        
                    
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="{{ asset('front/images/product/11.jpg')}}"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity"
                                            value="1"><button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text sale">sale</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="{{ asset('front/images/product/12.jpg')}}"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity"
                                            value="1"><button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text sale">sale</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="{{ asset('front/images/product/13.jpg')}}"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity"
                                            value="1"><button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text feat">feature</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="{{ asset('front/images/product/14.jpg')}}"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity"
                                            value="1"><button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text off">-10%</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="{{ asset('front/images/product/15.jpg')}}"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity"
                                            value="1"><button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-paginate">
                                <p class="page-info">Showing 12 of 60 Results</p>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fas fa-long-arrow-alt-left"></i></a></li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a class="page-link" href="#">60</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fas fa-long-arrow-alt-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    @livewireScripts
@endsection