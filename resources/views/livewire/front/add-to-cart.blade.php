<form action="{{route('add.to.cart',$product->id)}}" method="POST">
    @csrf
    <div class="label-section">
        <span class="badge badge-grey-color">#1 Best seller</span>
        <span class="label-text">in fashion</span>
    </div>
    <h3 class="price-detail">{{ money($product->price) }} </h3>
    <ul class="color-variant">
        @foreach ($colors as $item)
        <label for="color{{$item->id}}">
            <li class="" style="background: {{ $item->color }}">
                <input type="radio" required name="color" id="color{{$item->id}}" hidden
                value="{{ $item->color }}">
            </li></label>
        @endforeach
    </ul>
    <div id="selectSize" class="addeffect-section product-description border-product">
        <h6 class="product-title size-text">select size <span>
            <a href="" data-bs-toggle="modal"
                    data-bs-target="#sizemodal">size
                    chart</a>
                </span></h6>
        <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sheer
                            Straight Kurta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body"><img src="../assets/images/size-chart.jpg" alt=""
                            class="img-fluid blur-up lazyload"></div>
                </div>
            </div>
        </div>
        {{-- <h6 class="error-message">please select size</h6> --}}
        <div class="size-box">
            <ul>
                @foreach ($sizes as $item)
                <label for="size{{$item->id}}"><li>
                        {{ $item->size }}
                        <input type="radio" required id="size{{$item->id}}" name="size" hidden value="{{ $item->size }}">
                    </li></label>
                @endforeach
            </ul>
        </div>
        <h6 class="product-title">quantity</h6>
        <div class="qty-box">
            <div class="input-group"><span class="input-group-prepend"><button type="button"
                        class="btn quantity-left-minus" data-type="minus" data-field=""
                        wire:click.prevent="descrease" @if ($quantity==1) disabled @endif><i
                            class="ti-angle-left"></i></button> </span>
                <input type="text" name="quantity" wire:model.lazy="quantity" required
                class="form-control input-number" value="1" min="1">
                <span class="input-group-prepend"><button type="button" wire:click.prevent="increase"
                        class="btn quantity-right-plus" data-type="plus" data-field=""><i
                            class="ti-angle-right"></i></button></span>
            </div>
        </div>
    </div>
    <div class="product-buttons">
        <button type="submit" class="btn btn-solid hover-solid btn-animation ">
            <i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> add to cart</button>
        <a href="#" class="btn btn-solid">
            <i class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>wishlist</a>
    </div>
</form>

<div class="added-notification">
    <img src="../assets/images/fashion/pro/1.jpg" class="img-fluid" alt="">
    <h3>added to cart</h3>
</div>
