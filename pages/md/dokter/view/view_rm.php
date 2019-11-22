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

  $id_pasien=$_GET['nik'];
  $query = mysqli_query($conn, "  SELECT * FROM tb_rekam_medis inner join tb_pasien on tb_pasien.nik=tb_rekam_medis.nik  where tb_pasien.nik='$id_pasien'");
  $data = mysqli_fetch_array($query);
  $masyarakat=$data['nik'];
    $checked = explode(', ', $data['riw_penyakit']);
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
    $id_pasien = $_POST['nik'];
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
            <li><a href="/pulautemiang/index.php?m=dokter_pasien"><i class="ti-wheelchair"></i> Pasien</a></li>
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

                <!-- <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_pendaftaran_rm.php?id_pasien=<?php echo   $id_pasien ?> '"  title="Ubah"><i class="fa fa-plus-circle" title="Tambah Rekam Medis"></i></button> -->
                <!-- <button type="button"  class="btn btn-default btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/edit/edit_rm?nik=<?php echo   $id_pasien ?> '"  title="Ubah"><i class="fa fa-edit" title="Ubah Rekam Medis Pasien"></i>Ubah Rekam Medis</button> -->
                <button type="button"  class="btn btn-warning btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/edit/edit_detail_rm.php?no_rm=<?php echo $data['no_rm'] ?> '"  title="Periksa Pasien"><i class="fa fa-medkit"></i> Periksa</button>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                  <li class="breadcrumb-item active">Data Rekam Medis</li>
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
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>No.RM</label>
                            <input class="form-control" type="text" value="<?php echo $data['no_rm'];?>" name="no_rm" readonly >
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Tanggal Rekam Pertama</label>
                            <input class="form-control" type="date" value="<?php echo $data['tgl_rekam'];?>" name="tgl_rekam" readonly>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Nama Pasien</label>
                            <input class="form-control" type="text" value="<?php echo $data['nama'];?>"  readonly >
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Nama Petugas Pemeriksa</label>
                            <input class="form-control" type="text" value="<?php echo $data['id_petugas'];?>"  readonly >
                          </div>
                        </div>
                        <?php
                        // $host = "localhost";
                        // $username = "root";
                        // $pass = "";
                        // $db = "db_temiang";
                        // $conn = mysqli_connect($host, $username, $pass, $db);

                        include_once '../../../../backend/koneksi.php';



                        $query = mysqli_query($conn, "SELECT tb_dokter.nip,tb_akun.id_akun,tb_dokter.nama  from tb_dokter inner join tb_akun on tb_dokter.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
                        while ($a = mysqli_fetch_array($query)) {
                          ?>
                          <!-- <div class="col-lg-3">
                            <div class="form-group">
                              <label>Nama Dokter</label>
                              <input class="form-control" type="hidden" value="  <?php echo $a['nip'];?>"   name="nip" readonly>
                              <input class="form-control" type="text" value="  <?php echo $a['nama'];?>"    readonly>
                            </div>
                          </div> -->
                          <?php
                        }?>
                        <!-- <div class="col-lg-3">
                        <div class="form-group">
                        <label>Nama Dokter</label>
                        <input class="form-control" type="text" value="<?php echo $datas['nama'];?>"  readonly >
                      </div>
                    </div> -->

                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Riwayat Penyakit Terdahulu (RPT)</label>
                        <input class="form-control" type="text" value="<?php echo $data['rpt'];?>" name="rpt" readonly>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Riwayat Pemakaian obat (RPO) </label>
                        <input class="form-control" type="text" value="<?php echo $data['rpo'];?>" name="rpo" readonly >
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Riwayat Operasi</label>
                        <input class="form-control" type="text" value="<?php echo $data['riw_operasi'];?>" readonly >
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Riwayat Alergi Makan</label>
                        <input class="form-control" type="text" value="<?php echo $data['riw_alergi_mkn'];?>" readonly >
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Riwayat Alergi Obat</label>
                        <input class="form-control" type="text" value="<?php echo $data['riw_alergi_obat'];?>" readonly >
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Riwayat Penyakit Ayah</label>
                        <input class="form-control" type="text" value="<?php echo $data['riw_ayah'];?>" readonly >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Riwayat Penyakit Ibu</label>
                        <input class="form-control" type="text" value="<?php echo $data['riw_ibu'];?>" readonly >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Jaminan Kesehatan</label>
                        <input class="form-control" type="text" value="<?php echo $data['jamkes'];?>" readonly >
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Nomor Jaminan Kesehatan</label>
                        <input class="form-control" type="text" value="<?php echo $data['no_jamkes'];?>" readonly >
                      </div>
                    </div>


                  </div>

                  <div class="">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label align="center">Riwayat Penyakit</label>
                              <div class="row">
                                <div class="card-body">
                                  <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                      <table id="bootstrap-data-table-export" class="table table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Penyakit</th>
                                            <th><i class="fa fa-check-square-o" aria-hidden="true"></i></th>
                                            <th>Penyakit</th>
                                            <th><i class="fa fa-check-square-o" aria-hidden="true"></i></th>
                                            <th>Penyakit</th>
                                            <th><i class="fa fa-check-square-o" aria-hidden="true"></i></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Diare Akut</td>
                                            <td><input type="checkbox" name="penyakit[]" value="diare" <?php in_array ('diare', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk.Dengue</td>
                                            <td><input type="checkbox" name="penyakit[]" value="dengue" <?php in_array ('dengue', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Disentri</td>
                                            <td><input type="checkbox" name="penyakit[]" value="disentri" <?php in_array ('disentri', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                          </tr>

                                          <tr>
                                            <td>Malaria Konfirmasi</td>
                                            <td><input type="checkbox" name="penyakit[]" value="malaria" <?php in_array ('malaria', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Pneumonia</td>
                                            <td><input type="checkbox" name="penyakit[]" value="pneumonia" <?php in_array ('pneumonia', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk. Tifoi</td>
                                            <td><input type="checkbox" name="penyakit[]" value="tifoi" <?php in_array ('tifoi', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                          </tr>


                                          <tr>
                                            <td>Sindrom Jaundice akut</td>
                                            <td><input type="checkbox" name="penyakit[]" value="jaundice" <?php in_array ('jaundice', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk. Chikungunyang</td>
                                            <td><input type="checkbox" name="penyakit[]" value="combakhikungunyang" <?php in_array ('chikungunyang', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk.Flu Burung</td>
                                            <td><input type="checkbox" name="penyakit[]" value="fluburung" <?php in_array ('fluburung', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                          </tr>

                                          <tr>
                                            <td>Trsgk. Campak</td>
                                            <td><input type="checkbox" name="penyakit[]" value="campak" <?php in_array ('campak', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk. Difteri</td>
                                            <td><input type="checkbox" name="penyakit[]" value="difentri" <?php in_array ('difentri', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk. Pettusis</td>
                                            <td><input type="checkbox" name="penyakit[]" value="pettusis" <?php in_array ('pettusis', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                          </tr>

                                          <tr>
                                            <td>AFP</td>
                                            <td><input type="checkbox" name="penyakit[]" value="afp" <?php in_array ('afp', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Rabies</td>
                                            <td><input type="checkbox" name="penyakit[]" value="rabies" <?php in_array ('rabies', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk. Antraks</td>
                                            <td><input type="checkbox" name="penyakit[]" value="antraks" <?php in_array ('antraks', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                          </tr>

                                          <tr>
                                            <td>Trsgk. Leptpspirosis</td>
                                            <td><input type="checkbox" name="penyakit[]" value="leptpspirosis" <?php in_array ('leptpspirosis', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk. Kolera</td>
                                            <td><input type="checkbox" name="penyakit[]" value="kolera" <?php in_array ('kolera', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Kluster Penyakit Tidak Lajim</td>
                                            <td><input type="checkbox" name="penyakit[]" value="taklajim" <?php in_array ('taklajim', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                          </tr>

                                          <tr>
                                            <td>Trsgk. Meningitis/ensafalitif</td>
                                            <td><input type="checkbox" name="penyakit[]" value="meningitis" <?php in_array ('meningitis', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk. Tetanus Neonatrum</td>
                                            <td><input type="checkbox" name="penyakit[]" value="neonatum" <?php in_array ('neonatum', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk. Tetanus </td>
                                            <td><input type="checkbox" name="penyakit[]" value="tetanus" <?php in_array ('tetatnus', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                          </tr>

                                          <tr>
                                            <td>ILI</td>
                                            <td><input type="checkbox" name="penyakit[]" value="ili" <?php in_array ('ili', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td>Trsgk. HFMD</td>
                                            <td><input type="checkbox" name="penyakit[]" value="hmfd" <?php in_array ('hmfd', $checked) ? print "checked" : ""; ?> onclick="return false;"></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
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
                <div class="card-title"></div>
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
                            <th>Dokter Periksa</th>

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
                          $rm=$data['no_rm'];

                          include_once '../../../../backend/koneksi.php';

                          // $query = mysqli_query($conn, "select * from tb_detail_rm inner join tb_rekam_medis on tb_rekam_medis.no_rm=tb_detail_rm.no_rm inner join tb_resep_obat on tb_rekam_medis.id_pasien=tb_resep_obat.id_pasien where tb_detail_rm.no_rm='$rm' order by tb_detail_rm.tgl_kunjungan desc");
                          $query = mysqli_query($conn, "select * from tb_detail_rm inner join tb_rekam_medis on tb_rekam_medis.no_rm=tb_detail_rm.no_rm  where tb_rekam_medis.no_rm='$rm' order by tb_detail_rm.tgl_kunjungan desc");

                          // $query = mysqli_query($conn, "select * from tb_detail_rm inner join tb_rekam_medis on tb_rekam_medis.no_rm=tb_detail_rm.no_rm where tb_detail_rm.no_rm='$rm' order by tb_detail_rm.tgl_kunjungan desc ");

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
                              <td>
                                <!-- <?php echo $a['nik'];?> -->
                                <?php
                                $host = "localhost";
                                $username = "root";
                                $pass = "";
                                $db = "db_temiang";

                                 $dokter=$a['nik'];
                                $conn = mysqli_connect($host, $username, $pass, $db);
                                $queryzz = mysqli_query($conn, "SELECT nama from tb_dokter where nip='$dokter'");
                              $dokters = mysqli_fetch_array($queryzz);
                              echo $dokters['$dokters'];
                              ?>

                              </td>

                              <!-- <td>

                                <?php if($a['status'] == 'Selesai'){ echo ' <span class="badge badge-success">Resep Selesai</span>'; } ?>
                                <?php if($a['status'] == 'Proses'){ echo ' <span class="badge badge-warning">Resep di telah jadi</span>'; } ?>
                                <?php if($a['status'] == 'Menunggu'){ echo ' <span class="badge badge-primary">Resep Telah Di buat</span>'; } ?>

                              </td> -->

                              <!-- <td><?php echo $a['biaya_periksa'];?></td> -->

                              <td class="color-primary">
                                <form class="" action="" method="post">
                                  <!-- <button type="button"  class="btn btn-warning btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_detail_rm_beranda.php?id_detail_rekam_medis=<?php echo $a['id_detail_rekam_medis'] ?> '"  title="Resep Obat"><i class="fa fa-medkit"></i></button> -->
                                  <!-- <button type="button"  class="btn btn-default btn-sm"         onclick="window.location=''/pulautemiang/pages/md/dokter/view/view_detail_rm_beranda.php?id_detail_rekam_medis=<?php echo $a['id_detail_rekam_medis'] ?>  title="Ubah"><i class="fa fa-edit" title="Edit"></i></button> -->
                                  <!-- <button type="button" class="btn btn-warning btn-sm"          onclick="window.location.href='/pulautemiang/pages/md/cetak/print_kartu_berobat.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Cetak Kartu Berobat"><i class="ti-printer"></i></button> -->

                                  <!-- <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_detail_periksa.php?id_resep_obat=<?php echo $a['id_detail_rekam_medis'] ?> '"  title="Cetak Kartu Berobat"><i class="fa fa-eye" title="Lihat"></i>  Lihat</button> -->
                                  <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_detail_rm_beranda.php?id_detail_rekam_medis=<?php echo $a['id_detail_rekam_medis'] ?> '"  title="Ubah"><i class="fa fa-eye" title="Ubah"></i>  Lihat</button>
                                  <button type="submit" class="btn btn-danger btn-sm"           name="delete_pasien" ><i class="ti-trash"></i>  Hapus</button>
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

      <div class="row">
        <div class="col-lg-12">
          <div class="footer">
            <p>2019 © Puskesmas Pulau Temiang</p>
          </div>
        </div>
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

<!-- <script type="text/javascript">
function rm(id){
var rm = id;
let ceko=0;
$.ajax({
url:"/pulautemiang/backend/validasi3.php",
method:"POST",
data: {id:rm
},
success:function(data){
var $response = $(data);
ceko = $response.filter('#ceko').text();
if (ceko==1) {
swal({
title: "Pasien sudah Terdaftar",
text: "Pasien telah terdaftar pada antrian berobat",
type: "warning",
confirmButtonColor: "#6495ED",
confirmButtonText: "Kembali",
closeOnConfirm: false
},
);

}else{
window.location.href='/pulautemiang/pages/md/dokter/view/view_pendaftaran_rm.php?id_pasien='+rm;
}
}
})
}
</script> -->

<?php } ?>
</html>
