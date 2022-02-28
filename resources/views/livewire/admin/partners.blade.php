<div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Contact Info</th>
            <th scope="col">Promo Code</th>
            <th scope="col">Sales</th>
            <th scope="col">Requests</th>
            <th scope="col"><i class="fa fa-ellipsis"></i></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($partners as $partner)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>
                <div class="d-flex align-items-center">
                  <img class="mr-2 rounded-circle lazyloaded blur-up" height="30" width="30" 
                src="{{$partner->profile?asset(Storage::url($partner->profile)):'../assets/images/dashboard/man.png'}}" alt="#">
                {{$partner->name}}</td>
                </div>
              <td>
                <div class="d-flex">
                  <a href="mailto:{{$partner->email}}">{{$partner->email}}</a>
                  <span class="mx-1">|</span>
                  <a href="tel:{{$partner->phone}}">{{$partner->phone}}</a>
                </div>
              </td>
              <td>{{$partner->promo_code}}</td>
              <td>salescount</td>
              <td>
                  <div class="d-flex flex-column">
                      <span>Date:</span>
                      <span>Amount:</span>
                  </div>
              </td>
              <td>
                <div class="d-flex justify-content-center align-items-center">
                  <a href="{{route('admin.partners.edit',$partner->id)}}" class="btn btn-primary btn-sm">
                      <i class="fa fa-edit"></i>
                  </a>
                  <button wire:click="delete({{$partner->id}})" class="btn btn-danger btn-sm" 
                      wire:loading.attr="disabled" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                      <i class="fa fa-delete"></i>
                  </button>
                </div>
              </td>
            </tr> 
            @empty
                
            @endforelse
        </tbody>
      </table>
</div>
