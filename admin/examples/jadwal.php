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
                    <li>
                        <a href="./pembayaran.php">
                            <i class="material-icons">playlist_add_check</i>
                            <p>Pembayaran</p>
                        </a>
                    </li>
                    <li  class="active">
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Jadwal Kursus</h4>
                                    <p class="category">Bulan Novermber 2017</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Senin</th>
                                            <th>Selasa</th>
                                            <th>Rabu</th>
                                            <th>Kamis</th>
                                            <th>Jumat</th>
                                            <th>Sabtu</th>
                                            <th>Minggu</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>01<br><br><br></td>
                                                <td>02<br>Rizka Annisa<br>
                                                    15.00-17.00</td>
                                                <td>03<br><br><br></td>
                                                <td>04<br><br><br></td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>06<br>Rizka Annisa<br>
                                                    09.00-11.00
                                                </td>
                                                <td>07<br><br><br></td>
                                                <td>08<br><br><br></td>
                                                <td>09<br><br><br></td>
                                                <td>10<br><br><br></td>
                                                <td>11<br><br><br></td>
                                            </tr>
                                            <tr>
                                                <td>12<br>Rizka Annisa<br>
                                                    15.00-17.00
                                                </td>
                                                <td>13<br><br><br></td>
                                                <td>14<br><br><br></td>
                                                <td>15<br><br><br></td>
                                                <td>16<br><br><br></td>
                                                <td>17<br>Annisa<br>
                                                    09.00-11.00</td>
                                                <td>18</td>
                                            </tr>
                                            <tr>
                                                <td>19<br><br><br></td>
                                                <td>20<br><br><br></td>
                                                <td>21<br>Shafira AR<br>
                                                    12.00-14.00</td>
                                                <td>22<br><br><br></td>
                                                <td>23<br><br><br></td>
                                                <td>24<br><br><br></td>
                                                <td>25<br>Rizka Annisa<br>
                                                    15.00-17.00</td>
                                            </tr>
                                            <tr>
                                                <td>26<br><br><br></td>
                                                <td>27<br><br><br></td>
                                                <td>28<br><br><br></td>
                                                <td>29<br>Dwi Irsalina<br>
                                                    15.00-17.00</td></td>
                                                <td>30<br><br><br></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-primary pull-right">Update Jadwal</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Jadwal Kursus</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Nama Instruktur</th>
                                            <th>Tanggal</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Berakhir</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Neny Lukita</td>
                                                <td>Kyungso</td>
                                                <td>02-11-2017</td>
                                                <td>15.00</td>
                                                <td>17.00</td>
                                                <td>
                                                    <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Anindya Hantari</td>
                                                <td>Illham Hanafi</td>
                                                <td>06-11-2017</td>
                                                <td>09.00</td>
                                                <td>11.00</td>
                                                <td>
                                                    <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Rizka Annisa</td>
                                                <td>Azka Yasin</td>
                                                <td>12-11-2017</td>
                                                <td>09.00</td>
                                                <td>11.00</td>
                                                <td>
                                                    <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Annisa</td>
                                                <td>Yasin</td>
                                                <td>17-11-2017</td>
                                                <td>09.00</td>
                                                <td>11.00</td>
                                                <td>
                                                    <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Shafira A Rahmadhani</td>
                                                <td>Ariya Wildan</td>
                                                <td>21-11-2017</td>
                                                <td>12.00</td>
                                                <td>14.00</td>
                                                <td>
                                                    <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Rizka Annisa</td>
                                                <td>Azka Yasin</td>
                                                <td>25-11-2017</td>
                                                <td>09.00</td>
                                                <td>11.00</td>
                                                <td>
                                                    <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Dwi Irsalina</td>
                                                <td>Neny Lukitasari</td>
                                                <td>29-11-2017</td>
                                                <td>08.00</td>
                                                <td>10.00</td>
                                                <td>
                                                    <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="clearfix"></div>
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
                <h4 class="modal-title" id="myModalLabel">Isi jadwal</h4>
            </div>
            <div class="modal-body">                       
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Nama Pelanggan</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Nama Instruktur</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Tanggal</label> -->
                                <label>Tanggal</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Jam</label> -->
                                <label>Jam Mulai</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Jam</label> -->
                                <label>Jam Berakhir</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Tambahkan Jadwal</button>
                    <div class="clearfix"></div>
                </form>    
            </div>
        </div>
    </div>
</div>

<div id="modal-delete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center>
                    Anda yakin ingin menghapus data?<hr><br>
                        <button>Iya</button>
                        <button>Tidak</button>
                    </center>
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
<script>
$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
</script>

</html>