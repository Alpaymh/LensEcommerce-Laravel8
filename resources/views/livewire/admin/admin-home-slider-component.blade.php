<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Tüm Sliderler
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.add.homeslider') }}" class="btn btn-success pull-right">Yeni Slider Ekle</a>
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
                                <th>Resim</th>
                                <th>Başlık</th>
                                <th>Altbaşlık</th>
                                <th>Fiyat</th>
                                <th>Link</th>
                                <th>Durumu</th>
                                <th>Eklenme Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            @foreach($sliders as $item)
                            <tbody>
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><img src="{{ asset('assets/images/sliders') }}/{{ $item->image }}" width="120" alt=""></td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->subtitle }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->link }}</td>
                                <td>{{ $item->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.edit.homeslider',['slide_id' => $item->id]) }}" style="font-size: 10px;">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
