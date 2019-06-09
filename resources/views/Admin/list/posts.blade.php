@extends('Admin.Shared.layout')

@section('title', 'İçerikler')
@section('titleDescription', 'İçeriklerle ile alakalı işlemlerinizi buradan yapabilirsiniz.')


@section('content')
    @if (session('status'))
        <div class="col-12">
            <div class="alert alert-{{ session('status') == "success" ? "success" : "danger" }} background-{{ session('status') == "success" ? "success" : "danger" }}">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled text-white"></i>
                </button>
                <strong>{{ session('status') == "success" ? "İşlem Başarılı" : session('status') }}</strong>
            </div>
        </div>
    @endif

    <div class="col-12">
        <!-- Default ordering table start -->
        <div class="card">
            <div class="card-header">
                <h5>İçerikler</h5>
                <span>Web Sitenizde içerikleri yayınlayabilmeniz için hazırlanmış bölümdür.</span>
                <div class="position-absolute create-btn">
                    <a class=" btn btn-success btn-icon waves-effect" href="/admin/posts/create" title="Ekle">
                        <i class="fa fa-plus"></i>
                    </a>
                    <a class=" btn btn-primary btn-icon waves-effect" href="/admin/posts/deleted" title="Silinenler">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="dataTable" class="table table-striped table-hover table-bordered nowrap">
                        <thead class="bg-primary text-white">
                        <tr>
                            <th>#</th>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Statü</th>
                            <th>Bağlı Menü</th>
                            <th>Son Güncelleme</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tfoot class="bg-primary text-white">
                        <tr>
                            <th>#</th>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Statü</th>
                            <th>Bağlı Menü</th>
                            <th>Son Güncelleme</th>
                            <th>İşlemler</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{!! $post->name !!}</td>
                                <td>{{ $post->type }}</td>
                                <td>
                                    <span class="label label-{{ $post->status ==  "active" ? "success" : "danger"  }}">{{ $post->status == "active" ? "Aktif" : "Pasif"  }}</span>
                                </td>
                                <td>
                                    {{ !empty($post->parent->name) ? $post->parent->name : "Yok" }}
                                </td>
                                <td>{{ $post->updated_at }}</td>
                                <td align="center" width="200" >
                                    <a href="/admin/posts/edit/{{ $post->id }}" class="btn btn-outline-primary waves-effect btn-icon" title="Düzenle">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="/admin/posts/copy/{{ $post->id }}" class="btn btn-outline-secondary waves-effect btn-icon" title="Kopyala">
                                        <i class="fa fa-copy"></i>
                                    </a>
                                    {{--todo: Burada Kaldın--}}
                                    <a href="/admin/posts/comments/{{ $post->id }}" class="btn btn-outline-secondary waves-effect btn-icon" title="Yorumlar">
                                        <i class="fa fa-comments-o"></i>
                                    </a>
                                    <a href="/admin/posts/delete/{{ $post->id }}" class="btn btn-outline-danger btn-icon waves-effect" title="Sil">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Default ordering table end -->

    </div>
@endsection

@section('css')
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="/admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
@endsection

@section('js')
    <!-- data-table js -->
    <script src="/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
@endsection
