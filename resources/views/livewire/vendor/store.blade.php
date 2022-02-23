<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Shop</h5>
            </div>
            <div class="card-body row pt-0 mt-0" >
                @forelse ($products as $product)
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('../assets/images/pro3/27.jpg')}}" class="rounded img-responsive w-100"
                             height="150">
                            {{-- <img src="{{asset($product->product_image)}}" class="rounded img-responsive"> --}}
                            <h5 class="d-flex align-items-center justify-content-center px-1">{{$product->name}}</h5>
                        </div>
                        <div class="col-md-5">
                            <ul>
                                @foreach ($product->attributes as $item)
                                <li>{{$item->color->color_name.__(', ').$item->size->size._(', ').$item->price.__('RWF, ').$item->quantity}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('vendor.store.single', $product->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Buy</a>
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