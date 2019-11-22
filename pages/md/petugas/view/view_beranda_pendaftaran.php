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
  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";
  $conn = mysqli_connect($host, $username, $pass, $db);
  $pendaftaran= $_GET['id_pendaftaran'];
  $query = mysqli_query($conn, "  SELECT * from tb_pendaftaran inner join tb_pasien on tb_pendaftaran.id_pasien=tb_pasien.id_pasien where tb_pendaftaran.id_pendaftaran= '$pendaftaran'");
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
    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1> <b>Berobat</b> | Lihat Pendaftaran Berobat  </h1>
                </div>
              </div>
            </div>
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                    <li class="breadcrumb-item active">Lihat Pendaftaran Berobat</li>
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
                      <form action="view_pendaftaran.php?id_pasien=<?php echo $pasien ?>"  method="post">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <input type="hidden" name="id_pendaftaran" >
                              <div class="form-group">
                                <label>Tanggal</label>
                                <input class="form-control"  type="text"  value="<?php echo $data['tanggal']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                <label>Nama Pasien</label>
                                <input class="form-control" type="text" value="<?php echo $data['nama']; ?>"  readonly>
                              </div>
                              <div class="form-group">
                                <label>No. Antrian</label>
                                <input class="form-control" type="text"   value="<?php echo $data['no_antrian']; ?>"  readonly>
                              </div>
                              <div class="form-group">
                                <label>Jenis Poli</label>
                                <input class="form-control" type="text"  value="<?php echo $data['id_jenis_poli']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                <label>Status</label>
                                <input class="form-control" type="text"   value="<?php echo $data['status']; ?>"  readonly>
                              </div>
                              <div class="form-group">
                                <label>ID Petugas</label>
                                <input class="form-control" type="text"   value="<?php echo $data['id_petugas']; ?>" readonly >
                              </div>
                              <div class="form-group">
                                <label>Jamkes</label>
                                <input class="form-control" type="text"   value="<?php echo $data['jamkes']; ?>" readonly >
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
