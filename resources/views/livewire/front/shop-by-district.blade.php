<div class="container">
    <div class="row d-flex justify-content-end">
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <select wire:model="district" id="" class="form-control">
                @foreach ($districts as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row partition-collection">
        @forelse ($shops as $vendor)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="collection-block">
                <div>
                    <img src="{{asset($vendor->profile?Storage::url($vendor->profile):'assets/images/default-shop.jpg')}}" 
                    class="img-fluid blur-up lazyload bg-img" 
                    alt="{{$vendor->shop_name}}">
                </div>
                <div class="collection-content">
                    <h4>({{$vendor->boughtProducts()->count()}} products)</h4>
                    <h3>{{$vendor->shop_name}}</h3>
                    <p>{{str()->limit($vendor->details,100,'...')}}</p>
                    <a href="{{route('shops.list.single',[$vendor->slug])}}" class="btn btn-outline"
                        >View Shop!</a>
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>
</div>