<div class="card-body pt-0 mt-0" >
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
            <th scope="col">Color</th>
            <th scope="col">Size</th>
            <th scope="col">Quantity</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($item->valiations as $var)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$var->color()->exists()?$var->color->color_name:''}}</td>
              <td>{{$var->size()->exists()?$var->size->size:''}}</td>
              <td>{{$var->quantity}}</td>
              <td>edit</td>
            </tr>
            @empty

            @endforelse
        </tbody>
      </table>
    </div>
  </div>
  @empty

  @endforelse
</div>
