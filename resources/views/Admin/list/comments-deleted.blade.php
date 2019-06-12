@extends('Admin.Shared.layout')

@section('title', 'Silinen Yorumlar')
@section('titleDescription', 'Silinen İçeriklere yapılan yorumlar ile alakalı işlemlerinizi buradan yapabilirsiniz.')


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
                <h5>Silinen İçerik Yorumları</h5>
                <span>Web Sitenizde Silinen  içeriklere yapılan yorumlar yayınlayabilmeniz için hazırlanmış bölümdür.</span>
                <div class="position-absolute create-btn">
                    <a class=" btn btn-primary btn-icon waves-effect" href="/admin/comments/deleted" title="Silinen Yorumlar">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </div>
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="dataTable" class="table table-striped table-hover table-bordered nowrap">
                        <thead class="bg-primary text-white">
                        <tr>
                            <th>#</th>
                            <th>Yorum</th>
                            <th>Yorum Yapılan İçerik</th>
                            <th>Mail</th>
                            <th>Statü</th>
                            <th>Son Güncelleme</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tfoot class="bg-primary text-white">
                        <tr>
                            <th>#</th>
                            <th>Yorum</th>
                            <th>Yorum Yapılan İçerik</th>
                            <th>Mail</th>
                            <th>Statü</th>
                            <th>Son Güncelleme</th>
                            <th>İşlemler</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>{{ $comment->mail }}</td>
                                <td>
                                    <span class="label label-{{ $comment->status ==  "active" ? "success" : "danger"  }}">{{ $comment->status == "active" ? "Aktif" : "Pasif"  }}</span>
                                </td>
                                <td>
                                    {{ !empty($comment->menu->name) ? $comment->menu->name : "Yok" }}
                                </td>
                                <td>{{ $comment->updated_at }}</td>
                                <td align="center" width="100" >
                                    <a href="/admin/comments/show/{{ $comment->id }}" class="btn btn-outline-primary waves-effect btn-icon" title="Göster">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="/admin/comments/delete/{{ $comment->id }}" class="btn btn-outline-danger btn-icon waves-effect" title="Sil">
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
