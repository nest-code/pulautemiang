<!DOCTYPE html>
<?php
session_start();
$id_akun=$_SESSION['id_akun'];
$namaakun=$_SESSION['nama_akun'];
$level=$_SESSION['level'];
if(!isset($_SESSION['nama_akun'])){
  header('location: login.php');
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
    <link rel="stylesheet" type="text/css" href="/pulautemiang/assets/css/lib/sweetalert/sweetalert.css">
    <link href="/pulautemiang/assets/css/lib/data-table/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/data-table/buttons.dataTables.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.css"/>

  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js"></script>
  </head>


  <?php
  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";
  $conn = mysqli_connect($host, $username, $pass, $db);


  $query = mysqli_query($conn, " SELECT * FROM tb_petugas inner join tb_akun on tb_petugas.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
  $data = mysqli_fetch_array($query);
  ?>


  <style media="screen">
  .img-circle {
    border-radius: 50%;
    border:solid;
    padding: 2px;
    overflow: hidden;

  }
  </style>
  <body>

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
                <img src="/pulautemiang/assets/images/logo.png" alt="" />
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
                        <li><i class="ti-power-off"  onclick="keluar();"></i> <span >Logout</span></li>

                        <!-- <li><button type="button"   onclick="keluar();" ><i class="ti-power-off"></i>Keluar</button></li> -->
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
      include'pages/md/'.$mod.'.php';
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

    <script src="/pulautemiang/assets/js/lib/jquery.min.js"></script>
    <script src="/pulautemiang/assets/js/lib/bootstrap.min.js"></script>
    <script src="/pulautemiang/assets/js/lib/sweetalert/sweetalert.init.js"></script>
    <script src="/pulautemiang/assets/js/lib/sweetalert/sweetalert.min.js"></script>
    <!-- <script src="/pulautemiang/assets/js/lib/preloader/pace.min.js"></script> -->
    <script src="/pulautemiang/assets/js/lib/menubar/sidebar.js"></script>
    <script src="/pulautemiang/assets/js/scripts.js"></script>
    <script src="/pulautemiang/assets/js/lib/data-table/datatables.min.js"></script>
    <!-- <script src="/pulautemiang/assets/js/lib/data-table/buttons.dataTables.min.js"></script> -->
    <!-- <script src="/pulautemiang/assets/js/lib/data-table/pdfmake.min.js"></script> -->
    <!-- <script src="/pulautemiang/assets/js/lib/data-table/vfs_fonts.js"></script> -->
    <script src="/pulautemiang/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="/pulautemiang/assets/js/lib/data-table/datatables-init.js"></script>
    <!-- <script src="/pulautemiang/assets/js/lib/data-table/buttons.print.min.js"></script> -->



    <script type="text/javascript">
    function keluar(){
      swal({
        title: "Keluar dari sistem ?",
        // text: "You will not be able to recover this imaginary file !!",
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
