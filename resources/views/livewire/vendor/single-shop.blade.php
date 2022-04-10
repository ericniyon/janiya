<div class="body">
    {{-- @if ($errors->any())
      @foreach ($errors->all() as $item)
     <li>{{$item}}</li>
      @endforeach
    @endif --}}
    <form wire:submit.prevent="store" method="POST" class="row">
        @csrf
        @foreach($items as $index=>$item)
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Product Attributes</label>
                <select name="items[{{$index}}][attribute]"
                wire:model="items.{{$index}}.attribute" class=" form-control @error('items.'.$index.'attribute') is-invalid @enderror">
                    <option value="">Select Product Valiation</option>
                    @foreach ($product->attributes()->where('quantity','>',3)->get() as $item)
                        <option value="{{$item->id}}">Size: {{$item->size}},  Color: {{$item->color}}</option>
                    @endforeach
                </select>
                @error('items.'.$index.'attribute')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label >Quantity</label>
                <input  class="form-control @error('items.'.$index.'.order_quantity') is-invalid @enderror" type="number"
                 name="items[{{$index}}][order_quantity]" wire:model.lazy="items.{{$index}}.order_quantity">
                @error('items.'.$index.'.order_quantity')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <input name="items[{{$index}}][finalquantity]" type="hidden"
            wire:model="items.{{$index}}.finalquantity" class="form-control">
            <div class="form-group col-md-2 pt-3 d-flex justify-content-end align-items-center">
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
        <div class="form-group">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-sm btn-secondary">Submit</button>
        </div>
    </form>
</div>
