<form>
    <div class="row" bis_skin_checked="1">
        <div class="col-sm-3 col-md-4 col-lg-4 mt-3" bis_skin_checked="1">
            <input type="text" wire:model='first_name' class="form-control" placeholder="First Name">
            @error('first_name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-3 col-md-4 col-lg-4 mt-3" bis_skin_checked="1">
            <input type="text" wire:model='last_name' class="form-control" placeholder="Last Name">
            @error('last_name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-3 col-md-4 col-lg-4 mt-3" bis_skin_checked="1">
            <input type="text" wire:model='email' class="form-control" placeholder="Email ID">
            @error('email')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-3 col-md-4 col-lg-4 mt-3" bis_skin_checked="1">
            <input type="tel" name="phone" wire:model='phone' class="form-control" placeholder="Phone Number">
            @error('phone')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-3 col-md-4 col-lg-4 mt-3" bis_skin_checked="1">
            <input type="text" wire:model='facebook' class="form-control" placeholder="Facebook">
            @error('facebook')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-3 col-md-4 col-lg-4 mt-3" bis_skin_checked="1">
            <input type="text" wire:model='instagram' class="form-control" placeholder="Instagram">
            @error('instagram')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-3 col-md-4 col-lg-4 mt-3" bis_skin_checked="1">
            <input type="text" wire:model='linkdin' class="form-control" placeholder="Linkdin">
            @error('linkdin')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-3 col-md-4 col-lg-4 mt-3" bis_skin_checked="1">
            <input type="text" wire:model='address' class="form-control" placeholder="Address">
            @error('address')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <button wire:click.prevent='store()' class="btn btn-solid btn-sm">
        <span wire:loading.remove>start selling</span>
        <span wire:loading>Submiting ...</span>
    </button>
</form>
