<div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Contact Info</th>
            <th scope="col">link</th>
            <th scope="col">Sales</th>
            <th scope="col">Clicks</th>
            <th scope="col"><i class="fa fa-ellipsis"></i></th>
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
              <td>salescount</td>
              <td>Clicks count
              </td>
              <td>
                <div class="d-flex justify-content-center align-items-center">
                  <button data-toggle="modal" data-target="#user-{{$user->id}}" class="btn btn-primary btn-sm">
                      <i class="fa fa-trash"></i>
                  </button>
                  <button wire:click="delete({{$user->id}})" class="btn btn-danger btn-sm" 
                    wire:loading.attr="disabled" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                    <i class="fa fa-trash"></i>
                </button>
                </div>
              </td>
            </tr> 
            <div class="modal fade" id="user-{{$user->id}}" tabindex="-1" role="dialog" 
              aria-labelledby="user-{{$user->id}}Label" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="user-{{$user->id}}Label">Promote {{$user->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form wire:submit="store({{$user->id}})">
                    <div class="modal-body">
                        <label for="promo_code" class="col-form-label pt-0"><span>*</span>Promo Code</label>
                        <input name="promo_code" wire:model.lazy="promo_code" value="{{old('promo_code')}}" class="form-control @error('promo_code')
                            is-invalid @enderror" id="promo_code" type="text" required="">
                        @error('promo_code')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                  @livewire('admin.add-promo-code-modal', ['user' => $user], key($user->id))
                </div>
              </div>
            </div>
            @empty
                
            @endforelse
        </tbody>
      </table>
</div>
