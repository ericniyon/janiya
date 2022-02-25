<div class="body">
    <form wire:submit.prevent="store" method="POST" class="row">
        @csrf
        <div class="form-group">
            <label for="">Desired Name</label>
            <input type="text" wire:model="name" name="name" value="{{old('name')}}" class="form-control 
            @error('name') is-invalid @enderror" required>
            @error('name')
                <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>
        @foreach($sizesLoop as $index=>$item)
        <div class="row">
            <div class="form-group col-md-3">
                <label>Product Size</label>
                <select name="sizesLoop[{{$index}}][size]" 
                wire:model.lazy="sizesLoop.{{$index}}.size"  required
                class="form-control show-tick ms @error('sizesLoop.'.$index.'.size') is-invalid @enderror">
                    <option value="">Choose Product size</option>
                    @foreach ($product->sizes as $item)
                        <option value="{{$item->id}}">{{$item->size}}</option>
                    @endforeach
                </select>
                @error('sizesLoop.'.$index.'.size')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Product Color</label>
                <select name="sizesLoop[{{$index}}][color]" required 
                wire:model.lazy="sizesLoop.{{$index}}.color" 
                class="form-control show-tick ms @error('sizesLoop.'.$index.'.color') is-invalid @enderror">
                    <option value="">Choose Product Color</option>
                    @foreach ($product->colors as $item)
                        <option value="{{$item->id}}">{{$item->color_name}}</option>
                    @endforeach
                </select>
                @error('sizesLoop.'.$index.'.color')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label >Quantity</label>
                <input type="number" value="sizesLoop[{{$index}}][quantity]" 
                name="sizesLoop[{{$index}}][quantity]" required 
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
        <div class="form-group">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </form>
</div>