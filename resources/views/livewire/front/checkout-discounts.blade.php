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
        @if (session()->has('coupon'))
        <ul>
            <li class="d-flex pb-1 border-bottom justify-content-between">
                <h4>Coupon Name</h4>
                <h4>Discount Amount</h4>
                <h4>Remove</h4>
            </li>
            <li class="d-flex pt-1 justify-content-between">
                <strong>{{ session()->get('coupon')['name']}}</strong>
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
            <h4>Enter PromoCode here!</h4>
            <form action="" wire:submit.prevent="addPromoCode" method="POST" class="mt-3">
                @csrf
                <div class="form-group">
                    <label for="input">Enter Promo Code</label>
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
<div class="payment-box">
    <div class="text-end">
        <button type="submit" class="btn-solid btn" onclick="document.getElementById('orderForm').submit()">Place Order</button>
    </div>
</div>
