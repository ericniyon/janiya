<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
    @endif
    <form>
        <div class="row">
            <div class="col-md-12 border-right">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Product Name</label>
                        <input class="form-control  @error('name') is-invalid @enderror" wire:model="name" name="name" id="validationCustom01" type="text" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group col-md-3">
                         <label class="col-form-label pt-0"><span>*</span> Price </label>
                         <input class="form-control @error('price') is-invalid @enderror" wire:model="price"
                         name="price" type="number" required>
                     </div>
                     <div class="form-group col-md-3">
                         <label class="col-form-label pt-0"><span>*</span> Category</label>
                         <select class="custom-select form-control  @error('product_category_id') is-invalid @enderror" required="" wire:model="product_category_id" name="product_category_id">
                             <option value="">--Select--</option>
                             @foreach ($categories as $item)

                             <option value="{{$item->id}}">{{$item->category_name}}</option>
                             @endforeach
                         </select>
                     </div>

                    <div class="col-md-3">
                     <div class="form-group">
                         <label class="col-form-label pt-0"><span>*</span> Product Image</label>
                         <img src="" alt="" srcset="" id="preview-image-before-upload" height="70">
                         <input wire:model="product_image" type="file"  accept="image/*"
                         name="product_image" id="image" class="form-control @error('product_image') is-invalid @enderror" >
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border-left">
                <div class="form-group">
                    <label class="col-form-label"><span>*</span> Product Description</label> <br>
                    <textarea wire:model="description" name="description" cols="3" rows="4" class=" @error('description') is-invalid @enderror"></textarea>
                </div>
            </div>
        </div>
        <hr>
        <div class=" add-input">
            <h4 class="padding:1em">Product Attributes</h4>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="file" class="form-control" placeholder="" wire:model="image.0">
                        @error('image.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select name="" id="" class="form-control">
                            @if (App\Models\Color::all()->count() > 0)
                            <option value="">---- select color ----</option>
                            @foreach (App\Models\Color::all() as $color)

                            <option wire:model="color.0">{{ $color->color_name }}</option>
                            @endforeach
                            @else
                            <option value="No color found"></option>
                            @endif
                        </select>
                        {{-- <input type="text" class="form-control" placeholder="Enter Color" wire:model="color.0">
                        @error('color.0') <span class="text-danger error">{{ $message }}</span>@enderror --}}
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Size" wire:model="size.0">
                        @error('size.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="number" class="form-control" wire:model="quantity.0" placeholder="Enter quantity">
                        @error('quantity.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
                </div>
            </div>
        </div>

        @foreach($inputs as $key => $value)
            <div class=" add-input">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="file" class="form-control" placeholder="Enter Name" wire:model="image.{{ $value }}">
                            @error('image.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                            @if (App\Models\Color::all()->count() > 0)
                            <option value="">---- select color ----</option>
                            @foreach (App\Models\Color::all() as $color)

                            <option  wire:model="color.{{ $value }}" >{{ $color->color_name }}</option>
                            @endforeach
                            @else
                            <option value="No color found"></option>
                            @endif
                        </select>
                            {{-- <input type="text" class="form-control" wire:model="color.{{ $value }}" placeholder="Enter color">
                            @error('color.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror --}}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="text" class="form-control" wire:model="size.{{ $value }}" placeholder="Enter size">
                            @error('size.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="number" class="form-control" wire:model="quantity.{{ $value }}" placeholder="Enter quantity">
                            @error('quantity.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-12">
                <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Save</button>
            </div>
        </div>
    </form>
</div>
