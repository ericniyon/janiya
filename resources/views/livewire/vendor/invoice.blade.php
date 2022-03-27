<div class="card">
    <div class="card-header">
        {{-- <div class="row">
            <h5>Clients Orders</h5>
        </div> --}}
        <div class="row mt-2">
            <div class="col-md-1">
                <select wire:model.lazy="perPage" id="" class="form-control">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3" hidden>
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
            <div class="col-md-2" hidden>
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
                    <th scope="col">Order Id</th>
                    <th scope="col">Date Time</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Delivery Status</th>
                    <th scope="col">Amount (Rwf)</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- {{ $invoices }}     --}}



                    @forelse ($invoices as $order)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>
                          <a href="{{ route('vendor.details.invoice', $order->id) }}" class="d-flex flex-column" target="_blank">
                            <span>{{$order->shop->orderNo}}</span>
                            {{-- <span><strong class="mr-1">Items: </strong>
                            {{$order->items()->where('shop',Auth::guard('vendor')->id())->count()}}
                            </span> --}}
                          </a>
                      </td>
                      <td>
                          <div class="d-flex flex-column">
                            <span>{{$order->shop->created_at}}</span>
                            {{-- <div class="d-flex">
                              <a href="mailto:{{$order->email}}">{{$order->email}}</a>
                              <span class="mx-1">|</span>
                              <a href="tel:{{$order->phone}}">{{$order->phone}}</a>
                            </div> --}}
                          </div>
                      </td>
                      <td>
                        {{-- <div class="d-flex flex-column"> --}}

                          <span class="badge badge-success">{{$order->shop->payment_confirmed ? 'Payed': ''}}</span>
                          {{-- <div class="d-flex">
                            <span>{{$order->street}}</span>
                            <span class="mx-1">|</span>
                            <span>{{$order->neighborhood}}</span>
                          </div> --}}
                        {{-- </div> --}}
                      </td>
                      <td>{{$order->shop->status}}</td>
                      <td>{{$order->shop->total_amount}}</td>

                    </tr>
                    @empty

                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>
