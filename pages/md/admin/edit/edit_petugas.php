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
  $id_petugas= $_GET['id_petugas'];
  $query = mysqli_query($conn, "  select * from tb_petugas inner join tb_akun on tb_petugas.id_akun=tb_akun.id_akun where tb_petugas.id_petugas='$id_petugas'");
  $data = mysqli_fetch_array($query);
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



    $id_petugas= $_POST['id_petugas'];
    $nama= $_POST['nama'];
    $tgl_lahir= $_POST['tgl_lahir'];
    $jk= $_POST['jk'];
    $agama= $_POST['agama'];
    $alamat= $_POST['alamat'];
    $no_hp= $_POST['no_hp'];
    $id_akun= $_POST['id_akun'];



    $sql = mysqli_query($conn,
    "UPDATE tb_petugas SET
    nama='$nama',
    tgl_lahir='$tgl_lahir',
    jk='$jk',
    agama='$agama',
    alamat='$alamat',
    no_hp='$no_hp',
    id_akun='$id_akun'
    WHERE id_petugas='$id_petugas'")
    or die(mysqli_error($conn));
    if($sql){
      echo '<script>alert("Berhasil menyimpan data."); document.location="edit_petugas.php?id_petugas='.$id_petugas.'";</script>';
    }else{
      echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
  }
  ?>
  <body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html"><span><?php echo $level ?></span></a></div>
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
              <a href="/pulautemiang/index.php?m=beranda"> <i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a>
            </li>
            <li><a href="/pulautemiang/index.php?m=admin/admin_pasien">      <i class="ti-wheelchair"></i>Pasien</a></li>
            <li><a href="/pulautemiang/index.php?m=admin/admin_petugas">      <i class="ti-hand-open"></i>Petugas</a></li>
            <li><a href="/pulautemiang/index.php?m=admin/admin_dokter">      <i class="fa fa-user-md"> </i> Dokter</a></li>
            <li><a href="/pulautemiang/index.php?m=admin/admin_obat">        <i class="ti-package"></i>Obat</a></li>
            <li><a href="/pulautemiang/index.php?m=admin/admin_poli">        <i class="ti-pin2"></i>Poli</a></li>
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
                  <h1><b>Data petugas</b> | Ubah Data Petugas </h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Ubah Data Petugas</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>


          <section id="main-content">
            <form class="" action="edit_petugas.php?id_petugas=<?php echo "$id_petugas"; ?>" method="post" >
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-title">
                    </div>
                    <div class="card-body">
                      <div class="basic-elements">
                        <form>
                          <div class="row">
                            <div class="col-lg-6">
                              <input type="hidden" class="form-control"  name="id_petugas" value="value="<?php echo $data['id_petugas']; ?>"">
                              <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control"  name="nama"  value="<?php echo $data['nama']; ?>" >
                              </div>
                              <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" >
                              </div>
                              <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jk">
                                  <option>-Pilih-</option>
                                  <option value="L" <?php if($data['jk'] == 'L'){ echo 'selected'; } ?>>Laki-laki</option>
                                  <option value="P" <?php if($data['jk'] == 'P'){ echo 'selected'; } ?>>Perempuan</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" name="agama"  >
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
                                <input type="text" class="form-control"  name="alamat" value="<?php echo $data['alamat']; ?>" required maxlength="14"  onkeypress="return isNumberKey(event)" >
                              </div>
                              <div class="form-group">
                                <label>NO HP</label>
                                <input type="text" class="form-control"  name="no_hp" value="<?php echo $data['no_hp']; ?>" required maxlength="14"  onkeypress="return isNumberKey(event)" >
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <!-- <div class="form-group"> -->
                                <!-- <label>ID</label> -->
                                <input class="form-control" type="hidden" name="id_akun" value="<?php echo $data['id_akun']; ?>" readonly>
                              <!-- </div> -->
                              <div class="form-group">
                                <label>Nama Akun</label>
                                <input class="form-control" type="text" name="nam_aakun" value="<?php echo $data['nama_akun']; ?>"   >
                              </div>
                              <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" value="password" name="katasandi" >
                              </div>
                              <div class="form-group">
                                <label>Jenis Akun</label>
                                <select class="form-control" name="jk">
                                  <option>-Pilih-</option>
                                  <option value="Admin" <?php if($data['level'] == 'Admin'){ echo 'selected'; } ?>>Admin</option>
                                  <option value="Petugas" <?php if($data['level'] == 'Petugas'){ echo 'selected'; } ?>>Petugas</option>
                                  <option value="Kepala" <?php if($data['level'] == 'Kepala'){ echo 'selected'; } ?>>Kepala</option>
                                  <option value="Apotek" <?php if($data['level'] == 'Apotek'){ echo 'selected'; } ?>>Apotek</option>

                                </select>
                              </div>
                              <div class="form-group">
                                <label>Pertanyaan Keamanan</label>
                                <select class="form-control" name="pertanyaan" >
                                  <option  value="1" <?php if($data['pertanyaan'] == '1'){ echo 'selected'; } ?> >Dimana Anda Dilahirkan ?</option>
                                  <option  value="2" <?php if($data['pertanyaan'] == '2'){ echo 'selected'; } ?> >Siapa Nama Sahabat Waktu Anda Kecil ?</option>
                                  <option  value="3" <?php if($data['pertanyaan'] == '3'){ echo 'selected'; } ?> >Berapa ukuran Sepatu Anda ?</option>
                                  <option  value="4" <?php if($data['pertanyaan'] == '4'){ echo 'selected'; } ?> >Apa cita-cita Anda Sewaktu Kecil ?</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Jawaban Pertanyaan</label>
                                <input class="form-control" type="text" name="jawaban"  value="<?php echo $data['jawaban']; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="" align="center">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
                            <button type="button"  class="btn btn-default"  onclick="window.location.href='/pulautemiang/index.php?m=admin/admin_petugas'">Kembali</button>
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
