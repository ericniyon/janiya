<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
    @endif


    <form enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-7 border-right">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Product Name</label>
                        <input class="form-control" wire:model="name" name="name" id="validationCustom01" type="text" required="">
                    </div>
                    <div class="form-group col-md-6">
                         <label class="col-form-label pt-0"><span>*</span> Price </label>
                         <input class="form-control @error('price') is-invalid @enderror" wire:model="price" 
                         name="price" type="number" required="">
                     </div>
                     <div class="form-group col-md-12">
                         <label class="col-form-label pt-0"><span>*</span> Categories</label>
                         <select class="custom-select form-control" required="" wire:model="product_category_id" name="product_category_id">
                             <option value="">--Select--</option>
                             @foreach ($categories as $item)
         
                             <option value="{{$item->id}}">{{$item->category_name}}</option>
                             @endforeach
                         </select>
                     </div>
                    <div class="col-md-12">
                     <div class="form-group">
                         <label class="col-form-label pt-0"><span>*</span> Product Description</label>
                         <textarea wire:model="description" name="description" cols="3" rows="4"></textarea>
                     </div>
                    </div>
                    <div class="col-md-4">
                     <div class="form-group">
                         <label class="col-form-label pt-0"><span>*</span> Product Image</label>
                         <img src="" alt="" srcset="" id="preview-image-before-upload" height="70">
                         <input wire:model="product_image" type="file" multiple accept="image/*" 
                         name="product_image" id="image" >
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 p-2 border-left pt-4">
                @foreach($sizesLoop as $index=>$item)
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Product Size</label>
                        <select name="sizesLoop[{{$index}}][size]" 
                        wire:model.lazy="sizesLoop.{{$index}}.size" 
                        class="form-control show-tick ms @error('sizesLoop.'.$index.'.size') is-invalid @enderror">
                            <option value="">Choose Product size</option>
                            @foreach ($sizes as $item)
                                <option value="{{$item->id}}">{{$item->size}}</option>
                            @endforeach
                        </select>
                        @error('sizesLoop.'.$index.'.size')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label >Quantity</label>
                        <input type="number" value="sizesLoop[{{$index}}][quantity]" 
                        name="sizesLoop[{{$index}}][quantity]" 
                        wire:model.lazy="sizesLoop.{{$index}}.quantity" id="quantity" 
                        class="form-control @error('sizesLoop.'.$index.'quantity') is-invalid @enderror">
                        @error('sizesLoop.'.$index.'quantity')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-2 pt-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-outline-none text-success p-2 mr-2" 
                        wire:click.prevent="addNewSizeRow">
                            <i class="fa fa-plus"></i>
                        </button>
                        <button class="btn btn-outline-none p-2 text-danger" 
                        {{$index==0?'disabled':''}} 
                        wire:click.prevent="removeSizeRow({{$index}})">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
       <hr>
       <h4>Product Valiations</h4>
        <div class=" add-input">
            @foreach($colorsLoop as $index=>$item)
            <div class="row">
                <div class="form-group col-md-6">
                    <label >Image</label>
                    <input type="file" accept="image/*" value="colorsLoop[{{$index}}][image]" 
                    name="colorsLoop[{{$index}}][image]" 
                    wire:model.lazy="colorsLoop.{{$index}}.image" id="image" 
                    class="form-control @error('colorsLoop.'.$index.'image') is-invalid @enderror">
                    @error('colorsLoop.'.$index.'image')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label>Color</label>
                    <select name="colorsLoop[{{$index}}][color]" wire:model.lazy="colorsLoop.{{$index}}.color" 
                    class="form-control show-tick ms @error('colorsLoop.'.$index.'.color') is-invalid @enderror">
                        <option value="">Choose Color</option>
                        @foreach ($colors as $item)
                            <option value="{{$item->id}}">{{$item->color_name}}</option>
                        @endforeach
                    </select>
                    @error('colorsLoop.'.$index.'.color')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label >Quantity</label>
                    <input type="number" value="colorsLoop[{{$index}}][quantity]" 
                    name="colorsLoop[{{$index}}][quantity]" 
                    wire:model.lazy="colorsLoop.{{$index}}.quantity" id="quantity" 
                    class="form-control @error('colorsLoop.'.$index.'quantity') is-invalid @enderror">
                    @error('colorsLoop.'.$index.'quantity')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-1 pt-3 d-flex justify-content-end align-items-center">
                    <button class="btn btn-outline-none text-success p-2 mr-2" wire:click.prevent="addNewRow">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button class="btn btn-outline-none p-2 text-danger" 
                    wire:click.prevent="removeRow({{$index}})" 
                    {{$index==0?'disabled':''}}>
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            @endforeach
        </div>


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
