@extends('frontend.base')
@section('title')
<title>Checkout form</title>
@endsection
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Check-out</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check-out</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="section-b-space">
    <div class="container">
        <div class="checkout-page">
            <div class="checkout-form">
                <form action="{{route('purchase')}}" method="POST" id="orderForm">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3>
                            </div>
                            <div class="row check-out">
                                <div class="form-group col-12">
                                    <div class="field-label">Full Name</div>
                                    <input type="text" name="name" placeholder="Your Full Names"
                                    value="{{old('name',Auth::user()?Auth::user()->name:'')}}"
                                    class="@error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone Number</div>
                                    <input type="tel" name="phone" placeholder="Ex: 0780808080"
                                    value="{{old('phone',Auth::user()?Auth::user()->phone:'')}}"
                                    class="@error('phone') is-invalid @enderror">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="email" name="email" placeholder="Ex: name@domain.com"
                                    value="{{old('email',Auth::user()?Auth::user()->email:'')}}"
                                    class="@error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="address" placeholder="Kicukiro, Niboye, St Joseph"
                                    value="{{old('address',Auth::user()?Auth::user()->address1:'')}}"
                                    class="@error('address') is-invalid @enderror">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <div class="field-label">Street Address</div>
                                    <input type="text" name="street" placeholder="Ex: KK 1 Ave"
                                    value="{{old('street',Auth::user()?Auth::user()->street_name:'')}}"
                                    class="@error('street') is-invalid @enderror">
                                    @error('street')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <div class="field-label">Neighborhood</div>
                                    <input type="text" name="neighborhood" placeholder="Ex: Rugando"
                                    value="{{old('neighborhood',Auth::user()?Auth::user()->neighborhood:'')}}"
                                    class="@error('neighborhood') is-invalid @enderror">
                                    @error('neighborhood')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    <ul class="qty">
                                        @foreach (\Cart::getContent() as $item)
                                        <li>{{$item->model->name}} <strong>x</strong> {{$item->quantity}} <span>{{money($item->price*$item->quantity)}}</span></li>
                                        @endforeach
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Sub Total <span class="count">{{money(\Cart::getTotal())}}</span></li>

                                        @if (Session::has('coupon'))
                                           <li>Discount: <span class="count">{{money(getDiscount())}}</span></li>
                                        @endif
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Amount of delivery <span class="count">2000 Rwf</span></li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total Amount To Pay<span class="count">{{money(\Cart::getTotal() - getDiscount() + 2000)}}</span></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="checkout-form">
                @livewire('front.checkout-discounts')
            </div>
        </div>
    </div>
</section>
@endsection
