 <ul class="cart-list">
    @foreach(\Cart::getContent() as $item)
   <li class="cart-item">
      <div class="cart-media">
        <a href="#">
            <img src="{{ $item->model->product_image ? asset($item->model->product_image): asset('assets/images/2.jpg') }}" 
            alt="{{ $item->model->product_name }}">
        </a>
        <button class="cart-delete" wire:click.prevent="removeItem({{$item->id}})"><i class="far fa-trash-alt"></i></button>
      </div>
      <div class="cart-info-group">
         <div class="cart-info">
            <h6><a href="product-single.html">{{ $item->model->product_name }}</a></h6>
            <p>Unit Price - {{ money($item->price) }}</p>
         </div>
         <div class="cart-action-group">
            <div class="product-action">
                <button class="action-minus1" 
                    title="Quantity Minus" 
                    wire:click.prevent="decrease({{$item->id}})"
                    {{$item->quantity==1?'disabled':''}}>
                    <i class="icofont-minus"></i>
                </button>
                <input class="action-input1" 
                    title="Quantity Number" 
                    type="text" 
                    name="quantity" 
                    value="{{ $item->quantity }}">
                <button 
                    class="action-plus" 
                    title="Quantity Plus" 
                    wire:click.prevent="increase({{$item->id}})">
                    <i class="icofont-plus"></i>
                </button>
            </div>
            <h6>{{ money($item->price * $item->quantity) }}</h6>
         </div>
      </div>
   </li>
   @endforeach
</ul>