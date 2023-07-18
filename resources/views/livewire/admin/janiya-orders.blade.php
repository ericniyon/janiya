<div class="card">
    <div class="card-header">
        @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
        @endif
        <div class="row">
            <h5>Go-Green Clients Orders</h5>
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
                    <option value="Paid">Paid</option>
                    <option value="On Delivery">On Delivery</option>
                    <option value="Completed">Completed</option>
                    <option value="Error">Error</option>
                    <option value="Cancelled">Cancelled</option>
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
                    <th scope="col">Name</th>
                    <th scope="col">Email and Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Street</th>
                    <th scope="col">Size</th>
                    <th scope="col">Color</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Neighborhood</th>
                    <th scope="col">Payment Method</th>
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
                            <span>{{$order->name}}</span>
                            <div class="d-flex">
                              <a href="">{{$order->shop_name}}</a>
                              {{-- <a >{{$order->phone}}</a> --}}
                            </div>
                          </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column">
                          <span>{{$order->email}}</span>
                          <div class="d-flex">
                            <span>{{$order->phone}}</span>
                          </div>
                        </div>
                      </td>
                      <td>{{$order->address}}</td>
                      <td>
                        {{ $order->street }}
                    </td>
                    <td>
                        @forelse ($order->items as $item)
                        {{ $item->size }}
                        @empty
                        <span>-</span>
                        @endforelse
                    </td>
                    <td>
                        @forelse ($order->items as $item)
                        {{ $item->color }}
                        @empty
                        <span>-</span>
                        @endforelse
                    </td>
                    <td>
                        @forelse ($order->items as $item)
                        {{ $item->quantity }}
                        @empty
                        <span>-</span>
                        @endforelse
                    </td>
                    <td>
                        {{ $order->neighborhood }}
                    </td>
                    <td>
                        {{ $order->payment_method }}
                    </td>
                      <td>
                        <div class="dropdown show">
                            <a class="btn btn-secondary bt-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$order->Status}}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <button {{($order->Status=='Paid')?'disabled':''}} class="dropdown-item"
                              wire:click.prevent="changeStatus('Pending',{{$order->id}})">Pending
                              </button>
                              <button {{($order->Status=='Paid')?'disabled':''}} wire:click.prevent="changeStatus('Paid',{{$order->id}})"
                                 class="dropdown-item">Paid
                              </button>
                              <button {{($order->Status=='Paid')?'disabled':''}} wire:click.prevent="changeStatus('On Delivery',{{$order->id}})"
                                 class="dropdown-item">On Delivery
                              </button>
                              <button {{($order->Status=='Paid')?'disabled':''}} wire:click.prevent="changeStatus('Completed',{{$order->id}})"
                                class="dropdown-item">Completed
                              </button>
                              <button {{($order->Status=='Paid')?'disabled':''}} class="dropdown-item"
                              wire:click.prevent="changeStatus('Error',{{$order->id}})">Error
                              </button>
                              <button {{($order->Status=='Paid')?'disabled':''}} class="dropdown-item"
                              wire:click.prevent="changeStatus('Cancelled',{{$order->id}})">Cancelled
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
