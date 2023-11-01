<div class="digital-add needs-validation">

    <form class="digits" action="" {{-- action="{{isset($vendor)?route('admin.shops.update',$vendor->id):route('admin.shops.store')}}" --}}>
        

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="shop" class="col-form-label pt-0"><span>*</span> Shop/Vendor Name</label>
                    <input wire:model="shop" value="{{ isset($vendor) ? $vendor->shop_name : old('shop') }}"
                        class="form-control @error('shop')
                            is-invalid @enderror"
                        id="shop" type="text">
                    @error('shop')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group col-md-4">
                <label for="name" class="col-form-label pt-0"><span>*</span> Person Of Contact</label>
                <input wire:model="name" value="{{ isset($vendor) ? $vendor->name : old('name') }}"
                    class="form-control @error('name')
                                is-invalid @enderror"
                    id="name" type="text" >
                @error('name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="email" class="col-form-label pt-0"><span>*</span>Email Address</label>
                <input wire:model="email" value="{{ isset($vendor) ? $vendor->email : old('email') }}"
                    class="form-control @error('email')
                                is-invalid @enderror"
                    id="email" type="email" >
                @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="phone" class="col-form-label pt-0"><span>*</span> Phone Number</label>
                <input wire:model="phone" value="{{ isset($vendor) ? $vendor->phone : old('phone') }}"
                    class="form-control @error('phone')
                                is-invalid @enderror"
                    id="phone" type="tel" >
                @error('phone')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label class="col-form-label pt-0"> Shop profile/image</label>
                <input wire:model="profile"
                    class="form-control @error('profile')
                            is-invalid @enderror" id="profile"
                    type="file">
                @error('profile')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label class="col-form-label pt-0"> Shop Description</label>
                <textarea wire:model="details" class="form-control @error('details') is-invalid @enderror" cols="30" rows="3">{{ isset($vendor) ? $vendor->details : old('details') }}</textarea>
                @error('details')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button class="btn btn-sm btn-primary" wire:click.prevent='store()' type="submit">{{ isset($vendor) ? 'Update' : 'Submit' }}</button>
    </form>
</div>
