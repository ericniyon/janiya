<form action="" wire:submit.prevent="store" method="POST">
    @csrf
    <div class="modal-body">
       <div class="form-group">
           <label for="">Coupon Name</label>
           <input type="text" wire:model="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
           @error('name')
               <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
       </div>
       <div class="form-group">
          <label for="">Coupon Value</label>
          <input type="text" wire:model="value" value="{{ old('value') }}" class="form-control @error('value') is-invalid @enderror">
          @error('value')
              <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
      </div>
      <div class="form-group">
        <label for="">Coupon Type</label>
        <select wire:model="coupon_type" class="form-control @error('coupon_type') is-invalid @enderror" id="">
          <option value="">Choose Coupon Type</option>
          <option value="Percentage">Percentage</option>
          <option value="Fixed">Fixed</option>
        </select>
        @error('coupon_type')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </div>
      <div class="form-group">
        <label for="">Coupon Expire Date</label>
        <input type="date" wire:model="expire_at" min="{{ date('Y-m-d') }}" value="{{ old('expire_at') }}" class="form-control @error('expire_at') is-invalid @enderror">
        @error('expire_at')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
