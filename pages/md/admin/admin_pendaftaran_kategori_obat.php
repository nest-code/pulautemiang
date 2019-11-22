<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Focus Admin: Basic Form </title>
</head>


<?php

    if(isset($_POST['submit'])){
      $host = "localhost";
      $username = "root";
      $pass = "";
      $db = "db_temiang";
      $conn = mysqli_connect($host, $username, $pass, $db);

      $id_kategori_obat= $_POST['id_kategori_obat'];
      $nama_kategori= $_POST['nama_kategori'];

      $sql = mysqli_query($conn, "INSERT INTO tb_kategori_obat(id_kategori_obat, nama_kategori) VALUES('', '$nama_kategori')") or die(mysqli_error($conn));

      if($sql){
        echo '<script>alert("Berhasil menambahkan data."); document.location="/pulautemiang/index.php?m=admin/admin_kategori";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
      }
    }


?>






<body>
  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1><b>Data Kategori Obat</b> | Tambah Kategori Obat  </h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="?m=admin/admin_kategori">Data Kategori Obat</a></li>
                  <li class="breadcrumb-item active">Tambah Kategori Obat</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">

          <!-- /# row -->

          <form class="" action="/pulautemiang/index.php?m=admin/admin_pendaftaran_kategori_obat" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title">
                  </div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <form>
                        <div class="row">
                          <div class="col-lg-12">

                            <input type="hidden" class="form-control"  name="id_kategori_obat">

                            <div class="form-group">
                              <label>Nama</label>
                              <input type="text" class="form-control"  name="nama_kategori"  placeholder="Masukan Nama Kategori Obat...">
                            </div>

                            <div class="col-sm-7" align="right">
                              <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
                              <button type="button" name=""  onclick="window.location.href='/pulautemiang/index.php?m=admin/admin_kategori'" class="btn btn-danger">Batal</button>

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
  <script src="assets/js/scripts.js"></script>

</body>

</html>
