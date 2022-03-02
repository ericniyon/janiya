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
                                <img src="{{asset(Storage::url($item->model->product->thumb->image))}}" 
                                width="50" height="50" class="img-responsive rounded" 
                                style="margin-right: 0.7rem!important"/>
                                <div class="row d-flex flex-column">
                                    <h4 class="">{{ $item->model->name }}</h4>
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
                                    <i class="fa fa-trash-o"></i>
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
                                <h2>{{money(\Cart::getSubTotal())}}</h2>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="row cart-buttons">
        <div class="col-6"><a href="{{route('shop')}}" class="btn btn-solid">continue shopping</a></div>
        <div class="col-6"><a href="{{route('checkout')}}" class="btn btn-solid">check out</a></div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="order-box bg-light p-4">
                @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show"
                 role="alert" id="my-alert">
                    <div>
                        <span>{{session()->get('error')}}</span>
                    </div>
                    <button type="button" class="close position-absolute pull-right btn btn-outline-none" 
                    data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                @if (session()->has('success'))
                <div class="alert alert-info alert-dismissible d-flex justify-content-between w-100 fade show"
                    role="alert" id="my-alert">
                    <span>{{session()->get('success')}}</span>
                    <button type="button" class="close position-absolute pull-right btn btn-outline-none" 
                    data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            @if (Session::has('coupon'))
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
                        <i class="fa fa-times"></i>
                    </button>
                </li>
            </ul>
            @else
            <h3>Have Coupon??</h3>
            <h4>Apply it here to get dicount on your purchase today</h4>
            <form action="" wire:submit.prevent="applyCoupon" method="POST" class="mt-3">
                @csrf
                <div class="form-group">
                    <label for="input">Enter your Coupon Code</label>
                    <input type="text" id="input" name="code" wire:model.lazy="code" value="{{old('code')}}"
                        class="form-control @error('code') is-invalid @enderror">
                        @error('code')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-solid">Apply Coupon</button>
                </div>
            </form>
            @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="order-box bg-light p-4">
                @if (session()->has('error1'))
                <div class="alert alert-danger alert-dismissible fade show"
                 role="alert" id="my-alert">
                    <span>{{session()->get('error1')}}</span>
                    <button type="button" class="close position-absolute pull-right btn btn-outline-none" 
                    data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                @if (session()->has('success1'))
                <div class="alert alert-success alert-dismissible fade show"
                 role="alert" id="my-alert">
                    <span>{{session()->get('success1')}}</span>
                    <button type="button" class="close position-absolute pull-right btn btn-outline-none" 
                    data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                @if (Cookie::has('referredBy'))
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <div>
                        <h5>You were referred By <strong>{{referencedBy()->name}}</strong></h5>
                        <h5>Your Promo Code <strong>{{referencedBy()->promo_code}}</strong></h5>
                    </div>
                    <button class="btn btn-outline-none text-danger" 
                    wire:click="removePromoCode">Cancel</button>
                </div>
                @else
                <h3>Referred by star or Social media influencer??</h3>
                <h4>Enter you PromoCode here!</h4>
                <form action="" wire:submit.prevent="addPromoCode" method="POST" class="mt-3">
                    @csrf
                    <div class="form-group">
                        <label for="input">Enter your PromoCode</label>
                        <input type="text" id="input" name="promo_code" wire:model.lazy="promo_code" value="{{old('promo_code')}}"
                         class="form-control @error('promo_code') is-invalid @enderror">
                         @error('promo_code')
                             <span class="invalid-feedback" role="alert">{{$message}}</span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-solid">Submit Your Code</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>