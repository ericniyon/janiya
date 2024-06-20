<li class="navbar-item dropdown-megamenu"><a class="navbar-link dropdown-arrow" href="#">Categories</a>
    <div class="megamenu" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">

          @foreach (App\Models\ProductCategory::paginate(12) as $category)
              
          <div class="col-lg-{{ 12/App\Models\ProductCategory::paginate(12)->count() }}" bis_skin_checked="1">
              <div class="megamenu-wrap" bis_skin_checked="1">
               <a href="{{ route('shop') }}">
                <h5 class="megamenu-title">{{ $category->category_name }}</h5>
                </a>
                  <ul class="megamenu-list">
                   @foreach (App\Models\Product::where('product_category_id', $category->id)->paginate(5) as $product)
                       
                   <li><a href="{{ route('product.single', $product->slug) }}">{{ $product->product_name }}</a></li>
                   @endforeach
                      
                  </ul>
              </div>
          </div>
          @endforeach

                
                
            </div>
        </div>
    </div>
</li>
