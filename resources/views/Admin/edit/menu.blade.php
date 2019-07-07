@extends('Admin.Shared.layout')

@section('title', 'Menü Oluştur')
@section('titleDescription', 'Menülerinizi bu alanda Düzenleyebilirsiniz.')


@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Menüler</h5>
                <span>Web Sitenizde içerikleri kategorize edebilmeniz ve yayınlayabilmeniz için hazırlanmış bölümdür.</span>
            </div>
            <div class="card-block">
                <form action="/admin/menus/store" method="post" id="menuForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <label class="float-label">Ad</label>
                            <div class="input-group form-static-label form-success">
                                <input type="text" name="name" onkeyup="string_to_slug()" id="name" class="form-control" maxlength="191" value="{{ $menu->name }}">
                                <span class="form-bar"></span>
                            </div>
                        </div>
                        <div class="col-4">
                            <label class="">Url</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="slug" id="slug" readonly value="{{ $menu->slug }}">
                                <div class="input-group-append ">
                                    <span class="input-group-text bg-success" id="statusCont"><i id="slugStatus" class="fa fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <label class="float-label">icon</label>
                            <div class="input-group form-success">
                                <input name="icon" id="iconPicker" class="form-control" type="text" value="{{ $menu->icon }}">
                                <span class="form-bar"></span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Bağlı Menü</h4>
                                <select name="parent_id" class="form-control form-control-success">
                                    <option selected value="">Yok</option>
                                    @foreach($menus as $item)
                                        <option {{ $item->id == $menu->parent_id ? "selected" : null }} value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Menü Tipi</h4>
                                <select name="type" class="form-control form-control-success">
                                    <option {{ $item->type == "menu_list" ? "selected" : null }} value="menu_list">Menü Listesi</option>
                                    <option {{ $item->type == "blog_list" ? "selected" : null }} value="blog_list">Blog Listesi</option>
                                    <option {{ $item->type == "product_list" ? "selected" : null }} value="product_list">Ürün Listesi</option>
                                    <option {{ $item->type == "content" ? "selected" : null }} value="content">İçerik</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Statü</h4>
                                <select name="status" class="form-control form-control-success">
                                    <option {{ $item->status == "active" ? "selected" : null }} value="active">Aktif</option>
                                    <option {{ $item->status == "passive" ? "selected" : null }} value="passive">Pasif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="col6">
                                <label class="float-label">kapak</label>
                                <div class="form-group form-success">
                                    <input type="file" name="cover" class="form-control" data-role="tagsinput" maxlength="191">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col6">
                                <img src="{{ $menu->cover }}" alt="">
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

        string_to_slug = () => {
            let str = document.getElementById("name").value;

            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;şığ";
            var to = "aaaaeeeeiiiioooouuuunc------sig";
            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                .replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/-+/g, '-'); // collapse dashes

            document.getElementById("slug").value = str;

            let data = $('form').serialize();

            genericAjax("POST", "/admin/menus/create/check-slug", data, false, successFunc, null);

        };

        successFunc = (msg) => {
            if (msg === "not-found") {
                $('#slugStatus').addClass("fa-check");
                $('#statusCont').addClass("bg-success");
                $('#slugStatus').removeClass("fa-times");
                $('#statusCont').removeClass("bg-danger");

            } else {
                $('#slugStatus').removeClass("fa-check");
                $('#statusCont').removeClass("bg-success");
                $('#slugStatus').addClass("fa-times");
                $('#statusCont').addClass("bg-danger");

            }

        };

    </script>


@endsection
