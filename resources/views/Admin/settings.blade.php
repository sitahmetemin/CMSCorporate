@extends('Admin.Shared.layout')

@section('title', 'Ayarlar Paneli')
@section('titleDescription', 'Site Ayarlarını Bu alandan Yönetebilirsiniz.')

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
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Kayıtlı Ayarlar</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li>
                            <i class="fa fa fa-wrench open-card-option"></i>
                        </li>
                        <li>
                            <i class="fa fa-window-maximize full-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-minus minimize-card"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-block">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="site-tab" data-toggle="tab" href="#site" role="tab" aria-controls="home" aria-selected="true">
                            <i class="fa fa-cogs mr-1"></i>Site
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="profile" aria-selected="false">
                            <i class="fa fa-thumbs-up mr-1"></i>Sosyal Medya
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                            <i class="fa fa-phone mr-1"></i>İletişim
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="site" role="tabpanel" aria-labelledby="home-tab">
                        <form class="form-material" action="/admin/settings/site" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-4">
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="title" class="form-control" value="{{ $setting->title }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Title</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="keywords" class="form-control" data-role="tagsinput" value="{{ $setting->keywords }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">keywords</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="copyright" class="form-control" value="{{ $setting->copyright }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">copyright</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="url" class="form-control" value="{{ $setting->url }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">url</label>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group form-success">
                                        <input type="text" name="slogan" class="form-control" value="{{ $setting->slogan }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">slogan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-success">
                                        <input type="text" name="description" class="form-control" value="{{ $setting->description }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Description</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-success">
                                        <input type="text" name="maps" class="form-control" value="{{ $setting->maps }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">maps</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-success">
                                        <input type="text" name="analystic" class="form-control" value="{{ $setting->analystic }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">analystic</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-success">
                                        <input type="text" name="recapctha" class="form-control" value="{{ $setting->recapctha }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">recapctha</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <div class="form-group form-success">
                                        <h4 class="sub-title">Çok Yakında Sayfası</h4>
                                        <select name="isComingSoon" class="form-control form-control-default">
                                            <option {{ $setting->isComingSoon == 1 ? 'selected' : null }} value="1">Aktif</option>
                                            <option {{ $setting->isComingSoon == 0 ? 'selected' : null }} value="0">Pasif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group form-success">
                                        <h4 class="sub-title">Varsayılan Menü</h4>
                                        <select name="menu_id" class="form-control form-control-default">
                                            <option value="1">Aktif</option>
                                            <option selected value="0">Pasif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group form-success">
                                        <h4 class="sub-title">Varsayılan Slider</h4>
                                        <select name="slider_id" class="form-control form-control-default">
                                            <option value="1">Aktif</option>
                                            <option selected value="0">Pasif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group form-success">
                                        <h4 class="sub-title">Site Teması</h4>
                                        <select name="site_theme" class="form-control form-control-default">
                                            <option value="{{ $setting->site_theme }}">{{ $setting->site_theme }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-10">
                                    <div class="form-group form-success">
                                        <input type="file" name="logo" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">logo</label>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <img width="100" height="100" src="https://place-hold.it/100x100" alt="">
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
                    <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="form-material" action="/admin/settings/social" method="post" >
                            @csrf
                            <div class="row mt-4">
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="facebook" class="form-control" value="{{ $setting->facebook }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">facebook</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="instagram" class="form-control" value="{{ $setting->instagram }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">instagram</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="twitter" class="form-control" value="{{ $setting->twitter }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">twitter</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="youtube" class="form-control" value="{{ $setting->youtube }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">youtube</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="linkedin" class="form-control" value="{{ $setting->linkedin }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">linkedin</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="vimeo" class="form-control" value="{{ $setting->vimeo }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">vimeo</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="whatsapp" class="form-control" value="{{ $setting->whatsapp }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">whatsapp</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="pinterest" class="form-control" value="{{ $setting->pinterest }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">pinterest</label>
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
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <form class="form-material" action="/admin/settings/contact" method="post" >
                            @csrf
                            <div class="row mt-4">
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="tel1" class="form-control" value="{{ $setting->tel1 }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">tel1</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="tel2" class="form-control" value="{{ $setting->tel2 }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">tel2</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="gsm1" class="form-control" value="{{ $setting->gsm1 }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">gsm1</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="gsm2" class="form-control" value="{{ $setting->gsm2 }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">gsm2</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="fax1" class="form-control" value="{{ $setting->fax1 }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">fax1</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="fax2" class="form-control" value="{{ $setting->fax2 }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">fax2</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="mail1" class="form-control" value="{{ $setting->mail1 }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">mail1</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="mail2" class="form-control" value="{{ $setting->mail2 }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">mail2</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="address" class="form-control" value="{{ $setting->address }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">address</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="county" class="form-control" value="{{ $setting->county }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">county</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group form-success">
                                        <input type="text" name="il" class="form-control" value="{{ $setting->province }}" maxlength="191">
                                        <span class="form-bar"></span>
                                        <label class="float-label">province</label>
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
        </div>
    </div>

@endsection

@section('css')

    <!-- Tags css -->
    <link rel="stylesheet" type="text/css" href="/admin/bower_components/bootstrap-tagsinput/css/bootstrap-tagsinput.css" />

    <style>
        .bootstrap-tagsinput{
            width: 100%;
        }
    </style>

@endsection

@section('js')

    <!-- Tags js -->
    <script type="text/javascript" src="/admin/bower_components/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <script>

    </script>
@endsection
