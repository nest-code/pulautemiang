<?php
session_start();
$id_akun=$_SESSION['id_akun'];
$namaakun=$_SESSION['nama_akun'];
$level=$_SESSION['level'];
if(!isset($_SESSION['nama_akun'])){
  header('location: ../login.php');
}else{
  // $idpetugas=$_SESSION['id_petugas'];
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Puskesmas Pulau Temiang| Pelayanan</title>
    <link rel="shortcut icon" href="/pulautemiang/images/logos/logo.png">
    <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">
  </head>

  <?php
  if(isset($_POST['submit'])){
    // $host = "localhost";
    // $username = "root";
    // $pass = "";
    // $db = "db_temiang";
    // $conn = mysqli_connect($host, $username, $pass, $db);

    include_once '../../../../backend/koneksi.php';

    $no_rm = $_POST['no_rm'];
    $id_pasien = $_POST['id_pasien'];
    $nip = $_POST['nip'];
    $tgl_rekam = $_POST['tgl_rekam'];
    $rpt = $_POST['rpt'];
    $rpo = $_POST['rpo'];
    $riw_alergi_mkn = $_POST['riw_alergi_mkn'];
    $riw_alergi_obat = $_POST['riw_alergi_obat'];
    $riw_operasi = $_POST['riw_operasi'];
    $riw_ayah = $_POST['riw_ayah'];
    $riw_ibu = $_POST['riw_ibu'];
    $riw_penyakit = $_POST['riw_penyakit'];
    $jaminan_kesehatan = $_POST['jaminan_kesehatan'];

    $user =mysqli_query($conn,"insert into tb_rekam_medis values(
      '',
      '$id_pasien',
      '$nip',
      '$tgl_rekam',
      '$rpt',
      '$rpo',
      '$riw_alergi_mkn',
      '$riw_alergi_obat',
      '$riw_operasi',
      '$riw_ayah',
      '$riw_ibu',
      '$riw_penyakit',
      '$jaminan_kesehatan')") ;
    }
    ?>


    <body>
      <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
          <div class="nano-content">
            <div class="logo"><a href="index.html"><!-- <img src="/pulautemiang/assets/images/logo.png" alt="" /> --><span><?php echo "$level"; ?></span></a></div>
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
                    <!-- <li class="header-icon dib"><span class="user-avatar">John <i class="ti-angle-down f-s-10"></i></span> -->
                    <div class="drop-down dropdown-profile">
                      <div class="dropdown-content-heading">
                        <span class="text-left"><?php// echo $level; ?></span>
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
                    <h1> <b>Berobat</b> | Rekam Medis </h1>
                    <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/edit/edit_rm.php'"  title="Periksa Pasien"><i class="fa fa-medkit"></i></button>
                    <!-- <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/edit/edit_rm.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Periksa Pasien"><i class="fa fa-medkit"></i></button> -->
                  </div>
                </div>
              </div>
              <!-- /# column -->
              <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                  <div class="page-title">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                      <li class="breadcrumb-item active">Pendaftaran Berobat</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>



            <section id="main-content">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-title">
                    </div>
                    <div class="card-body">
                      <div class="basic-elements">
                        <!-- <form action="view_pendaftaran.php?id_pendaftaran=<?php echo "$id_pendaftaran";  ?>" method="post"> -->
                        <form action="view_rm_daftar.php"  method="post">
                          <div class="row">
                            <input class="form-control" type="text" value="" name="id_pasien" >
                            <div class="col-lg-2">
                              <div class="form-group">
                                <label>No.RM</label>
                                <input class="form-control" type="text" value="" name="no_rm" >
                              </div>
                            </div>
                            <div class="col-lg-2">
                              <div class="form-group">
                                <label>Tanggal Rekam Pertama</label>
                                <input class="form-control" type="date" value="" name="tgl_rekam" >
                              </div>
                            </div>
                            <div class="col-lg-2">
                              <div class="form-group">
                                <label>ID Dokter</label>
                                <input class="form-control" type="text" value="" name="id_dokter" >
                              </div>
                            </div>

                            <div class="col-lg-2">
                              <div class="form-group">
                                <label>RPT</label>
                                <input class="form-control" type="text" value="" name="rpt" >
                              </div>
                            </div>

                            <div class="col-lg-2">
                              <div class="form-group">
                                <label>RPO</label>
                                <input class="form-control" type="text" value="" name="rpo" >
                              </div>
                            </div>

                            <div class="col-lg-2">
                              <div class="form-group">
                                <label>Jaminan Kesehatan</label>
                                <input class="form-control" type="text" value="" name="jaminan_kesehatan" >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Alergi Makan</label>
                                <input class="form-control" type="text" value="" name="riw_alergi_mkn" >
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Alergi Obat</label>
                                <input class="form-control" type="text" value="" name="riw_alergi_obat" >
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Operasi</label>
                                <input class="form-control" type="text" value="" name="riw_operasi" >
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Penyakit</label>
                                <input class="form-control" type="text" value="" name="riw_penyakit" >
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Penyakit Ayah</label>
                                <input class="form-control" type="text" value="" name="riw_ayah" >
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Penyakit Ibu</label>
                                <input class="form-control" type="text" value="" name="riw_ibu" >
                              </div>
                            </div>
                          </div>
                          <div align="center">
                            <button type="submit" name="submit" value="submit"> Simpan</button>
                          </div>
                        </div>
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
          <script src="/pulautemiang/assets/js/lib/jquery.min.js"></script>
          <script src="/pulautemiang/assets/js/lib/jquery.nanoscroller.min.js"></script>
          <script src="/pulautemiang/assets/js/lib/menubar/sidebar.js"></script>
          <script src="/pulautemiang/assets/js/lib/preloader/pace.min.js"></script>
          <script src="/pulautemiang/assets/js/scripts.js"></script>

        </body>

      <?php } ?>
      </html>
