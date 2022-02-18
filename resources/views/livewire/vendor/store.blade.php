<div class="row">
    <div class="{{$addToStoreForm?'col-md-9':'col-sm-12'}}">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Shop</h5>
            </div>
            <div class="card-body pt-0 mt-0" >
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col"><i data-feather="ellipsis"></i></th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$product->product->name}}</td>
                              <td>{{$product->color->color_name}}</td>
                              <td>{{$product->size->size}}</td>
                              <td>{{$product->price}}</td>
                              <td>
                                <div class="d-flex justify-content-center align-items-center">
                                  <button wire:click="addToStore({{$product->id}})" class="btn btn-primary btn-sm">
                                      <i class="fa fa-plus-circle"></i>
                                  </button>
                                </div>
                              </td>
                            </tr> 
                            @empty
                                
                            @endforelse
                        </tbody>
                      </table>
                </div>                    
            </div>
        </div>
    </div>
    @if ($addToStoreForm)
    <div class="col-md-3 card">
        <form class="card-body" method="POST" wire:submit.prevent="addProductToStore()">
            @csrf
            <h4 class="text-center">Insert New Class</h4>
            <div class="form-group">
                <label for="name">Item Name</label>
                <input type="text" disabled wire:model="actualProduct" class="form-control" 
                value="{{$actualProduct}}">
                <input type="hidden" wire:model="product" value="{{$product}}" class="form-control" >
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" wire:model="quantity" class="form-control 
                @error('quantity') is-invalid @enderror" value="{{old('quantity')}}">
                @error('quantity')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <button wire:loading.attr="disabled" class="w-100 btn btn-md btn-primary" 
                type="submit">Submit</button>
                <button wire:click="cancelAddToStore()" class="w-100 mt-2 btn btn-sm btn-secondary">
                    Cancel</button>
            </div>
        </form>
    </div>
    @endif
</div>