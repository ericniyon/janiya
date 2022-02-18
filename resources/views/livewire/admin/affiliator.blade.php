<div class="row">
  <div class="{{$promote?'col-md-8':'col-sm-12'}}">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h5>Vendors</h5>
      </div>
        <div class="card-body pt-0 mt-0" >
          <div class="table-responsive">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Contact Info</th>
                      <th scope="col">link</th>
                      @if (!$promote)
                      <th scope="col">Sales</th>
                      <th scope="col">Clicks</th>
                      <th scope="col"><i class="fa fa-ellipsis"></i></th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                      @forelse ($affiliators as $user)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>
                          <div class="d-flex align-items-center">
                            <img class="mr-2 rounded-circle lazyloaded blur-up" height="30" width="30" 
                          src="{{$user->profile?asset(Storage::url($user->profile)):'../assets/images/dashboard/man.png'}}" alt="#">
                          {{$user->name}}</td>
                          </div>
                        <td>
                          <div class="d-flex flex-column">
                            <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                            <a href="tel:{{$user->phone}}">{{$user->phone}}</a>
                          </div>
                        </td>
                        <td>{{$user->affiliate_link}}</td>
                        @if (!$promote)
                        <td>salescount</td>
                        <td>Clicks count
                        </td>
                        <td>
                          <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-primary btn-sm" wire:click="promoteForm({{$user->id}})">
                                <i class="fa fa-trash"></i>
                            </button>
                            <button wire:click="delete({{$user->id}})" class="btn btn-danger btn-sm" 
                              wire:loading.attr="disabled" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                              <i class="fa fa-trash"></i>
                          </button>
                          </div>
                        </td>
                        @endif
                      </tr> 
                      @empty
                          
                      @endforelse
                  </tbody>
              </table>
          </div>
        </div>
    </div>
  </div>
  @if($promote)
  <div class="col-md-4 card">
    <form class="card-body" method="POST" wire:submit.prevent="promote()">
        @csrf
        <h4 class="text-center">Insert New Class</h4>
        <div class="form-group">
            <label for="name">Item Name</label>
            <input type="text" wire:model="user" class="form-control" 
            value="{{$user}}">
            {{-- <input type="hidden" wire:model="product" value="{{$product}}" class="form-control" > --}}
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
            <button wire:click="closeForm()" class="w-100 mt-2 btn btn-sm btn-secondary">
                Cancel</button>
        </div>
    </form>
</div>
  @endif
</div>
