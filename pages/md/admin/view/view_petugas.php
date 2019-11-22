<?php
session_start();
$id_akun=$_SESSION['id_akun'];
$nama_akun=$_SESSION['nama_akun'];
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

    include_once '../../../../backend/koneksi.php';

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
                  <h1><b>Data Pasien</b> | Lihat Data Petugas  </h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/admin/index.php?m=admin/admin_petugas">Data Petugas</a></li>
                    <li class="breadcrumb-item active">Lihat Data Petugas</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>

          <section id="main-content">
            <form class="" action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-title"></div>
                    <div class="card-body">
                      <div class="basic-elements">
                        <form>
                          <div class="row">
                            <div class="col-lg-6">
                              <img src="/pulautemiang/img/petugas/<?php echo $data['foto']; ?>" alt="">
                            </div>
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
                                <select class="form-control" name="jk" readonly>
                                  <option>-Pilih-</option>
                                  <option value="L" <?php if($data['jk'] == 'L'){ echo 'selected'; } ?>>Laki-laki</option>
                                  <option value="P" <?php if($data['jk'] == 'P'){ echo 'selected'; } ?>>Perempuan</option>
                                </select>
                                  </div>

                              <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" name="agama"  readonly>
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
                                <input type="text" class="form-control"   value="<?php echo $data['alamat']; ?>" required maxlength="14"  onkeypress="return isNumberKey(event)" readonly>
                              </div>


                              <div class="form-group">
                                <label>NO HP</label>
                                <input type="text" class="form-control"   value="<?php echo $data['no_hp']; ?>" required maxlength="14"  onkeypress="return isNumberKey(event)" readonly>
                              </div>

                              <div class="form-group">
                                <label>Jenis Akun</label>
                                <input type="text" class="form-control"  value="<?php echo $data['level']; ?>" required maxlength="14"  onkeypress="return isNumberKey(event)" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="" align="center">
                            <!-- <button type="submit" name="tambah_pendaftaran_karyawan" class="btn btn-primary">Simpan</button> -->
                            <!-- <button type="button" name=""class="btn btn-default">Kembali</button> -->

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
  </body>
<?php } ?>
</html>
