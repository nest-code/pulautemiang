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
          <div class="logo"><a href="index.html">
            <span><?php echo "$level"; ?></span></a></div>
            <br> <br>
            <div class=""align="center">
              <a href="../../">
                <img src="/pulautemiang/assets/images/logo.png" alt="" />
              </a>
            </div>
<br>
          <br>
          <ul>
            <li class="label">Main</li>
            <li  class="sidebar-sub-toggle" ><a href="/pulautemiang">         <i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=petugas/petugas_antrian_beranda">         <i class="ti-layers-alt"></i> Antrian Berobat <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=petugas/petugas_pendaftaran">         <i class="ti-pencil-alt"></i> Pasien Baru <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=petugas/petugas_pasien">         <i class="ti-wheelchair"></i> Data Pasien <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=petugas/petugas_transaksi">         <i class="ti-money"></i> Pembayaran <span class="badge badge-primary"></span> </span></a></li>
          </ul>
        </div>
      </div>
    </div>
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
                  <h1> <b>Transasksi Berobat </b> | Bayar Obat  </h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=dokter/petugas_pasien">Bayar Obat</a></li>
                    <li class="breadcrumb-item active">Bayar Obat</li>
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
          if(isset($_POST['submit'])){
            $id_transaksi= $_POST['id_transaksi'];
            $transaksii=$id_transaksi;
            $sql = mysqli_query($conn, "UPDATE tb_transaksi_berobat set status_bayar='Bayar' where id_transaksi='$transaksii'") or die(mysqli_error($conn));
            if($sql){
              echo
              '<script>
              alert("Berhasil Membayarkan Obat");
              document.location="/pulautemiang/index.php?m=petugas/petugas_transaksi";
              </script>';
            }else{
              echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
          }
          ?>

          <?php
          $host = "localhost";
          $username = "root";
          $pass = "";
          $db = "db_temiang";
          $conn = mysqli_connect($host, $username, $pass, $db);
          $transaksi= $_GET['id_transaksi'];
          $query = mysqli_query($conn, "  SELECT * FROM tb_transaksi_berobat inner join tb_resep_obat on tb_transaksi_berobat.id_resep_obat=tb_resep_obat.id_resep_obat inner join tb_pasien on tb_resep_obat.id_pasien=tb_pasien.id_pasien where tb_transaksi_berobat.id_transaksi= '$transaksi'");
          $data = mysqli_fetch_array($query);
          ?>


          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title"></div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <form action="edit_transaksi.php?id_transaksi=<?php echo $transaksi ?>"  method="post">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <input type="hidden" name="id_transaksi" value="<?php echo $data['id_transaksi']; ?>"  >
                              <div class="form-group">
                                <label>Tanggal</label>
                                <input class="form-control"  type="date" name="tgl_transaksi"  value="<?php echo $data['tgl_transaksi']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                <label>Status Periksa</label>
                                <input class="form-control"  type="text" name="status_bayar"  value="<?php echo $data['status_bayar']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                <label>ID Resep</label>
                                <input class="form-control" type="text" name="id_resep_obat" value="<?php echo $data['id_resep_obat']; ?>" readonly >
                              </div>
                              <?php
                              $host = "localhost";
                              $username = "root";
                              $pass = "";
                              $db = "db_temiang";
                              $conn = mysqli_connect($host, $username, $pass, $db);
                              $query = mysqli_query($conn, "SELECT tb_petugas.id_petugas,tb_akun.id_akun,tb_petugas.nama  from tb_petugas inner join tb_akun on tb_petugas.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
                              $as = mysqli_fetch_array($query);
                              ?>
                              <div class="form-group">
                                <label>Nama Pasien</label>
                                <input class="form-control" type="text"  value="<?php echo $data['nama']; ?>" readonly >
                              </div>
                              <div class="form-group">
                                <label>Nama Petugas</label>
                                <input class="form-control" type="hidden" value="  <?php echo $a['id_petugas'];?>"   name="id_petugas" readonly>
                                <input class="form-control" type="text" value="  <?php echo $as['nama'];?>"    readonly>
                              </div>
                              <div class="form-group" align="center">
                                <button type="submit"name="submit" value="submit" class="btn btn-primary">Bayarkan</button>
                                <button type="button" name=""class="btn btn-danger">Batal</button>
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

      <script src="/pulautemiang/assets/js/lib/jquery.min.js"></script>
      <script src="/pulautemiang/assets/js/lib/jquery.nanoscroller.min.js"></script>
      <script src="/pulautemiang/assets/js/lib/menubar/sidebar.js"></script>
      <script src="/pulautemiang/assets/js/lib/preloader/pace.min.js"></script>
      <script src="/pulautemiang/assets/js/scripts.js"></script>

    </body>

  <?php } ?>
  </html>
