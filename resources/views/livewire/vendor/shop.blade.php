<div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Item</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Attributes</th>
            {{-- <th scope="col">Sales</th> --}}
          </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>
                <div class="d-flex align-items-center">
                  {{-- <img class="mr-2 rounded-circle lazyloaded blur-up" height="30" width="30" 
                src="{{$item->profile?asset(Storage::url($item->profile)):'../assets/images/dashboard/man.png'}}" alt="#"> --}}
                {{$item->product->product->name}}</td>
                </div>
              <td>{{$item->product->price}}</td>
              <td>{{$item->quantity}}</td>
              <td>
                  <div class="d-flex flex-column">
                      <span><strong>Color:</strong> {{$item->product->color->color_name}}</span>
                      <span><strong>Size:</strong> {{$item->product->size->size}}</span>
                  </div>
              </td>
            </tr> 
            @empty
                
            @endforelse
        </tbody>
      </table>
</div>
