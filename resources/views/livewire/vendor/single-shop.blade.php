<div class="body">
    <form wire:submit.prevent="store" method="POST">
        @csrf
        @foreach($items as $index=>$item)
        <div class="row">
            <div class="form-group col-md-7">
                <label for="trimester">Select Product Valiations</label>
                <select name="items[{{$index}}][product]" wire:model.lazy="items.{{$index}}.product" 
                class="form-control show-tick ms @error('items.'.$index.'product') is-invalid @enderror">
                    <option value="">Select product</option>
                    @foreach ($attributes as $item)
                    <option value="{{$item->id}}">{{__('Color: ').$item->color->color_name.__(', Size: ').$item->size->size._(', Price: ').$item->price.__('RWF, Quantity: ').$item->quantity}}</option>
                    @endforeach
                </select>
                @error('items.'.$index.'product')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="quantity">Quantity</label>
                {{-- <input type="text" value="items[{{$index}}][test]" 
                name="items[{{$index}}][test]" 
                wire:model.lazy="items.{{$index}}.test"> --}}
                <input type="number" value="items[{{$index}}][quantity]" 
                name="items[{{$index}}][quantity]" 
                wire:model.lazy="items.{{$index}}.quantity" id="quantity" 
                class="form-control @error('items.'.$index.'quantity') is-invalid @enderror">
                @error('items.'.$index.'quantity')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-2 d-flex justify-content-end align-items-center pt-4">
                <button class="btn btn-sm btn-primary mr-2" wire:click.prevent="addNewRow">
                    <i class="fa fa-plus"></i>
                </button>
                <button class="btn btn-sm btn-danger" wire:click.prevent="removeRow({{$index}})">
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