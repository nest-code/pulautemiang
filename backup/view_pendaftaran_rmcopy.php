
<?php
session_start();

$id_akun=$_SESSION['id_akun'];
$namaakun=$_SESSION['namaakun'];
$level=$_SESSION['level'];
if(!isset($_SESSION['namaakun'])){
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
    <title>Focus Admin: Basic Form </title>
    <link href="/pulautemiang/admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/pulautemiang/admin/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/admin/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/pulautemiang/admin/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/admin/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/pulautemiang/admin/assets/css/style.css" rel="stylesheet">
  </head>



  <?php
  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";

  $conn = mysqli_connect($host, $username, $pass, $db);

  if(isset($_POST['submit'])){

    $no_rm = $_POST['no_rm'];
    $id_pasien=$_GET['id_pasien'];
    $nip = $_POST['nip'];
    $tgl_rekam = $_POST['tgl_rekam'];
    $rpt = $_POST['rpt'];
    $rpo = $_POST['rpo'];
    $riw_alergi_mkn = $_POST['riw_alergi_mkn'];
    $riw_alergi_obat = $_POST['riw_alergi_obat'];
    $riw_operasi = $_POST['riw_operasi'];
    $riw_ayah = $_POST['riw_ayah'];
    $riw_ibu = $_POST['riw_ibu'];
    $riw_penyakit = $_POST['riw_penyakit'];

    $user =mysqli_query($conn,"insert into tb_rekam_medis values(
      '',
      '$id_pasien',
      '$nip',
      '$tgl_rekam',
      '$rpt',
      '$rpo',
      '$riw_alergi_mkn',
      '$riw_alergi_obat',
      '$riw_operasi',
      '$riw_ayah',
      '$riw_ibu',
      '$riw_penyakit')") ;
    }
    ?>






    <body>


      <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
          <div class="nano-content">
            <div class="logo"><a href="index.html"><!-- <img src="/pulautemiang/admin/assets/images/logo.png" alt="" /> --><span><?php echo "$level"; ?></span></a></div>
            <br> <br>

            <div class=""align="center">
              <a href="../../">
                <img src="/pulautemiang/admin/assets/images/logo.png" alt="" />
              </a>
            </div>
            <br>



            <ul>
              <li class="label">Main</li>
              <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/admin/index.php?m=beranda"><i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
              <li><a href="/pulautemiang/admin/index.php?m=dokter_antrian"><i class="ti-layers-alt"></i>Antrian Pasien</a></li>
              <li><a href="/pulautemiang/admin/index.php?m=dokter_pasien"><i class="ti-user"></i> Data Pasien</a></li>
              <li><a href="/pulautemiang/admin/index.php?m=dokter_obat">         <i class="ti-package"></i> Data Obat <span class="badge badge-primary"></span> </span></a></li>


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
                        <span class="text-left"><?php// echo $level; ?></span>
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
                    <h1> <b>Berobat</b> | Rekam Medis </h1>
                  </div>
                </div>
              </div>
              <!-- /# column -->
              <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                  <div class="page-title">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/pulautemiang/admin/index.php?m=beranda">Dashboard</a></li>
                      <li class="breadcrumb-item active">Pendaftaran Berobat</li>
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
                        <form action="view_pendaftaran_rm.php"  method="post">

                          <div class="row">



                            <div class="col-lg-3">
                              <div class="form-group">
                                <label>No.RM</label>
                                <input class="form-control" type="text" value="" name="no_rm" readonly >
                              </div>
                            </div>

                            <input class="form-control" type="text" value="" name="id_pasien" >



                            <div class="col-lg-2">
                              <div class="form-group">
                                <label>Tanggal Rekam Pertama</label>
                                <input class="form-control" type="date" value="" name="tgl_rekam" >
                              </div>
                            </div>


                            <div class="col-lg-2">
                              <div class="form-group">
                                <label>ID Dokter</label>
                                <input class="form-control" type="text" value="" name="nip" >
                              </div>
                            </div>

                            <div class="col-lg-2">
                              <div class="form-group">
                                <label>RPT</label>
                                <input class="form-control" type="text" value="" name="rpt" >
                              </div>
                            </div>

                            <div class="col-lg-3">
                              <div class="form-group">
                                <label>RPO</label>
                                <input class="form-control" type="text" value="" name="rpo" >
                              </div>
                            </div>



                          </div>
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Alergi Makan</label>
                                <input class="form-control" type="text" value="" name="riw_alergi_mkn" >
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Alergi Obat</label>
                                <input class="form-control" type="text" value="" name="riw_alergi_obat" >
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Operasi</label>
                                <input class="form-control" type="text" value="" name="riw_operasi" >
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Penyakit</label>
                                <input class="form-control" type="text" value="" name="riw_penyakit" >
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Penyakit Ayah</label>
                                <input class="form-control" type="text" value="" name="riw_ayah" >
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Riwayat Penyakit Ibu</label>
                                <input class="form-control" type="text" value="" name="riw_ibu" >
                              </div>
                            </div>
                          </div>

                          <div class="" align="center">
                            <button  type="submit"  class="btn btn-primary btn-sm"  name="submit" value="submit">Simpan</button>
                          </div>
                        </form>



                      </div>
                    </div>
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


      <script src="/pulautemiang/admin/assets/js/lib/jquery.min.js"></script>
      <script src="/pulautemiang/admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
      <script src="/pulautemiang/admin/assets/js/lib/menubar/sidebar.js"></script>
      <script src="/pulautemiang/admin/assets/js/lib/preloader/pace.min.js"></script>
      <script src="/pulautemiang/admin/assets/js/scripts.js"></script>

    </body>

  <?php } ?>
  </html>
