@extends('frontend.base')
@section('title')
<title>Go-Green</title>
@push('extraCss')
<link rel="stylesheet" href="{{ asset('front/css/product-details.css') }}">
@endpush
@endsection
@section('content')
<body class="theme-color-1">
    <section class="single-banner inner-section" style="background: url({{ asset($product->product_image)}}) no-repeat center;">
        <div class="container">
           <h2>{{$product->name}}</h2>
           <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">{{ config('app.name') }}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
              <li class="breadcrumb-item"><a href="{{ route('shop') }}">{{$product->productCategory->name}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$product->product_name}}</li>
           </ol>
        </div>
     </section>
     <section class="inner-section">
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <div class="details-gallery">
                    <ul class="details-preview">
                        <img src="" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-">
                            </div>
                        <li><img src="{{ asset($product->product_image)}}" alt="{{$product->product_name}}"></li>
                        @foreach ($product->images as $image)
                        <li><img src="{{ asset($image->image)}}" alt="{{$product->product_name}}"></li>
                        @endforeach
                    </ul>
                    <ul class="details-thumb">
                       <li><img src="{{ asset($product->product_image)}}" alt="{{$product->product_name}}"></li>
                       @foreach ($product->images as $image)
                        <li><img src="{{ asset($image->image)}}" alt="{{$product->product_name}}"></li>
                        @endforeach
                    </ul>
                 </div>
                 <div class="col-md-6">
                    <div class="details-content">
                       <h3 class="details-name"><a href="#">{{$product->product_name}}</a></h3>
                       <div class="details-meta">
                          <p>CATEGORY:<a href="#">{{$product->productCategory->category_name}}</a></p>
                          <p>SHOP:<a href="#">{{$product->shop->shop_name}}</a></p>
                       </div>
                       <div class="details-rating">
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="icofont-star"></i>
                          <a href="#">(3 reviews)</a>
                       </div>
                       <h3 class="details-price">
                           @if($product->discounted_price != 0)<del>{{ money($product->price) }}</del>
                           <span>{{ money($product->discounted_price) }}<small>
                           @else
                           {{ money($product->price) }}
                           @endif
                              /per Item</small>
                           </span>
                        </h3>
                        <form action="{{route('add.to.cart',$product->id)}}" method="POST" class="col-md-6" id="Add-to-cart-form">
                           @csrf
                        <div class="row mb-2">
                              <div class="qty-box">
                                 <label for="" class="details-meta">Quantity</label>
                                 <input type="number" name="quantity" wire:model.lazy="quantity" required
                                 class="form-control input-number" value="1" min="1">
                             </div>
                        </div>
                        {{-- @if($product->attributes->count() > 0)
                        <div class="details-list">
                          <h6 class="details-list-title">Product Attributes:</h6>
                          <ul class="details-tag-list d-flex flex-column justify-content-start align-items-start">
                             @foreach ($product->attributes as $attribute)
                             <tr>
                              <td><input type="checkbox" wire:model="attribute.{{ $attribute->id }}" 
                                    id="{{ $attribute->id }}" 
                                    value="{{ $attribute->id }}">
                              </td>
                              <td>{{ $attribute->size }}</td>
                              <td>{{ $attribute->color }}</td>
                             </tr>
                             @endforeach
                          </ul>
                       </div>
                       @endif --}}
   
                       <div class="details-add-group">
                          <button class="btn btn-outline w-100" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                       </div>
                     </form>
                       <div class="details-action-group">
                        <div>
                           <ul class="details-share-list">
                              <li class="details-list-title">Share:</li>
                              <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                              <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                              <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                              <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                           </ul>
                        </div>
                        <a class="details-wish wish" href="#" title="Add Your Wishlist"><i class="icofont-heart"></i><span>Wishlist</span>
                        </a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="inner-section">
        <div class="container">
           <div class="row">
              <div class="col-lg-12">
                 <ul class="nav nav-tabs">
                    <li><a href="#tab-desc" class="tab-link active" data-bs-toggle="tab">descriptions</a></li>
                    <li><a href="#tab-spec" class="tab-link" data-bs-toggle="tab">Specifications</a></li>
                    <li><a href="#tab-reve" class="tab-link" data-bs-toggle="tab">reviews (2)</a></li>
                 </ul>
              </div>
           </div>
           <div class="tab-pane fade show active" id="tab-desc">
              <div class="row">
                 <div class="col-lg-6">
                    <div class="product-details-frame">
                       <div class="tab-descrip">
                          <p>{{$product->description}}</p>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="product-details-frame">
                       <div class="tab-descrip">
                          <img src="images/video.jpg" alt="video">
                          <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="tab-pane fade" id="tab-spec">
              <div class="row">
                 <div class="col-lg-12">
                    <div class="product-details-frame">
                       <table class="table table-bordered">
                        <thead>
                              <tr>
                                 <th>#</th>
                                 <th scope="col">Size</th>
                                 <th scope="col">Color</th>
                              </tr>
                        </thead>
                          <tbody>
                              @foreach ($product->attributes as $attribute)
                             <tr>
                              <td scope="row">{{ $loop->iteration }}</td>
                              <td>{{ $attribute->size }}</td>
                              <td>{{ $attribute->color }}</td>
                             </tr>
                             @endforeach
                          </tbody>
                       </table>
                    </div>
                 </div>
              </div>
           </div>
           <div class="tab-pane fade" id="tab-reve">
              <div class="row">
                 <div class="col-lg-12">
                    <div class="product-details-frame">
                       <ul class="review-list">
                          <li class="review-item">
                             <div class="review-media">
                                <a class="review-avatar" href="#"><img src="images/avatar/01.jpg" alt="review"></a>
                                <h5 class="review-meta"><a href="#">miron mahmud</a><span>June 02, 2020</span></h5>
                             </div>
                             <ul class="review-rating">
                                <li class="icofont-ui-rating"></li>
                                <li class="icofont-ui-rating"></li>
                                <li class="icofont-ui-rating"></li>
                                <li class="icofont-ui-rating"></li>
                                <li class="icofont-ui-rate-blank"></li>
                             </ul>
                             <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                             <form class="review-reply"><input type="text" placeholder="reply your thoughts"><button><i class="icofont-reply"></i>reply</button></form>
                             <ul class="review-reply-list">
                                <li class="review-reply-item">
                                   <div class="review-media">
                                      <a class="review-avatar" href="#"><img src="images/avatar/02.jpg" alt="review"></a>
                                      <h5 class="review-meta"><a href="#">labonno khan</a><span><b>author -</b>June 02, 2020</span></h5>
                                   </div>
                                   <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                   <form class="review-reply"><input type="text" placeholder="reply your thoughts"><button><i class="icofont-reply"></i>reply</button></form>
                                </li>
                             </ul>
                          </li>
                          <li class="review-item">
                             <div class="review-media">
                                <a class="review-avatar" href="#"><img src="images/avatar/04.jpg" alt="review"></a>
                                <h5 class="review-meta"><a href="#">shipu shikdar</a><span>June 02, 2020</span></h5>
                             </div>
                             <ul class="review-rating">
                                <li class="icofont-ui-rating"></li>
                                <li class="icofont-ui-rating"></li>
                                <li class="icofont-ui-rating"></li>
                                <li class="icofont-ui-rating"></li>
                                <li class="icofont-ui-rate-blank"></li>
                             </ul>
                             <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                             <form class="review-reply"><input type="text" placeholder="reply your thoughts"><button><i class="icofont-reply"></i>reply</button></form>
                          </li>
                       </ul>
                    </div>
                    <div class="product-details-frame">
                       <h3 class="frame-title">add your review</h3>
                       <form class="review-form">
                          <div class="row">
                             <div class="col-lg-12">
                                <div class="star-rating"><input type="radio" name="rating" id="star-1"><label for="star-1"></label><input type="radio" name="rating" id="star-2"><label for="star-2"></label><input type="radio" name="rating" id="star-3"><label for="star-3"></label><input type="radio" name="rating" id="star-4"><label for="star-4"></label><input type="radio" name="rating" id="star-5"><label for="star-5"></label></div>
                             </div>
                             <div class="col-lg-12">
                                <div class="form-group"><textarea class="form-control" placeholder="Describe"></textarea></div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Name"></div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group"><input type="email" class="form-control" placeholder="Email"></div>
                             </div>
                             <div class="col-lg-12"><button class="btn btn-inline"><i class="icofont-water-drop"></i><span>drop your review</span></button></div>
                          </div>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="inner-section">
        <div class="container">
           <div class="row">
              <div class="col">
                 <div class="section-heading">
                    <h2>related this items</h2>
                 </div>
              </div>
           </div>
           <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            @forelse ($related as $product)
            <div class="col">
               <div class="product-card">
                  <div class="product-media">
                     <div class="product-label"><label class="label-text sale">sale</label></div>
                     <button class="product-wish wish"><i class="fas fa-heart"></i></button>
                     <a class="product-image" href="{{ route('product.single',$product->slug) }}">
                        <img src="{{ asset($product->product_image) }}" alt="{{ $product->product_name }}">
                     </a>
                     <div class="product-widget">
                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                  </div>
                  <div class="product-content">
                     <div class="product-rating">
                        <i class="active icofont-star"></i>
                        <i class="active icofont-star"></i>
                        <i class="active icofont-star"></i>
                        <i class="active icofont-star"></i>
                        <i class="icofont-star"></i>
                        <a href="{{ route('product.single',$product->slug) }}">(3)</a></div>
                     <h6 class="product-name"><a href="{{ route('product.single',$product->slug) }}">{{ $product->product_name }}</a></h6>
                     <h6 class="product-price">
                        @if($product->discounted_price != 0)<del>{{ money($product->price) }}</del>
                        <span>{{ money($product->discounted_price) }}<small>
                        @else
                        {{ money($product->price) }}
                        @endif<small>/Item</small></span></h6>
                     <button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                     <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                  </div>
               </div>
            </div>                
            @empty                
            @endforelse
           </div>
           <div class="row">
              <div class="col-lg-12">
                 <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i class="fas fa-eye"></i><span>view all related</span></a></div>
              </div>
           </div>
        </div>
     </section>
     <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-md-5 col-lg-6 col-xl-7">
                 <div class="news-text">
                    <h2>Get 20% Discount for Subscriber</h2>
                    <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                 </div>
              </div>
              <div class="col-md-7 col-lg-6 col-xl-5">
                 <form class="news-form"><input type="text" placeholder="Enter Your Email Address"><button><span><i class="icofont-ui-email"></i>Subscribe</span></button></form>
              </div>
           </div>
        </div>
     </section>
@endsection

