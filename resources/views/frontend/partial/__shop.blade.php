<li class="navbar-item dropdown-megamenu"><a class="navbar-link dropdown-arrow" href="#">Shops</a>
    <div class="megamenu" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">

          @foreach (App\Models\Vendor::paginate(12) as $shop)
              
          <div class="col-lg-{{ 12/App\Models\ProductCategory::paginate(12)->count() }}" bis_skin_checked="1">
              <div class="megamenu-wrap" bis_skin_checked="1">
               <a href="{{ route('shops.list.single', $shop->slug) }}">
                <h5 class="megamenu-title">{{ $shop->shop_name }}</h5>
                </a>
                <ul class="megamenu-list">
                 
                 <li><a href="{{ route('shops.list.single', $shop->slug) }}">
                 
                  <img src="{{ $shop->cover_image }}" style="width: 12rem;" />
                 </a></li>
                  
                      
                  </ul>
              </div>
          </div>
          @endforeach

                
                
            </div>
        </div>
    </div>
</li>
