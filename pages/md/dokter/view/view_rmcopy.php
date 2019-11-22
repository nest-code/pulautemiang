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
    <title>Focus Admin: Basic Form </title>
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


  $id_pasien=$_GET['id_pasien'];



  // $query = mysqli_query($conn, " SELECT * FROM tb_rekam_medis where id_pasien='$id_pasien'");
  $query = mysqli_query($conn, "  SELECT * FROM tb_rekam_medis inner join tb_pasien on tb_pasien.id_pasien=tb_rekam_medis.id_pasien  where tb_pasien.id_pasien='$id_pasien'");

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

  <body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html"><!-- <img src="/pulautemiang/assets/images/logo.png" alt="" /> --><span><?php echo "$level"; ?></span></a></div>
          <ul>
            <li class="label">Main</li>
            <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> <span class="sidebar-collapse-icon "></span></a></li>
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
                  <button type="button"  class="btn btn-default btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_detail_rm.php?id_pasien=<?php echo $data['id_pasien'] ?> '"  title="Ubah"><i class="fa fa-edit" title="Edit"></i></button>
                  <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/edit/edit_detail_rm.php?no_rm=<?php echo $data['no_rm'] ?> '"  title="Periksa Pasien"><i class="fa fa-medkit"></i></button>


                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
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

                      <form action="view_pendaftaran.php"  method="post">

                        <div class="row">
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>No.RM</label>
                              <input class="form-control" type="text" value="<?php echo $data['no_rm'];?>" name="no_rm" readonly >
                            </div>
                          </div>

                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>Tanggal Rekam Pertama</label>
                              <input class="form-control" type="date" value="<?php echo $data['tgl_rekam'];?>" name="tgl_rekam" readonly>
                            </div>
                          </div>


                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>Nama Pasien</label>
                              <input class="form-control" type="text" value="<?php echo $data['nama'];?>"  readonly >
                            </div>
                          </div>

                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>RPT</label>
                              <input class="form-control" type="text" value="<?php echo $data['rpt'];?>" name="rpt" readonly >
                            </div>
                          </div>

                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>RPO</label>
                              <input class="form-control" type="text" value="<?php echo $data['rpo'];?>"  readonly>
                            </div>
                          </div>

                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>Jaminan Kesehatan</label>
                              <input class="form-control" type="text" value="<?php echo $data['jaminan_kesehatan'];?>" readonly>
                            </div>
                          </div>

                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label>Riwayat Alergi Makan</label>
                              <input class="form-control" type="text" value="<?php echo $data['riw_alergi_mkn'];?>" readonly >
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label>Riwayat Alergi Obat</label>
                              <input class="form-control" type="text" value="<?php echo $data['riw_alergi_obat'];?>" readonly >
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label>Riwayat Operasi</label>
                              <input class="form-control" type="text" value="<?php echo $data['riw_operasi'];?>" readonly >
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label>Riwayat Penyakit</label>
                              <input class="form-control" type="text" value="<?php echo $data['riw_penyakit'];?>" readonly >
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label>Riwayat Penyakit Ayah</label>
                              <input class="form-control" type="text" value="<?php echo $data['riw_ayah'];?>" readonly >
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label>Riwayat Penyakit Ibu</label>
                              <input class="form-control" type="text" value="<?php echo $data['riw_ibu'];?>" readonly >
                            </div>
                          </div>

                        </div>
                    </div>
                  </div>
                </div>
              </div>


            </section>
            <section id="main-content">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-title">
                    </div>
                    <div class="card-body">
                      <div class="bootstrap-data-table-panel">
                        <div class="table-responsive">
                          <table id="bootstrap-data-table-export" class="table table-striped ">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Subjektif</th>
                                <th>Objektif</th>
                                <th>Assement</th>
                                <th>Plant</th>
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

                              $rm=$data['no_rm'];
                              $query = mysqli_query($conn, "select * from tb_detail_rm inner join tb_rekam_medis on tb_rekam_medis.no_rm=tb_detail_rm.no_rm where tb_detail_rm.no_rm='$rm' ");
                              while ($a = mysqli_fetch_array($query)) {
                                $n=$n+1;
                                ?>


                                <tr>
                                  <td><?php echo "$n"?>.</td>
                                  <td><?php echo $a['tgl_kunjungan'];?></td>
                                  <td><?php echo $a['subjektif'];?></td>
                                  <td><?php echo $a['objektif'];?></td>
                                  <td><?php echo $a['assement'];?></td>
                                  <td><?php echo $a['plant'];?></td>
                                  <td class="color-primary">
                                    <form class="" action="" method="post">
                                      <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_detail_rm_beranda.php?id_detail_rekam_medis=<?php echo $a['id_detail_rekam_medis'] ?> '"  title="Periksa Pasien"><i class="fa fa-medkit"></i></button>
                                      <button type="button"  class="btn btn-success btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/view/view_dokter.php?nip=<?php echo $a['nip'] ?> '"  title="Lihat"><i class="fa fa-eye" title="Lihat"></i></button>
                                      <button type="button"  class="btn btn-default btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/view/view_dokter.php?nip=<?php echo $a['nip'] ?> '"  title="Ubah"><i class="fa fa-edit" title="Edit"></i></button>
                                      <button type="submit" class="btn btn-danger btn-sm"           name="delete_pasien" ><i class="ti-trash"></i></button>
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
