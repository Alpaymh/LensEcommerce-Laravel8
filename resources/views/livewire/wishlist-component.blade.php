<main id="main" class="main-site left-sidebar">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Anasayfa</a></li>
                <li class="item-link"><span>İstek Listesi</span></li>
            </ul>
        </div>

        <style>
            .product-wish {
                position: absolute;
                top: 10%;
                left: 0;
                z-index: 99;
                right: 30px;
                text-align: right;
                padding-top: 0;
            }
            .product-wish .fa {
                color: #cbcbcb;
                font-size: 32px;
            }
            .product-wish .fa:hover {
                color: #ff7007;
            }
            .fill-heart {
                color: #ff7007 !important;
            }
        </style>
        <div class="row">
            <ul class="product-list grid-products equal-container">
                @if(Cart::instance('wishlist')->count())
                    @foreach(Cart::instance('wishlist')->content() as $item)
                        <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem">
                                <div class="product-thumnail">
                                    <a href="{{ route('product.details',['slug' => $item->model->slug]) }}" title="{{ $item->model->name }}">
                                        <figure><img src="{{ asset('assets/images/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('product.details',['slug' => $item->model->slug]) }}" class="product-name"><span>{{ $item->model->name }}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{ $item->model->regular_price }} TL</span></div>
                                    <a href="#" class="btn add-to-cart" wire:click.prevent="moveProductFromWishlistToCart('{{ $item->rowId }}')">
                                        Sepete Ekle
                                    </a>
                                    <div class="product-wish">
                                        <a href="#" wire:click.prevent="removeFromWishlist({{ $item->model->id }})"><i class="fa fa-heart fill-heart"></i></a>
                                    </div>
                                    <br><br><br><br><br>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @else
                    <p style="padding-top: 30px;">İstek Listenizde Ürün Bulunmamaktadır.</p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                @endif
            </ul>
        </div>
    </div>
</main>
