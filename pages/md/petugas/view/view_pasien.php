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
                                  <h1> <b>Data Pasien</b> | Lihat Data Pasien  </h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Data Pasien</li>
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
                $id_pasien= $_GET['id_pasien'];
                $query = mysqli_query($conn, "  select * from tb_pasien where id_pasien=  '$id_pasien'");
                $data = mysqli_fetch_array($query);
                ?>

                <section id="main-content">
                  <form class="" action="" method="post">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                          <div class="card-title"></div>
                          <div class="card-body">
                            <div class="basic-elements">
                              <form>
                                <div class="row">
                                  <div class="col-lg-6">
                                  </div>
                                  <div class="col-lg-6">
                                    <input class="form-control" type="hidden" name="id_pasien" placeholder="id_pasien" value="<?php echo $data['id_pasien']; ?>"  readonly=""  >
                                    <div class="form-group">
                                      <label>Nama Pasien</label>
                                      <input type="text" class="form-control"  name="nama" value="<?php echo $data['nama']; ?>" readonly >
                                    </div>
                                    <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input type="date" class="form-control" name="tgl_lahir"  value="<?php echo $data['tgl_lahir']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label>Jenis Kelamin</label>
                                      <select class="form-control" name="jk"  readonly>
                                        <option>-Pilih-</option>
                                        <option value="L"  <?php if($data['jk'] == 'L'){ echo 'selected'; } ?>>Laki-Laki</option>
                                        <option value="P"   <?php if($data['jk'] == 'P'){ echo 'selected'; } ?>>Perempuan</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Golongan Darah</label>
                                      <select class="form-control" name="agama" readonly>
                                        <option>-Pilih-</option>
                                        <option value="A"  <?php if($data['gol_darah'] == 'A'){ echo 'selected'; } ?>>A</option>
                                        <option value="B"   <?php if($data['gol_darah'] == 'B'){ echo 'selected'; } ?>>B</option>
                                        <option value="AB"   <?php if($data['gol_darah'] == 'AB'){ echo 'selected'; } ?>>AB</option>
                                        <option value="O" <?php if($data['gol_darah'] == 'O'){ echo 'selected'; } ?>>O</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Agama</label>
                                      <select class="form-control" name="agama" readonly>
                                        <option>-Pilih-</option>
                                        <option value="Buddha"  <?php if($data['agama'] == 'Buddha'){ echo 'selected'; } ?>>Buddha</option>
                                        <option value="Hindu"   <?php if($data['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
                                        <option value="Islam"   <?php if($data['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
                                        <option value="Kristen" <?php if($data['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen Protestan</option>
                                        <option value="Katolik" <?php if($data['agama'] == 'Katolik'){ echo 'selected'; } ?>>Kristen Katolik</option>
                                      </select>
                                    </div>


                                    <div class="form-group">
                                      <label>Pekerjaan</label>
                                      <input type="text" class="form-control" name="pekerjaan"  value="<?php echo $data['pekerjaan']; ?>" readonly>
                                    </div>


                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <input type="text" class="form-control" name="pekerjaan"  value="<?php echo $data['alamat']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                      <label>No HP</label>
                                        <input type="text" class="form-control" name="no_hp"  value="<?php echo $data['no_hp']; ?>"   readonly >
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
                  <!-- /# row -->


                  <div class="row">
                    <div class="col-lg-12">
                      <div class="footer">
                        <!-- <p>2019 © Puskesmas Pulau Temiang<a href="#">example.com</a></p> -->
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
    <!-- sidebar -->

    <!-- bootstrap -->


    <script src="/pulautemiang/assets/js/scripts.js"></script>
    <!-- scripit init-->





</body>
<?php } ?>
</html>
