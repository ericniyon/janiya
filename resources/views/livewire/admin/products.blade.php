<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body row pt-0 mt-0" >
                @forelse ($products as $product)
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-6 d-flex flex-column justify-content-between">
                            <img src="{{$product->thumb()->exists()?asset(Storage::url($product->thumb->image)):''}}" class="rounded img-responsive w-100"
                            height="150">
                            <h5 class="px-1 text-center">{{$product->name}}</h5>
                            <h5 class="badge badge-pill badge-secondary px-1">{{$product->price.__(' Rwf')}}</h5>
                        </div>
                        <div class="col-6 d-flex flex-column justify-content-between">
                            <ul>
                                @foreach ($product->colors as $color)
                                <li>{{$color->color_name.__(': ').$color->pivot->quantity}}</li>
                                @endforeach
                            </ul>
                            <div>
                                <a href="{{route('admin.products.single',$product->slug)}}"
                                     class="btn btn-primary px-1"><i class="fas fa-eye"></i></a>
                                <button wire:click="delete({{$product->id}})" class="btn btn-danger btn-sm" 
                                    wire:loading.attr="disabled" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h3 class="m-5">No product yet</h3>
                </div>
                @endforelse                   
            </div>
            <div class="row">
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>