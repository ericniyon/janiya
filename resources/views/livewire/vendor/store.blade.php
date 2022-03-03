<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header p-2 pt-3 d-flex justify-content-between">
                <h5>products from {{config('app.name')}} Store</h5>
                {{-- <a href="#" class="btn btn-secondary">
                    <i class="fa fa-shopping-cart"></i>Pre Order</a> --}}
                <div class="d-flex">
                    <input type="search" wire:model.lazy="searchkey" name="searchkey" id="" class="form-control">
                </div>
            </div>
            <div class="card-body row pt-0 pl-4 mt-0" >
                @forelse ($products as $product)
                <div class="col-12 col-md-4 mt-1">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{asset(Storage::url($product->thumb->image))}}" class="rounded img-responsive w-100"
                             height="150">
                            <h5 class="text-center">{{$product->name}}</h5>
                            <h4 class="text-center font-weight-bold"></h4>
                        </div>
                        <div class="col-md-7 d-flex flex-column justify-content-between">
                            <div>
                                <h5><strong>Price: </strong>{{$product->price}}</h5>
                                <h5><strong>Category: </strong>{{$product->product_categories->category_name}}</h5>
                                {{-- <h5><strong>Quantity: </strong>{{$product->attributes->sum('quantity')}}</h5> --}}
                            </div>
                            <a href="{{route('vendor.store.single', $product->slug)}}" class="btn btn-primary">
                                <i class="fa fa-plus-circle"></i>store</a>
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