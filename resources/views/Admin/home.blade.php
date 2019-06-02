@extends('Admin.Shared.layout')

@section('title', 'Anasayfa')
@section('titleDescription', 'Sayfa Açıklaması')

@section('content')



    <!-- task, page, download counter  start -->
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-purple">$30200</h4>
                        <h6 class="text-muted m-b-0">All Earnings</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-bar-chart f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-purple">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-green">290+</h4>
                        <h6 class="text-muted m-b-0">Page Views</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-file-text-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-green">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-red">145</h4>
                        <h6 class="text-muted m-b-0">Task Completed</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-calendar-check-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-red">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-blue">500</h4>
                        <h6 class="text-muted m-b-0">Downloads</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-hand-o-down f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-blue">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- task, page, download counter  end -->

    <!--  sale analytics start -->
    <div class="col-xl-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Sales Analytics</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div id="sales-analytics" style="height: 330px;"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Sales Prediction</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="row justify-content-end align-items-center">
                    <div class="col-md-6">
                        <h3>$3987</h3>
                        <p class="text-muted m-b-5">25% Increased</p>
                        <h6>(160-180 Sales)</h6>
                    </div>
                    <div class="col-md-6">
                        <div id="sales-prediction-chart" style="height: 100px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5>Emails Sent</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="row justify-content-end align-items-center">
                    <div class="col-md-6">
                        <h6 id="opened" class="text-c-blue">520 Opened</h6>
                        <h6 id="unopened" class="text-c-red">70 Unopened</h6>
                    </div>
                    <div class="col-md-6">
                        <div id="emails-sentsales-chart" style="height: 100px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  sale analytics end -->

    <!--  application sale start -->
    <div class="col-xl-8 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Application Sales</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table table-hover  table-borderless">
                        <thead>
                        <tr>
                            <th>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                                                            <i class="cr-icon fa fa-check txt-default"></i>
                                                                                        </span>
                                        </label>
                                    </div>
                                </div>
                                Application</th>
                            <th>Sales</th>
                            <th>Change</th>
                            <th>Avg Price</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-inline-block align-middle">
                                    <h6>Able Pro</h6>
                                    <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                </div>
                            </td>
                            <td>16,300</td>
                            <td><canvas id="app-sale1" style="height:50px"></canvas></td>
                            <td>$53</td>
                            <td class="text-c-blue">$15,652</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-inline-block align-middle">
                                    <h6>Photoshop</h6>
                                    <p class="text-muted m-b-0">Design Software</p>
                                </div>
                            </td>
                            <td>26,421</td>
                            <td><canvas id="app-sale2" style="height:50px"></canvas></td>
                            <td>$35</td>
                            <td class="text-c-blue">$18,785</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-inline-block align-middle">
                                    <h6>Guruable</h6>
                                    <p class="text-muted m-b-0">Best Admin Template</p>
                                </div>
                            </td>
                            <td>8,265</td>
                            <td><canvas id="app-sale3" style="height:50px"></canvas></td>
                            <td>$98</td>
                            <td class="text-c-blue">$9,652</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-inline-block align-middle">
                                    <h6>Flatable</h6>
                                    <p class="text-muted m-b-0">Admin App</p>
                                </div>
                            </td>
                            <td>10,652</td>
                            <td><canvas id="app-sale4" style="height:50px"></canvas></td>
                            <td>$20</td>
                            <td class="text-c-blue">$7,856</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>New Users</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <canvas id="newuserchart" height="200"></canvas>
            </div>
            <div class="card-footer ">
                <div class="row text-center b-t-default">
                    <div class="col-4 b-r-default m-t-15">
                        <h5>85%</h5>
                        <p class="text-muted m-b-0">Satisfied</p>
                    </div>
                    <div class="col-4 b-r-default m-t-15">
                        <h5>6%</h5>
                        <p class="text-muted m-b-0">Unsatisfied</p>
                    </div>
                    <div class="col-4 m-t-15">
                        <h5>9%</h5>
                        <p class="text-muted m-b-0">NA</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-green">290+</h4>
                        <h6 class="text-muted m-b-0">Page Views</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-file-text-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-green">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  application sale end -->

    <!-- seo start -->
    <div class="col-xl-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Allocation</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-8">
                        <div id="allocation-map" style="height:250px" ></div>
                    </div>
                    <div class="col-sm-4">
                        <div id="allocation-chart" style="height:250px" ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-12">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h3>$16,756</h3>
                        <h6 class="text-muted m-b-0">Visits<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                    </div>
                    <div class="col-6">
                        <canvas id="seo-chart1" height="80px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h3>49.54%</h3>
                        <h6 class="text-muted m-b-0">Bounce Rate<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                    </div>
                    <div class="col-6">
                        <canvas id="seo-chart2" height="80px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h3>1,62,564</h3>
                        <h6 class="text-muted m-b-0">Products<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                    </div>
                    <div class="col-6">
                        <canvas id="seo-chart3" height="80px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- seo end -->

@endsection

@section('css')
    <style>

    </style>
@endsection

@section('js')
    <script type="text/javascript" src="/admin/assets/pages/dashboard/analytic-dashboard.js"></script>

    <!-- Chart js -->
    <script type="text/javascript" src="/admin/bower_components/chart.js/js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="/admin/assets/pages/widget/amchart/gauge.js"></script>
    <script src="/admin/assets/pages/widget/amchart/serial.js"></script>
    <script src="/admin/assets/pages/widget/amchart/light.js"></script>
    <script src="/admin/assets/pages/widget/amchart/pie.min.js"></script>
    <script src="/admin/assets/pages/widget/amchart/ammap.min.js"></script>
    <script src="/admin/assets/pages/widget/amchart/usaLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script>

    </script>
@endsection
