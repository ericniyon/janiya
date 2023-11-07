<div class="digital-add needs-validation">

    <form class="digits" enctype="multipart/form-data" action="{{isset($vendor)?route('admin.shops.update',$vendor->id):route('admin.shops.store')}}">
        
        <div class="row">

            <div class="col-md-3">
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

            <div class="form-group col-md-3">
                <label for="name" class="col-form-label pt-0"><span>*</span> Person Of Contact</label>
                <input wire:model="name" value="{{ isset($vendor) ? $vendor->name : old('name') }}"
                    class="form-control @error('name')
                                is-invalid @enderror"
                    id="name" type="text" >
                @error('name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="email" class="col-form-label pt-0"><span>*</span>Email Address</label>
                <input wire:model="email" value="{{ isset($vendor) ? $vendor->email : old('email') }}"
                    class="form-control @error('email')
                                is-invalid @enderror"
                    id="email" type="email" >
                @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="brand" class="col-form-label pt-0"><span>*</span>Shop Brand</label>
                <input wire:model.lazy="p2" value="{{ isset($vendor) ? $vendor->brand : old('brand') }}"
                    class="form-control @error('brand')
                                is-invalid @enderror"
                    id="brand" type="file" >
                @error('brand')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="phone" class="col-form-label pt-0"><span>*</span> Phone Number</label>
                <input wire:model="phone" value="{{ isset($vendor) ? $vendor->phone : old('phone') }}"
                    class="form-control @error('phone')
                                is-invalid @enderror"
                    id="phone" type="tel" >
                @error('phone')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label class="col-form-label pt-0"><span>*</span> Shop profile/image</label>
                <input wire:model.lazy="p1"
                    class="form-control @error('profile')
                            is-invalid @enderror" id="profile"
                    type="file">
                @error('profile')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label pt-0"><span>*</span> Shop Description</label>
                <textarea wire:model="details" class="form-control @error('details') is-invalid @enderror" cols="30" rows="3">{{ isset($vendor) ? $vendor->details : old('details') }}</textarea>
                @error('details')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button class="btn btn-sm btn-primary" wire:click.prevent='update()'>{{ isset($vendor) ? 'Update' : 'Submit' }}</button>
    </form>
</div>
