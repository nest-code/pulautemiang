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
    <link rel="shortcut icon" href="/pulautemiang/images/logos/logo.png">
    <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">
  </head>
  <?php
  // $host = "localhost";
  // $username = "root";
  // $pass = "";
  // $db = "db_temiang";
  // $conn = mysqli_connect($host, $username, $pass, $db);

  include_once '../../../../backend/koneksi.php';


  $id_drm=$_GET['id_detail_rekam_medis'];
  $query = mysqli_query($conn, " SELECT * FROM tb_detail_rm where id_detail_rekam_medis='$id_drm'");
  $data = mysqli_fetch_array($query);
  ?>
  <?php
  if(isset($_POST['submit'])){
    // $host = "localhost";
    // $username = "root";
    // $pass = "";
    // $db = "db_temiang";
    // $conn = mysqli_connect($host, $username, $pass, $db);
    include_once '../../../../backend/koneksi.php';



    $id= $_POST['id_detail_rekam_medis'];
    $s= $_POST['subjektif'];
    $o= $_POST['objektif'];
    $a= $_POST['assement'];
    $p= $_POST['plant'];
    // $user =mysqli_query($conn,"UPDATE into tb_pendaftaran values('','$tanggal','$status','$id_jenis_poli','$id_pasien','$id_petugas','$no_antrian',)");
    // eksekusi query dengan mysqli


                    $sql = mysqli_query($conn,
                    "UPDATE tb_detail_rm SET
                    subjektif='$s',
                    objektif='$o',
                    assement='$a',
                    plant='$p'
                    WHERE id_detail_rekam_medis='$id'")
or die(mysqli_error($conn));


                if($sql){
                  echo '<script>alert("Berhasil menyimpan data."); document.location="edit_detail_rm_beranda.php?id_detail_rekam_medis='.$id.'";</script>';
                }else{
                  echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
                }
                }
  ?>



  <body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html"><!-- <img src="/pulautemiang/assets/images/logo.png" alt="" /> --><span><?php echo "$level"; ?></span></a></div>
          <div class=""align="center">
            <br>
            <a href="../../">
              <img src="/pulautemiang/assets/images/logo.png" alt="" />
            </a>
          </div>
          <br>
          <ul>
            <li class="label">Main</li>
            <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=beranda"><i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
            <li><a href="/pulautemiang/index.php?m=dokter_antrian"><i class="ti-layers-alt"></i>Antrian Periksa</a></li>
            <li><a href="/pulautemiang/index.php?m=dokter/dokter_pasien"><i class="ti-wheelchair"></i>Pasien</a></li>
            <!-- <li><a href="/pulautemiang/index.php?m=dokter_obat">         <i class="ti-package"></i> Data Obat <span class="badge badge-primary"></span> </span></a></li> -->
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
                  <h1> <b>Ubah</b> | Rekam Medis </h1>
                      </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Detail Rekam Medis </a></li>
                    <li class="breadcrumb-item active">Udah Detail RM</li>
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
                        <form class="" action="edit_detail_rm_beranda.php?id_detail_rekam_medis=<?php echo "$id_drm"; ?>" method="post">
                      <!-- <form action="view_pendaftaran.php"  method="post"> -->
                        <div class="row">

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>No. Rekam Medis</label>
                              <input class="form-control" type="hidden" value="<?php echo $data['id_detail_rekam_medis'];?>" name="id_detail_rekam_medis" readonly >

                              <input class="form-control" type="text" value="<?php echo $data['no_rm'];?>" name="no_rm" readonly >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Tanggal Kunjungan</label>
                              <input class="form-control" type="date" value="<?php echo $data['tgl_kunjungan'];?>" name="tgl_rekam" readonly >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Subjektif</label><br>
                                  <textarea   rows="5" cols="65"name="subjektif" ><?php echo $data['subjektif'];?></textarea>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Objektif</label><br>
                              <textarea   rows="5" cols="65"name="objektif" ><?php echo $data['objektif'];?></textarea>

                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Assement</label><br>
                                  <textarea   rows="5" cols="65"name="assement" ><?php echo $data['assement'];?></textarea>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Plant</label><br>
                                  <textarea   rows="5" cols="65"name="plant"><?php echo $data['plant'];?></textarea>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="" align="center">
                              <button type="submit" name="submit"  value="submit" class="btn btn-primary">Simpan</button>
                              <button type="button"  class="btn btn-default"   onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_detail_rm_beranda.php?id_detail_rekam_medis=<?php echo $id_drm ?> '" ><i class="" title="Edit"></i> Kembali</button>

                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </section>





            </div>
          </div>
        </div>
      </div>


      <script type="text/javascript">
      function hapus(id){
        var hapus = id;
                swal({
                        title: "Anda yakin hapus data ini ?",
                        text: "Data tidak bisa dikembalikan jika sudah dihapus !!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Ya Hapus",
                        cancelButtonText: "Batal",
                        closeOnConfirm: false
                    },
                    function(){
                        swal("Berhasil dihapus !!", "Berhasil dihapus !!", "success");
                        window.location.href='/pulautemiang/backend/delete/delete_detail_obat.php?id_detail_resep='+hapus;
                    });

              }
      </script>


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
