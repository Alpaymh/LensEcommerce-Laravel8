<div>
    <style>
        nav svg {
            height: 20px;
        }
        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Tüm Kategoriler
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.add.category') }}" class="btn btn-success pull-right">Kategori Ekle</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kategori Adı</th>
                                <th>Kodu</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            @foreach($categories as $item)
                            <tbody>
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.edit.category',['category_slug' => $item->slug]) }}" style="font-size: 10px;">
                                        <i class="fa fa-edit fa-2x"></i>
                                    </a>
                                    <a href="#" onclick="confirm('Emin misiniz?') || event.stopImmediatePropagation();" wire:click.prevent="delete({{ $item->id }})" style="font-size: 10px;margin-left: 10px;">
                                        <i class="fa fa-times fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
{{--                        <div class="wrap-pagination-info">--}}
                            {{ $categories->links('vendor.livewire.simple-tailwind') }}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
