<ul class="category-list">
    @forelse ($categories as $category)
        
    <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                class="flaticon-vegetable"></i><span>{{ $category->category_name }}</span></a>
        <ul class="dropdown-list">
            @forelse ($category->products() as $item)
            <li><a href="#">asparagus</a></li>
            <li><a href="#">broccoli</a></li>
            <li><a href="#">carrot</a></li>
            @empty
                
            @endforelse
        </ul>
    </li>
    @empty
        <span>OOps!@ there is no category fund yet</span>
    @endforelse
            
        </ul>