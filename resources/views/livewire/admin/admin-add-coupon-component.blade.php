<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Yeni Kupon Ekle
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.coupons') }}" class="btn btn-success pull-right">Tüm Kuponlar</a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <form action="" class="form-horizontal" wire:submit.prevent="store">
                        <div class="form-group">
                            <label for="coupon_code" class="col-md-4 control-label">Kodu</label>
                            <div class="col-md-4" wire:key="input-name-2">
                                <input type="text" placeholder="Coupon Code" id="coupon_code" class="form-control input-md" wire:model.lazy="code">
                                @error('code') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="coupon_type" class="col-md-4 control-label">Tip</label>
                            <div class="col-md-4">
                                <select name="" class="form-control" id="coupon_type" wire:model.lazy="type">
                                    <option value="">Tip</option>
                                    <option value="fixed">Sabit</option>
                                    <option value="percent">Yüzdelik</option>
                                </select>
                                @error('type') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="coupon_value" class="col-md-4 control-label">Değeri</label>
                            <div class="col-md-4" wire:key="input-name-2">
                                <input type="text" placeholder="Kupon Değeri" id="coupon_value" class="form-control input-md" wire:model.lazy="value">
                                @error('value') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="coupon_cart_value" class="col-md-4 control-label">Sepet Değeri</label>
                            <div class="col-md-4" wire:key="input-name-2">
                                <input type="text" placeholder="Kupon Sepet Değeri" id="coupon_cart_value" class="form-control input-md" wire:model.lazy="cart_value">
                                @error('cart_value') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="expiry_date" class="col-md-4 control-label">Son Kullanma Tarihi</label>
                            <div class="col-md-4" wire:key="input-name-2" wire:ignore>
                                <input type="text" placeholder="Expiry Date" id="expiry_date" class="form-control input-md" wire:model="expiry_date">
                                @error('expiry_date') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('custom_scripts')
    <script>
        $(function () {
            $('#expiry_date').datetimepicker({
                format: 'Y-MM-DD'
            }).on('dp.change', function (ev) {
                var data = $('#expiry_date').val();
                @this.set('expiry_date',data);
            });
        })
    </script>
@endsection

