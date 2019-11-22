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
$id_resep_obat=$_GET['id_resep_obat'];
$query = mysqli_query($conn, "select * from tb_detail_resep_obat inner join tb_resep_obat on tb_detail_resep_obat.id_resep_obat=tb_resep_obat.id_resep_obat
inner join tb_pasien on tb_resep_obat.id_pasien=tb_pasien.id_pasien where tb_resep_obat.id_resep_obat ='$id_resep_obat' ");
// $query = mysqli_query($conn, "SELECT * FROM tb_pasien inner join tb_resep_obat on tb_pasien.id_pasien=tb_resep_obat.id_pasien inner join tb_detail_resep_obat on tb_resep_obat.id_resep_obat=tb_detail_resep_obat.id_resep_obat where tb_resep_obat.id_resep_obat ='$id_resep_obat' ");
$data = mysqli_fetch_array($query);
?>


<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1><b>Resep Obat </b> | Detail Resep Obat  <?php // echo "$id_resep_obat  ";?> </h1>
            </div>
          </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
          <div class="page-header">
            <div class="page-title">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Resep Obat</a></li>
                <li class="breadcrumb-item active"> DetailResep Obat</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /# column -->
      </div>
      <!-- /# row -->
      <section id="main-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-title"></div>
              <div class="card-body">
                <div class="basic-elements">
                  <form>
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>ID Resep Obat</label>
                          <input type="text" class="form-control" value="<?php echo $data['id_resep_obat'];?>" readonly >
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Nama Pasien</label>
                          <input type="text" class="form-control" value="<?php echo $data['nama'];?>" readonly>
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Waktu</label>
                          <input type="text" class="form-control" value="<?php echo $data['waktu'];?>" readonly>
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Status</label>
                          <input type="text" class="form-control" value="<?php echo $data['status'];?>" readonly>
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
              <div class="card-title"></div>
              <div class="card-body">
                <div class="bootstrap-data-table-panel">
                  <div class="table-responsive">
                    <table id="bootstrap-data-table-export" class="table table-striped ">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Obat </th>
                          <th>Kategori Obat</th>
                          <th>Jumlah</th>
                          <th>Keterangan</th>
                          <!-- <th>Tindakan</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=0;
                        // $host = "localhost";
                        // $username = "root";
                        // $pass = "";
                        // $db = "db_temiang";
                        // $conn = mysqli_connect($host, $username, $pass, $db);

                        include_once '../../../../backend/koneksi.php';
                        $query = mysqli_query($conn, "select * from tb_kategori_obat inner join tb_obat on tb_obat.id_kategori_obat=tb_kategori_obat.id_kategori_obat inner join tb_detail_resep_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat where tb_detail_resep_obat.id_resep_obat='$id_resep_obat'");
                        // $query = mysqli_query($conn, "select * from tb_obat inner join tb_detail_resep_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat where tb_detail_resep_obat.id_resep_obat='$id_resep_obat'");

                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['nama_obat'];?></td>
                            <td><?php echo $a['nama_kategori'];?></td>
                            <td><?php echo $a['jumlah'];?></td>
                            <td><?php echo $a['keterangan'];?></td>
                            <!-- <td class="color-primary">
                              <form class="" action="" method="post"> -->
                                <!-- <button type="button"  class="btn btn-success btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/view/view_petugas.php?id_petugas=<?php echo $a['id_petugas'] ?> '"  title="Cetak Kartu Berobat"><i class="fa fa-eye" title="Lihat"></i></button> -->
                                <!-- <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit" title="Ubah"></i></button>
                                <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"><i class="fa fa-eraser" title="Hapus"></i></button>
                              </td>
                            </tr> -->
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
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
