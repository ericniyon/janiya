@extends('backend.base')
@section('title')
    <title>Transactions</title>
@endsection


@section('content')
<div class="container-fluid">
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
                                        <th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order Id: activate to sort column descending" style="width: 132px;">Transaction Ref</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 222px;">Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Payment Status: activate to sort column ascending" style="width: 296px;">Charged Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Payment Method: activate to sort column ascending" style="width: 247px;">Payment Type</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Order Status: activate to sort column ascending" style="width: 193px;">Currency</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 154px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 124px;">Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                        @if ($transactions->count()>0)
                                        @foreach ($transactions as $transaction)

                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $transaction->tx_ref }}</td>
                                            <td><span class="badge badge-secondary">{{ $transaction->amount }}</span></td>
                                            <td>{{ $transaction->charged_amount }}</td>
                                            <td>{{ $transaction->payment_type }}</td>
                                            <td>{{ $transaction->currency }}</td>
                                            <td>{{ $transaction->created_at }}</td>
                                            <td>
                                                <span class="badge badge-primary">{{ $transaction->status }}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="7" class="text-center">

                                                <p >The're no order yet !</p>
                                            </td>
                                        </tr>
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
