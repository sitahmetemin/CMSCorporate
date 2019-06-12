@extends('Admin.Shared.layout')

@section('title', 'Menü Oluştur')
@section('titleDescription', 'Menülerinizi bu alanda oluşturabilirsiniz.')


@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Menüler</h5>
                <span>Web Sitenizde içerikleri kategorize edebilmeniz ve yayınlayabilmeniz için hazırlanmış bölümdür.</span>
            </div>
            <div class="card-block">
                <form class="form-material" action="/admin/menus/edit/{{ $menu->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group form-success">
                                <input type="text" name="name" class="form-control" maxlength="191" value="{{ $menu->name }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Ad</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <input name="icon" id="iconPicker" class="form-control" type="text" value="{{ $menu->icon }}">
                                <span class="form-bar"></span>
                                <label class="float-label">icon</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <input type="file" name="cover" class="form-control" data-role="tagsinput" maxlength="191" value="{{ $menu->cover }}">
                                <span class="form-bar"></span>
                                <label class="float-label">kapak</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Bağlı Menü</h4>
                                <select name="parent_id" class="form-control form-control-default">
                                    <option value="">Yok</option>
                                    @foreach($menus as $item)
                                        @if($item->id != $menu->id)
                                            @if($item->id == $menu->parent_id)
                                                <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                            @else
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endif
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Menü Tipi</h4>
                                <select name="type" class="form-control form-control-default">
                                    <option {{ $menu->type == 'menu_list' ? 'selected' : null }} value="menu_list">Menü Listesi</option>
                                    <option {{ $menu->type == 'blog_list' ? 'selected' : null }} value="blog_list">Blog Listesi</option>
                                    <option {{ $menu->type == 'product_list' ? 'selected' : null }} value="product_list">Ürün Listesi</option>
                                    <option {{ $menu->type == 'content' ? 'selected' : null }} value="content">İçerik</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Statü</h4>
                                <select name="status" class="form-control form-control-default">
                                    <option {{ $menu->status == 'active' ? 'selected' : null }} value="active">Aktif</option>
                                    <option {{ $menu->status == 'passive' ? 'selected' : null }} value="passive">Pasif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success waves-effect" title="Kaydet">
                                <i class="fa fa-save"></i>
                            </button>
                            <button type="reset" class="btn btn-danger waves-effect" title="Temizle">
                                <i class="fa fa-history"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
    {{--icon picker--}}
    <link rel="stylesheet" href="/admin/custom_component/fontawesome-iconpicker-3.0.0/dist/css/fontawesome-iconpicker.min.css">

@endsection

@section('js')
    {{--todo: Unutma! fontawesome icon picker göstermiyor ona bak. Çalışıyor ama göstermiyor.--}}
    {{--icon picker--}}
    <script src="/admin/custom_component/fontawesome-iconpicker-3.0.0/dist/js/fontawesome-iconpicker.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#iconPicker').iconpicker();
        });
    </script>
@endsection