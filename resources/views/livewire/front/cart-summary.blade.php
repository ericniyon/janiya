<ul class="show-div shopping-cart">
    @foreach(\Cart::getContent() as $item)
    <li class="onhover-div mobile-cart">
            <div bis_skin_checked="1"><img src="../assets/images/icon/cart.png" class="img-fluid blur-up lazyloaded"
                    alt=""> <i class="ti-shopping-cart"></i></div>
            <span class="cart_qty_cls">{{ count($item) }}</span>
            <ul class="show-div shopping-cart">

                <li>
                    <div class="media" bis_skin_checked="1">
                        <a href="#"><img alt="" class="me-3"
                                src="../assets/images/fashion/product/1.jpg"></a>
                        <div class="media-body" bis_skin_checked="1">
                            <a href="#">
                                <h4>{{ $item->model->name }}</h4>
                            </a>
                            <h4><span>{{ $item->quantity }} x {{ $item->price }} Rwf</span></h4>
                        </div>
                    </div>
                    <div class="close-circle" bis_skin_checked="1"><a href="#" wire:click.prevent="removeItem({{ $item->id }})"><i class="fa fa-times"
                                aria-hidden="true"></i></a></div>
                </li>
                

            </ul>
        </li>
      
    @endforeach
    <li>
        <div class="total">
            <h5>subtotal : <span>{{\Cart::getTotal()}}</span></h5>
        </div>
    </li>
    <li>
        <div class="buttons"><a href="{{route('cart')}}" class="view-cart">view
                cart</a> <a href="#" class="checkout">checkout</a></div>
    </li>
</ul>