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



  <?php
  // $host = "localhost";
  // $username = "root";
  // $pass = "";
  // $db = "db_temiang";
  // $conn = mysqli_connect($host, $username, $pass, $db);

  include_once '../../../../backend/koneksi.php';



  $transaksi= $_GET['id_transaksi'];
  $trans=$transaksi;
  $query = mysqli_query($conn, "  SELECT * FROM tb_transaksi_berobat where id_transaksi= '$trans'");
  $data = mysqli_fetch_array($query);


  ?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Puskesmas Pulau Temiang | Pelayanan</title>
    <link rel="shortcut icon" href="/pulautemiang/images/logos/logo.png">
    <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">
  </head>



  <body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html"><!-- <img src="/pulautemiang/assets/images/logo.png" alt="" /> --><span><?php echo "$level"; ?></span></a></div>
          <ul>
            <li class="label">Main</li>
            <li  class="sidebar-sub-toggle" ><a href="?m=beranda">         <i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="?m=kepala/kepala_obat">         <i class="ti-package"></i>Laporan Obat <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="?m=kepala/kepala_transaksi">         <i class="ti-hand-open"></i> Laporan Transaksi<span class="badge badge-primary"></span> </span></a></li>
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
                  <h1> <b> Transaksi Berobat</b> | Transaksi Berobat  </h1>
                  <button type="button"  class="btn btn-info "          onclick="window.location.href='/pulautemiang/pages/md/cetak/print_transaksi.php?id_transaksi=<?php echo $trans ?> '"  title="Lihat"><i class="fa fa-print" aria-hidden="true"></i></button>

                  <!-- <button type="button"  class="btn btn-warning "          onclick="window.location.href='pulautemiang/pages/md/cetak/print_transaksi.php?id_transaksi=<?php echo $data['id_transaksi'] ?>'"  title="Lihat"><i class="fa fa-print" aria-hidden="true"></i></button> -->

                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                    <li class="breadcrumb-item active">Laporan Transaksi Berobat Pasien</li>
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


          if(isset($_POST['submit'])){
            // $id_pendaftaran = $_POST['id_pendaftaran'];
            $tanggal =$_POST['tanggal'];
            $status = $_POST['status'];
            $id_jenis_poli = $_POST['id_jenis_poli'];
            $id_pasien = $_POST['id_pasien'];
            $id_petugas = $_POST['id_petugas'];
            $no_antrian = $_POST['no_antrian'];

            $sql = mysqli_query($conn, "insert into tb_pendaftaran values
            ('','$tanggal','$status','$id_jenis_poli','$id_pasien','$id_petugas','$no_antrian')") or die(mysqli_error($conn));

            ?>
            <script type="text/javascript">
            swal({
              title: "Data tersimpan!",
              text: "Telah terdaftar",
              type: "success",
              confirmButtonText: "Oke",
              closeOnConfirm: false
            },

            function(){
              window.location="?m=admin/admin_obat";

            });
            </script>
            <?php
          }else {
            // jika gagal
            ?>
            <script type="text/javascript">
            swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.", "error");
            </script>
            <?php
          }

          ?>






          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title">
                  </div>
                  <div class="card-body">
                    <div class="basic-elements">

                      <form   method="post">

                        <div class="row">
                          <input type="hidden" name="id_pendaftaran" >


                          <div class="col-lg-3">
                            <div class="form-group">
                              <div class="form-group">
                                <label>ID Transaksi</label>
                                <input class="form-control"  type="text" value="<?php echo $data['id_transaksi'];?>" readonly>
                              </div>
                            </div>
                          </div>


                          <div class="col-lg-3">
                            <div class="form-group">
                              <label>Tanggal Transaksi</label>
                              <input class="form-control" type="text"   value="<?php echo $data['tgl_transaksi'];?>" readonly >
                            </div>
                          </div>

                          <div class="col-lg-3">
                            <div class="form-group">
                              <label>Status Bayar</label>
                              <input class="form-control" type="text"   value="<?php echo $data['status_bayar'];?>" readonly >
                            </div>
                          </div>

                          <div class="col-lg-3">
                            <div class="form-group">
                              <label>Nama Petugas</label>
                              <input class="form-control" type="text"   value="<?php echo $data['id_petugas'];?>" readonly >
                            </div>
                          </div>



                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title">
                  </div>
                  <div class="card-body">
                    <div class="basic-elements">

                      <form   method="post">

                        <div class="row">
                          <input type="hidden" name="id_pendaftaran" >


                          <div class="col-lg-12">
                            <div class="form-group">
                              <div class="form-group">
                                <label>ID Transaksi</label>
                                <input class="form-control"  type="text" value="<?php echo $data['id_transaksi'];?>" readonly>
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
