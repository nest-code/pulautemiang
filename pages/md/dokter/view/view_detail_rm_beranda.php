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
    <link rel="stylesheet" type="text/css" href="/pulautemiang/assets/css/lib/sweetalert/sweetalert.css">
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


    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];
    $id_jenis_poli = $_POST['id_jenis_poli'];
    $id_pasien = $_POST['id_pasien'];
    $id_petugas = $_POST['id_petugas'];
    $no_antrian= $_POST['no_antrian'];
    $user =mysqli_query($conn,"insert into tb_pendaftaran values('','$tanggal','$status','$id_jenis_poli','$id_pasien','$id_petugas','$no_antrian',)");
    // eksekusi query dengan mysqli
  }
  ?>


  <?php
      if(isset($_POST['submit'])){

        // $host = "localhost";
        // $username = "root";
        // $pass = "";
        // $db = "db_temiang";
        // $conn = mysqli_connect($host, $username, $pass, $db);

        include_once '../../../../backend/koneksi.php';



        $resephapus= $_POST['id_resep_obat'];



      $sql = mysqli_query($conn," DELETE FROM tb_detail_resep_obat WHERE id_resep_obat='$resephapus'")


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
                  <h1> <b>Periksa</b> | Rekam Medis | Resep Obat </h1>
                    &nbsp;            <button type="button"  class="btn btn-success btn-sm"         onclick="window.location.href='/pulautemiang/index.php?m=dokter/dokter_pasien'"  title="Selesai Periksa"><i class="fa fa-edit" title=""></i> Selesai Periksa</button>
                  <!-- <button type="button" class="btn btn-warning btn-sm"    target="_blank" rel="nofollow"    onclick=" window.open('/pulautemiang/pages/md/cetak/print_kartu_berobat.php?id_pasien=<?php echo $a['id_pasien'] ?> ', '_blank'); return false;" title="Cetak Kartu Berobat"><i class="ti-printer"></i> Cetak Kartu Berobat</button> -->
                  <button type="button" class="btn btn-default btn-sm"     onclick="window.location.href='/pulautemiang/pages/md/dokter/edit/edit_detail_rm_beranda.php?id_detail_rekam_medis=<?php echo $id_drm  ?> '"  title="ubah"><i class="fa fa-edit"></i>  Ubah Detail Rekam Medis</button>
                  <!-- &nbsp;         &nbsp;            <button type="button"  class="btn btn-default btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/resep/index.php?id_resep_obat=<?php echo $id_drm ?> '"  title="Ubah Detail Rekam Medis "><i class="fa fa-edit" title="Edit"></i> Ubah Detail Rekam Medis </button> -->
                  <!-- <button type="button"  class="btn btn-default btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_detail_rm.php?id_pasien=<?php echo $data['id_pasien'] ?> '"  title="Ubah"><i class="fa fa-edit" title="Edit"></i></button>
                  <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/edit/edit_rm.php'"  title="Periksa Pasien"><i class="fa fa-medkit"></i></button> -->
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Rekam Medis | Resep Obat</a></li>
                    <li class="breadcrumb-item active">Tambah Resep Obat</li>
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
                      <form action="view_pendaftaran.php"  method="post">
                        <div class="row">

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>No. Rekam Medis</label>
                              <input class="form-control" type="text" value="<?php echo $data['no_rm'];?>" name="no_rm" readonly >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Tanggal Kunjungan</label>
                              <input class="form-control" type="date" value="<?php echo $data['tgl_kunjungan'];?>" name="tgl_rekam" readonly  >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Subjektif</label><br>
                              <!-- <input class="form-control" type="text" value="<?php echo $data['subjektif'];?>" readonly   > -->
                                  <textarea   rows="5" cols="65"name="objektif" disabled><?php echo $data['subjektif'];?></textarea>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Objektif</label><br>
                              <textarea   rows="5" cols="65"name="objektif" disabled><?php echo $data['objektif'];?></textarea>

                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Assement</label><br>
                                  <textarea   rows="5" cols="65"name="objektif" disabled><?php echo $data['assement'];?></textarea>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Plant</label><br>
                                  <textarea   rows="5" cols="65"name="objektif" disabled><?php echo $data['plant'];?></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>



            &nbsp;         &nbsp;         &nbsp;    <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/edit/edit_resep.php?id_resep_obat=<?php echo $id_drm ?> '"  title="Buat Resep Obat "><i class="fa fa-edit" title="Edit"></i> Resep Obat</button>

          <!-- &nbsp;         &nbsp;         &nbsp;    <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/resep/index.php?id_resep_obat=<?php echo $id_drm ?> '"  title="Buat Resep Obat "><i class="fa fa-edit" title="Edit"></i> Resep Obat</button> -->
          <!-- <button type="button" class="btn btn-warning btn-sm"          onclick="window.location.href='/pulautemiang/pages/md/cetak/print_resep_obat.php?id_detail_resep_obat=<?php echo $data['id_detail_rekam_medis'] ?> '"  title="Cetak Resep obat"><i class="ti-printer"></i></button> -->
          <button type="button" class="btn btn-warning btn-sm"    target="_blank" rel="nofollow"    onclick=" window.open('/pulautemiang/pages/md/cetak/print_resep_obat.php?id_detail_resep_obat=<?php echo $data['id_detail_rekam_medis'] ?> ', '_blank'); return false;" title="Cetak"><i class="ti-printer"></i> Cetak Resep Obat</button>



              <section id="main-content">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-title"> </div>
                      <div class="card-body">
                        <div class="bootstrap-data-table-panel">
                          <div class="table-responsive">
                            <table id="bootstrap-data-table-export" class="table table-striped ">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Kategori</th>
                                  <th>Jumlah</th>
                                  <th>Keterangan</th>
                                  <th>Tindakan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $n=0;
                                // $host = "localhost";
                                // $username = "root";
                                // $pass = "";
                                // $db = "db_temiang";
                                // $conn = mysqli_connect($host, $username, $pass, $db);

                                include_once '../../../../backend/koneksi.php';

                                // $query = mysqli_query($conn, "select * from tb_detail_resep_obat where id_resep_obat='$id_drm'");
                                // $query = mysqli_query($conn, "select * from tb_detail_resep_obat inner join tb_obat on tb_detail_resep_obat.id_obat=tb_obat.id_obat  where tb_detail_resep_obat.id_resep_obat='$id_drm'");
                                $query = mysqli_query($conn, "Select * from tb_kategori_obat inner join tb_obat on tb_kategori_obat.id_kategori_obat=tb_obat.id_kategori_obat inner join tb_detail_resep_obat on tb_detail_resep_obat.id_obat=tb_obat.id_obat where tb_detail_resep_obat.id_resep_obat='$id_drm'");
                                while ($a = mysqli_fetch_array($query)) {
                                  $n=$n+1;
                                  ?>
                                  <tr>
                                    <td><?php echo "$n"?>.</td>
                                    <td><?php echo $a['nama_obat'];?></td>
                                    <td><?php echo $a['nama_kategori'];?></td>
                                    <td><?php echo $a['jumlah'];?></td>
                                    <td><?php echo $a['keterangan'];?></td>
                                    <?php $reseps=$a['id_detail_resep']; ?>


                                    <td class="color-primary">
                                      <form class="" action="" method="post">
                                        <!-- <form class="" action="view_detail_rm_beranda.php?id_detail_resep=<?php echo $reseps ?>" method="post">
                                       -->
                                          <!-- <input type="button" name="submit" value="<?php echo $reseps ?>"> -->

                                          <!-- <button type="button"  class="btn btn-danger btn-sm"       onclick="hapus(<?php echo $a['id_detail_resep']?>);" ><i class="fa fa-eraser"></i>Hapus</button> -->
                                          <!-- <button type="submit" name="submit"  value="submit" class="btn btn-primary">Simpan</button> -->
                                            <button type="button"  class="btn btn-danger btn-sm"       onclick="hapus(<?php echo $a['id_detail_resep']?>);" ><i class="fa fa-eraser"></i>Hapus</button>
                                        <!-- <button type="button" class="btn btn-danger btn-sm"       onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_rm.php?id_pasien=<?php echo $a['id_pasien'];  ?>'"  title="Hapus"  ><i class="ti-eraser"></i></button> -->
                                      </form>
                                    </td>
                                  </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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


       <script src="/pulautemiang/assets/js/lib/sweetalert/sweetalert.init.js"></script>
       <script src="/pulautemiang/assets/js/lib/sweetalert/sweetalert.min.js"></script>
      <script src="/pulautemiang/assets/js/lib/jquery.min.js"></script>
      <script src="/pulautemiang/assets/js/lib/jquery.nanoscroller.min.js"></script>
      <script src="/pulautemiang/assets/js/lib/menubar/sidebar.js"></script>
      <script src="/pulautemiang/assets/js/lib/preloader/pace.min.js"></script>
      <script src="/pulautemiang/assets/js/scripts.js"></script>
    </body>
  <?php } ?>
  </html>