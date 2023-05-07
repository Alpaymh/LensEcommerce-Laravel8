{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}

{{--        <!-- Styles -->--}}
{{--        <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}

{{--        <!-- Scripts -->--}}
{{--        <script src="{{ mix('js/app.js') }}" defer></script>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="font-sans text-gray-900 antialiased">--}}
{{--            {{ $slot }}--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alpago Alışveriş Sitesine Hoşgeldiniz.</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    @livewireStyles
</head>
<body class="home-page home-01 ">

<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu right-menu">
                        <ul>
                            @if(Route::has('login'))
                                @auth
                                    @if(\Illuminate\Support\Facades\Auth::user()->utype === 'ADM')
                                        <li class="menu-item menu-item-has-children parent" >
                                            <a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency" >
                                                <li class="menu-item" >
                                                    <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    @else
                                        <li class="menu-item menu-item-has-children parent" >
                                            <a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency" >
                                                <li class="menu-item" >
                                                    <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    @endif
                                @else
                                    <li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Giriş</a></li>
                                    <li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}"><i class="fa fa-registered" aria-hidden="true"></i> Kayıt Ol</a></li>
                                @endif
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="/" class="link-to-home"><img src="{{ asset('assets/images/logo-top-1.png') }}" alt="mercado"></a>
                    </div>

                    @livewire('header-search-component')

                      <div class="wrap-icon right-section">
                        <div class="wrap-icon-section wishlist">
                            @livewire('partials.wish-qty-component')
                        </div>
                        <div class="wrap-icon-section minicart">
                            @livewire('partials.cart-qty-component')
                        </div>
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
                <div class="header-nav-section">
                    <div class="container">
                        <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Menü" >
                            <li></li>
                            <li></li>
                            <li class="menu-item"><a href="/" class="link-term">Anasayfa</a></li>
                            <li class="menu-item"><a href="{{ route('page.shop') }}" class="link-term">Ürünler</a><span class="nav-label hot-label">İndirim</span></li>
                            <li class="menu-item"><a href="/cart" class="link-term">Sepet</a></li>
                            <li class="menu-item"><a href="/about" class="link-term">Hakkımızda</a></li>
                            <!-- <li class="menu-item"><a href="/checkout" class="link-term">Alışverişi Tamamla</a></li> -->
                            <li class="menu-item"><a href="/communication" class="link-term">İLETİŞİM</a></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</header>

{{$slot}}

<footer id="footer">
    <div class="wrap-footer-content footer-style-1" >

        <div class="wrap-function-info" >
            <div class="container">
                <ul>
                    <li class="fc-info-item">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Ücretsiz Kargo</h4>
                            <p class="fc-desc">Alışverişlerinizde Kargo Ücretsizdir</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-recycle" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">İade</h4>
                            <p class="fc-desc">Bir Hafta İçinde Para İade Garantisi</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Güvenli Alışveriş</h4>
                            <p class="fc-desc">Alışverişlerinizde Güvenlik Garantisi</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Canlı Destek</h4>
                            <p class="fc-desc">7/24 Canlı Destek</p>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
        <!--End function info-->

        <div class="main-footer-content">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">İletişime Geçin</h3>
                            <div class="item-content">
                                <div class="wrap-contact-detail">
                                    <ul>
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="contact-txt">İstanbul Kadıköy Atatürk Bulvarı 1903. Sokak No:3</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="contact-txt">0530 651 1460 </p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="contact-txt">alpay.mh@gmail.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                        <div class="wrap-footer-item">
                            <h3 class="item-header">7/24 Canlı Destek</h3>
                            <div class="item-content">
                                <div class="wrap-hotline-footer">
                                    <span class="desc">Bizi Arayın</span>
                                    <b class="phone-number">0530 651 1460</b>
                                </div>
                            </div>
                        </div>
                        {{-- 
                        <div class="wrap-footer-item footer-item-second">
                            <h3 class="item-header">BÜLTEN İÇİN KAYDOLUN</h3>
                            <div class="item-content">
                                <div class="wrap-newletter-footer">
                                    <form action="#" class="frm-newletter" id="frm-newletter">
                                        <input type="email" class="input-email" name="email" value="" placeholder="Lütfen E-Mailini Giriniz.">
                                        <button class="btn-submit">Abone Ol</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        --}}
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                        <div class="row">
                            <div class="wrap-footer-item twin-item">
                                <h3 class="item-header">Yardım</h3>
                                <div class="item-content">
                                    <div class="wrap-vertical-nav">
                                        <ul>
                                            <li class="menu-item"><a href="/about" class="link-term">Biz Kimiz</a></li>
                                            <li class="menu-item"><a href="/communication" class="link-term">İletişim</a></li>
                                            <li class="menu-item"><a href="/sss" class="link-term">Sıkça Sorulan Sorular</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">Güvenli Ödeme İşlemi</h3>
                            <div class="item-content">
                                <div class="wrap-list-item wrap-gallery">
                                    <img src="{{ asset('assets/images/payment.png') }}" style="max-width: 260px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">Sosyal Hesablarımız</h3>
                            <div class="item-content">
                                <div class="wrap-list-item social-network">
                                    <ul>
                                        <li><a href="https://twitter.com" target="_blank" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.facebook.com" target="_blank" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://tr.pinterest.com" target="_blank" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com" target="_blank" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://vimeo.com" target="_blank" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">Mobil Uygulamalarımız</h3>
                            <div class="item-content">
                                <div class="wrap-list-item apps-list">
                                    <ul>
                                        <li><a href="https://www.apple.com/tr/app-store/" class="link-to-item" target="_blank" title="our application on apple store"><figure><img src="{{ asset('assets/images/brands/apple-store.png') }}" alt="apple store" width="128" height="36"></figure></a></li>
                                        <li><a href="https://play.google.com/store/games?hl=tr&gl=US" target="_blank" class="link-to-item" title="our application on google play store"><figure><img src="{{ asset('assets/images/brands/google-play-store.png') }}" alt="google play store" width="128" height="36"></figure></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

            

        </div>

        <div class="coppy-right-box">
            <div class="container">
                <div class="coppy-right-item item-left">
                    <p class="coppy-right-text">Copyright © Alpago. Tüm hakkı saklıdır.</p>
                </div>
                <div class="coppy-right-item item-right">
                    {{--  <div class="wrap-nav horizontal-nav">
                         <ul>
                            <li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>
                            <li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
                            <li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
                            <li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>
                        </ul>
                    </div>--}}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
{{--<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>--}}
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
@livewireScripts
</body>
</html>

