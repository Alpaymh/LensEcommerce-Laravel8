<div>
    <!--main area-->
    <main id="main" class="main-site">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">Anasayfa</a></li>
                    <li class="item-link"><span>GİRİŞ</span></li>
                </ul>
            </div>
            <div class=" main-content-area">
             <form wire:submit.prevent="placeOrder">
                <div class="row">
                     <div class="col-md-12">
                     <div class="wrap-address-billing">
                    <h3 class="box-title">FATURA ADRESİ</h3>
                    <div class="billing-address">
                    <p class="row-in-form">
                            <label for="fname">Ad<span>*</span></label>
                            <input id="fname" type="text" name="fname" value="" placeholder="Lütfen Adınızı Giriniz." wire:model="firstname">
                            @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="lname">Soyad<span>*</span></label>
                            <input id="lname" type="text" name="lname" value="" placeholder="Lütfen Soyadınızı Giriniz." wire:model="lastname">
                            @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="email">E-mail:</label>
                            <input id="email" type="email" name="email" value="" placeholder="Lütfen e-postanızı Giriniz." wire:model="email">
                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="phone">Telefon Numarası<span>*</span></label>
                            <input id="phone" type="number" name="phone" value="" placeholder="Lütfen Telefon Numaranızı Giriniz." wire:model="mobile">
                            @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="add">Adres-1:</label>
                            <input id="add" type="text" name="add" value="" placeholder="Lütfen Adresinizi Giriniz." wire:model="line1">
                            @error('line1') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="add">Adres-2:</label>
                            <input id="add" type="text" name="add" value="" placeholder="Lütfen Adresinizi Giriniz." wire:model="line2">
                        </p>
                        <p class="row-in-form">
                            <label for="country">Ülke<span>*</span></label>
                            <input id="country" type="text" name="country" value="" placeholder="Lütfen Ülkenizi Giriniz." wire:model="country">
                            @error('country') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="city">Şehir<span>*</span></label>
                            <input id="city" type="text" name="city" value="" placeholder="Şehir İsmi" wire:model="city">
                            @error('city') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="city">İlçe<span>*</span></label>
                            <input id="district" type="text" name="district" value="" placeholder="İlçe İsmi" wire:model="province">
                            @error('province') <span class="text-danger">{{$message}}</span> @enderror

                        </p>
                        <p class="row-in-form">
                            <label for="zip-code">Posta Kodu:</label>
                            <input id="zip-code" type="number" name="zip-code" value="" placeholder="Posta Kodunuz" wire:model="zipcode">
                            @error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form fill-wife">
                            <label class="checkbox-field">
                                <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
                                <span>Farklı bir adrese mi gitsin?</span>
                            </label>
                                </p>
                            </div>
                        </div>
                    </div>
                    @if($ship_to_different)
                    <div class="row">
                        <div class="col-md-12">
                         <div class="wrap-address-billing">
                        <h3 class="box-title">ALIŞVERİŞ ADRESİ</h3>
                        <div class="billing-address">
                        <p class="row-in-form">
                            <label for="fname">Ad<span>*</span></label>
                            <input id="fname" type="text" name="fname" value="" placeholder="Lütfen Adınızı Giriniz." wire:model="s_firstname">
                            @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="lname">Soyad<span>*</span></label>
                            <input id="lname" type="text" name="lname" value="" placeholder="Lütfen Soyadınızı Giriniz." wire:model="s_lastname">
                            @error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="email">E-mail:</label>
                            <input id="email" type="email" name="email" value="" placeholder="Lütfen e-postanızı Giriniz." wire:model="s_email">
                            @error('s_email') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="phone">Telefon Numarası<span>*</span></label>
                            <input id="phone" type="number" name="phone" value="" placeholder="Lütfen Telefon Numaranızı Giriniz." wire:model="s_mobile">
                            @error('s_mobile') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="add">Adres-1:</label>
                            <input id="add" type="text" name="add" value="" placeholder="Lütfen Adresinizi Giriniz." wire:model="s_line1">
                            @error('s_line1') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="add">Adres-2:</label>
                            <input id="add-2" type="text" name="add-2" value="" placeholder="Lütfen Adresinizi Giriniz." wire:model="s_line2">
                        </p>
                        <p class="row-in-form">
                            <label for="country">Ülke<span>*</span></label>
                            <input id="country" type="text" name="country" value="" placeholder="Lütfen Ülkenizi Giriniz." wire:model="s_country">
                            @error('s_country') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="city">Şehir<span>*</span></label>
                            <input id="city" type="text" name="city" value="" placeholder="Şehir İsmi" wire:model="s_city">
                            @error('s_city') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="city">İlçe<span>*</span></label>
                            <input id="district" type="text" name="district" value="" placeholder="İlçe İsmi" wire:model="s_province">
                            @error('s_province') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="zip-code">Posta Kodu:</label>
                            <input id="zip-code" type="number" name="zip-code" value="" placeholder="Posta Kodunuz" wire:model="s_zipcode">
                            @error('s_zipcode') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Ödeme Yöntemleri</h4>
                        <div class="choose-payment-methods">
                        <label class="payment-method">
                                <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmode">
                                <span>Kapıda Ödeme</span>
                            </label>
                            {{-- <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="bank" type="radio" wire:model="paymentmode">
                                <span>Banka Transferi</span>
                                <span class="payment-desc"></span>
                            </label>--}}
                            @error('paymentmode') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        @if(Session::has('checkout'))
                        <p class="summary-info grand-total"><span>Toplam Tutar:</span> <span class="grand-total-price">{{Session::get('checkout')['total']}} TL</span></p>
                        @endif
                        <button type="submit" class="btn btn-medium">Siparişi Onayla</button>
                    </div>
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Kargo</h4>
                        <p class="summary-info"><span class="title">Ücretsiz</span></p>
                    </div>
                </div>
             </form>
            </div><!--end main content area-->
        </div><!--end container-->
    </main>
    <!--main area-->
</div>
