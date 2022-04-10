<div class="container">
    <div class="row">
        <div class="col-sm-12 table-responsive-md">
            <table class="table cart-table">
                <thead>
                    <tr class="table-head">
                        <th scope="col">Product </th>
                        <th scope="col">Color</th>
                        <th scope="col">Size</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Remove Item</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(\Cart::getContent() as $item)
                        <tr data-id="{{ $item->id }}">
                            <td data-th="Product">{{ $item->name }}</td>
                            <td data-th="Color">{{ $item->attributes['color'] }}</td>
                            <td data-th="Size">{{ $item->attributes['size'] }}</td>
                            <td data-th="Price">{{ $item->price }}</td>
                            <td data-th="Quantity">
                                <div class="d-flex align-items-center justify-content-around">
                                    <label for="">{{ $item->quantity }}</label>
                                    <div class="d-flex flex-column pt-0 justify-content-center">
                                        <button class="btn btn-outline-none" wire:click.prevent="increase({{$item->id}})"
                                        style="font-size: 17px; height:25px;" {{$item->quantity ==$item->model->quantity-10?"disabled":''}}>
                                            <i class="fa fa-chevron-up"></i>
                                        </button>
                                        <button class="btn btn-outline-none" wire:click.prevent="decrease({{$item->id}})"
                                        style="font-size: 17px; height:25px;" {{$item->quantity==1?'disabled':''}}>
                                            <i class="fa fa-chevron-down"></i>
                                        </button>
                                    </div>
                                </div>
                            {{-- <button class="incriment update-cart"><i class="fa fa-plus"></i></button> --}}
                            </td>
                            <td data-th="Subtotal" class="text-center">{{ money($item->price * $item->quantity) }}</td>
                            <td class="actions" data-th="Remove Item">
                                <button class="btn btn-danger btn-sm remove-from-cart"
                                wire:click.prevent="removeItem({{$item->id}})">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="table-responsive-md">
                <table class="table cart-table ">
                    <tfoot>
                        <tr>
                            <td>total price :</td>
                            <td>
                                <h4>{{money(\Cart::getSubTotal())}}</h4>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="row cart-buttons">
        <div class="col-6"><a href="{{route('vendor.store')}}" class="btn btn-solid">continue shopping</a></div>
        <div class="col-6"><a wire:click.prevent="confirmOrder" class="btn btn-solid">Confirm & Save</a></div>
    </div>
</div>
