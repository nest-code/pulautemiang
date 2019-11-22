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

<?php
if(isset($_POST['submit'])){
  // $host = "localhost";
  // $username = "root";
  // $pass = "";
  // $db = "db_temiang";
  // $conn = mysqli_connect($host, $username, $pass, $db);

  include_once '../../../../backend/koneksi.php';


  $id_pasien= $_POST['id_pasien'];
  $nama= $_POST['nama'];
  $tgl_lahir= $_POST['tgl_lahir'];
  $jk= $_POST['jk'];
  $gol_darah= $_POST['gol_darah'];
  $agama= $_POST['agama'];
  $pekerjaan= $_POST['pekerjaan'];
  $alamat= $_POST['alamat'];
  $no_hp= $_POST['no_hp'];
  $sql = mysqli_query($conn,"UPDATE tb_pasien SET nama='$nama',tgl_lahir='$tgl_lahir',jk='$jk',gol_darah='$gol_darah',agama='$agama',pekerjaan='$pekerjaan',alamat='$alamat',no_hp='$no_hp' WHERE id_pasien='$id_pasien'")
  or die(mysqli_error($conn));

  if($sql){
    echo '<script>alert("Berhasil menyimpan data."); document.location="edit_pasien.php?id_pasien='.$id_pasien.'";</script>';
  }else{
    echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
  }
}
 ?>
<body>
        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><!-- <img src="/pulautemiang/assets/images/logo.png" alt="" /> --><span><?php echo $level ?></span></a></div>
                    <br> <br>

                    <div class=""align="center">
                      <a href="../../">
                    <img src="/pulautemiang/assets/images/logo.png" alt="" />
                     </a>
                    </div>
                     <br>

                    <ul>
                        <li class="label">Main</li>
                        <li  class="sidebar-sub-toggle" >
                          <a href="?m=beranda"> <i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a>
                        </li>
                        <li><a href="/pulautemiang/index.php?m=admin/admin_pasien">      <i class="ti-wheelchair"></i>Pasien</a></li>
                        <li><a href="/pulautemiang/index.php?m=admin/admin_petugas">      <i class="ti-hand-open"></i>Petugas</a></li>
                        <li><a href="/pulautemiang/index.php?m=admin/admin_dokter">      <i class="ti-face-smile"> </i> Dokter</a></li>
                        <li><a href="/pulautemiang/index.php?m=admin/admin_obat">        <i class="ti-package"></i>Obat</a></li>
                        <li><a href="/pulautemiang/index.php?m=admin/admin_poli">        <i class="ti-pin2"></i>Poli</a></li>


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
                                  <h1> <b>Data Pasien</b> | Ubah Data Pasien  </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=admin/admin_pasien">Data Pasien</a></li>
                                    <li class="breadcrumb-item active">Ubat Data Pasien</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->



                <?php
                $host = "localhost";
                $username = "root";
                $pass = "";
                $db = "db_temiang";
                $conn = mysqli_connect($host, $username, $pass, $db);
                $id_pasien= $_GET['id_pasien'];
                $query = mysqli_query($conn, "  select * from tb_pasien  where id_pasien=  '$id_pasien'");
                $data = mysqli_fetch_array($query);
                ?>

                <section id="main-content">
                  <form class="" action="" method="post">
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

                                  <div class="col-lg-12">
                                    <input class="form-control" type="hidden" name="id_pasien" placeholder="id_pasien" value="<?php echo $data['id_pasien']; ?>"   >


                                    <div class="form-group">
                                      <label>Nama Pasien</label>
                                      <input type="text" class="form-control"  name="nama" value="<?php echo $data['nama']; ?>"  >
                                    </div>

                                    <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input type="date" class="form-control" name="tgl_lahir"  value="<?php echo $data['tgl_lahir']; ?>">
                                    </div>

                                    <div class="form-group">
                                      <label>Jenis Kelamin</label>
                                      <select class="form-control" name="jk" >
                                        <option>-Pilih-</option>
                                        <option value="L" <?php if($data['jk'] == 'L'){ echo 'selected'; } ?>>Laki-laki</option>
                                        <option value="P" <?php if($data['jk'] == 'P'){ echo 'selected'; } ?>>Perempuan</option>
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label>Golongan Darah</label>
                                      <select class="form-control" name="gol_darah">
                                        <option>-Pilih-</option>
                                        <option value="A"  <?php if($data['gol_darah'] == 'A'){ echo 'selected'; } ?>>A</option>
                                        <option value="B" <?php if($data['gol_darah'] == 'B'){ echo 'selected'; } ?>>B</option>
                                        <option value="AB" <?php if($data['gol_darah'] == 'AB'){ echo 'selected'; } ?>>AB</option>
                                        <option value="O" <?php if($data['gol_darah'] == 'O'){ echo 'selected'; } ?>>O</option>
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label>Agama</label>
                                      <select class="form-control" name="agama" >
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
                                      <input type="text" class="form-control" name="pekerjaan"  value="<?php echo $data['pekerjaan']; ?>">
                                    </div>


                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <input type="text" class="form-control" name="alamat"  value="<?php echo $data['alamat']; ?>">
                                    </div>

                                    <div class="form-group">
                                      <label>No HP</label>
                                        <input type="text" class="form-control" name="no_hp"  value="<?php echo $data['no_hp']; ?>"   >
                                    </div>
                                  </div>
                                </div>
                                <div class="" align="center">
                                  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                  <button type="button" name=""  class="btn btn-default"  onclick="window.location.href='/pulautemiang/index.php?m=admin/admin_petugas'">Kembali</button>
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

    <script src="/pulautemiang/assets/js/lib/jquery.min.js"></script>
    <script src="/pulautemiang/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="/pulautemiang/assets/js/lib/menubar/sidebar.js"></script>
    <script src="/pulautemiang/assets/js/lib/preloader/pace.min.js"></script>
    <script src="/pulautemiang/assets/js/scripts.js"></script>
  </body>
<?php } ?>
</html>
