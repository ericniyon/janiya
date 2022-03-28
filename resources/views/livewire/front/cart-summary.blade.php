<ul class="show-div shopping-cart">
    @foreach(\Cart::getContent() as $item)
    <li>
        <div class="media">
            <div class="media-body">
                {{-- <h4>{{$item->model->name}}</h4> --}}
                {{-- <a href="#">
                </a> --}}
                <h4><span>{{$item->quantity}} x {{$item->price}} Rwf</span></h4>
            </div>
        </div>
        <div class="close-circle">
            <a wire:click.prevent="removeItem({{$item->id}})"><i class="fa fa-times"
                    aria-hidden="true"></i></a></div>
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
