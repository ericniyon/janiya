@extends('backend.base')
@section('title')
    <title>Orders</title>
@endsection


@section('content')
<div class="container-fluid">
        @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
    @endif
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Orders
                                    <small>Admin Orders</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                                <li class="breadcrumb-item">Sales</li>
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Manage Order</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <div id="basic-1_wrapper" class="dataTables_wrapper no-footer"><div id="basic-1_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="basic-1"></label></div><table class="display dataTable no-footer" id="basic-1" role="grid" aria-describedby="basic-1_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order Id: activate to sort column descending" style="width: 132px;">Store</th><th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order Id: activate to sort column descending" style="width: 132px;">Order Id</th>

                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Payment Status: activate to sort column ascending" style="width: 296px;">Payment Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Payment Method: activate to sort column ascending" style="width: 247px;">Total Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Order Status: activate to sort column ascending" style="width: 193px;">Payment Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 154px;">Order Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 124px;">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                        @if ($orders->count()>0)
                                        @foreach ($orders as $order)

                                        <tr role="row" class="odd">
                                            <td>{{ $order->name }}</td>
                                            <td class="sorting_1">{{ $order->orderNo }}</td>

                                            <td>
                                                @if ($order->Status == 'Paid')
                                                <i class="fa fa-circle font-success f-12"></i>
                                                @elseif($order->Status == 'Completed')
                                                <i class="fa fa-circle font-info f-12"></i>
                                                @elseif($order->Status == 'On Delivery')
                                                <i class="fa fa-circle font-primary f-12"></i>
                                                 @elseif($order->Status == 'Panding}')
                                                <i class="fa fa-circle font-secondary f-12"></i>

                                                @else
                                                <i class="fa fa-circle font-warning f-12"></i>
                                                @endif</td>
                                            <td>{{ $order->total_amount }}</td>
                                            <td>
                                                @if ($order->payment_confirmed == 0)
                                                <i class="fa fa-circle font-warning f-12">Not Payed</i>

                                                @else
                                                <i class="fa fa-circle font-success f-12"> Payed</i>

                                                @endif
                                            </td>
                                            <td>
                                                @if ($order->status == 'Approved')
                                                <i class="fa fa-circle font-success f-12"></i>
                                                @elseif($order->status == 'Denied')
                                                <i class="fa fa-circle font-info f-12"></i>

                                                 @elseif($order->status == 'Panding}')
                                                <i class="fa fa-circle font-secondary f-12"></i>

                                                @else
                                                <i class="fa fa-circle font-warning f-12"></i>
                                                @endif
                                            </td>
                                            <td>
                                                <input type="checkbox" wire:click="changeStatus({{$order->id}})" {{$order->payment_confirmed?'checked':''}}>
                                                {{-- </span> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p colspan="7" class="text-center">The're no order yet !</p>
                                        @endif


                                    </tbody>
                                </table>
                                <div class="dataTables_info" id="basic-1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
