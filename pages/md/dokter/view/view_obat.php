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
  // $host = "localhost";
  // $username = "root";
  // $pass = "";
  // $db = "db_temiang";
  // $conn = mysqli_connect($host, $username, $pass, $db);
  include_once '../../../../backend/koneksi.php';


  $id_obat=$_GET['id_obat'];
  $obat=$id_obat;


  $query = mysqli_query($conn, " SELECT * FROM  tb_obat where id_obat='$id_obat'");
  // $query = mysqli_query($conn, " SELECT * FROM tb_kategori_obat inner join tb_obat on tb_kategori_obat.id_kategori_obat=tb_obat.id_obat where tb_obat.id_obat='$obat'");

  $data = mysqli_fetch_array($query);

  ?>



    <?php

    if(isset($_POST['submit'])){

      // $host = "localhost";
      // $username = "root";
      // $pass = "";
      // $db = "db_temiang";
      // $conn = mysqli_connect($host, $username, $pass, $db);

      include_once '../../../../backend/koneksi.php';



      $tanggal = $_POST['tanggal'];
      $status = $_POST['status'];
      $id_jenis_poli = $_POST['id_jenis_poli'];
      $id_pasien = $_POST['id_pasien'];
      $id_petugas = $_POST['id_petugas'];
      $no_antrian= $_POST['no_antrian'];


      $user =mysqli_query($conn,"insert into tb_pendaftaran values('','$tanggal','$status','$id_jenis_poli','$id_pasien','$id_petugas','$no_antrian',)");
      // eksekusi query dengan mysqli


    }


     ?>






  <body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html"><span><?php echo "$level"; ?></span></a></div>

          <br> <br>

          <div class=""align="center">
            <a href="../../">
          <img src="/pulautemiang/assets/images/logo.png" alt="" />
           </a>
          </div>
           <br>



          <ul>
            <li class="label">Main</li>
            <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=beranda"><i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
            <li><a href="/pulautemiang/index.php?m=dokter_antrian"><i class="ti-layers-alt"></i>Antrian Pasien</a></li>
            <li><a href="/pulautemiang/index.php?m=dokter_pasien"><i class="ti-user"></i> Data Pasien</a></li>
            <li><a href="/pulautemiang/index.php?m=dokter_obat">         <i class="ti-package"></i> Data Obat <span class="badge badge-primary"></span> </span></a></li>

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
                  <h1> <b>Data Obat</b> | Lihat Data Obat </h1>
                </div>
              </div>
            </div>
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Obat</li>
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
                      <form action="view_pendaftaran.php"  method="post">

                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label>Nama Obat</label>
                              <input class="form-control" type="text" value="<?php echo $data['nama_obat'];?>"  readonly >
                            </div>
                          </div>

                          <div class="col-lg-12">
                            <div class="form-group">
                              <label>Kategori Obat</label>
                              <input class="form-control" type="text" value="<?php echo $data['id_kategori_obat'];?>"  readonly >
                            </div>
                          </div>


                          <div class="col-lg-12">
                            <div class="form-group">
                              <label>Stok</label>
                              <input class="form-control" type="text" value="<?php echo $data['stok'];?>"  readonly>
                            </div>
                          </div>

                          <div class="col-lg-12">
                            <div class="form-group">
                              <label>Harga</label>
                              <input class="form-control" type="text" value="Rp. <?php echo $data['harga_satuan'];?>" readonly >
                            </div>
                          </div>

                          <div class="col-lg-12">
                            <div class="form-group">
                              <label>Keterangan</label>
                              <input class="form-control" type="text" value="<?php echo $data['keterangan'];?>" readonly >
                            </div>
                          </div>
                        </div>

                        <div align="center">
                          <button type="button" name=""class="btn btn-default" onclick="window.location.href='/pulautemiang/index.php?m=dokter/dokter_obat'">Kembali</button>

                          <!-- <button type="submit" name="tambah_pendaftaran" class="btn btn-primary">Simpan</button> -->
                          <!-- <button type="button" name="" onclick="" class="btn btn-default">Kembali</button> -->
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
