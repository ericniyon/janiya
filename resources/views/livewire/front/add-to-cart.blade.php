<form>
    <h3 class="price-detail">{{number_format($product->product->price)}} Rwf </h3>
    <ul class="color-variant">
        @foreach ($colors as $item)
        <li class="bg-light0 {{$loop->first?'active':''}}" 
        style="background-color:{!!$item->color_code!!}!important"
        wire:click="setColor({{$item->id}})"
            ></li>
        @endforeach
    </ul>
    @if (session()->has('error'))
    <div class="color-variant">{{session()->get('error')}}</div>
    @endif
    <div id="selectSize"
        class="addeffect-section product-description border-product">
        <h6 class="error-message">please select size</h6>
        <div class="size-box">
            <ul>
                @foreach ($sizes as $item)
                <li><a href="!" wire:click.prevent="setSize({{$item->id}})">{{$item->size}}</a></li>
                @endforeach
            </ul>
        </div>
        <h6 class="product-title">quantity</h6>
        <div class="qty-box">
            <div class="input-group">
                <span class="input-group-prepend">
                    <button type="button" wire:click.prevent="descrease" class="btn quantity-left-minus" 
                    data-type="minus" data-field="" @if ($quantity==1) disabled @endif> <i class="ti-angle-left"></i>
                    </button> 
                </span>
                <input type="text" wire:model.lazy="quantity" name="quantity" 
                class="form-control input-number" value="1"> 
                <span class="input-group-prepend">
                    <button type="button" wire:click.prevent="increase" class="btn quantity-right-plus" 
                    data-type="plus" data-field=""> <i class="ti-angle-right"></i>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div class="product-buttons">
        <button type="submit" id="cartEffect" wire:click.prevent="AddToCart({{$color}},{{$size}},{{$quantity}})" 
            class="btn btn-solid hover-solid btn-animation ">
            <i class="fa fa-shopping-cart me-1" aria-hidden="true">
            </i> add to cart</button>
        <a href="#" class="btn btn-solid">
            <i class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>wishlist</a>
    </div>
</form>