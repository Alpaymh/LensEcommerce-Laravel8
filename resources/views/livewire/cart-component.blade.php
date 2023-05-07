<div>
    <!--main area-->
    <main id="main" class="main-site">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">Anasayfa</a></li>
                    <li class="item-link"><span>Sepet</span></li>
                </ul>
            </div>
            <div class=" main-content-area">
                @if(Cart::instance('cart')->count())
                <div class="wrap-iten-in-cart">
                    @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Başarılı.</strong> Ürün Eklenmiştir.
                        </div>
                    @endif
                    @if(Cart::instance('cart')->count() > 0)
                    <h3 class="box-title">Ürünler</h3>
                    <ul class="products-cart">
                        @foreach(Cart::instance('cart')->content() as $item)
                        <li class="pr-cart-item">
                            <div class="product-image">
                                <figure><img src="{{ asset('assets/images/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}"></figure>
                            </div>
                            <div class="product-name">
                                <a class="link-to-product" href="{{ route('product.details',$item->model->slug) }}">{{ $item->model->name }}</a>
                            </div>
                            <div class="price-field produtc-price"><p class="price">{{ $item->model->regular_price }} TL</p></div>
                            <div class="quantity">
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value="{{ $item->qty }}" data-max="120" pattern="[0-9]*" >
                                    <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"></a>
                                    <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"></a>
                                </div>
                                <p class="text-center"><a href="#" wire:click.prevent="switchToSaveForLater('{{ $item->rowId }}')">Sonrası İçin Kaydet.</a></p>
                            </div>
                            <div class="price-field sub-total"><p class="price">{{ $item->subtotal }} TL</p></div>
                            <div class="delete">
                                <a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')" class="btn btn-delete" title="">
                                    <span>Delete from your cart</span>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @else
                        <p>No item in cart</p>
                    @endif
                </div>

                <div class="summary">
                    <div class="order-summary">
                        <h4 class="title-box">SİPARİŞ ÖZETİ</h4>
                        <p class="summary-info"><span class="title">Ürün Tutarı</span><b class="index">{{ Cart::instance('cart')->subtotal() }} TL</b></p>
                        @if(Session::has('coupon'))
                            <p class="summary-info"><span class="title">İndirim {{ Session::get('coupon')['code'] }}
                                    <a href="#" class="fa fa-times text-danger" wire:click.prevent="removeCoupon"></a>
                                </span><b class="index"> -{{ number_format($discount,2) }} TL</b></p>
                            <p class="summary-info"><span class="title">İndirimli Fiyatı</span><b class="index">{{ number_format($subtotalAfterDiscount,2) }} TL</b></p>
                            <p class="summary-info"><span class="title">KDV ({{ config('cart.tax') }}%)</span><b class="index">{{ number_format($taxAfterDiscount,2) }} TL</b></p>
                            <p class="summary-info total-info "><span class="title">    </span><b class="index">{{ number_format($totalAfterDiscount,2) }} TL</b></p>
                        @else
                            <p class="summary-info"><span class="title">KDV</span><b class="index">{{ Cart::instance('cart')->tax() }} TL</b></p>
                            <p class="summary-info"><span class="title">Kargo Tutarı</span><b class="index">ÜCRETSİZ KARGO</b></p>
                            <p class="summary-info total-info "><span class="title">Toplam</span><b class="index">{{ Cart::instance('cart')->total() }} TL</b></p>
                        @endif
                    </div>

                    <div class="checkout-info"><br>
                        @if(!Session::has('coupon'))
                            <label class="checkbox-field">
                                <input class="frm-input " name="have-code" id="have-code" value="1" type="checkbox" wire:model="haveCouponCode"><span>Kupon kodum var</span>
                            </label>
                            @if($haveCouponCode)
                            <div class="summary-item">
                                <form action="" wire:submit.prevent="applyCouponCode">
                                    <h4 class="title-box" >Kupon Kodu</h4>
                                    @if(Session::has('coupon_message'))
                                        <div class="alert alert-danger" role="danger">
                                            {{ Session::get('coupon_message') }}
                                        </div>
                                    @endif
                                    <p class="row-in-form">
                                        <label for="coupon-code">Kupon Kodu:</label>
                                        <input type="text" name="coupon-code" wire:model="couponCode">
                                    </p>
                                    <button type="submit" class="btn btn-sm">KODU GİR</button>
                                </form>
                            </div>
                            @endif
                        @endif
                        <a class="btn btn-checkout" href="#" wire:click.prevent="checkout">DEVAM ET</a>
                        <a class="link-to-shop" href="shop.html">İŞLEMLER<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="update-clear">
                        <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll">SEPETİ TEMİZLE</a>
                        <a class="btn btn-update" href="#">SEPETİ GÜNCELLE</a>
                    </div>
                </div>
                @else
                    <div class="text-center" style="padding: 30px 0;">
                        <h1>Sepetin Boş!</h1>
                        <p>Hemen Alışverişe Başla</p>
                        <a href="/shop" class="btn btn-success">Alışverişe Başla</a>
                    </div>
                @endif

                <div class="wrap-iten-in-cart">
                    <h3 class="title-box" style="border-bottom: 1px solid;padding-bottom: 15px;">{{ Cart::instance('saveForLater')->count() }} Tane Ürün Kaydedildi.</h3>
                    @if(Session::has('s_success_message'))
                        <div class="alert alert-success">
                            <strong>Başırılı</strong> Ürün Eklenmiştir.
                        </div>
                    @endif
                    @if(Cart::instance('saveForLater')->count() > 0)
                        <h3 class="box-title">ÜRÜN İSMİ</h3>
                        <ul class="products-cart">
                            @foreach(Cart::instance('saveForLater')->content() as $item)
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        <figure><img src="{{ asset('assets/images/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}"></figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product" href="{{ route('product.details',$item->model->slug) }}">{{ $item->model->name }}</a>
                                    </div>
                                    <div class="price-field produtc-price"><p class="price">{{ $item->model->regular_price }} TL</p></div>
                                    <div class="quantity">
                                        <p class="text-center"><a href="#" wire:click.prevent="moveToCart('{{ $item->rowId }}')">Sepete Al</a></p>
                                    </div>
                                    <div class="price-field sub-total"><p class="price">{{ $item->subtotal }} TL</p></div>
                                    <div class="delete">
                                        <a href="#" wire:click.prevent="destroyFromSaveForLater('{{ $item->rowId }}')" class="btn btn-delete" title="">
                                            <span>Delete from Save For Later</span>
                                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Sonrası için ürün kaydedilmemiştir.</p>
                    @endif
                </div>

                
            </div><!--end main content area-->
        </div><!--end container-->
    </main>
    <!--main area-->
</div>
