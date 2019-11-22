<!DOCTYPE html>
<?php
session_start();
$id_akun=$_SESSION['id_akun'];
$namaakun=$_SESSION['nama_akun'];
$level=$_SESSION['level'];
if(!isset($_SESSION['nama_akun'])){
  header('location: login.php');
}else{
  ?>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Puskesmas Pulau Temiang | Pelayanan</title>
    <link rel="shortcut icon" href="img/logo.png">


    <?php
    include_once 'link/css.php';
     ?>
  </head>
      <style media="screen">
    .img-circle {
      border-radius: 50%;
      border:solid;
      padding: 2px;
      overflow: hidden;

    }
    </style>
  <body>

    <?php
    include_once 'backend/koneksi.php';
    $conn = mysqli_connect($host, $username, $pass, $db);
    $query = mysqli_query($conn, " SELECT * FROM tb_petugas inner join tb_akun on tb_petugas.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
    $data = mysqli_fetch_array($query);
    ?>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo">
            <span>
              <?php  echo "$level" ?>
            </span>
            <br> <br><br>
            <div class=""align="center">
              <a href="../../">
                <img src="assets/images/logo.png" alt="" />
              </a>
            </div>
            <br>
          </div>
          <?php
          include 'pages/menu.php';
          ?>
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
                        <li><a href="?m=profil"><i class="ti-user"></i> <span>Profil</span></a></li>
                        <li><a><i class="ti-power-off"></i> <span  onclick="keluar();">Keluar</span></a></li>
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
    error_reporting(0);
    $mod = $_GET['m'];
    if(file_exists('pages/md/'.$mod.'.php')){
      include 'pages/md/'.$mod.'.php';
    } else {
      include 'pages/md/beranda.php';
    }
    ?>

    <div id="search">
      <button type="button" class="close">×</button>
      <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
    <?php
    include_once 'link/js.php';
     ?>
    <script type="text/javascript">
    function keluar(){
      swal({
        title: "Keluar dari sistem ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya Keluar",
        closeOnConfirm: false
      },
      function(){
        swal("Berhasil Keluar !!", "Berhasil Keluar !!", "success");
        window.location = "backend/process_logout.php";
      });
    }
    </script>
  </body>
<?php } ?>
</html>