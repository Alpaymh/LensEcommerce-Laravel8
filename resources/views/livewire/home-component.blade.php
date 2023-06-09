<div>
    <main id="main">
        <div class="container">
            <!--MAIN SLIDE-->
            <div class="wrap-main-slide">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                    @foreach($sliders as $item)
                    <div class="item-slide">
                        <img src="{{ asset('assets/images/sliders') }}/{{ $item->image }}" alt="" class="img-slide">
                        <div class="slide-info slide-1">
                            <h2 class="f-title"><b>{{ $item->title }}</b></h2>
                            <span class="subtitle">{{ $item->subtitle }}</span>
                            <p class="sale-info">Fiyat: <span class="price">{{ $item->price }} TL</span></p>
                            <a href="{{ $item->link }}" class="btn-link">Alışverişe Başla</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!--BANNER-->
            <div class="wrap-banner style-twin-default">
                <div class="banner-item">
                    <a href="/shop" class="link-banner banner-effect-1">
                        <figure><img src="{{ asset('assets/images/anasayfa-banner-1.jpg') }}" alt="" width="580" height="190"></figure>
                    </a>
                </div>
                <div class="banner-item">
                    <a href="shop" class="link-banner banner-effect-1">
                        <figure><img src="{{ asset('assets/images/anasayfa-banner-2.jpg') }}" alt="" width="580" height="190"></figure>
                    </a>
                </div>
            </div>

            <!--On Sale-->
            @if($sale_products->count() && $sale->status == 1 && $sale->sale_date > \Carbon\Carbon::now())
                <div class="wrap-show-advance-info-box style-1 has-countdown">
                    <h3 class="title-box">On Sale</h3>
                    <div class="wrap-countdown mercado-countdown" data-expire="{{ $sale->sale_date->format('Y/m/d h:m:s') }}"></div>
                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                        @foreach($sale_products as $s_product)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ route('product.details',['slug' => $s_product->slug]) }}" title="{{ $s_product->name }}">
                                        <figure><img src="{{ asset('assets/images/products') }}/{{ $s_product->image }}" width="800" height="800" alt=""></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item sale-label">sale</span>
                                    </div>
                                    {{--                            <div class="wrap-btn">--}}
                                    {{--                                <a href="#" class="function-link">quick view</a>--}}
                                    {{--                            </div>--}}
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('product.details',['slug' => $s_product->slug]) }}" class="product-name"><span>{{ $s_product->name }}</span></a>
                                    <div class="wrap-price"><ins><p class="product-price">${{ $s_product->sale_price }}</p></ins> <del><p class="product-price">${{ $s_product->regular_price }}</p></del></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
    
            <!--Latest Products-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Günlük Lensler</h3>
                <div class="wrap-top-banner">
                    <a href="/shop" class="link-banner banner-effect-2">
                        <figure><img src="{{ asset('assets/images/anasayfa-banner-3.jpg') }}" width="1170" height="240" alt=""></figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                    <h3 class="title-box">Son Eklenen Ürünler</h3>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="digital_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    @foreach($latests as $item)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{ route('product.details',['slug' => $item->slug]) }}" title="{{ $item->name }}">
                                                <figure><img src="{{ asset('assets/images/products') }}/{{ $item->image }}" width="800" height="800" alt="{{ $item->name }}"></figure>
                                            </a>
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route('product.details',['slug' => $item->slug]) }}" class="product-name"><span>{{ $item->name }}</span></a>
                                            <div class="wrap-price"><span class="product-price">{{ $item->regular_price }} TL</span></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Product Categories-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">ÜCRETSİZ KARGO </h3>
                <div class="wrap-top-banner">
                    <a href="/shop" class="link-banner banner-effect-2">
                        <figure><img src="{{ asset('assets/images/anasayfa-banner-4.jpg') }}" width="1170" height="240" alt=""></figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            @foreach($categories as $key => $item)
                                <a href="#category_{{ $item->id }}"  class="tab-control-item {{ $key == 0 ? 'active' : '' }}">{{ $item->name }}</a>
                            @endforeach
                        </div>
                        <div class="tab-contents">
                            @foreach($categories as $key => $category)
                            <div class="tab-content-item {{ $key == 0 ? 'active' : '' }}" id="category_{{ $category->id }}">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    @php
                                        $homeCat = \App\Models\HomeCategory::query()->where('sel_categories',$category->id)->first();
                                        $no_of_products = $homeCat->no_of_products;
                                        $products = \App\Models\Product::query()->where('category_id',$category->id)->get()->take($no_of_products);
                                    @endphp
                                    @foreach($products as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{ route('product.details',['slug' => $product->slug]) }}" title="{{ $product->name }}">
                                                <figure><img src="{{ asset('assets/images/products') }}/{{ $product->image }}" width="800" height="800" alt="{{ $product->name }}"></figure>
                                            </a>
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>{{ $product->name }}</span></a>
                                            <div class="wrap-price"><span class="product-price">{{ $product->regular_price }} TL</span></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach

{{--                            <div class="tab-content-item" id="fashion_1b">--}}
{{--                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_03.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item bestseller-label">Bestseller</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_07.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item bestseller-label">Bestseller</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_08.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item bestseller-label">Bestseller</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_09.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item bestseller-label">Bestseller</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quic view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_02.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item bestseller-label">Bestseller</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_05.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item bestseller-label">Bestseller</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_08.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item bestseller-label">Bestseller</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_04.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item bestseller-label">Bestseller</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="tab-content-item" id="fashion_1c">--}}
{{--                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_02.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_03.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                                <span class="flash-item sale-label">sale</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_04.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_05.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                                <span class="flash-item sale-label">sale</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_06.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_07.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                                <span class="flash-item sale-label">sale</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_08.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quic view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_09.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                                <span class="flash-item sale-label">sale</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quic view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="tab-content-item" id="fashion_1d">--}}
{{--                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_05.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="product-rating">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_04.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item sale-label">sale</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quic view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="product-rating">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_03.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                                <span class="flash-item sale-label">sale</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quic view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="product-rating">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_02.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item bestseller-label">Bestseller</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quic view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="product-rating">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_01.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quic view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="product-rating">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_06.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item sale-label">sale</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quic view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="product-rating">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_08.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item new-label">new</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quic view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="product-rating">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product product-style-2 equal-elem ">--}}
{{--                                        <div class="product-thumnail">--}}
{{--                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
{{--                                                <figure><img src="{{ asset('assets/images/products/fashion_09.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
{{--                                            </a>--}}
{{--                                            <div class="group-flash">--}}
{{--                                                <span class="flash-item bestseller-label">Bestseller</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-btn">--}}
{{--                                                <a href="#" class="function-link">quic view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
{{--                                            <div class="product-rating">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
