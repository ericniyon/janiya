<form wire:submit="store">
    <div class="modal-body">
        <label for="promo_code" class="col-form-label pt-0"><span>*</span>Promo Code</label>
        <input name="promo_code" wire:model="promo_code" value="{{old('promo_code')}}" class="form-control @error('promo_code')
            is-invalid @enderror" id="promo_code" type="text" required="">
        @error('promo_code')
            <span class="invalid-feedback" role="alert">{{$message}}</span>
        @enderror
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</form>
