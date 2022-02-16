<div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Active</th>
            <th scope="col">Confirmed</th>
            <th scope="col"><i data-feather="ellipsis"></i></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($shops as $vendor)
            <tr>
              <th scope="row">1</th>
              <td>{{$vendor->name}}</td>
              <td><a href="mailto:{{$vendor->email}}">{{$vendor->email}}</a></td>
              <td><a href="tel:{{$vendor->phone}}">{{$vendor->phone}}</a></td>
              <td><input type="checkbox" wire:click="changeStatus({{$vendor->id}})" {{$vendor->active?'checked':''}}></td>
              <td><input type="checkbox" wire:click="confirm({{$vendor->id}})" {{$vendor->confirmed?'selected':''}}></td>
            </tr> 
            @empty
                
            @endforelse
        </tbody>
      </table>
</div>
