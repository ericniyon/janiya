<ul class="category-list">
    @forelse ($categories as $category)

        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-vegetable"></i><span>{{ $category->category_name }}</span></a>
            <ul class="dropdown-list">

                @forelse (\App\Models\Product::where('product_category_id', $category->id)->get() as $product)
                    <li><a href="{{ route('product.single', $product->slug) }}">{{ $product->product_name }}</a></li>

                @empty
                @endforelse

            </ul>
        </li>
    @empty
        <span>OOps!@ there is no category fund yet</span>
    @endforelse

</ul>
