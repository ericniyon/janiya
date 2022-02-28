<form class="card-body" method="POST" wire:submit.prevent="store()">
    <div class="modal-body">
        @csrf
        <div class="form-group">
            <label for="name">Coupon Name</label>
            <input type="text" name="coupon_name" wire:model="coupon_name" value="{{old('coupon_name')}}" 
            class="form-control @error('coupon_name') is-invalid @enderror" >
            @error('coupon_name')
            <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Coupon Type</label>
            <select name="coupon_type" wire:model="coupon_type" class="form-control 
            @error('coupon_type') is-invalid @enderror">
            <option value="">Select Coupon Type</option>
            <option value="Fixed">Fixed Amount Coupon</option>
            <option value="Percentage">Percentage Based Coupon</option>
            </select>
            @error('coupon_type')
            <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Coupon Value</label>
            <input type="number" name="coupon_value" wire:model="coupon_value" value="{{old('coupon_value')}}" 
            class="form-control @error('coupon_value') is-invalid @enderror" >
            @error('coupon_value')
            <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Expiration date</label>
            <input type="date" name="expiration_date" wire:model="expiration_date" value="{{old('expiration_date')}}" 
            class="form-control @error('expiration_date') is-invalid @enderror" >
            @error('expiration_date')
            <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>
