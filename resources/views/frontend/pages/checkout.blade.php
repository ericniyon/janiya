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
                <form action="{{route('purchase')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3>
                            </div>
                            <div class="row check-out">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">First Name</div>
                                    <input type="text" name="cuastomer_first_name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Last Name</div>
                                    <input type="text" name="cuastomer_last_name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone</div>
                                    <input type="text" name="cuastomer_email" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="text" name="cuastomer_address" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <div class="field-label">Country</div>
                                    <select>
                                        <option>India</option>
                                        <option>South Africa</option>
                                        <option>United State</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="cuastomer_phone" value="" placeholder="Street address">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <div class="field-label">Town/City</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                {{-- <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <div class="field-label">State / County</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    <ul class="qty">
                                        <li>Pink Slim Shirt × 1 <span>25.10RWF</span></li>
                                        <li>SLim Fit Jeans × 1 <span>555.00RWF</span></li>
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">380.10RWF</span></li>
                                        <li>Shipping
                                            <div class="shipping">
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="free-shipping" id="free-shipping">
                                                    <label for="free-shipping">Free Shipping</label>
                                                </div>
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="local-pickup" id="local-pickup">
                                                    <label for="local-pickup">Local Pickup</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count">620.00RWF</span></li>
                                    </ul>
                                </div>
                                <div class="payment-box">

                                    <div class="text-end"><button type="submit" class="btn-solid btn">Place Order</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
