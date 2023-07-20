<div class="col">
    <div class="product-card">
        <div class="product-media">
            <div class="product-label"><label class="label-text new">new</label></div>
            <button class="product-wish wish"><i class="fas fa-heart"></i></button>
            <a class="product-image" href="{{ route('product.single',$product->slug) }}">
                <img src="{{ asset($product->profile_image)}}" alt="product">
            </a>
            <div class="product-widget">
                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
            </div>
        </div>
        <div class="product-content">
            <div class="product-rating"><i class="active icofont-star"></i><i
                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                    class="active icofont-star"></i><i class="icofont-star"></i><a
                    href="{{ route('product.single',$product->slug) }}">(3)</a></div>
            <h6 class="product-name"><a href="{{ route('product.single',$product->slug) }}">{{ $product->product_name }}</a></h6>
            <h6 class="product-price">
                @if($product->discount_price)
                <del>{{ money($product->price) }}</del>
                <span>{{ money($product->discounted_price) }} <small> /piece</small></span>
                @else
                <span>{{ money($product->price) }} <small> /piece</small></span>
                @endif
            </h6>
            <button class="product-add" title="Add to Cart"><i
                    class="fas fa-shopping-basket"></i><span>add</span></button>
            <div class="product-action">
                <button class="action-minus" title="Quantity Minus"> <i class="icofont-minus"></i></button>
                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
            </div>
        </div>
    </div>
</div>