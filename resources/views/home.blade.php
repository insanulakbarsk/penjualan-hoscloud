@extends("layouts.global")

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<link rel="icon" type="image/x-icon" href="{{asset('public/assets/img/logo.png')}}"/>
<link rel="icon" href="{{asset('public/assets/img/logo.png')}}" type="image/png" sizes="16x16">
<link rel="stylesheet" href="{{asset('public/assets/vendor/pace/pace.css')}}">
<script src="{{asset('public/assets/vendor/pace/pace.min.js')}}"></script>
<!--vendors-->
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/vendor/jquery-scrollbar/jquery.scrollbar.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/vendor/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/vendor/jquery-ui/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/vendor/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/vendor/timepicker/bootstrap-timepicker.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
<link rel="stylesheet" href="{{asset('public/assets/fonts/jost/jost.css')}}">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/fonts/materialdesignicons/materialdesignicons.min.css')}}">
<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/atmos.min.css')}}">
<!-- Additional library for page -->


</head>
<body class="sidebar-pinned">
<main class="admin-main">
    <section class="admin-content ">
        <div class="container py-5">
            <div class="row ">
                <div class="col-md-12  pb-3">
                    <h1 class=" fw-600 display-4">
                        <span class="js-greeting">Welcome To Hoscloud Shop</span>!
                    </h1>
                </div>
                <div class="col-md-4">
                    <div class="card m-b-30">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-7">
                                    <h6 class="fw-600">Total Revenue</h6>
                                    <p class="text-muted">
                                        Jakarta Area
                                    </p>
                                </div>
                                <div class="col-md-5 my-auto text-right">
                                    <h2 class="text-primary">$18M</h2>

                                </div>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar" role="progressbar" style="width: 37%" aria-valuenow="0"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-md-7">
                                    <p class="text-muted">
                                        Monthly
                                    </p>
                                </div>
                                <div class="col-md-5 text-right">
                                    <p class="text-primary">37%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-b-30">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-7">
                                    <h6 class="fw-600">Total Revenue</h6>
                                    <p class="text-muted">
                                        Dumai Area
                                    </p>
                                </div>
                                <div class="col-md-5 my-auto text-right">
                                    <h2 class="text-success">$5M</h2>
                                </div>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-md-7">
                                    <p class="text-muted">
                                        Monthly
                                    </p>
                                </div>
                                <div class="col-md-5 text-right">
                                    <p class="text-success">50%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-b-30">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-7">
                                    <h6 class="fw-600">Total Revenue</h6>
                                    <p class="text-muted">
                                        Pekanbaru Area
                                    </p>
                                </div>
                                <div class="col-md-5 my-auto text-right">
                                    <h2 class="text-danger">$35M</h2>
                                </div>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 89%"
                                     aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-md-7">
                                    <p class="text-muted">
                                        Monthly
                                    </p>
                                </div>
                                <div class="col-md-5 text-right">
                                    <p class="text-danger">89%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8  m-b-30">
                    <div class="card ">
                        <div class="card-body">
                            <h3 class="p-t-10 mb-0">Revenue Analysis</h3>
                            <p class="text-muted">
                                Target pencapaian pemasaran dari Hoscloud Shop
                            </p>
                            <div id="chart-01"></div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i> Restart your Re-targeting Campaigns</span>
                                </h6>
                                <a href="#!" class="btn btn-white shadow-none">See Campaigns</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 m-b-30">
                    <div class="card h-100">
                        <div class="card-body">
                            <h6 class=" p-t-20 fw-600    text-center text-uppercase">risk
                                assertion</h6>
                            <div id="chart-03" style="min-height: 200px"></div>
                            <div class="row text-center">
                                <div class="col">
                                    <div class="m-b-5">
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle bg-success">
                                                <i class="mdi mdi-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="m-0">Low</h5>
                                    <p class="text-muted">Risk</p>
                                </div>
                                <div class="col">
                                    <div class="m-b-5">
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle bg-danger">
                                                <i class="mdi mdi-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="m-0">Mid</h5>
                                    <p class="text-muted">Risk</p>
                                </div>
                                <div class="col">
                                    <div class="m-b-5">
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle bg-info">
                                                <i class="mdi mdi-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="m-0">High</h5>
                                    <p class="text-muted">Risk</p>
                                </div>
                            </div>
                            <div class="text-center bg-dark rounded text-white p-all-15">
                                <p class="text-overline"> <i class="mdi mdi-information"></i> Profits Estimates</p>
                                <h1 class="text-warning">$50,600</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog" aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots" >
                    <h3 class="text-uppercase    text-center  fw-300 "> Search</h3>

                    <div class="container-fluid">
                        <div class="col-md-10 p-t-10 m-auto">
                            <input type="search" placeholder="Search Something"
                                   class=" search form-control form-control-lg">

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-dark text-muted container-fluid p-b-10 text-center text-overline">
                        results
                    </div>
                    <div class="list-group list  ">


                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"   src="assets/img/users/user-3.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-4.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-8.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Marie Arnold</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i class="mdi mdi-24px mdi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">SRS Document</div>
                                <div class="text-muted">25.5 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i
                                                class="mdi mdi-24px mdi-file-document-box"></i></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Design Guide.pdf</div>
                                <div class="text-muted">9 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm  ">
                                        <div class="avatar-title bg-primary rounded"><i
                                                    class="mdi mdi-24px mdi-code-braces"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">response.json</div>
                                <div class="text-muted">15 Kb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-info rounded"><i
                                                    class="mdi mdi-24px mdi-file-excel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">June Accounts.xls</div>
                                <div class="text-muted">6 Mb</div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="{{asset('public/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/popper/popper.js')}}"></script>
<script src="{{asset('public/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/listjs/listjs.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/moment/moment.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('public/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('public/assets/js/atmos.min.js')}}"></script>
<!--page specific scripts for demo-->

<!--Additional Page includes-->
<script src="{{asset('public/assets/vendor/apexchart/apexcharts.min.js')}}"></script>
<!--chart data for current dashboard-->
<script src="{{asset('public/assets/js/dashboard-01.js" type="text/javascript')}}"></script>
</body>
</html>

@endsection
