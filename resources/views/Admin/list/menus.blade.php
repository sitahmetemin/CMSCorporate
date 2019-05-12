@extends('Admin.Shared.layout')

@section('title', 'Menuler')
@section('titleDescription', 'Menü ile alakalı işlemlerinizi buradan yapabilirsiniz.')


@section('content')
    <div class="col-12">
        <!-- Default ordering table start -->
        <div class="card">
            <div class="card-header">
                <h5>Menüler</h5>
                <span>Web Sitenizde içerikleri kategorize edebilmeniz ve yayınlayabilmeniz için hazırlanmış bölümdür.</span>
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
                            <th>Son Güncelleme</th>
                            <th>İşlemler</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($menus as $menu)
                            <tr>
                                <td>{{ $menu->id }}</td>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->type }}</td>
                                <td><span class="label label-{{ $menu->status ==  "active" ? "success" : "danger"  }}">{{ $menu->status == "active" ? "Aktif" : "Pasif"  }}</span></td>
                                <td>{{ $menu->updated_at }}</td>
                                <td>
                                    <a href="" class="btn btn-outline-primary waves-effect btn-icon" data-toggle="tooltip" data-placement="right" title="Düzenle">
                                        <i class="fa fa-edit"></i>
                                    </a> -
                                    <a href="" class="btn btn-outline-warning btn-icon waves-effect " data-toggle="tooltip" data-placement="right" title="Kilitle">
                                        <i class="fa fa-lock"></i>
                                    </a> -
                                    <a href="" class="btn btn-outline-info btn-icon  waves-effect" data-toggle="tooltip" data-placement="right" title="Sırala">
                                        <i class="fa fa-list"></i>
                                    </a> -
                                    <a href="" class="btn btn-outline-danger btn-icon waves-effect" data-toggle="tooltip" data-placement="right" title="Sil">
                                        <i class="fa fa-trash"></i>
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
