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
                <form class="form-material" action="/admin/menus/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group form-success">
                                <input type="text" name="name" class="form-control" maxlength="191">
                                <span class="form-bar"></span>
                                <label class="float-label">Ad</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <input type="text" name="slug" class="form-control" maxlength="191">
                                <span class="form-bar"></span>
                                <label class="float-label">URL</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <input name="icon" id="iconPicker" class="form-control" type="text">
                                <span class="form-bar"></span>
                                <label class="float-label">icon</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Bağlı Menü</h4>
                                <select name="parent_id" class="form-control form-control-default">
                                    <option selected value="">Yok</option>
                                    @foreach($menus as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Menü Tipi</h4>
                                <select name="type" class="form-control form-control-default">
                                    <option value="menu_list">Menü Listesi</option>
                                    <option value="blog_list">Blog Listesi</option>
                                    <option value="product_list">Ürün Listesi</option>
                                    <option value="content">İçerik</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Statü</h4>
                                <select name="status" class="form-control form-control-default">
                                    <option selected value="active">Aktif</option>
                                    <option value="passive">Pasif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <input type="file" name="cover" class="form-control" data-role="tagsinput" maxlength="191">
                                <span class="form-bar"></span>
                                <label class="float-label">kapak</label>
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
    <link rel="stylesheet" type="text/css" href="/admin/assets/icon/font-awesome-v5-free/css/all.min.css">
    <link rel="stylesheet" href="/admin/custom_component/fontawesome-iconpicker-3.2.0/dist/css/fontawesome-iconpicker.min.css">


@endsection

@section('js')

    {{--icon picker--}}
    <script src="/admin/custom_component/fontawesome-iconpicker-3.2.0/dist/js/fontawesome-iconpicker.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#iconPicker').iconpicker({
                animation: false
            });
        });
    </script>
@endsection
