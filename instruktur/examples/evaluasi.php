<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
        img{width: 200px; height:200px;}
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="#" class="simple-text">
                    instruktur
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li  class="active">
                        <a href="./evaluasi.php">
                            <i class="material-icons">playlist_add_check</i>
                            <p>Hasil Evaluasi</p>
                        </a>
                    </li>
                    <li>
                        <a href="./jadwal.php">
                            <i class="material-icons">event</i>
                            <p>Jadwal</p>
                        </a>
                    </li>
                    <li>
                        <a href="./pelanggan.php">
                            <i class="material-icons">person</i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <?php include('navbar.php'); ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Evaluasi:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">assignment</i> Untuk Diisi
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="material-icons">assignment_turned_in</i> Hasil
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>No</th>
                                                    <th>Pelanggan</th>
                                                    <th>Id Transaksi</th>
                                                    <td></td>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>546527747</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Isi Evaluasi" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Nurotuz Zakiya</td>
                                                        <td>546527747</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Isi Evaluasi" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Rakhma Rufaida</td>
                                                        <td>546527747</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Isi Evaluasi" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Dwi Irsalina</td>
                                                        <td>546527747</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Isi Evaluasi" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>No</th>
                                                    <th>Pelanggan</th>
                                                    <th>Id Transaksi</th>
                                                    <td></td>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>546527747</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModalSee" type="button" data-toggle="modal" rel="tooltip" title="Lihat Bukti" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">insert_photo</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Nurotuz Zakiya</td>
                                                        <td>546527747</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModalSee" type="button" data-toggle="modal" rel="tooltip" title="Lihat Bukti" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">insert_photo</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Hasil Evaluasi</h4>
            </div>
            <div class="modal-body">                       
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Menyalakan mesin</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Perpindahan gigi</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Melakukan rem</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Haluan</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Parkir lurus</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Parkir sirip</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Parkir paralel</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary pull-right">Tambahkan Nilai</button>
                    <div class="clearfix"></div>
                </form>    
            </div>
        </div>
    </div>
</div>
<center>
    <!-- Modal See -->
    <div class="modal fade" id="myModalSee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Hasil Evaluasi</h4>
                </div>
                <div class="modal-body">                    
                                <div class="card-content">
                                    <div class="table-responsive table-upgrade">
                                        <table class="table">
                                            <thead>
                                                <th></th>
                                                <th class="text-center">Parameter</th>
                                                <th class="text-center">Nilai</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Menyalakan mesin</td>
                                                    <td class="text-center">80</td>
                                                    <td class="text-center">100</td>
                                                </tr>
                                                <tr>
                                                    <td>Perpindahan gigi</td>
                                                    <td class="text-center">70</td>
                                                    <td class="text-center">80</td>
                                                </tr>
                                                <tr>
                                                    <td>Melakukan rem</td>
                                                    <td class="text-center">80</td>
                                                    <td class="text-center">85</td>
                                                </tr>
                                                <tr>
                                                    <td>Haluan</td>
                                                    <td class="text-center">70</td>
                                                    <td class="text-center">65</td>
                                                </tr>
                                                <tr>
                                                    <td>Atitude mengemudi</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">65</td>
                                                </tr>
                                                <tr>
                                                    <td>Parkir lurus</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">65</td>
                                                </tr>
                                                <tr>
                                                    <td>Parkir sirip</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">85</td>
                                                </tr>
                                                <tr>
                                                    <td>Parkir paralel</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">65</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td class="text-center">700</td>
                                                    <td class="text-center">630</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">
                                                        <a target="_blank" href="#" class="btn btn-round btn-fill btn-info">Update Nilai</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</center>

                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Hasil Evaluasi</h4>
                                    <p class="category">Semua transaksi yang ada</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>No</th>
                                            <th>Pelanggan</th>
                                            <th>Paket Kursus</th>
                                            <th>Nilai</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Rizka Annisa</td>
                                                <td>New Avanza MT</td>
                                                <td>630</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Shafira A Rahmadhani</td>
                                                <td>New Avanza AT</td>
                                                <td>680</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Dwi Irsalina</td>
                                                <td>New Avanza MT</td>
                                                <td>620</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Rina Wijaya</td>
                                                <td>New Agya MT</td>
                                                <td>700</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Shafira A Rahmadhani</td>
                                                <td>New Avanza AT</td>
                                                <td>650</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Dwi Irsalina</td>
                                                <td>New Avanza MT</td>
                                                <td>600</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Rina Wijaya</td>
                                                <td>New Agya MT</td>
                                                <td>620</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>