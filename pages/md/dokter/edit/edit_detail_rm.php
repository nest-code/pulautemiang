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
    <title>Puskesmas Pulau Temiang| Pelayanan</title>
    <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">
  </head>
  <?php
  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";
  $conn = mysqli_connect($host, $username, $pass, $db);
  $no_rm=$_GET['no_rm'];
  $rm=$no_rm;
  // $query = mysqli_query($conn, " SELECT * FROM tb_rekam_medis inner join tb_pasien on tb_rekam_medis.no_rm=tb_pasien.id_pasien where tb_rekam_medis.no_rm='$no_rm'");
  $query = mysqli_query($conn, " SELECT * FROM tb_rekam_medis  where no_rm='$rm'");
  $data = mysqli_fetch_array($query);
  ?>
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
            <ul>
              <li class="label">Main</li>
              <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=beranda"><i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
              <li><a href="/pulautemiang/index.php?m=dokter_antrian"><i class="ti-layers-alt"></i>Antrian Periksa</a></li>
              <li><a href="/pulautemiang/index.php?m=dokter_pasien"><i class="ti-wheelchair"></i>Pasien</a></li>
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
      <?php
      $host = "localhost";
      $username = "root";
      $pass = "";
      $db = "db_temiang";
      $conn = mysqli_connect($host, $username, $pass, $db);
      if(isset($_POST['submit'])){


        $id_detail_rekam_medis= date('dmYHis');;
        $id_resep_obat= date('dmYHis');;
        $no_rm= $_POST['no_rm'];
        $tgl_kunjungan= date('Y-m-d');
        $subjektif= $_POST['subjektif'];
        $objektif= $_POST['objektif'];
        $assement= $_POST['assement'];
        $plant= $_POST['plant'];

         $dokter= $_POST['nip'];
        // $biaya_periksa= $_POST['biaya_periksa'];

        $id_pasien= $_POST['nik'];
        $waktu= $_POST['waktu'];
        $status= $_POST['status'];
        $sql2 =mysqli_query($conn,"INSERT into tb_resep_obat values('$id_resep_obat','$id_pasien','$waktu','$status')") ;


        $id_transaksi= $_POST['id_transaksi'];
        $tgl_transaksi= $_POST['tgl_transaksi'];
        $status_bayar= $_POST['status_bayar'];

        $id_petugas='';
        // $cek = "insert into tb_transaksi_berobat values('','$tgl_transaksi','$status_bayar','$id_resep_obat','$id_petugas')";
        $sql1 =mysqli_query($conn,"insert into tb_transaksi_berobat values('','$tgl_transaksi','$status_bayar','$id_resep_obat','$id_petugas')");







        $sql =mysqli_query($conn,"insert into tb_detail_rm values('$id_detail_rekam_medis','$no_rm','$tgl_kunjungan','$subjektif','$objektif','$assement','$plant','$dokter')") ;
        if($sql){
          echo
          '<script>
          alert("Berhasil menambahkan data.");
          document.location="/pulautemiang/pages/md/dokter/view/view_detail_rm_beranda.php?id_detail_rekam_medis='.$id_detail_rekam_medis.'";
          </script>';
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
      }
      ?>

      <div class="content-wrap">
        <div class="main">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                  <div class="page-title">
                    <h1> <b>Rekam Medis</b> | Detail Rekam Medis </h1>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                  <div class="page-title">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                      <li class="breadcrumb-item active">Tambah Detail RM</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <section id="main-content">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="basic-elements">
                        <form action="edit_detail_rm.php?no_rm=<?php echo $data['no_rm'] ?>"  method="post">
                          <input class="form-control" type="hidden"   name="id_detail_rekam_medis" value="<?php echo date('dmYHis'); ?>">
                            <input class="form-control" type="hidden" value="<?php echo date('dmYHis'); ?>" name="id_resep_obat" readonly >
                          <input class="form-control" type="hidden"  name="no_rm"  value="<?php echo $data['no_rm'];?>" readonly>
                          <br>
                          <!-- <label align="center">Tanggal</label> -->
                          <input  class="form-control" type="hidden" name="tgl_kunjungan" value=""  >
                          <br>
                          <div class="row">

                              <div class="col-lg-6">
                              <div class="form-group">
                                <label>Tanggal Kunjungan</label><br>
                                  <input  class="form-control" type="text" name="" value="<?php echo date('Y-m-d') ?>" readonly >
                              </div>
                            </div>

                                            <?php
                                            $host = "localhost";
                                            $username = "root";
                                            $pass = "";
                                            $db = "db_temiang";
                                            $conn = mysqli_connect($host, $username, $pass, $db);
                                 $querys = mysqli_query($conn, "SELECT tb_dokter.nip,tb_akun.id_akun,tb_dokter.nama  from tb_dokter inner join tb_akun on tb_dokter.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
                                  $as = mysqli_fetch_array($querys);

                                  ?>


                            <div class="col-lg-6">
                              <div class="form-group">
                                <label>Paraf Dokter</label><br>
                              <input class="form-control" type="hidden" value="<?php echo $as['nip'];?>"   name="nip" readonly>
                                    <input class="form-control" type="text" value="  <?php echo $as['nama'];?>"    readonly>
                              </div>
                            </div>







                            <div class="col-lg-6 ">
                              <div class="form-group">
                                <label>Subjektif</label><br>
                                <textarea   rows="5" cols="65"  name="subjektif"></textarea>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label>Objektif</label><br>
                                <textarea   rows="5" cols="65"name="objektif">
Tensi :
Berat Badan : Kg
Tinggi Badan : Cm
Suhu Badan   : C
Lainya :
                                </textarea>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label>Assement</label> <br>
                                <textarea   rows="8" cols="65" value="" name="assement"></textarea>
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                <label>Plant</label><br>
                                <textarea    rows="8" cols="65" value="" name="plant"></textarea>
                              </div>
                            </div>









                          </div>

                          <div class="row">
                            <div class="col-lg-3">
                              <div class="form-group">
                                <!-- <label>ID Resep Obat</label> -->
                                <!-- <input class="form-control" type="hidden" value="<?php echo date('dmYHis'); ?>" name="id_resep_obat" readonly > -->
                              </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="form-group">
                                <!-- <label>ID Pasien</label> -->
                                <input class="form-control" type="hidden" name="nik"  value="<?php echo $data['nik'];?>" readonly >
                              </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="form-group">
                                <!-- <label>Waktu</label> -->
                                <input class="form-control" type="hidden" value="<?php echo date('Y-m-d'); ?>" name="waktu" readonly >
                              </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="form-group">
                                <!-- <label>Status</label> -->
                                <input class="form-control" type="hidden" value="Menunggu" name="status" readonly >
                              </div>
                            </div>

                            <div class="row">
                              <!-- <div class="col-lg-3"> -->
                                <!-- <div class="form-group"> -->
                                  <!-- <label>ID Transaksi</label> -->
                                  <input class="form-control" type="hidden" name="id_transaksi" readonly>
                                <!-- </div> -->
                              <!-- </div> -->

                              <!-- <div class="col-lg-2"> -->
                                <!-- <div class="form-group"> -->
                                  <!-- <label>Tanggal Transaksi</label> -->
                                  <input class="form-control" type="hidden" name="tgl_transaksi" value="<?php echo date('Y-m-d') ?>" >
                                <!-- </div> -->
                              <!-- </div> -->

                              <!-- <div class="col-lg-2"> -->
                                <!-- <div class="form-group"> -->
                                  <!-- <label>Status</label> -->
                                  <input class="form-control" type="hidden" name="status_bayar" value="Belum" readonly>
                                <!-- </div> -->
                              <!-- </div> -->

                              <!-- <div class="col-lg-2"> -->
                                <!-- <div class="form-group"> -->
                                  <!-- <label>ID Resep Obat</label> -->
                                  <input class="form-control" type="hidden" name="id_resep_obat" value="<?php echo date('dmYHis'); ?>" readonly>
                                <!-- </div> -->
                              <!-- </div> -->

                              <!-- <div class="col-lg-3"> -->
                                <!-- <div class="form-group"> -->
                                  <!-- <label>ID Petugas</label> -->
                                  <input class="form-control" type="hidden" name="id_petugas" >
                                <!-- </div> -->
                              <!-- </div> -->

                            </div>
                          </div>
                          <div align="center">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="submit" class="btn btn-default" >Batal</button>
                            <!-- <button type="submit" name="submit"  value="submit">Batal</button> -->
                          </div>
                        </form>
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
