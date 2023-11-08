<div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Store</th>
            <th scope="col">Contact Info</th>
            <th scope="col">Active</th>
            <th scope="col">Confirmed</th>
            <th scope="col"><i data-feather="ellipsis"></i></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($shops as $vendor)
            <tr>
              <th scope="row">{{ $vendor->id }}</th>
              <td>
                <div class="d-flex align-items-center">
                  <img class="mr-3 rounded-circle lazyloaded blur-up" height="30" width="30"
                src="{{Storage::disk('s3')->url($vendor->profile) }}" alt="#">
                {{$vendor->shop_name}}</td>
                </div>
              <td>
                <div class="d-flex flex-column">
                  <span>{{$vendor->name}}</span>
                </div>
                <div class="d-flex">
                  <a href="mailto:{{$vendor->email}}">{{$vendor->email}}</a>
                  <span class="mx-1">|</span>
                  <a href="tel:{{$vendor->phone}}">{{$vendor->phone}}</a>
                </div>
              </td>
              <td><input type="checkbox" wire:click="changeStatus({{$vendor->id}})" {{$vendor->active?'checked':''}}></td>
              <td><input type="checkbox" wire:click="confirm({{$vendor->id}})" {{$vendor->confirmed?'checked':''}}></td>
              <td>
                <div class="d-flex justify-content-center align-items-center">
                  <a href="{{route('admin.shops.edit',$vendor->id)}}" class="btn btn-primary btn-sm">
                      <i class="fa fa-edit"></i>
                  </a>
                  <button wire:click="delete({{$vendor->id}})" class="btn btn-danger btn-sm"
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
