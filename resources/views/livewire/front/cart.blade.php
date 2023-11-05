<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="cart_counter">
                <div class="countdownholder">
                    Your cart will be expired in<span id="timer">05:46</span> minutes!
                </div>
                <a href="{{route('checkout')}}" class="cart_checkout btn btn-solid btn-xs">check out</a>
            </div>
        </div>
        <div class="col-sm-12 table-responsive-md">
            <table class="table cart-table">
                <thead>
                    <tr class="table-head">
                        <th scope="col">Product </th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Remove Item</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(\Cart::getContent() as $item)
                        <tr data-id="{{ $item->id }}">
                            <td data-th="Product" class="d-flex">
                                <img src="{{$item->model->thumb()->exists()? $item->model->thumb->image : asset('assets/images/2.jpg')}}"
                                width="50" height="50" class="img-responsive rounded"
                                style="margin-right: 0.7rem!important"/>
                                <div class="row d-flex flex-column">
                                    <h5 class="">{{ $item->model->name }}</h5>
                                    {{-- <span><strong>Shop:{{ $item->attributes['shop'] }}</strong></span> --}}
                                    <div class="d-flex">
                                        <strong>Color: &nbsp;&nbsp;</strong>{{ $item->attributes['color'] }},&nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong class="mr-2">Size:&nbsp;</strong> {{ $item->attributes['size'] }}
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{ $item->price }}</td>
                            <td data-th="Quantity">
                                <div class="d-flex align-items-center justify-content-around">
                                    <label for="">{{ $item->quantity }}</label>
                                    <div class="d-flex flex-column justify-content-center">
                                        <button class="btn btn-outline-none" wire:click.prevent="increase({{$item->id}})"
                                        style="font-size: 15px; height:25px;">
                                            <i class="fa fa-chevron-up"></i>
                                        </button>
                                        <button class="btn btn-outline-none" wire:click.prevent="decrease({{$item->id}})"
                                        style="font-size: 15px; height:25px;" {{$item->quantity==1?'disabled':''}}>
                                            <i class="fa fa-chevron-down"></i>
                                        </button>
                                    </div>
                                </div>
                            {{-- <button class="incriment update-cart"><i class="fa fa-plus"></i></button> --}}
                            </td>
                            <td data-th="Subtotal" class="text-center">{{ money($item->price * $item->quantity) }}</td>
                            <td class="actions" data-th="Remove Item">
                                <button class="btn btn-danger btn-sm remove-from-cart"
                                wire:click.prevent="removeItem({{$item->id}})">
                                    <i class="fa fa-trash" style="color:#fff"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="table-responsive-md">
                <table class="table cart-table ">
                    <tfoot>
                        <tr>
                            <td>total price :</td>
                            <td>
                                <h4>{{money(\Cart::getSubTotal())}}</h4>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="row cart-buttons">
        <div class="col-6"><a href="{{route('shops.list')}}" class="btn btn-solid">continue shopping</a></div>
        <div class="col-6"><a href="{{route('checkout')}}" class="btn btn-solid">check out</a></div>
    </div>
    <div class="row mt-3">
        @if (Session::has('coupon'))
        <div class="col-md-6">
            <ul>
                <li class="d-flex pb-1 border-bottom justify-content-between">
                    <h4>Coupon Name</h4>
                    <h4>Discount Amount</h4>
                    <h4>Remove</h4>
                </li>
                <li class="d-flex pt-1 justify-content-between">
                    <strong>{{Session::get('coupon')['name']}}</strong>
                    <h4>{{getDiscount()}}</h4>
                    <button class="btn btn-outline-none text-danger" wire:click="deleteCoupon()">
                        <i class="fa fa-times text-white"></i>
                    </button>
                </li>
            </ul>
        </div>
        @endif
        @if (Cookie::has('referredBy'))
        <div class="{{Session::has('coupon')?'col-md-6':'col-12'}}">
            <div class="order-box bg-light p-4">
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <div>
                        <h5>You were referred By <strong>{{referencedBy()->name}}</strong></h5>
                        <h5>Your Promo Code <strong>{{referencedBy()->promo_code}}</strong></h5>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
