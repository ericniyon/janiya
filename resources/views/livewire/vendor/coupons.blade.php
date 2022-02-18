<div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Code</th>
            <th scope="col">Type</th>
            <th scope="col">Value</th>
            <th scope="col">Expiration Date</th>
            <th scope="col"><i class="fa fa-ellipsis"></i></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($coupons as $coupon)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$coupon->name}}</td>
              <td>{{$coupon->coupon_code}}</td>
              <td>{{$coupon->type}}</td>
              <td>{{$coupon->value}}{{$coupon->type=='Percentage'?'%':''}}</td>
              <td>{{$coupon->expire_at?$coupon->expire_at->format('Y-m-d'):''}}</td>
              <td>
                <button wire:click="delete({{$coupon->id}})" class="btn btn-xs btn-danger" wire:loading.attr="disabled" 
                  onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                  <i class="fa fa-trash"></i>
                </button>
              </td>
            </tr> 
            @empty
                
            @endforelse
        </tbody>
      </table>
</div>