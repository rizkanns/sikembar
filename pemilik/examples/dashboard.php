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
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="#" class="simple-text">
                    pemilik
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./keuangan.php">
                            <i class="material-icons">playlist_add_check</i>
                            <p>Laporan Keuangan</p>
                        </a>
                    </li>
                    <li>
                        <a href="./penilaian.php">
                            <i class="material-icons">event</i>
                            <p>Penilaian Instruktur</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <?php include('navbar.php'); ?>
            <div class="content">
                <div class="container-fluid">
                    <!-- <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Pelanggan</p>
                                    <h3 class="title">259
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">group</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Instruktur</p>
                                    <h3 class="title">45</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Pendapatan</p>
                                    <h3 class="title">750000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">directions_car</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Mobil</p>
                                    <h3 class="title">+50</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="green">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Banyak job</h4>
                                    <p class="category">Banyak shift job yang diambil</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="orange">
                                    <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Pendapatan</h4>
                                    <p class="category">Pendapatan instruktur selama sebtahun</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="red">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Jam kerja</h4>
                                    <p class="category">Kinerja instruktur selama kursus</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Keuangan Bulan Ini</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                                <thead class="text-primary">
                                                    <th>No</th>
                                                    <th>Pelanggan</th>
                                                    <th>Tanggal</th>
                                                    <th>Jumlah Bayar</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>24-07-2017</td>
                                                        <td>800.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>24-07-2017</td>
                                                        <td>800.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>24-07-2017</td>
                                                        <td>800.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>24-07-2017</td>
                                                        <td>800.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text-primary" style="font-weight: bold;">Total</td>
                                                        <td class="text-primary" style="font-weight: bold;"">3.200.000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Evaluasi Instruktur</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                                <thead class="text-primary">
                                                    <th>No</th>
                                                    <th>Instruktur</th>
                                                    <th>Rating</th>
                                                    <th>Kritik dan Saran</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>5</td>
                                                        <td>Sudah bagus, tapi saya boleh ugal-ugalan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>4</td>
                                                        <td>Masnya ngerokok</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>5</td>
                                                        <td>Sudah bagus, tapi saya boleh ugal-ugalan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>4</td>
                                                        <td>Masnya ngerokok</td>
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