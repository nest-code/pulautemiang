<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$namaakun=$_SESSION['namaakun'];
$level=$_SESSION['level'];
if(!isset($_SESSION['namaakun'])){
  header('location: ../login.php');

}else{
  ?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Pelayanan Puskesmas | Ubah Pasien</title>
    <link rel="shortcut icon" href="../../../../../images/logos/logo.png">


    <!-- Styles -->
    <link href="../../../../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../../../../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../../../../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../../../../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../assets/css/lib/helper.css" rel="stylesheet">
    <link href="../../../../assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="../../../../assets/css/sweetalert.css">
    <link rel="stylesheet" href="../../../../assets/css/lib/sweetalert.css" media="screen" title="no title">
</head>

<body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>


                   <?php
                    include '../../../petugas_menu.php';
                    ?>

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

                                             <?php
                                              include_once '../../../../template/header_petugas.php';
                                              ?>
                                              <!-- <a href="../../../../template/header_petugas.php">ss</a> -->
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
                        <h1>Edit Data Pasien</h1>
                    </div>
                  </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                  <div class="page-header">
                    <div class="page-title">
                      <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="../../../../?m=petugas/petugas_pasien">Data Pasien</a></li>
                        <li class="breadcrumb-item active">Edit Data Pasien</li>
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
              $id_resep_obat = $_GET['id_resep_obat'];
              $query = mysqli_query($conn, "  SELECT * FROM tb_resep_obat where id_resep_obat= '$id_resep_obat'");

              $data = mysqli_fetch_array($query);
              ?>


              <?php
  //jika tombol simpan di tekan/klik
  if(isset($_POST['submit'])){
    // $nama			= $_POST['nama'];
    $nik	= $_POST['nik'];
    $tanggal		= $_POST['tanggal'];
    $tgl_lahir		= $_POST['tgl_lahir'];
    $jk		= $_POST['jk'];
    $gol_darah		= $_POST['gol_darah'];


    $sql = mysqli_query($conn, "UPDATE tb_pasien SET nik='$nik',nama='$nama',tgl_lahir='$tgl_lahir',jk='$jk',gol_darah='$gol_darah',agama='$agama',pekerjaan='$pekerjaan',alamat='$alamat',no_hp='$no_hp' WHERE id_pasien='$id_pasien'") or die(mysqli_error($conn));


    if($sql){

      echo '<script>
      document.location="edit_pasien.php?id_pasien='.$id_pasien.'";
      </script>';

      echo '<div class="alert alert-warning">Berhasil melakukan proses edit data.</div>';

    }else{
      echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
  }
  ?>

              <section id="main-content">
              <form action="edit_pasien.php?id_pasien=<?php echo $id_pasien; ?>" method="post">
                <!-- <form class="" action="" method="post"> -->
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
                                <div class="col-lg-8" >
                                  <input class="form-control" type="hidden" name="id_pasien"  placeholder="id_pasien"  readonly=""  >

                                  <div class="form-group">
                                    <label>ID Pasien</label>
                                    <input type="text" class="form-control"  name="nama" value="<?php echo $data['id_resep_obat']; ?>" placeholder="Masukan Nama Pasien..." >
                                  </div>

                                  <div class="form-group">
                                    <label>ID Pasien</label>
                                    <input type="text" class="form-control"  name="nama" value="<?php echo $data['waktu']; ?>" placeholder="Masukan Nama Pasien..." >
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="val-username"> Nama Petugas <span class="text-danger"></span></label>

                                    <?php
                                    $n=0;
                                    // include '../backend/koneksi.php';
                                    $query = mysqli_query($conn, " select * from tb_petugas INNER join tb_akun on tb_petugas.id_akun=tb_akun.id_akun WHERE tb_akun.id_akun = $id_akun");
                                    while ($a = mysqli_fetch_array($query)) {
                                      $n=$n+1;
                                      ?>
                                                                    <div class="col-lg-8">
                                        <input type="hidden" class="form-control" id="id_petugas" name="id_petugas" value="<?php echo $a['id_petugas'];?>">
                                        <input type="text" class="form-control"   value="<?php echo $a['nama'];?>" readonly>
                                      </div>
                                      <?php
                                    }?>


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
    <script type="text/javascript" src="../../../../assets/js/sweetalert.min.js"></script>
    <script src="../../../../assets/js/lib/jquery.min.js"></script>
    <script src="../../../../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../../../../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../../../../assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <!-- bootstrap -->
    <script src="../../../../assets/js/scripts.js"></script>
    <!-- scripit init-->

    <script type="text/javascript">

    function isNumberKey(evt)
    {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
      return true;
    }

    </script>





</body>
<?php } ?>



</html>
