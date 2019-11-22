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


  $id_resep_obat=$_GET['id_resep_obat'];
  $query = mysqli_query($conn, " SELECT * FROM tb_resep_obat inner join tb_pasien on tb_resep_obat.nik=tb_pasien.nik where tb_resep_obat.id_resep_obat='$id_resep_obat'");
  // $query = mysqli_query($conn, " SELECT * FROM tb_resep_obat where id_resep_obat='$id_resep_obat'");

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



    $id_resep_obat= $_POST['id_resep_obat'];
    $pendaftaran=$id_resep_obat;
    $sql = mysqli_query($conn, "UPDATE tb_resep_obat set status='Selesai' where id_resep_obat='$pendaftaran'") or die(mysqli_error($conn));

    $id_transaksi= $_POST['id_transaksi'];
    $tgl_transaksi= $_POST['tgl_transaksi'];
    $status_transaksi= $_POST['status_transaksi'];
    $id_resep_obat= $_POST['id_resep_obat'];
    $id_petugas= $_POST['id_petugas'];

    $sql1 =mysqli_query($conn,"insert into tb_transaksi_berobat values('','$tgl_transaksi','$status_transaksi','$id_resep_obat','$id_petugas')");

    if($sql1){
      echo
      '<script>
      alert("Berhasil, obat telah diambil");
      document.location="/pulautemiang/index.php?m=apoteker/apoteker_antrian";
      </script>';
    }else{
      echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
    }
  }

  ?>

  <body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html">
            <span><?php echo "$level"; ?></span></a></div>
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
              <li><a href="/pulautemiang/index.php?m=apoteker/apoteker_obat"><i class="ti-package"></i>Data Obat</a></li>
              <li><a href="/pulautemiang/index.php?m=apoteker/apoteker_antrian"><i class="ti-layers-alt"></i>Resep Obat</a></li>
              <li><a href="/pulautemiang/index.php?m=apoteker/apoteker_ambil_obat">         <i class="ti-money"></i>Pembayaran <span class="badge badge-primary"></span> </span></a></li>
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
                  <h1> <b>Resep Obat</b> | Ubah Status Obat</h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                    <li class="breadcrumb-item active">Resep Obat</li>
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
                      <form action="edit_resep_obat.php?id_resep_obat=<?php echo "$id_resep_obat"; ?>"  method="post">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <div class="form-group">
                                <label>ID Resep Obat</label>
                                <input class="form-control" type="text" value="<?php echo $data['id_resep_obat'];?>" name="id_resep_obat" readonly>
                              </div>

                              <div class="form-group">
                                <label>NIK</label>
                                <input class="form-control" type="text" value="<?php echo $data['nik'];?>" name="nik" readonly>
                              </div>

                              <div class="form-group">
                                <label>NO RM</label>
                                <input class="form-control" type="text" value="RM00001" name="nik" readonly>
                              </div>


                              <div class="form-group">
                                <label>Nama Pasien</label>
                                <input class="form-control" type="text" value="<?php echo $data['nama'];?>" name="nik" readonly>
                              </div>

                              <div class="form-group">
                                <label>Waktu</label>
                                <input class="form-control" type="text"  name="waktu" value="<?php echo $data['waktu'];?>" readonly >
                              </div>

                              <div class="form-group">
                                <label>Status</label>
                                <input class="form-control" type="text" name="status" value=" <?php echo $data['status'];?>" readonly>
                              </div>


                            </div>
                            <div class="row">
                              <!-- <div class="col-lg-3"> -->
                                <!-- <div class="form-group"> -->
                                  <!-- <label>ID Transaksi</label> -->
                                  <input class="form-control" type="hidden" name="id_transaksi" readonly>
                                <!-- </div> -->
                              <!-- </div> -->

                              <!-- <div class="col-lg-2"> -->
                                <!-- <div class="form-group"> -->
                                  <!-- <label>Tanggal Transaksi</label> -->
                                  <input class="form-control" type="hidden" name="tgl_transaksi" value="<?php echo date('Y-m-d') ?>" >
                                <!-- </div> -->
                              <!-- </div> -->

                              <!-- <div class="col-lg-2"> -->
                                <!-- <div class="form-group"> -->
                                  <!-- <label>Status</label> -->
                                  <input class="form-control" type="hidden" name="status_transaksi" value="Belum" readonly>
                                <!-- </div> -->
                              <!-- </div> -->

                              <!-- <div class="col-lg-2"> -->
                                <!-- <div class="form-group"> -->
                                  <!-- <label>ID Resep Obat</label> -->
                                  <input class="form-control" type="hidden" name="id_resep_obat" value="<?php echo $data['id_resep_obat'];?>" readonly>
                                <!-- </div> -->
                              <!-- </div> -->

                              <!-- <div class="col-lg-3"> -->
                                <!-- <div class="form-group"> -->
                                  <!-- <label>ID Petugas</label> -->
                                  <input class="form-control" type="hidden" name="id_petugas" >
                                <!-- </div> -->
                              <!-- </div> -->

                            </div>
                            <div class="form-group" align="center">
                              <button class="btn btn-primary" type="submit" name="submit" value="submit">Selesai</button>
                              <button type="button" name=""class="btn btn-danger" onclick="window.location.href='/pulautemiang/index.php?m=dokter/dokter_antrian'">Batal</button>
                            </div>
                          </div>
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


  <script src="/pulautemiang/assets/js/lib/jquery.min.js"></script>
  <script src="/pulautemiang/assets/js/lib/jquery.nanoscroller.min.js"></script>
  <script src="/pulautemiang/assets/js/lib/menubar/sidebar.js"></script>
  <script src="/pulautemiang/assets/js/lib/preloader/pace.min.js"></script>
  <script src="/pulautemiang/assets/js/scripts.js"></script>

</body>

<?php } ?>
</html>
