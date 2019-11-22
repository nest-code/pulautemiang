
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



         <?php
         $host = "localhost";
         $username = "root";
         $pass = "";
         $db = "db_temiang";
         $conn = mysqli_connect($host, $username, $pass, $db);
         $pasien= $_GET['id_pasien'];
         $query = mysqli_query($conn, "  SELECT id_pasien,nama FROM tb_pasien where id_pasien= '$pasien'");
         $data = mysqli_fetch_array($query);
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



  <body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html"><!-- <img src="/pulautemiang/admin/assets/images/logo.png" alt="" /> --><span><?php echo "$level"; ?></span></a></div>
          <ul>
            <li class="label">Main</li>
            <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> <span class="sidebar-collapse-icon "></span></a>
            </li>
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

                <!-- <li class="header-icon dib"><span class="user-avatar">John <i class="ti-angle-down f-s-10"></i></span> -->
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
                  <h1> <b>Berobat</b> | Pendaftaran Berobat  </h1>


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



            <?php
          //jika tombol simpan di tekan/klik
          if(isset($_POST['submit'])){

            $host = "localhost";
            $username = "root";
            $pass = "";
            $db = "db_temiang";
            $conn = mysqli_connect($host, $username, $pass, $db);


            // $id_pendaftaran = $_POST['id_pendaftaran'];
            $tanggal = $_POST['tanggal'];
            $status = $_POST['status'];
            $id_jenis_poli = $_POST['id_jenis_poli'];
            $id_pasien = $_POST['id_pasien'];
            $id_petugas = $_POST['id_petugas'];
            $no_antrian = $_POST['no_antrian'];

            echo "$tanggal";


          $sql = mysqli_query($conn, "

          insert into tb_pendaftaran values
          ('','$tanggal','$status','$id_jenis_poli','$id_pasien','$id_petugas','$no_antrian')") or die(mysqli_error($conn));

          }
          ?>



          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title">
                  </div>
                  <div class="card-body">
                    <div class="basic-elements">

                      <form action="view_pendaftaran.php?id_pasien=<?php echo $data['id_pasien'];  ?>"  method="post">

                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <input type="hidden" name="id_pendaftaran" value="">


                              <div class="form-group">
                                <label>Nama Pasien</label>
                                <input class="form-control" type="hidden" value="<?php echo $data['id_pasien']; ?>" name="id_pasien" readonly>
                                <input class="form-control" type="text" value="<?php echo $data['nama']; ?>"  readonly>
                              </div>

                              <div class="form-group">
                                <label>No. Antrian</label>
                                <input class="form-control" type="text" name="no_antrian" >
                              </div>

                              <div class="form-group">
                                <label>Jenis Poli</label>
                                <select class="form-control" name="id_jenis_poli">
                                  <option>-Pilih-</option>
                                  <?php
                                  $n=0;
                                  $host = "localhost";
                                  $username = "root";
                                  $pass = "";
                                  $db = "db_temiang";

                                  $conn = mysqli_connect($host, $username, $pass, $db);
                                  include '/pulautemiang/backend/koneksi.php';
                                  $query = mysqli_query($conn, "select * from tb_jenis_poli");
                                  while ($a = mysqli_fetch_array($query)) {
                                    $n=$n+1;
                                    ?>
                                    <option value="<?php echo $a['id_jenis_poli'];?>"><?php echo $a['nama_jenis'];?></option>
                                    <?php
                                  }?>
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Tanggal</label>
                                <input class="form-control"  name="tanggal" type="date"  >
                              </div>

                              <div class="form-group">
                                <label>Status</label>
                                <input class="form-control" type="text" name="status"  value="Menunggu" readonly >
                              </div>



                              <?php
                              $host = "localhost";
                              $username = "root";
                              $pass = "";
                              $db = "db_temiang";

                              $conn = mysqli_connect($host, $username, $pass, $db);
                              $query = mysqli_query($conn, "SELECT tb_petugas.id_petugas,tb_akun.id_akun,tb_petugas.nama  from tb_petugas inner join tb_akun on tb_petugas.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
                              while ($a = mysqli_fetch_array($query)) {
                                $n=$n+1;
                                ?>

                                <div class="form-group">
                                  <label>ID Petugas</label>
                                  <input class="form-control" type="hidden" value="  <?php echo $a['id_petugas'];?>"   name="id_petugas" readonly>
                                  <input class="form-control" type="text" value="  <?php echo $a['nama'];?>"    readonly>
                                </div>
                                <?php
                              }?>

                              <div class="form-group" align="center">
                                <button type="submit" name="button" value="submit">Simpan</button>
                              </div>
                            </div>

                          </div>
                        </form>
                      </div>
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


      <script src="/pulautemiang/admin/assets/js/lib/jquery.min.js"></script>
      <script src="/pulautemiang/admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
      <script src="/pulautemiang/admin/assets/js/lib/menubar/sidebar.js"></script>
      <script src="/pulautemiang/admin/assets/js/lib/preloader/pace.min.js"></script>
      <script src="/pulautemiang/admin/assets/js/scripts.js"></script>

    </body>

  <?php } ?>
  </html>
