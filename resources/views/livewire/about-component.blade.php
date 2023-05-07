    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">Anasayfa</a></li>
                    <li class="item-link"><span>Hakkımızda</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">
                                <x-jet-validation-errors class="mb-4" />
                                <form name="frm-login" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">BİZ KİMİZ?</h3>
                                    </fieldset>
                                    Güvenli E-Ticaret Altyapısı
                                    Alpago.Com, kredi kartıyla yapacağınız alışverişlerde güvenliğiniz
                                    için en son teknolojileri ve en iyi servis sağlayıcıları kullanır.
                                    Bilgilerinizin gerçekten Alpago.Com’a gönderildiğini güvence 
                                    altına alarak,2048 bit şifreleme ile iletilen bilgilerin güvenliğini 
                                    sağlayan SSL güvenlik sertifikalarının en yüksek standardı olan Extended 
                                    Validation (EV SSL) Sertifikasıkullanılmaktadır. Bu sertifikaya sahip olmak
                                    için çok sıkı bir güvenlik prosedüründen geçen Alpago.Com’u, 
                                    güncel versiyonlu tarayıcınızda açtığınızda adres çubuğunuz, firma 
                                    bilgileriyle birlikte yeşil görünür. Green Bar (Yeşil Adres Çubuğu), 
                                    Alpago.Com’un Extended Validation SSL sertifikasına sahip olduğunu 
                                    siteyi açar açmaz görmenize olanak sağlar. Buna ilave olarak PCI DSS** Compliance
                                    güvenlik taraması ve 3D Secure* servisleri sayesinde güvenliğinizi riske atmadan
                                    sitemizde özgürce alışveriş yapabilirsiniz.
                                    Sistemimizde hiçbir şekilde Kredi kartı bilgileriniz kayıtlı olarak tutulmamaktadır.
                                    <br><br><br>
                                    <figure><img src="{{ asset('assets/images/about-1.png') }}" alt="" width="580" height="190"></figure>
                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </main>
    <!--main area-->
