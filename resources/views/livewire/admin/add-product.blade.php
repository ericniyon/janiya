<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
    @endif


    <form enctype="multipart/form-data" method="POST">@csrf
        <div class="row">
            <div class="col-md-7 border-right">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Product Name</label>
                        <input class="form-control  @error('name') is-invalid @enderror" wire:model="name" name="name" id="validationCustom01" type="text" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group col-md-6">
                         <label class="col-form-label pt-0"><span>*</span> Price </label>
                         <input class="form-control @error('price') is-invalid @enderror" wire:model="price"
                         name="price" type="number" required>
                     </div>
                     <div class="form-group col-md-6">
                         <label class="col-form-label pt-0"><span>*</span>Factory Price </label>
                         <input class="form-control @error('factory_price') is-invalid @enderror" wire:model="factory_price"
                         name="factory_price" type="number" required>
                     </div>
                     <div class="form-group col-md-6">
                         <label class="col-form-label pt-0"><span>*</span> Category</label>
                         <select class="custom-select form-control" required="" wire:model="product_category_id" name="product_category_id[]">
                             <option value="">--Select--</option>
                             @foreach (App\Models\ProductCategory::all() as $item)
                             <option value="{{$item->id}}">{{$item->category_name}}</option>
                             @endforeach
                         </select>
                     </div>
                    <div class="col-md-6">
                     <div class="form-group">
                         <label class="col-form-label pt-0"><span>*</span> Product Image</label>
                         <img src="" alt="" srcset="" id="preview-image-before-upload" height="70">
                         <input wire:model="product_image" type="file"  accept="image/*"
                         name="product_image" id="image" class=" form-control @error('product_image') is-invalid @enderror" required>
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 border-left">
                <div class="form-group">
                    <label class="col-form-label"><span>*</span> Product Description</label> <br>
                    <textarea wire:model="description" name="description" cols="3" rows="6" class=" @error('description') is-invalid @enderror"></textarea>
                </div>
            </div>
        </div>
       <hr>
       <h4>Product Valiations</h4>
        <div class=" add-input">
            @foreach($colorsLoop as $index=>$item)
            <div class="row">
                <div class="form-group col-md-3">
                    <label >Image</label>
                    <input type="file" accept="image/*" value="colorsLoop[{{$index}}][image]"
                    name="colorsLoop[{{$index}}][image]"
                    wire:model.debounce.500="colorsLoop.{{$index}}.image"
                    class="form-control @error('colorsLoop.'.$index.'image') is-invalid @enderror" required>

                    @error('colorsLoop.'.$index.'image')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label>Color</label>
                    <select name="colorsLoop[{{$index}}][color]" wire:model.debounce.500="colorsLoop.{{$index}}.color"
                    class="form-control show-tick ms @error('colorsLoop.'.$index.'.color') is-invalid @enderror">
                        <option value="">Choose Color</option>
                        @foreach ($colors as $item)
                            <option value="{{$item->color_name}}">{{$item->color_name}}</option>
                        @endforeach
                    </select>
                    @error('colorsLoop.'.$index.'.color')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label>Size</label>
                    <select name="colorsLoop[{{$index}}][size]" wire:model.debounce.500="colorsLoop.{{$index}}.size"
                    class="form-control show-tick ms @error('colorsLoop.'.$index.'.size') is-invalid @enderror">
                        <option value="">Size</option>
                        @foreach ($sizes as $item)
                            <option value="{{$item->size}}">{{$item->size}}</option>
                        @endforeach
                    </select>
                    @error('colorsLoop.'.$index.'.size')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label >Quantity</label>
                    <input type="number" value="colorsLoop[{{$index}}][quantity]"
                    name="colorsLoop[{{$index}}][quantity]"
                    wire:model.debounce.500="colorsLoop.{{$index}}.quantity"
                    class="form-control @error('colorsLoop.'.$index.'quantity') is-invalid @enderror">

                    @error('colorsLoop.'.$index.'quantity')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-1 pt-3 d-flex justify-content-end align-items-center">
                    <button class="btn btn-outline-none text-success p-2 mr-2"
                    wire:click.prevent="addNewRow">
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
