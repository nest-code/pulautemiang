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
    <title>Puskesmas Pulau Temiang | Pelayanan</title>
    <link rel="shortcut icon" href="/pulautemiang/images/logos/logo.png">
    <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">
  </head>
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
            <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=petugas/petugas_antrian_beranda"><i class="ti-layers-alt"></i> Antrian Berobat <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=petugas/petugas_pendaftaran"><i class="ti-pencil-alt"></i> Pasien Baru <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=petugas/petugas_pasien"><i class="ti-wheelchair"></i> Data Pasien <span class="badge badge-primary"></span> </span></a></li>
            <!-- <li  class="sidebar-sub-toggle" ><a href="/pulautemiang/index.php?m=petugas/petugas_transaksi"><i class="ti-money"></i> Pembayaran <span class="badge badge-primary"></span> </span></a></li> -->
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
                  <h1> <b>Berobat</b> | Pendaftaran Berobat  </h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=petugas/petugas_pasien">Data Pasien</a></li>
                    <li class="breadcrumb-item active">Pendaftaran Berobat</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>

          <?php
          // $host = "localhost";
          // $username = "root";
          // $pass = "";
          // $db = "db_temiang";
          // $conn = mysqli_connect($host, $username, $pass, $db);

          include_once '../../../../backend/koneksi.php';


          if(isset($_POST['submit'])){
            ini_set('date.timezone', 'Asia/Jakarta');

            $id_pendaftaran = $_POST['id_pendaftaran'];
            $tanggal =$_POST['tanggal'];
            $status = $_POST['status'];
            $id_jenis_poli = $_POST['id_jenis_poli'];
            $id_pasien = $_POST['id_pasien'];
            $id_petugas = $_POST['id_petugas'];
            $no_antrian = $_POST['no_antrian'];
            $jamkes = $_POST['jamkes'];
            $no_jamkes = $_POST['no_jamkes'];

            // $sql = mysqli_query($conn, "UPDATE tb_pendaftaran set id_pasien='$id_pasien',jamkes='$jamkes',no_jamkes='$no_jamkes' where id_pendaftaran='$id_pendaftaran'") or die(mysqli_error($conn));

            // $sql = mysqli_query($conn, "UPDATE tb_pendaftaran set id_pasien='$id_pasien',jamkes='$jamkes',no_jamkes='$no_jamkes' where id_pendaftaran='$id_pendaftaran'") or die(mysqli_error($conn));
            //
            //
            // var_dump ($sql);
            // die;
            //
            // $sql = mysqli_query($conn,
            // "UPDATE tb_pendaftaran SET
            // tanggal='$tanggal',
            // status='$status',
            // id_jenis_poli='$id_jenis_poli',
            // id_pasien='$id_pasien',
            // id_petugas='$id_petugas',
            // no_antrian='$no_antrian',
            // jamkes='$jamkes',
            // no_jamkes='$no_jamkes'
            //
            // WHERE id_pendaftaran='$id_pendaftaran'")
            //
            // or die(mysqli_error($conn));

            $sql = mysqli_query($conn, "insert into tb_pendaftaran values('','$tanggal','$status','$id_jenis_poli','$id_pasien','$id_petugas','$no_antrian','$jamkes','$no_jamkes')") or die(mysqli_error($conn));
            $sql2 = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'") or die(mysqli_error($conn));

            if($sql){
              // $checkNumber = mysqli_query($conn, "insert into tb_antrian_increment values('','$id_jenis_poli')") or die(mysqli_error($conn));
              // /pulautemiang/index.php?m=petugas/petugas_antrian_beranda

              echo '<script>alert("Berhasil menyimpan data."); document.location="/pulautemiang/index.php?m=petugas/petugas_antrian_beranda";</script>';
              // echo '<script>alert("Berhasil menyimpan data.");</script>';

            }else{
              echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
          }


          ?>
          <?php
          // $host = "localhost";
          // $username = "root";
          // $pass = "";
          // $db = "db_temiang";
          // $conn = mysqli_connect($host, $username, $pass, $db);

          include_once '../../../../backend/koneksi.php';




          $pendaftaran= $_GET['id_pendaftaran'];
          $idx=$pendaftaran;
          $query = mysqli_query($conn, " SELECT *
FROM tb_pendaftaran
INNER JOIN tb_pasien ON tb_pendaftaran.nik = tb_pasien.nik
INNER JOIN tb_rekam_medis ON tb_pasien.nik = tb_rekam_medis.nik where tb_pendaftaran.id_pendaftaran= '$pendaftaran' order by tb_pendaftaran.tanggal desc limit 1 ");
          $data = mysqli_fetch_array($query);
          ?>
          <?php
          ini_set('date.timezone', 'Asia/Jakarta');
          $waktu=date('Y-m-d H:i:s');
          ?>


          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title"></div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <form action="edit_daftar.php?id_pendaftaran=<?php echo $idx ?>"  method="POST">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <input type="hidden" name="id_pendaftaran" >
                              <div class="form-group">
                                <input class="form-control"  type="hidden" name="id_pendaftaran" value="<?php echo $data['id_pendaftaran'];?>" readonly>
                                <label>Tanggal</label>
                                <input class="form-control"  type="text" name="tanggal" value=" <?php echo date('Y-m-d H:i:s'); ?>" readonly>
                              </div>

                              <div class="form-group">
                                <label>No RM</label>
                                  <input class="form-control"  type="text" name="tanggal" value=" <?php  echo $data['no_rm'];?>" readonly>
                              </div>

                              <div class="form-group">
                                <label>Jenis Poli</label>
                                <input type="hidden" name="id_jenis_poli" value="<?php echo $data['id_jenis_poli']; ?>">
                                <input class="form-control" type="text"
                                value="
<?php if($data['id_jenis_poli'] == '1'){ echo 'Umum'; } ?>
<?php if($data['id_jenis_poli'] == '2'){ echo 'KB'; } ?>
<?php if($data['id_jenis_poli'] == '5'){ echo 'DOTS'; } ?>
<?php if($data['id_jenis_poli'] == '6'){ echo 'Gigi'; } ?>
<?php if($data['id_jenis_poli'] == '7'){ echo 'Anak'; } ?>
                                "
                                readonly>
                              </div>


                            <div class="form-group">
                              <label>No antrian</label>
                              <input class="form-control" type="text" value="<?php echo $data['no_antrian']; ?>" name="no_antrian"  readonly>
                            </div>

                            <div class="form-group">
                              <label>Jamkes</label>
                              <input class="form-control" type="text" value="<?php echo $data['jamkes']; ?>" name="no_antrian"  readonly>


                              </select>
                            </div>

                            <div class="form-group">
                              <label>No Jamkes</label>
                              <input class="form-control" type="text" value="<?php echo $data['no_jamkes']; ?>" name="no_antrian"  readonly>
                                </div>

                                
                            <div class="form-group">
                              <label>Status</label>
                              <input class="form-control" type="text" name="status"  value="Menunggu" readonly >
                            </div>


                            <?php
                            // $host = "localhost";
                            // $username = "root";
                            // $pass = "";
                            // $db = "db_temiang";
                            // $conn = mysqli_connect($host, $username, $pass, $db);

                            include_once '../../../../backend/koneksi.php';


                            $query = mysqli_query($conn, "SELECT tb_petugas.id_petugas,tb_akun.id_akun,tb_petugas.nama  from tb_petugas inner join tb_akun on tb_petugas.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
                            while ($a = mysqli_fetch_array($query)) {

                              ?>
                              <div class="form-group">
                                <label>Nama Petugas</label>
                                <input class="form-control" type="hidden" value="  <?php echo $a['id_petugas'];?>"   name="id_petugas" readonly>
                                <input class="form-control" type="text" value="  <?php echo $a['nama'];?>"    readonly>
                              </div>
                              <?php
                            }?>
                            <div class="form-group" align="center">
                              <!-- <button type="submit"name="submit" value="submit" class="btn btn-primary">Simpan</button> -->
                              <!-- <button type="button" name=""     onclick="window.location.href='/pulautemiang/index.php?m=petugas/petugas_pasien'"  class="btn btn-danger">Batal</button> -->
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
                  <p>2019 © Puskesmas Pulau Temiang</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <div id="div1"> </div>
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


    <script type="text/javascript">
    $("#jenis_poli").change(function(){
      let jenisPoli = $("#jenis_poli").val();
      let url = "../ajax/nomor_antrian.php?jenis_poli="+jenisPoli;
      $.ajax({url: url, success: function(result){
        $("#nomor_antrian").val(result);
      }});
    });
    </script>

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
