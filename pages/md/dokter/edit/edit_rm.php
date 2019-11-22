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
  <?php
  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";
  $conn = mysqli_connect($host, $username, $pass, $db);
  $id_pasien=$_GET['id_pasien'];
  $pasien=$id_pasien;

  $query = mysqli_query($conn, " SELECT * FROM tb_rekam_medis inner join tb_pasien on tb_pasien.id_pasien=tb_rekam_medis.id_pasien where tb_rekam_medis.id_pasien='$pasien'");
  $data = mysqli_fetch_array($query);

  $no_rms=$data['no_rm'];
  $checked = explode(', ', $data['riw_penyakit']);
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
  if(isset($_POST['submit'])){
    $penyakit = implode($_POST["penyakit"], ', ');

    $no_rm = $_POST['no_rm'];
    $id_pasien = $_POST['id_pasien'];
    $nip = $_POST['nip'];
    $tgl_rekam = $_POST['tgl_rekam'];
    $rpt = $_POST['rpt'];
    $rpo = $_POST['rpo'];
    $riw_alergi_mkn = $_POST['riw_alergi_mkn'];
    $riw_alergi_obat = $_POST['riw_alergi_obat'];
    $riw_operasi = $_POST['riw_operasi'];
    $riw_ayah = $_POST['riw_ayah'];
    $riw_ibu = $_POST['riw_ibu'];
    // $riw_penyakit = $_POST['riw_penyakit'];

    // var_dump($cek);
    // die;

    $sql = mysqli_query($conn,
    "UPDATE tb_rekam_medis SET id_pasien='$id_pasien',nip='$nip',tgl_rekam='$tgl_rekam',rpt='$rpt',rpo='$rpo',riw_alergi_mkn='$riw_alergi_mkn',riw_alergi_obat='$riw_alergi_obat',riw_operasi='$riw_operasi',riw_ayah='$riw_ayah',riw_ibu='$riw_ibu',riw_penyakit='$penyakit'WHERE no_rm='$no_rm'")or die(mysqli_error($conn));
    if($sql){
      // /pulautemiang/pages/md/dokter/edit/edit_rm?id_pasien=34
      echo '<script>alert("Berhasil menyimpan data."); document.location="edit_rm.php?id_pasien='.$id_pasien.'";</script>';
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
            <li><a href="/pulautemiang/index.php?m=dokter_pasien"><i class="ti-user"></i>Pasien</a></li>
          </li>
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
              </div>
            </div>
          </div>
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                  <li class="breadcrumb-item active">Rekam Medis Pasien</li>
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
                    <form action="edit_rm.php?id_pasien=<?php "$pasien"; ?>"  method="post">
                      <!-- <form action="edit_pendaftaran.php?id_pendaftaran=<?php echo "$id_pendaftaran"; ?>"  method="post"> -->
                      <div class="row">
                        <input class="form-control" type="hidden" value="<?php echo $data['id_pasien'];?>" name="id_pasien" >
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>No.RM</label>
                            <input class="form-control" type="text" value="<?php echo $data['no_rm'];?>" name="no_rm"  readonly>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Tanggal Rekam Pertama</label>
                            <input class="form-control" type="date" value="<?php echo $data['tgl_rekam'];?>" name="tgl_rekam"  readonly>
                          </div>
                        </div>
                        <?php
                        $host = "localhost";
                        $username = "root";
                        $pass = "";
                        $db = "db_temiang";
                        $conn = mysqli_connect($host, $username, $pass, $db);
                        $query = mysqli_query($conn, "SELECT tb_dokter.nip,tb_akun.id_akun,tb_dokter.nama  from tb_dokter inner join tb_akun on tb_dokter.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
                        while ($a = mysqli_fetch_array($query)) {
                          ?>
                          <div class="col-lg-3">
                            <div class="form-group">
                              <label>Nama Dokter</label>
                              <input class="form-control" type="hidden" value="  <?php echo $a['nip'];?>"   name="nip" readonly>
                              <input class="form-control" type="text" value="  <?php echo $a['nama'];?>"    readonly>
                            </div>
                          </div>
                          <?php
                        }?>

                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Nama Pasien</label>
                            <input class="form-control" type="hidden" value="<?php echo $data['id_pasien'];?>"  readonly >
                            <input class="form-control" type="text" value="<?php echo $data['nama'];?>"  readonly >


                          </div>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label>Riwayat Penyakit Terdahulu (RPT)</label>
                            <input class="form-control" type="text" value="<?php echo $data['rpt'];?>" name="rpt" >
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label>Riwayat Pemakaian obat (RPO) </label>
                            <input class="form-control" type="text" value="<?php echo $data['rpo'];?>" name="rpo" >
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="form-group">
                            <label>Riwayat Operasi</label>
                            <input class="form-control" type="text" value="<?php echo $data['riw_operasi'];?>" name="riw_operasi" >
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Riwayat Alergi Makan</label>
                            <input class="form-control" type="text" value="<?php echo $data['riw_alergi_mkn'];?>" name="riw_alergi_mkn" >
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Riwayat Alergi Obat</label>
                            <input class="form-control" type="text" value="<?php echo $data['riw_alergi_obat'];?>" name="riw_alergi_obat" >
                          </div>
                        </div>


                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Riwayat Penyakit Ayah</label>
                            <input class="form-control" type="text" value="<?php echo $data['riw_ayah'];?>" name="riw_ayah" >
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Riwayat Penyakit Ibu</label>
                            <input class="form-control" type="text" value="<?php echo $data['riw_ibu'];?>" name="riw_ibu" >
                          </div>
                        </div>

                      </div>

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
                                          <td><input type="checkbox" name="penyakit[]" value="diare" <?php in_array ('diare', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk.Dengue</td>
                                          <td><input type="checkbox" name="penyakit[]" value="dengue" <?php in_array ('dengue', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Disentri</td>
                                          <td><input type="checkbox" name="penyakit[]" value="disentri" <?php in_array ('disentri', $checked) ? print "checked" : ""; ?>></td>
                                        </tr>

                                        <tr>
                                          <td>Malaria Konfirmasi</td>
                                          <td><input type="checkbox" name="penyakit[]" value="malaria" <?php in_array ('malaria', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Pneumonia</td>
                                          <td><input type="checkbox" name="penyakit[]" value="pneumonia" <?php in_array ('pneumonia', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk. Tifoi</td>
                                          <td><input type="checkbox" name="penyakit[]" value="tifoi" <?php in_array ('tifoi', $checked) ? print "checked" : ""; ?>></td>
                                        </tr>


                                        <tr>
                                          <td>Sindrom Jaundice akut</td>
                                          <td><input type="checkbox" name="penyakit[]" value="jaundice" <?php in_array ('jaundice', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk. Chikungunyang</td>
                                          <td><input type="checkbox" name="penyakit[]" value="combakhikungunyang" <?php in_array ('chikungunyang', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk.Flu Burung</td>
                                          <td><input type="checkbox" name="penyakit[]" value="fluburung" <?php in_array ('fluburung', $checked) ? print "checked" : ""; ?>></td>
                                        </tr>

                                        <tr>
                                          <td>Trsgk. Campak</td>
                                          <td><input type="checkbox" name="penyakit[]" value="campak" <?php in_array ('campak', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk. Difteri</td>
                                          <td><input type="checkbox" name="penyakit[]" value="difentri" <?php in_array ('difentri', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk. Pettusis</td>
                                          <td><input type="checkbox" name="penyakit[]" value="pettusis" <?php in_array ('pettusis', $checked) ? print "checked" : ""; ?>></td>
                                        </tr>

                                        <tr>
                                          <td>AFP</td>
                                          <td><input type="checkbox" name="penyakit[]" value="afp" <?php in_array ('afp', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Rabies</td>
                                          <td><input type="checkbox" name="penyakit[]" value="rabies" <?php in_array ('rabies', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk. Antraks</td>
                                          <td><input type="checkbox" name="penyakit[]" value="antraks" <?php in_array ('antraks', $checked) ? print "checked" : ""; ?>></td>
                                        </tr>

                                        <tr>
                                          <td>Trsgk. Leptpspirosis</td>
                                          <td><input type="checkbox" name="penyakit[]" value="leptpspirosis" <?php in_array ('leptpspirosis', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk. Kolera</td>
                                          <td><input type="checkbox" name="penyakit[]" value="kolera" <?php in_array ('kolera', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Kluster Penyakit Tidak Lajim</td>
                                          <td><input type="checkbox" name="penyakit[]" value="taklajim" <?php in_array ('taklajim', $checked) ? print "checked" : ""; ?>></td>
                                        </tr>

                                        <tr>
                                          <td>Trsgk. Meningitis/ensafalitif</td>
                                          <td><input type="checkbox" name="penyakit[]" value="meningitis" <?php in_array ('meningitis', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk. Tetanus Neonatrum</td>
                                          <td><input type="checkbox" name="penyakit[]" value="neonatum" <?php in_array ('neonatum', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk. Tetanus </td>
                                          <td><input type="checkbox" name="penyakit[]" value="tetanus" <?php in_array ('tetatnus', $checked) ? print "checked" : ""; ?>></td>
                                        </tr>

                                        <tr>
                                          <td>ILI</td>
                                          <td><input type="checkbox" name="penyakit[]" value="ili" <?php in_array ('ili', $checked) ? print "checked" : ""; ?>></td>
                                          <td>Trsgk. HFMD</td>
                                          <td><input type="checkbox" name="penyakit[]" value="hmfd" <?php in_array ('hmfd', $checked) ? print "checked" : ""; ?>></td>
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



                      <!-- <div class="row">

                      <table>

                    </table>

                    <div class="col-lg-2">

                    <label for="">Haloo</label>

                  </div>

                  <div class="col-lg-1">

                  <input type="checkbox" name="penyakit[]" value="Apel">

                </div>

                <div class="col-lg-2">

                <label for="">Haloo</label>

              </div>

              <div class="col-lg-1">

              <input type="checkbox" name="penyakit[]" value="Apel">

            </div>

            <div class="col-lg-2">

            <label for="">Haloo</label>

          </div>

          <div class="col-lg-1">
          <div class="form-group">
          <input type="checkbox" name="penyakit[]" value="Apel">
        </div>
      </div>



    </div> -->


    <div align="center">
      <button class="btn btn-primary" type="submit" name="submit" value="submit">Simpan</button>
      <button class="btn btn-default" type="button" name="submit" value="submit">Kembali</button>

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
