<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Kategori Ekle
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.categories') }}" class="btn btn-success pull-right">Tüm Kategoriler</a>
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
                            <label for="category_name" class="col-md-4 control-label">İsmi</label>
                            <div class="col-md-4" wire:key="input-name-2">
                                <input type="text" placeholder="Kategori Ekle" id="category_name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug">
                                @error('name') <div class="error" style="color: red;">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_slug" class="col-md-4 control-label">Kodu</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Kategori Kodu" id="category_slug" class="form-control input-md" wire:model="slug">
                                @error('slug') <div class="error" style="color: red;">{{ $message }}</div> @enderror
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
