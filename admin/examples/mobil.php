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
                    <li class="active">
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Mobil</h4>
                                    <p class="category">Tambah data mobil</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nomor Plat</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Merk Mobil</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tahun Keluaran</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Warna Mobil</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div><br>
                                        <label>Jenis Mobil</label>
                                        <div class="row">
                                            <div class="dropdown col-md-3">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios">
                                                        AT
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios">
                                                        MT
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Mobil</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                    <div class="card-header" data-background-color="orange">
                                        <h4 class="title">Mobil Digunakan</h4>
                                        <p class="category">Sabtu, 4 November 2017</p>
                                    </div>
                                    <div class="card-content table-responsive">
                                        <table class="table table-hover">
                                            <thead class="text-warning">
                                                <th>No</th>
                                                <th>Instruktur</th>
                                                <th>Nopol</th>
                                                <th>Mobil</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Rizka Annisa</td>
                                                    <td>L 1234 PO</td>
                                                    <td>Avanza</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Shafira A Rahmadhani</td>
                                                    <td>L 1298 UI</td>
                                                    <td>Mobilio</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Dwi Irsalina</td>
                                                    <td>L 1273 R</td>
                                                    <td>Xenia</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Rina Wijaya</td>
                                                    <td>L 7263 TY</td>
                                                    <td>Agya</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Rizka Annisa</td>
                                                    <td>L 1234 PO</td>
                                                    <td>Avanza</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Shafira A Rahmadhani</td>
                                                    <td>L 1298 UI</td>
                                                    <td>Mobilio</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Dwi Irsalina</td>
                                                    <td>L 1273 R</td>
                                                    <td>Xenia</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Rina Wijaya</td>
                                                    <td>L 7263 TY</td>
                                                    <td>Agya</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Rina Wijaya</td>
                                                    <td>L 7263 TY</td>
                                                    <td>Agya</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Data Mobil</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Nomor Plat</th>
                                            <th>Merk</th>
                                            <th>Tahun Keluaran</th>
                                            <th>Warna</th>
                                            <th>Jenis</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>L 1234 WR</td>
                                                <td>Mobilio</td>
                                                <td>2012</td>
                                                <td>Hitam</td>
                                                <td>AT</td>
                                                <td>
                                                    <button class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>L 1234 WR</td>
                                                <td>Xenia</td>
                                                <td>2013</td>
                                                <td>Hitam</td>
                                                <td>AT</td>
                                                <td>
                                                    <button class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>L 1234 WR</td>
                                                <td>Mobilio</td>
                                                <td>2012</td>
                                                <td>Hitam</td>
                                                <td>AT</td>
                                                <td>
                                                    <button class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>L 1234 WR</td>
                                                <td>Avanza</td>
                                                <td>2015</td>
                                                <td>Hitam</td>
                                                <td>AT</td>
                                                <td>
                                                    <button class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <!-- <button type="submit" class="btn btn-primary pull-right">Update Mobil</button> -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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

</html>