<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
    @endif


    <form enctype="multipart/form-data">

       <div class="row">
           <div class="col-md-6">
            <div class="form-group">
                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Product Name</label>
                <input class="form-control" wire:model="name" name="name" id="validationCustom01" type="text" required="">
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="validationCustom02" class="col-form-label pt-0"><span>*</span> Categories</label>
                <select id="validationCustom02" class="custom-select form-control" required="" wire:model="product_category_id" name="product_category_id">
                    <option value="">--Select--</option>
                    @foreach ($categories as $item)

                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                    @endforeach
                </select>
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="validationCustom02" for="validationCustom01" class="col-form-label pt-0"><span>*</span> Product Description</label>
                <textarea wire:model="description" name="description" id="validationCustom02" cols="3" rows="4"></textarea>
            </div>
           </div>
           <div class="col-md-4">
            <div class="form-group">
                <label for="validationCustom02" for="validationCustom01" class="col-form-label pt-0"><span>*</span> Product Image</label>
                <img src="" alt="" srcset="" id="preview-image-before-upload" height="70">
            </div>
            <input wire:model="product_image" type="file" name="product_image" id="image" >
           </div>


       </div>


       <hr>
       <h4>Product Valuation</h4>
        <div class=" add-input">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Enter Quantity" wire:model="quantity.0">
                        @error('quantity.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Enter Price" wire:model="price.0">
                        @error('price.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select  wire:model="product_color.0" id="" class="form-control">
                            <option value="" >--- select color ----</option>
                            @foreach ($colors as $item)
                            <option value="{{$item->id}}" >{{$item->color_name}}</option>

                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" placeholder="Enter Color" wire:model="product_color.0"> --}}
                        @error('product_color.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select  wire:model="product_size.0" id="" class="form-control">
                            <option value="" >--- select size ----</option>
                            @foreach ($sizes as $item)
                            <option value="{{$item->id}}" >{{$item->size}}</option>

                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" placeholder="Enter Size"> --}}
                        @error('product_size.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Name" wire:model="product_name.0" disabled>
                        @error('product_name.0') <span class="text-danger error">{{ $message }}</span>@enderror
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
                            <input type="text" class="form-control" placeholder="Enter quantity" wire:model="quantity.{{ $value }}">
                            @error('quantity.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter price" wire:model="price.{{$value}}">
                            @error('price.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select  wire:model="product_color.{{$value}}" id="" class="form-control">
                                <option value="" >--- select color ----</option>
                                @foreach ($colors as $item)
                                <option value="{{$item->id}}" >{{$item->color_name}}</option>

                                @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" placeholder="Enter color" wire:model="product_color.{{$value}}"> --}}
                            @error('product_color.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select  wire:model="product_size.{{$value}}" id="" class="form-control">
                                <option value="" >--- select size ----</option>
                                @foreach ($sizes as $item)
                                <option value="{{$item->id}}" >{{$item->size}}</option>

                                @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" placeholder="Enter size" wire:model="product_size.{{$value}}"> --}}
                            @error('product_size.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter name" wire:model="product_name.{{$value}}" disabled>
                            @error('product_name.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-md-2">
                        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Remove</button>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-md-12">
                <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>

    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">

$(document).ready(function (e) {


   $('#image').change(function(){

    let reader = new FileReader();

    reader.onload = (e) => {

      $('#preview-image-before-upload').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

   });

});

</script>
