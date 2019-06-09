@extends('Admin.Shared.layout')

@section('title', 'Post Oluştur')
@section('titleDescription', 'İçeriklerinizi bu alanda oluşturabilirsiniz.')


@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Post</h5>
                <span>Web Sitenizde içerikleri yayınlayabilmeniz için hazırlanmış bölümdür.</span>
            </div>
            <div class="card-block">
                <form class="form-material" action="/admin/posts/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group form-success">
                                <input type="text" name="name" class="form-control" maxlength="191">
                                <span class="form-bar"></span>
                                <label class="float-label">Ad</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group form-success">
                                <textarea name="desc" id="description" class="form-control"></textarea>
                                <span class="form-bar"></span>
                                <label class="float-label">Açıklama</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group form-success">
                                <textarea name="content" class="form-control ckeditor4" id="" ></textarea>
                                <span class="form-bar"></span>
                                <label class="float-label">İçerik</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Bağlı Menü</h4>
                                <select name="menu_id" class="form-control form-control-default">
                                    <option selected value="">Yok</option>
                                    @foreach($menus as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
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
                                <h4 class="sub-title">Statü</h4>
                                <select name="type" class="form-control form-control-default">
                                    <option selected value="content">content</option>
                                    <option value="album">album</option>
                                    <option value="contentWithAlbum">contentWithAlbum</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-success">
                                <h4 class="sub-title">Video</h4>
                                <input type="text" name="video" class="form-control" maxlength="191">
                                <span class="form-bar"></span>
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

@endsection

@section('js')
    <script src="/admin/custom_component/ckeditor4/ckeditor.js"></script>
    <script src="/admin/custom_component/ckeditor5/ckeditor.js"></script>
    <script src="/admin/custom_component/ckeditor5/translations/tr.js"></script>
    <script>
        $(function () {
            CKEDITOR.replaceAll('ckeditor4');

            ClassicEditor
                .create( document.querySelector( '#description' ), {
                    language: 'tr'
                } )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        })
    </script>
@endsection
