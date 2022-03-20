<div class="body">
        @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="store" method="POST" class="row">
        @csrf
        {{-- <div class="form-group">
            <label for="">Desired Name</label>
            <input type="text" wire:model="name" name="name" value="{{old('name')}}" class="form-control
            @error('name') is-invalid @enderror" required>
            @error('name')
                <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div> --}}
        @foreach($sizesLoop as $index=>$item)
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Product Attributes</label>
                <select name="sizesLoop[{{$index}}][attribute]"
                wire:model.lazy="sizesLoop.{{$index}}.attribute" id="" class="
                form-control @error('sizesLoop.'.$index.'attribute') is-invalid @enderror">
                <option value="">Select Product Valiation</option>
                @foreach ($product->attributes()->where('quantity','>',3)->get() as $item)
                    <option value="{{$item->id}}">
                        Size: {{$item->size}},
                        Color: {{$item->color}}
                    </option>
                @endforeach
                </select>
                @error('sizesLoop.'.$index.'attribute')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label >Quantity</label>
                <input type="number" value="sizesLoop[{{$index}}][quantity]"
                name="sizesLoop[{{$index}}][quantity]"
                wire:model.lazy="sizesLoop.{{$index}}.quantity" id="quantity"
                class="form-control @error('sizesLoop.'.$index.'quantity') is-invalid @enderror">
                
                @error('sizesLoop[{{$index}}][quantity]')
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
        <div class="form-group">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </form>
</div>
