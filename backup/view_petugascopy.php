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



        <?php
        $host = "localhost";
        $username = "root";
        $pass = "";
        $db = "db_temiang";
        $conn = mysqli_connect($host, $username, $pass, $db);
        $id_petugas= $_GET['id_petugas'];
        $query = mysqli_query($conn, "  select * from tb_petugas inner join tb_akun on tb_petugas.id_akun=tb_akun.id_akun where tb_petugas.id_petugas='$id_petugas'");
        $data = mysqli_fetch_array($query);
        ?>





    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                              <h1><b>Data Pasien</b> | Lihat Data Pasien  </h1>

                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Lihat Data Petugas</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->


                <section id="main-content">
                  <form class="" action="" method="post" enctype="multipart/form-data">
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

                                      <input type="hidden" class="form-control"  name="id_petugas">


                                    <div class="form-group">
                                      <label>Nama</label>
                                      <input type="text" class="form-control"  name="nama"  value="<?php echo $data['nama']; ?>" readonly>
                                    </div>


                                    <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                      <label>Jenis Kelamin</label>
                                      <input type="text" class="form-control" name="jk" value="<?php echo $data['jk']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                      <label>Agama</label>
                                      <input type="text" class="form-control" name="agama" value="<?php echo $data['agama']; ?>" readonly>
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
                                      <label>NO HP</label>
                                      <input type="text" class="form-control"  name="no_hp" value="<?php echo $data['no_hp']; ?>" required maxlength="14"  onkeypress="return isNumberKey(event)" readonly>
                                    </div>
                                  </div>

                                  <div class="col-lg-6">

                                  </div>


                                </div>
                                <div class="" align="center">
                                  <!-- <button type="submit" name="tambah_pendaftaran_karyawan" class="btn btn-primary">Simpan</button> -->
                                  <button type="button" name=""class="btn btn-default">Kembali</button>

                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /# column -->

                      <!-- /# column -->
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


</body>
  <?php } ?>
</html>
