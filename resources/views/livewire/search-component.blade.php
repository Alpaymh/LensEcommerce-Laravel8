<div>
    <!--main area-->
    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">Anasayfa</a></li>
                    <li class="item-link"><span>Ürünler</span></li>
                    {{--                    <li class="item-link"><span></span></li>--}}
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div class="banner-shop">
                        <a href="#" class="banner-link">
                            <figure><img src="{{ asset('assets/images/shop-banner.jpg') }}" alt=""></figure>
                        </a>
                    </div>
                    <div class="wrap-shop-control">
                        <h1 class="shop-title">Göz Lensleri</h1>
                        <div class="wrap-right">
                            <div class="sort-item orderby">
                                <select class="use-chosen" wire:model="sorting">
                                    <option value="default">Sırala</option>
                                    <option value="date">Son Eklenen Ürünler</option>
                                    <option value="price">Ucuzdan Pahalıya Sırala</option>
                                    <option value="price-desc">Pahalıdan Ucuza Sırala</option>
                                </select>
                            </div>
                            <div class="sort-item product-per-page">
                                <select name="post-per-page" class="use-chosen" wire:model="pagesize">
                                    <option value="3">3'lü Sayfa</option>
                                    <option value="12">12'li Sayfa</option>
                                    <option value="18">18'li Sayfa</option>
                                    <option value="24">24'lü Sayfa</option>
                                    <option value="32">32'li Sayfa</option>
                                </select>
                            </div>
                        </div>
                    </div><!--end wrap shop control-->

                    @if(count($products))
                        <div class="row">
                            <ul class="product-list grid-products equal-container">
                                @foreach($products as $product)
                                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                        <div class="product product-style-3 equal-elem">
                                            <div class="product-thumnail">
                                                <a href="{{ route('product.details',['slug' => $product->slug]) }}" title="{{ $product->name }}">
                                                    <figure><img src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="{{ $product->name }}"></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="{{ route('product.details',['slug' => $product->slug]) }}" class="product-name"><span>{{ $product->name }}</span></a>
                                                <div class="wrap-price"><span class="product-price">{{ $product->regular_price }} TL</span></div>
                                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">
                                                    Sepete Ekle
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <p style="padding-top: 30px;">Ürün Bulunmamaktadır.</p>
                    @endif

                    <div class="wrap-pagination-info">
                        {{ $products->links() }}
                        {{--                        <ul class="page-numbers">--}}
                        {{--                            <li><span class="page-number-item current" >1</span></li>--}}
                        {{--                            <li><a class="page-number-item" href="#" >2</a></li>--}}
                        {{--                            <li><a class="page-number-item" href="#" >3</a></li>--}}
                        {{--                            <li><a class="page-number-item next-link" href="#" >Next</a></li>--}}
                        {{--                        </ul>--}}
                        {{--                        <p class="result-count">Showing 1-8 of 12 result</p>--}}
                    </div>
                </div><!--end main products area-->

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">Kategoriler</h2>
                        <div class="widget-content">
                            <ul class="list-category">
                                @foreach($categories as $category)
                                    <li class="category-item">
                                        <a href="{{ route('product.category',['category' => $category->slug]) }}" class="cate-link">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                                {{--                                <li class="category-item has-child-cate">--}}
                                {{--                                    <a href="#" class="cate-link">Fashion & Accessories</a>--}}
                                {{--                                    <span class="toggle-control">+</span>--}}
                                {{--                                    <ul class="sub-cate">--}}
                                {{--                                        <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>--}}
                                {{--                                        <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>--}}
                                {{--                                        <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="category-item has-child-cate">--}}
                                {{--                                    <a href="#" class="cate-link">Furnitures & Home Decors</a>--}}
                                {{--                                    <span class="toggle-control">+</span>--}}
                                {{--                                    <ul class="sub-cate">--}}
                                {{--                                        <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>--}}
                                {{--                                        <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>--}}
                                {{--                                        <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="category-item has-child-cate">--}}
                                {{--                                    <a href="#" class="cate-link">Digital & Electronics</a>--}}
                                {{--                                    <span class="toggle-control">+</span>--}}
                                {{--                                    <ul class="sub-cate">--}}
                                {{--                                        <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>--}}
                                {{--                                        <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>--}}
                                {{--                                        <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="category-item">--}}
                                {{--                                    <a href="#" class="cate-link">Tools & Equipments</a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="category-item">--}}
                                {{--                                    <a href="#" class="cate-link">Organics & Spa</a>--}}
                                {{--                                </li>--}}
                            </ul>
                        </div>
                    </div><!-- Categories widget-->
                    {{-- 
                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">Brand</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited" data-show="6">
                                <li class="list-item"><a class="filter-link active" href="#">Fashion Clothings</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Laptop Batteries</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Printer & Ink</a></li>
                                <li class="list-item"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Sound & Speaker</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">Printer & Ink</a></li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">Sound & Speaker</a></li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
                                <li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- brand widget-->
                    
                    <div class="widget mercado-widget filter-widget price-filter">
                        <h2 class="widget-title">Price</h2>
                        <div class="widget-content">
                            <div id="slider-range"></div>
                            <p>
                                <label for="amount">Price:</label>
                                <input type="text" id="amount" readonly>
                                <button class="filter-submit">Filter</button>
                            </p>
                        </div>
                    </div><!-- Price-->

                    <div class="widget mercado-widget filter-widget">
                        <h2 class="widget-title">Color</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list has-count-index">
                                <li class="list-item"><a class="filter-link " href="#">Red <span>(217)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Yellow <span>(179)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Black <span>(79)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Blue <span>(283)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Grey <span>(116)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Pink <span>(29)</span></a></li>
                            </ul>
                        </div>
                    </div><!-- Color -->

                    <div class="widget mercado-widget filter-widget">
                        <h2 class="widget-title">Size</h2>
                        <div class="widget-content">
                            <ul class="list-style inline-round ">
                                <li class="list-item"><a class="filter-link active" href="#">s</a></li>
                                <li class="list-item"><a class="filter-link " href="#">M</a></li>
                                <li class="list-item"><a class="filter-link " href="#">l</a></li>
                                <li class="list-item"><a class="filter-link " href="#">xl</a></li>
                            </ul>
                            <div class="widget-banner">
                                <figure><img src="{{ asset('assets/images/size-banner-widget.jpg') }}" width="270" height="331" alt=""></figure>
                            </div>
                        </div>
                    </div><!-- Size -->
                    --}}
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div><!--end sitebar-->
            </div><!--end row-->
        </div><!--end container-->
    </main>
</div>
