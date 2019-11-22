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
    <link rel="stylesheet" type="text/css" href="/pulautemiang/assets/css/lib/sweetalert/sweetalert.css">

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



      $id_kategori_obat= $_POST['id_kategori_obat'];
      $nama_kategori= $_POST['nama_kategori'];

      $sql = mysqli_query($conn, "UPDATE tb_kategori_obat set nama_kategori='$nama_kategori' where id_kategori_obat='$id_kategori_obat'") or die(mysqli_error($conn));
      if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="edit_kategori.php?id_kategori_obat='.$id_kategori_obat.'";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
      }
      }

     ?>






  <body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html"><!-- <img src="/pulautemiang/assets/images/logo.png" alt="" /> --><span><?php echo "$level"; ?></span></a></div>
          <br> <br>

          <div class=""align="center">
            <a href="../../">
          <img src="/pulautemiang/assets/images/logo.png" alt="" />
           </a>
          </div>
           <br>

          <ul>
            <li class="label">Main</li>
            <li  class="sidebar-sub-toggle" >
              <a href="?m=beranda"> <i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a>
            </li>
            <li><a href="/pulautemiang/index.php?m=admin/admin_pasien">      <i class="ti-wheelchair"></i>Pasien</a></li>
            <li><a href="/pulautemiang/index.php?m=admin/admin_petugas">      <i class="ti-hand-open"></i>Petugas</a></li>
            <li><a href="/pulautemiang/index.php?m=admin/admin_dokter">      <i class="fa fa-user-md"> </i> Dokter</a></li>
            <li><a href="/pulautemiang/index.php?m=admin/admin_obat">        <i class="ti-package"></i>Obat</a></li>
            <li><a href="/pulautemiang/index.php?m=admin/admin_poli">        <i class="ti-pin2"></i>Poli</a></li>


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
                  <h1> <b>Data Kategori Obat</b> | Edit Kategori Obat </h1>


                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Data Obat</a></li>
                    <li class="breadcrumb-item active">Edit Obat</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>


          <?php
          // $host = "localhost";
          // $username = "root";
          // $pass = "";
          // $db = "db_temiang";
          // $conn = mysqli_connect($host, $username, $pass, $db);

          include_once '../../../../backend/koneksi.php';


          $id_kategori=$_GET['id_kategori_obat'];
          $query = mysqli_query($conn, " SELECT * FROM tb_kategori_obat where id_kategori_obat='$id_kategori'");
          $data = mysqli_fetch_array($query);

          ?>



          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title">
                  </div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <form action="edit_kategori.php?id_kategori_obat=<?php echo "$id_kategori"; ?>"  method="post">

                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">

                              <input class="form-control" type="hidden" value="<?php echo $data['id_kategori_obat'];?>" name="id_kategori_obat" readonly>

                              <div class="form-group">
                                <label> Nama Obat</label>
                                <input class="form-control" type="text"  name="nama_kategori"  value="<?php echo $data['nama_kategori'];?>">
                              </div>


                              <div class="form-group" align="center">
                                <button class="btn btn-primary" type="submit" name="submit" value="submit">Simpan</button>
                              </div>
                            </div>

                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="footer">
                    <p>2018 © Admin Board. - <a href="#">example.com</a></p>
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

      <script src="/pulautemiang/assets/js/lib/sweetalert/sweetalert.init.js"></script>
      <script src="/pulautemiang/assets/js/lib/sweetalert/sweetalert.min.js"></script>
      <script src="/pulautemiang/assets/js/lib/jquery.min.js"></script>
      <script src="/pulautemiang/assets/js/lib/jquery.nanoscroller.min.js"></script>
      <script src="/pulautemiang/assets/js/lib/menubar/sidebar.js"></script>
      <script src="/pulautemiang/assets/js/lib/preloader/pace.min.js"></script>
      <script src="/pulautemiang/assets/js/scripts.js"></script>

    </body>

  <?php } ?>
  </html>