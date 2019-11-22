
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



  <!DOCTYPE html>


  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Puskesmas Pulau Temiang| Pelayanan</title>
    <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">
  </head>



    <?php

    if(isset($_POST['submit'])){

      $host = "localhost";
      $username = "root";
      $pass = "";
      $db = "db_temiang";
      $conn = mysqli_connect($host, $username, $pass, $db);
      $id_pendaftaran= $_POST['id_pendaftaran'];
      $pendaftaran=$id_pendaftaran;


      $sql = mysqli_query($conn, "UPDATE tb_pendaftaran set status='Proses' where id_pendaftaran='$pendaftaran'") or die(mysqli_error($conn));

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
                  <h1> <b>Berobat</b> | Pendaftaran Berobat  </h1>


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


          <?php
          $host = "localhost";
          $username = "root";
          $pass = "";
          $db = "db_temiang";
          $conn = mysqli_connect($host, $username, $pass, $db);

          $id_pasien=$_GET['id_pasien'];
          $query = mysqli_query($conn, " SELECT * FROM tb_pendaftaran where id_pasien='$id_pasien'");
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
                      <form action="edit_pendaftaran.php?id_pasien=<?php echo "$id_pasien"; ?>"  method="post">

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Tanggal Rekam Pertama</label>
                              <input class="form-control" type="date" value="<?php echo $data['tgl_rekam'];?>" name="tgl_rekam" readonly >

                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Tanggal Rekam Pertama</label>
                              <input class="form-control" type="date" value="<?php echo $data['tgl_rekam'];?>" name="tgl_rekam" readonly >

                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Tanggal Rekam Pertama</label>
                              <input class="form-control" type="date" value="<?php echo $data['tgl_rekam'];?>" name="tgl_rekam" readonly >

                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Tanggal Rekam Pertama</label>
                              <input class="form-control" type="date" value="<?php echo $data['tgl_rekam'];?>" name="tgl_rekam" readonly >

                            </div>
                          </div>

                        </div>



                        </form>
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


      <script src="/pulautemiang/assets/js/lib/jquery.min.js"></script>
      <script src="/pulautemiang/assets/js/lib/jquery.nanoscroller.min.js"></script>
      <script src="/pulautemiang/assets/js/lib/menubar/sidebar.js"></script>
      <script src="/pulautemiang/assets/js/lib/preloader/pace.min.js"></script>
      <script src="/pulautemiang/assets/js/scripts.js"></script>

    </body>

  <?php } ?>
  </html>
