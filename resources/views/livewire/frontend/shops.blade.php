<section class="section suggest-part">
    <div class="container">


        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            @forelse ($shops as $shop)
                
            <div class="col">
                <div class="product-card border-1 border-success">
                    <div class="product-media">
                        {{-- <div class="product-label">
                            <label class="label-text sale">{{ $shop->active }}</label>
                        </div> --}}
                            
                            <a class="product-image"
                            href="{{ route('shops.list.single', $shop->slug) }}"><img src="https://wp.alithemes.com/html/nest/demo/assets/imgs/vendor/vendor-2.png" alt="product"></a>
                        
                    </div>
                    <div class="product-content">
                        
                        <h6 class="feature-name text-bold"><a href="{{ route('shops.list.single', $shop->slug) }}"><strong>{{ $shop->shop_name }}</strong></a></h6>
                        
                        <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><i class="fa fa-map-marked-alt"></i><span>{{Illuminate\Support\Str::limit($shop->location,20) }} </span></li>
                                        
                                        <li><i class="fa fa-phone"></i><span>{{ $shop->contact_person_phone }}</span></li>
                                    </ul>
                                </div>


                        
                            <a href="{{ route('shops.list.single', $shop->slug) }}" class="text-success py-4 text-bold "><i class="fa fa-arrow-alt-circle-right"></i>Visit shop</a>
                            
                        
                        
                    </div>
                </div>
            </div>
            @empty
                <p>Currently there is no shop</p>
            @endforelse




        </div>

    </div>
</section>
