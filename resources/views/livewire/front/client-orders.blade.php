<div class="dashboard">
    <div class="page-title d-flex justify-content-between">
        <h2>My Orders</h2>
        <div class="d-flex">
            <input type="date" wire:model.lazy="starting_date" min="2022-02-01" max="{{date('Y-m-d')}}" id="">
            <input type="date" wire:model.lazy="until" min="2022-02-01" max="{{date('Y-m-d')}}" id="">
        </div>
    </div>
    <div class="welcome-msg table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>OrderNo</th>
                    <th>Items</th>
                    <th>Promoter</th>
                    <th>Discount</th>
                    <th>Total</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="{{route('orders.single',\Crypt::encryptString($order->id))}}">{{$order->orderNo}}</a></td>
                    <td>{{$order->items()->count()}}</td>
                    <td>{{$order->ReferencedBy()->exists()?$order->ReferencedBy->name:''}}</td>
                    <td>{{$order->discount}}</td>
                    <td>{{$order->total}}</td>
                    <td>{{$order->payment_method}}</td>
                    <td>{{$order->Status}}</td>
                </tr>
                @empty
                    <tr>
                        <td colspan="7">
                            <h4 class="text-center">No Orders yet</h4>
                            <h5><a href="{{route('shop')}}">Click to buy from our shops</a></h5>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>