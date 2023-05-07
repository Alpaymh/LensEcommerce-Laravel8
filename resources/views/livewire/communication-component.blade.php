<main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">Anasayfa</a></li>
                    <li class="item-link"><span>İLETİŞİM</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">
                                <x-jet-validation-errors class="mb-4" />
                                <form name="frm-login" method="POST" action="https://formspree.io/f/xpzebbjp">
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Bize Ulaşın</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-lname">Ad ve Soyad:</label>
                                        <input type="text" id="frm-reg-lname" name="name" placeholder="Lütfen Ad ve Soyadınızı Giriniz." >
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">E-Mail:</label>
                                        <input type="email" id="frm-login-uname" name="email" placeholder="Lütfen E-posta Adresinizi Giriniz.">
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Telefon:</label>
                                        <input type="text" id="frm-login-phone" name="phone"  placeholder="Lütfen Telefonunuzu Giriniz.">
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Konu:</label>
                                        <input type="text" id="frm-login-konu" name="konu"  placeholder="Lütfen Konuyu Giriniz.">
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Mesajınız:</label>
                                        <textarea name="mesaj" id="mesaj" class="form-control" onkeydown="yorumsinirla(this.form.mesaj,this.form.olan,254);" onkeyup="yorumsinirla(this.form.mesaj,this.form.olan,254);" onchange="yorumsinirla(this.form.mesaj,this.form.olan,254);"></textarea>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label class="remember-field">
                                            <input class="frm-input " name="ulasin" id="oneri" value="oneri" type="radio"><span>&nbsp;Öneri &nbsp;&nbsp;&nbsp;</span>
                                            <input class="frm-input " name="ulasin" id="sikayet" value="sikayet" type="radio"><span>&nbsp;Şikayet</span>
                                        </label>
                                    </fieldset>
                                    <input type="submit" class="btn btn-submit" value="Gönder" name="submit">
                                </form>
                                <br>
                                <b>Firma Bilgileri</b>
                                <br>
                                Alpago A.Ş.
                                MERSİS: 062110322730001
                                Optisyenlik Müessesesi Ruhsatnamesi
                                Belge No:2022626-5
                                <br><br>
                                <b>Adres
                                Bahçelievler Mahallesi Hanımeli Sokak No:8A
                                Bahçelievler/İstanbul/TÜRKİYE</b>
                                <br>
                                <b>E-Posta:</b>
                                info@alpago.com
                                <br>
                                <b>Telefon:</b>
                                +90 530 651 1460
                                KKTC den aramak için +90 530 651 1460
                                <br><br><br>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.895778487091!2d28.870587900000004!3d41.005654299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb8975cb7175%3A0xfdf1b8829dcf5df!2sBah%C3%A7elievler%20Merkez%2C%20Han%C4%B1meli%20Sk.%201%2F8%2C%2034180%20Bah%C3%A7elievler%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1683431763919!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->
            

        </div><!--end container-->
    </main>
    <!--main area-->
