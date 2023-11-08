@forelse (App\Models\Vendor::where('confirmed',1)->where('active',1)->get() as $shop)
    <div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 349px;" bis_skin_checked="1"
        tabindex="-1">
        <div bis_skin_checked="1">
            <div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                <div class="category-wrapper" bis_skin_checked="1">
                    <div bis_skin_checked="1">
                        <div class="bg-size blur-up lazyloaded"
                            style="background-image: url(&quot;{{ Storage::disk('s3')->url($shop->profile) }}&quot;); background-size: cover; background-position: center center; display: block;"
                            bis_skin_checked="1">
                            <img src="{{ Storage::disk('s3')->url($shop->profile) }}" class="img-fluid blur-up lazyload bg-img"
                                alt="" style="display: none;">
                        </div>
                        <h4>{{ $shop->shop_name }}</h4>
                        <ul class="category-link">
                            <li><a href="#" tabindex="-1">Location : d1 milano</a></li>
                            <li><a href="#" tabindex="-1">Phone Number : damaskeening</a></li>
                            <li><a href="#" tabindex="-1">Email Address : diving watch</a></li>
                            <li><p>{{ Str::limit($shop->details, 150, '...') }}</p></li>
                        </ul><a href="{{ route('shops.list.single', $shop->slug) }}" class="btn btn-outline" tabindex="-1">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
@endforelse
