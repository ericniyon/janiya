<div class="header-widget-group">
    <a href="compare.html" class="header-widget" title="Compare List"> <i class="fas fa-random"></i><sup>0</sup></a>
    <a href="wishlist.html" class="header-widget" title="Wishlist"><i class="fas fa-heart"></i><sup>0</sup></a>
    <button class="header-widget header-cart" title="Cartlist">
        <i class="fas fa-shopping-basket"></i><sup>{{ !\Cart::isEmpty() ? \Cart::getContent()->count() : 0 }}</sup>
        <span>total price<small>{{ !\Cart::isEmpty() ? money(\Cart::getSubTotal()) : 'Rwf00.00' }}</small></span>
    </button>
</div>