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
                    Admin
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
                    <li class="active">
                        <a href="./pembayaran.php">
                            <i class="material-icons">playlist_add_check</i>
                            <p>Pembayaran</p>
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
                    <li>
                        <a href="./instruktur.php">
                            <i class="material-icons">group</i>
                            <p>Instruktur</p>
                        </a>
                    </li>
                    <li>
                        <a href="./mobil.php">
                            <i class="material-icons">directions_car</i>
                            <p>Mobil</p>
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
                                            <span class="nav-tabs-title">Transaksi:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">assignment</i> All
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="material-icons">assignment_turned_in</i> Verified
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#settings" data-toggle="tab">
                                                        <i class="material-icons">delete_forever</i> not verified
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
                                                    <th>No Rek</th>
                                                    <th>Jumlah Bayar</th>
                                                    <th>Tanggal</th>
                                                    <td></td>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Nurotuz Zakiya</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Rakhma Rufaida</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Dwi Irsalina</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
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
                                                    <th>No Rek</th>
                                                    <th>Jumlah Bayar</th>
                                                    <th>Tanggal</th>
                                                    <td></td>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
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
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModalSee" type="button" data-toggle="modal" rel="tooltip" title="Lihat Bukti" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">insert_photo</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>No</th>
                                                    <th>Pelanggan</th>
                                                    <th>No Rek</th>
                                                    <th>Jumlah Bayar</th>
                                                    <th>Tanggal</th>
                                                    <td></td>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dwi Irsaline</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModalSee" type="button" data-toggle="modal" rel="tooltip" title="Lihat Bukti" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">insert_photo</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Rakhma Rufaida</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
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

<center>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Bukti Bayar</h4>
                </div>
                <div class="modal-body">
                    <center>    
                        <img src="../assets/img/gambar.jpg" alt="" class="img-responsive">
                    </center>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 100px;">approve</button>
                    <button class="btn btn-danger" style="padding: 1px 2px; height: 25px; width: 100px;">disapprove</button>  
                </div>
            </div>
        </div>
    </div>

    <!-- Modal See -->
    <div class="modal fade" id="myModalSee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Bukti Bayar</h4>
                </div>
                <div class="modal-body">
                    <center>    
                        <img src="../assets/img/gambar.jpg" alt="" class="img-responsive">
                    </center>
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
                                    <h4 class="title">Data Transaksi</h4>
                                    <p class="category">Semua transaksi yang ada</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>No</th>
                                            <th>Pelanggan</th>
                                            <th>Paket Kursus</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Rizka Annisa</td>
                                                <td>New Avanza MT</td>
                                                <td>Verified</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Shafira A Rahmadhani</td>
                                                <td>New Avanza AT</td>
                                                <td>Verified</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Dwi Irsalina</td>
                                                <td>New Avanza MT</td>
                                                <td>Not Verified</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Rina Wijaya</td>
                                                <td>New Agya MT</td>
                                                <td>Verified</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Shafira A Rahmadhani</td>
                                                <td>New Avanza AT</td>
                                                <td>Verified</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Dwi Irsalina</td>
                                                <td>New Avanza MT</td>
                                                <td>Not Verified</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Rina Wijaya</td>
                                                <td>New Agya MT</td>
                                                <td>Verified</td>
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