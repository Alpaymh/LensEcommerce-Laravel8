<main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">Anasayfa</a></li>
                    <li class="item-link"><span>Sıkça Sorulan Sorular</span></li>
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
                                        <h3 class="form-title">Sıkça Sorulan Sorular</h3>
                                    </fieldset>
                                    <b>Kontakt lens kullanımı kolay mıdır?</b>
                                    <br><br>
                                    Yumuşak lensler kullanımı en kolay lenslerdir. Daha önce hiç kontakt
                                     lens kullanmadıysanız bile yumuşak lensleri rahatlıkla kullanabilirsiniz. 
                                     Yumuşak lensler yüksek oksijen geçirgenliğine sahiptir. Yeni nesil silikon
                                      hidrojel yumuşak saydam lens çeşitleri arasında bir ay boyunca gece bile gözden
                                       çıkartılmadan kullanılabilen lensler bulunmaktadır.
                                        Örneğin; Air Optix Night and Day AQUA yumuşak kontakt lensler 30 gün ve gece
                                         gözden çıkarılmadan kullanılabilmektedir.
                                    <br><br>
                                    <b>Kontakt lense adapte olmam ne kadar sürer?</b>
                                    <br><br>
                                    Günümüzde, çok konforlu olan yumuşak kontakt lenslere kullanıcıların çoğu birkaç
                                     saat gibi çok kısa bir zaman içerisinde adapte olurlar. Bazı lens kullanıcılarında
                                      bu süre biraz uzayabilir ancak süre birkaç günü pek geçmez.
                                      <br><br>
                                      <b> Gece ve gündüz hiç çıkarmadan kullanılabilen lensler var mı?</b>
                                      <br><br>
                                      Yeni nesil silikon-hidrojel lenslerin, olağan hidrojel yumuşak kontakt lenslerden
                                       5 kat daha fazla oksijen iletimi sağlayarak gece ve gündüz kullanılabilen çeşitleri 
                                       bulunmaktadır.
                                       <br><br>
                                       <b>Kontakt lensimi kullanmadığım zaman da günlük olarak dezenfeksiyon yapmam gerekir mi?</b>
                                       <br><br>
                                       Lenslerini sürekli kullanmayanlar kullanmadıkları süre içerisinde on beş günde bir
                                        solüsyonu yenileyerek lenslerini dezenfekte etmelidirler.
                                        <br><br>
                                        <b>Kontakt lens kullanırken makyaj yapabilir miyim?</b>
                                        <br><br>
                                        Evet, ancak lenslerinizi maskara, eye liner ve göz makyajı öncesi takmalısınız ve
                                         makyaj malzemelerinin lense bulaşmamasına dikkat etmelisiniz. Gözleriniz çok hassas 
                                         ise, kontakt lensler ile beraber kullanabilecek özel makyaj malzemelerini tercih etmelisiniz.
                                         <br><br>
                                         <b>Lensler gözümün içinde kaybolabilir mi?</b>
                                         <br><br>
                                         Hayır! Konjonktiva da denilen ince ancak dayanıklı bir zar göz kapaklarının iç kısmını kaplayarak
                                          gözün üstüne döner ve gözün beyaz kısmını (sklera) örter. Lensler bu zarı geçemez, ancak göz 
                                          kapaklarınızın altına kayabilir, yer değiştirebilir.
                                    <br><br><br>
                                                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </main>
    <!--main area-->
