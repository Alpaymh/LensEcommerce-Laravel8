{{--<div>--}}
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Yeni Ürün Ekle
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">Tüm Ürünler</a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="store">
                        <div class="form-group">
                            <label class="col-md-4 control-label">İsmi</label>
                            <div class="col-md-4" wire:key="input-product-name">
                                <input type="text" placeholder="Ürün İsmi" class="form-control input-md" wire:model="name" wire:keyup="generateSlug">
                                @error('name') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kodu</label>
                            <div class="col-md-4"  wire:key="input-product-slug">
                                <input type="text" placeholder="Kodu" class="form-control input-md" wire:model="slug">
                                @error('slug') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="short_description" class="col-md-4 control-label">Kısa Açıklaması</label>
                            <div class="col-md-4" wire:ignore>
                                <textarea name="" placeholder="Kısa Açıklaması" class="form-control" id="short_description" wire:model="short_description"></textarea>
                                @error('short_description') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Açıklaması</label>
                            <div class="col-md-4" wire:ignore>
                                <textarea name="" placeholder="Açıklaması" class="form-control" id="description" wire:model="description"></textarea>
                                @error('description') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="regular_price" class="col-md-4 control-label">Fiyat</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Fiyat" id="regular_price" class="form-control input-md" wire:model="regular_price">
                                @error('regular_price') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sale_price" class="col-md-4 control-label">İndirimli Fiyatı</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="İndirimli Fiyat" id="sale_price" class="form-control input-md" wire:model="sale_price">
                                @error('sale_price') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_sku" class="col-md-4 control-label">SKU</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="SKU" id="product_sku" class="form-control input-md" wire:model="SKU">
                                @error('SKU') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_stock" class="col-md-4 control-label">Stok Var mı?</label>
                            <div class="col-md-4">
                                <select name="" id="product_stock" wire:model="stock_status" class="form-control">
                                    <option value="instock">Var</option>
                                    <option value="outofstock">Yok</option>
                                </select>
                                @error('stock_status') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_featured" class="col-md-4 control-label">Popüler Ürün mü?</label>
                            <div class="col-md-4">
                                <select name="" id="product_featured" wire:model="featured" class="form-control">
                                    <option value="0">Hayır</option>
                                    <option value="1">Evet</option>
                                </select>
                                @error('featured') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_quantity" class="col-md-4 control-label">Adet</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Adet" id="product_quantity" class="form-control input-md" wire:model="quantity">
                                @error('quantity') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_image" class="col-md-4 control-label">Fotoğraf</label>
                            <div class="col-md-4">
                                <input type="file" id="product_image" class="input-file" wire:model="image">
                                <div class="{{ $image ? '' : 'invisible' }}" style="width: 120px;height: 120px;" >
                                    <img src="{{ $image ? $image->temporaryUrl() : '' }}" width="120" alt="">
                                </div>
                                @error('image') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="col-md-4 control-label">Kategorisi</label>
                            <div class="col-md-4">
                                <select name="" id="category_id" wire:model="category_id" class="form-control">
                                    <option value="">Kategoriler</option>
                                    @foreach($categories as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <div class="error" style="color: red;">{{ $message }}</div> @enderror
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
{{--</div>--}}

@section('custom_scripts')
    <script>
        $(function () {
            tinymce.init({
                selector: '#short_description',
                setup: function (editor) {
                    editor.on('Change', function (e) {
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description',sd_data);
                    });
                }
            });
            tinymce.init({
                selector: '#description',
                setup: function (editor) {
                    editor.on('Change', function (e) {
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description',d_data);
                    });
                }
            });
        });
    </script>
@endsection
