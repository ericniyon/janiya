@extends('frontend.base')
@section('title')
<title>Checkout form</title>
@endsection
@section('content')
<section class="inner-section single-banner" style="background: url({{ asset('front/images/single-banner.jpg') }}) no-repeat center;">
    <div class="container">
        <h2>Shopping Cart </h2>
    </div>
</section>


<section class="section-b-space inner-section checkout-part">
    <div class="container">
        <div class="checkout-page">
            <div class="checkout-form">
                <form action="{{route('purchase')}}" method="POST" id="orderForm">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-sm-12 col-xs-12 order-md-1 mb-4">
                            <div class="checkout-title">
                                <h3>Billing Details</h3>
                            </div>
                            <div class="row check-out">
                                <div class="form-group col-12">
                                    <div class="field-label">Full Name</div>
                                    <input type="text" name="name" placeholder="Your Full Names"
                                    value="{{old('name',auth()->check()? auth()->user()->name:'')}}"
                                    class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone Number</div>
                                    <input type="tel" name="phone" placeholder="Ex: 0780808080"
                                    value="{{old('phone', auth()->user()? auth()->user()->phone:'')}}"
                                    class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="email" name="email" placeholder="Ex: name@domain.com"
                                    value="{{old('email', auth()->user()? auth()->user()->email:'')}}"
                                    class="form-control  @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="address" placeholder="Kicukiro, Niboye, St Joseph"
                                    value="{{old('address', auth()->user()? auth()->user()->address1:'')}}"
                                    class="form-control @error('address') is-invalid @enderror">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <div class="field-label">Street Address</div>
                                    <input type="text" name="street" placeholder="Ex: KK 1 Ave"
                                    value="{{old('street', auth()->user()? auth()->user()->street_name:'')}}"
                                    class="form-control @error('street') is-invalid @enderror">
                                    @error('street')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <div class="field-label">Neighborhood</div>
                                    <input type="text" name="neighborhood" placeholder="Ex: Rugando"
                                    value="{{old('neighborhood', auth()->user()? auth()->user()->neighborhood:'')}}"
                                    class="form-control @error('neighborhood') is-invalid @enderror">
                                    @error('neighborhood')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                              <span class="text-muted">Your cart</span>
                              <span class="badge badge-secondary badge-pill">{{ !\Cart::isEmpty() ? \Cart::getContent()->count() : 0 }}</span>
                            </h4>
                            <ul class="list-group mb-3">
                              @foreach(\Cart::getContent() as $item)
                              <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <h6 class="my-0">{{ $item->model->product_name }}</h6>
                                  <small class="text-muted">{{ $item->attributes['shop']['shop_name'] }}</small>
                                </div>
                                <span class="text-muted">{{ money($item->price) }}</span>
                              </li>
                              @endforeach
                              <div class="account-card p-0 m-0">
                                <div class="account-content p-0 m-0">
                                    <div class="checkout-charge p-0 m-0">
                                      <ul class="list-group">
                                          <li class="list-group-item d-flex justify-content-between">
                                            <span>Sub total</span>
                                            <span>{{money(\Cart::getTotal())}}</span>
                                        </li>
                                          @if (session()->has('coupon'))
                                          <li class="list-group-item d-flex justify-content-between">
                                            <span>Discount</span>
                                            <span>{{money(getDiscount())}}</span>
                                        </li>
                                          @endif
                                          <li class="list-group-item d-flex justify-content-between">
                                            <span>Delivery fee</span>
                                            <span>2000 Rwf</span>
                                        </li>
                                          <li class="list-group-item d-flex justify-content-between">
                                            <span>Grand Total<small>(Incl. VAT)</small></span>
                                            <span>{{money(\Cart::getTotal() - getDiscount() + 2000)}}</span>
                                        </li>
                                      </ul>
                                    </div>
                                </div>
                              </div>
                            </ul>
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
