<div class="card">

    <div class="card-header">
         @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
        @endif
        <div class="row">
            <h5>Store Clients Orders</h5>
        </div>
        <div class="row mt-2">
            <div class="col-md-1">
                <select wire:model.lazy="perPage" id="" class="form-control">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="search" wire:model.debounce.500="searchKey" id="" class="form-control"
                placeholder="search order">
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <label for="" class="mt-2 mr-2">From: </label>
                <input type="date" wire:model.lazy="from" id="" class="form-control"
                min='2022-01-01' max="{{date('Y-d-m')}}">
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <label for="" class="mt-2 mr-2">To: </label>
                <input type="date" wire:model.lazy="until" id="" class="form-control"
                min='2022-01-01' max="{{date('Y-d-m')}}">
            </div>
            <div class="col-md-2">
                <select wire:model.lazy="status" id="" class="form-control">
                    <option value="">All</option>
                    <option value="Pending">Pending</option>
                    <option value="Approved">Approved</option>
                    <option value="Deneid">Deneid</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card-body pt-0 mt-0">
        <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Order No</th>
                    <th scope="col">Stock/Name</th>
                    <th scope="col">Stock Contact Info</th>
                    {{-- <th scope="col">Discount</th> --}}
                    <th scope="col">Total Amount((Rwf)</th>
                    <th scope="col">Size</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Color</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>
                          <a href="{{route('vendor.orders.single',\Crypt::encryptString($order->id))}}" class="d-flex flex-column">
                            <span>{{$order->orderNo}}</span>
                            <span><strong class="mr-1">Items: </strong>

                            </span>
                          </a>
                      </td>
                      <td>
                          <div class="d-flex flex-column">
                            <span>{{$order->store->name}}</span>
                            <div class="d-flex">
                              <a href="">{{$order->store->shop->shop_name}}</a>
                              <a href="tel:{{$order->phone}}">{{$order->phone}}</a>
                            </div>
                          </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column">
                          <span>{{$order->store->shop->email}}</span>
                          <div class="d-flex">
                            <span>{{$order->store->shop->phone}}</span>
                          </div>
                        </div>
                      </td>
                      <td>{{$order->total_amount}}</td>
                      <td>
                          @foreach ($order->store->valiations as $item)
                        {{ $item->size }}
                          @endforeach
                      </td><td>
                          @foreach ($order->store->valiations as $item)
                        {{ $item->quantity }}
                          @endforeach
                      </td><td>
                          @foreach ($order->store->valiations as $item)
                        {{ $item->color }}
                          @endforeach
                      </td>
                      <td>
                          @if ($order->payment_confirmed == 1)
                            <span class="badge badge-secondary">
                                Payed
                                <input type="checkbox" wire:click="confirm({{$order->id}})" {{$order->payment_confirmed?'checked':''}} >
                            </span>

                          @else
                            <span class="badge badge-warning">Not Payed

                                <input type="checkbox" wire:click="confirm({{$order->id}})" >
                            </span>

                          @endif
                          {{-- <input type="checkbox" wire:click="confirm({{$order->id}})" {{$order->payment_confirmed?'checked':''}} > --}}
                      </td>
                      <td>
                        <div class="dropdown show">
                            <a class="btn btn-secondary bt-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$order->status}}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <button {{($order->status=='Approved')?'disabled':''}} class="dropdown-item"
                              wire:click.prevent="changeStatus('Pending',{{$order->id}})">Pending
                              </button>
                              <button {{($order->status=='Approved')?'disabled':''}} wire:click.prevent="changeStatus('Approved',{{$order->id}})"
                                 class="dropdown-item">Approved

                              </button>
                              <button {{($order->status=='Approved')?'disabled':''}} wire:click.prevent="changeStatus('Denied',{{$order->id}})"
                                 class="dropdown-item">Denied
                              </button>

                            </div>
                          </div>
                      </td>
                      <td>{{$order->created_at}}</td>

                    </tr>
                    @empty

                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
