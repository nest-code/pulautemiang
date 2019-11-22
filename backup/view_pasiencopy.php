
<!DOCTYPE html>
<?php
session_start();
$id_akun=$_SESSION['id_akun'];

$namaakun=$_SESSION['namaakun'];
$level=$_SESSION['level'];
if(!isset($_SESSION['namaakun'])){
  header('location: ../login.php');

}else{
  // $idpetugas=$_SESSION['id_petugas'];
  ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Basic Form </title>


    <!-- Styles -->
    <link href="/pulautemiang/admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/pulautemiang/admin/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/admin/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/pulautemiang/admin/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/admin/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/pulautemiang/admin/assets/css/style.css" rel="stylesheet">
</head>

<body>


        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><!-- <img src="/pulautemiang/admin/assets/images/logo.png" alt="" /> --><span><?php echo $level ?></span></a></div>
                    <ul>
                        <li class="label">Main</li>
                        <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> <span class="sidebar-collapse-icon "></span></a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <ul>
                              <li class="header-icon dib"><span class="user-avatar"> <?php echo $namaakun; ?> <i class="ti-angle-down f-s-10"></i></span>

                                    <div class="drop-down dropdown-profile">
                                        <div class="dropdown-content-heading">
                                          <span class="text-left"><?php echo $level; ?></span>
                                          <p class="trial-day">aktif</p>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>

                                                <li><a href="/pulautemiang/backend/process_logout.php"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                  <h1> <b>Data Pasien</b> | Lihat Data Pasien  </h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Data Pasien</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->



                <?php
                $host = "localhost";
                $username = "root";
                $pass = "";
                $db = "db_temiang";
                $conn = mysqli_connect($host, $username, $pass, $db);
                $id_pasien= $_GET['id_pasien'];
                $query = mysqli_query($conn, "  select * from tb_pasien inner join tb_akun on tb_pasien.id_akun=tb_akun.id_akun where tb_pasien.id_pasien=  '$id_pasien'");

                $data = mysqli_fetch_array($query);
                ?>








                <section id="main-content">
                  <form class="" action="" method="post">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                          <div class="card-title">
                            <!-- <h4>Pendaftaran Pasien</h4> -->

                          </div>
                          <div class="card-body">
                            <div class="basic-elements">
                              <form>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <input class="form-control" type="hidden" name="id_pasien" placeholder="id_pasien" value="<?php echo $data['id_pasien']; ?>"  readonly=""  >

                                    <div class="form-group">
                                      <label>NIK</label>
                                      <input type="text" class="form-control"  name="nik" maxlength="18"  value="<?php echo $data['nik']; ?>" onkeypress="return isNumberKey(event)" readonly>
                                    </div>

                                    <div class="form-group">
                                      <label>Nama Pasien</label>
                                      <input type="text" class="form-control"  name="nama" value="<?php echo $data['nama']; ?>" readonly >
                                    </div>

                                    <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input type="date" class="form-control" name="tgl_lahir"  value="<?php echo $data['tgl_lahir']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                      <label>Jenis Kelamin</label>
                                      <select class="form-control" name="jk">
                                        <option>-Pilih-</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label>Golongan Darah</label>
                                      <select class="form-control" name="agama">
                                        <option>-Pilih-</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label>Agama</label>
                                      <select class="form-control" name="agama">
                                        <option>-Pilih-</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                      </select>
                                    </div>


                                    <div class="form-group">
                                      <label>Pekerjaan</label>
                                      <input type="text" class="form-control" name="pekerjaan"  value="<?php echo $data['pekerjaan']; ?>" readonly>
                                    </div>


                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <input type="text" class="form-control" name="pekerjaan"  value="<?php echo $data['alamat']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                      <label>No HP</label>
                                        <input type="text" class="form-control" name="no_hp"  value="<?php echo $data['no_hp']; ?>"   readonly >
                                    </div>


                                  </div>


                                  <div class="col-lg-6">

                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- /# row -->


                  <div class="row">
                    <div class="col-lg-12">
                      <div class="footer">
                        <!-- <p>2019 © Puskesmas Pulau Temiang<a href="#">example.com</a></p> -->
                        <p>2019 © Puskesmas Pulau Temiang</p>
                      </div>
                    </div>
                  </div>

                </section>
            </div>
        </div>
    </div>





    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="/pulautemiang/admin/assets/js/lib/jquery.min.js"></script>
    <script src="/pulautemiang/admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="/pulautemiang/admin/assets/js/lib/menubar/sidebar.js"></script>
    <script src="/pulautemiang/admin/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <!-- bootstrap -->


    <script src="/pulautemiang/admin/assets/js/scripts.js"></script>
    <!-- scripit init-->





</body>
<?php } ?>
</html>
