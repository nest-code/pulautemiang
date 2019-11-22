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
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html"><span><?php echo "$level"; ?></span></a></div>
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
            <li><a href="/pulautemiang/index.php?m=admin/admin_dokter">      <i class="fa fa-user-md"> </i> Dokter</a></li>
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







    <?php
    if(isset($_POST['submit'])){

      // $host = "localhost";
      // $username = "root";
      // $pass = "";
      // $db = "db_temiang";
      //
      //
      // $conn = mysqli_connect($host, $username, $pass, $db);

      include_once '../../../../backend/koneksi.php';




      $nip= $_POST['nip'];
      $nama= $_POST['nama'];
      $tgl_lahir= $_POST['tgl_lahir'];
      $jk= $_POST['jk'];
      $agama= $_POST['agama'];
      $alamat= $_POST['alamat'];
      $no_hp= $_POST['no_hp'];
      $foto= $_POST['foto'];
      $id_jenis_poli= $_POST['id_jenis_poli'];



      $id_akun= $_POST['id_akun'];


      $namaakun= $_POST['nama_akun'];
      $katasandi= $_POST['kata_sandi'];
      $level= $_POST['level'];
      $pertanyaan= $_POST['pertanyaan'];
      $jawaban= $_POST['jawaban'];


      $sqls = mysqli_query($conn,
      "UPDATE tb_akun SET
      nama_akun='$namaakun',
      kata_sandi='$katasandi',
      level='$level',
      pertanyaan='$pertanyaan',
      jawaban='$jawaban'
      WHERE id_akun='$id_akun'")
      or die(mysqli_error($conn));



      $sql = mysqli_query($conn,
      "UPDATE tb_pasien SET
      nip='$nip',
      nama='$nama',
      tgl_lahir='$tgl_lahir',
      jk='$jk',
      agama='$agama',
      alamat='$alamat',
      no_hp='$no_hp',
      foto='$foto',
      id_jenis_poli='$id_jenis_poli',
      id_akun='$id_akun'
      WHERE nip='$nip'")

      or die(mysqli_error($conn));

      if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="edit_dokter.php?nip='.$nip.'";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
      }


    }

    ?>






    <?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db = "db_temiang";
    $conn = mysqli_connect($host, $username, $pass, $db);
    $dokter= $_GET['nip'];
    $query = mysqli_query($conn, "  select * from tb_dokter inner join tb_akun on tb_dokter.id_akun=tb_akun.id_akun where tb_dokter.nip=  '$dokter'");

    $data = mysqli_fetch_array($query);
    ?>






    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1> <b>Data Dokter</b> | Edit Data Dokter  </h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=admin/admin_dokter">Data Dokter</a></li>
                    <li class="breadcrumb-item active">Lihat Data Dokter</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <form class="" action="edit_dokter.php?id_dokter=<?php echo "$dokter"; ?>" method="post" enctype="multipart/form-data">
              <!-- <form action="edit_kategori.php?id_kategori_obat=<?php echo "$id_kategori"; ?>"  method="post"> -->

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
                              <div class="form-group">
                                <label>NIP</label>
                                <input type="text" class="form-control"  name="nip" value="<?php echo $data['nip']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                <label>Nama Dokter</label>
                                <input type="text" class="form-control"  name="nama" value="<?php echo $data['nama']; ?>" >
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
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control"  name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" >
                              </div>
                              <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" name="agama" >
                                  <option>-Pilih-</option>
                                  <option value="Buddha"  <?php if($data['agama'] == 'Buddha'){ echo 'selected'; } ?>>Buddha</option>
                                  <option value="Hindu"   <?php if($data['agama'] == 'Hinddu'){ echo 'selected'; } ?>>Hindu</option>
                                  <option value="Islam"   <?php if($data['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
                                  <option value="Kristen" <?php if($data['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
                                  <option value="Katolik" <?php if($data['agama'] == 'Katolik'){ echo 'selected'; } ?>>Katolik</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control"  name="alamat" value="<?php echo $data['alamat']; ?>" >
                              </div>
                              <div class="form-group">
                                <label>NO HP</label>
                                <input type="text" class="form-control"  name="no_hp" value="<?php echo $data['no_hp']; ?>" maxlength="13">
                              </div>
                              <div class="form-group">
                                <label>Jenis Poli</label>
                                <select class="form-control" name="id_jenis_poli" >
                                  <option>-Pilih-</option>
                                  <option value="1"  <?php if($data['id_jenis_poli'] == '1'){ echo 'selected'; } ?>>Poli Umum</option>
                                  <option value="2"   <?php if($data['id_jenis_poli'] == '2'){ echo 'selected'; } ?>>Poli KB</option>
                                  <option value="5"   <?php if($data['id_jenis_poli'] == '5'){ echo 'selected'; } ?>>Poli DOTS</option>
                                  <option value="6" <?php if($data['id_jenis_poli'] == '6'){ echo 'selected'; } ?>>Poli Gigi</option>
                                  <option value="7" <?php if($data['id_jenis_poli'] == '7'){ echo 'selected'; } ?>>Poli Anak</option>
                                </select>
                              </div>


                              <div class="form-group">
                                <label>Foto</label>
                                <input type="text" class="form-control"  name="foto" value="<?php echo $data['foto']; ?>" >
                              </div>


                            </div>

                            <div class="col-lg-6">
                              <!-- <div class="form-group"> -->
                                <!-- <label>ID</label> -->
                                <input class="form-control" type="hidden" name="id_akun" value="<?php echo $data['id_akun']; ?>" readonly>
                              <!-- </div> -->

                              <div class="form-group">
                                <label>Nama Akun</label>
                                <input class="form-control" type="text" name="nama_akun" value="<?php echo $data['nama_akun']; ?>"   >
                              </div>

                              <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" value="password" name="kata_sandi" >
                              </div>

                              <div class="form-group">
                                <label>Jenis Akun</label>
                                <input class="form-control" type="text" name="level" value="Dokter" readonly >
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

                              <div class="form-group">
                                <div class="col-sm-12" align="right">
                                  <button class="btn btn-primary" type="submit" name="submit"  value="submit" class="btn btn-primary">Simpan</button>
                                  <button type="button" name=""  class="btn btn-default"  onclick="window.location.href='/pulautemiang/index.php?m=admin/admin_dokter'" >Kembali</button>

                                </div>
                              </div>


                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /# column -->

                <!-- /# column -->
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
    <!-- scripit init-->





  </body>

<?php } ?>

</html>
