<div>
    <a href="{{ route('products.wishlist') }}" class="link-direction">
        <i class="fa fa-heart" aria-hidden="true"></i>
        <div class="left-info">
            @if(Cart::instance('wishlist')->count())
                <span class="index">{{ Cart::instance('wishlist')->count() }} Adet</span>
            @endif
                <span class="title">İstek Listesi</span>
        </div>
    </a>
</div>
