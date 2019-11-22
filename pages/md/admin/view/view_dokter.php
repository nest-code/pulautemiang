<!DOCTYPE html>

<?php
session_start();
$namaakun=$_SESSION['nama_akun'];
$level=$_SESSION['level'];
if(!isset($_SESSION['nama_akun'])){
  header('location: ../login.php');

}else{
  // $idpetugas=$_SESSION['id_petugas'];
  ?>
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
  <body>
    <?php
    // $host = "localhost";
    // $username = "root";
    // $pass = "";
    // $db = "db_temiang";
    // $conn = mysqli_connect($host, $username, $pass, $db);

    // include_once 'koneksi.php';
    include_once '../../../../backend/koneksi.php';


    $nip= $_GET['nip'];
    // $query = mysqli_query($conn, " select * from tb_jenis_poli inner join tb_dokter on tb_jenis_poli.id_jenis_poli=tb_dokter.id_jenis_poli inner join tb_akun on tb_dokter.id_akun=tb_akun.id_akun  where tb_dokter.nip='$nip'");
    $query = mysqli_query($conn, "select * from tb_dokter inner join tb_akun on tb_dokter.id_akun=tb_akun.id_akun where tb_dokter.nip=  '$nip'");
    $data = mysqli_fetch_array($query);
    ?>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1> <b>Data Dokter</b> | Lihat Data Dokter  </h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=admin_dokter">Data Dokter</a></li>
                    <li class="breadcrumb-item active">Lihat Data Dokter</li>
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
                            </div>
                            <div class="col-lg-6">

                              <div class="form-group">
                                <label>Nama NIP</label>
                                <input type="text" class="form-control"  name="nip" value="<?php echo $data['nip']; ?>" readonly>
                              </div>

                              <div class="form-group">
                                <label>Nama Dokter</label>
                                <input type="text" class="form-control"  name="nama" value="<?php echo $data['nama']; ?>" readonly>
                              </div>

                              <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jk" readonly>
                                  <option>-Pilih-</option>
                                  <option value="L" <?php if($data['jk'] == 'L'){ echo 'selected'; } ?>>Laki-laki</option>
                                  <option value="P" <?php if($data['jk'] == 'P'){ echo 'selected'; } ?>>Perempuan</option>
                                </select>
                                </div>

                              <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control"  name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" readonly>
                              </div>

                              <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" name="agama" readonly >
                                  <option>-Pilih-</option>
                                  <option value="Buddha"  <?php if($data['agama'] == 'Buddha'){ echo 'selected'; } ?>>Buddha</option>
                                  <option value="Hindu"   <?php if($data['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
                                  <option value="Islam"   <?php if($data['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
                                  <option value="Kristen" <?php if($data['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
                                  <option value="Katolik" <?php if($data['agama'] == 'Katolik'){ echo 'selected'; } ?>>Katolik</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Alamat</label>
                                  <input type="text" class="form-control"  name="no_hp" value="<?php echo $data['alamat']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                <label>NO HP</label>
                                <input type="text" class="form-control"  name="no_hp" value="<?php echo $data['no_hp']; ?>" readonly>
                              </div>
                              <input type="hidden" class="form-control"  name="status" value="<?php echo $data['status']; ?>" readonly>

                              <!-- <div class="form-group">
                                <label>Jenis Poli</label>
                                <input type="text" class="form-control"  name="foto" value="<?php echo $data['nama_jenis']; ?>" readonly>
                              </div> -->

                              <div class="form-group">
                                <label>Jenis Poli</label>
                                <select class="form-control" name="agama" readonly >
                                  <option>-Pilih-</option>
                                  <option value="Buddha"  <?php if($data['id_jenis_poli'] == '1'){ echo 'selected'; } ?>>Umum</option>
                                  <option value="Hindu"   <?php if($data['id_jenis_poli'] == '2'){ echo 'selected'; } ?>>KB</option>
                                  <option value="Islam"   <?php if($data['id_jenis_poli'] == '5'){ echo 'selected'; } ?>>DOTS</option>
                                  <option value="Kristen" <?php if($data['id_jenis_poli'] == '6'){ echo 'selected'; } ?>>Gigi</option>
                                  <option value="Katolik" <?php if($data['id_jenis_poli'] == '7'){ echo 'selected'; } ?>>Anak</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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
    <!-- jquery vendor -->
    <script src="/pulautemiang/assets/js/lib/jquery.min.js"></script>
    <script src="/pulautemiang/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="/pulautemiang/assets/js/lib/menubar/sidebar.js"></script>
    <script src="/pulautemiang/assets/js/lib/preloader/pace.min.js"></script>
    <script src="/pulautemiang/assets/js/scripts.js"></script>
    <!-- scripit init-->
  </body>
<?php } ?>
</html>
