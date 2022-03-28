<div class="card-body pt-0 mt-0" >
        @if (session()->has('message'))
        <div class="alert alert-warning">
          {{ session('message') }}
        </div>
    @endif
  @forelse ($items as $item)
  <div class="row" style="border-bottom: 1px solid black!important">
    <div class="col-md-4 d-flex flex-column">
      <img src="{{$item->product->thumb()->exists()?asset(
        Storage::url($item->product->thumb->image)):'../assets/images/dashboard/man.png'}}"
         height="130" width="" class="w-50 mt-2">
        <h5>{{$item->name}}</h5>
    </div>
    <div class="col-md-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Size</th>
            <th scope="col">Color </th>
            <th scope="col">Quantity</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($item->valiations as $var)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$var->size}}</td>
              <td>{{$var->color}}</td>
              <td>{{$var->quantity}}</td>
              <td>
                   <a type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">
                       <i class="fa fa-pencil"></i>Edit
                   </a>
              </td>
            </tr>
            <div class="btn-popup pull-right">

                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Update </h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" action="{{ route('vendor.store_update', $var->id) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $var->id }}">
                                                        <input type="hidden" name="product_attribute_id" value="{{ $var->product_attribute_id }}">

                                                        <div class="form">
                                                            <div class="form-group" hidden>
                                                                <label for="validationCustom01" class="mb-1">Color :</label>

                                                                <select name="color"  id="" class="form-control">
                                                                                                                                                                                                        <option value="{{ $var->color }}">{{ $var->color }}</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group mb-0" hidden>
                                                                <label for="validationCustom02" class="mb-1">Size :</label>

                                                                <select name="size" id="" class="form-control">
                                                                    <option value="{{ $var->size }}">{{ $var->size }}</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="validationCustom02" class="mb-1">Quantity :</label>
                                                                <input class="form-control" name="quantity" id="validationCustom02" type="number" value="{{ $var->quantity }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            @empty

            @endforelse
        </tbody>
      </table>
    </div>
  </div>
  @empty

  @endforelse
</div>
