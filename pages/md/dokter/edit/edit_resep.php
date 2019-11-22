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
    <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
  <?php
  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";
  $conn = mysqli_connect($host, $username, $pass, $db);
  $id_drm=$_GET['id_resep_obat'];

  // $query = mysqli_query($conn, " SELECT * FROM tb_resep_obat inner join tb_detail_resep_obat on tb_resep_obat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat where tb_resep_obat.id_resep_obat='$id_drm'");
  $query = mysqli_query($conn, " SELECT * FROM tb_resep_obat where id_resep_obat='$id_drm'");

  $data = mysqli_fetch_array($query);
  $data['id_resep_obat'];
  $rm=$data['id_resep_obat'];

  // var_dump($rm);
  // die();

  ?>
  <body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html">
            <span><?php echo "$level"; ?></span></a></div>
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
              <li><a href="/pulautemiang/index.php?m=dokter_pasien"><i class="ti-wheelchair"></i>Pasien</a></li>
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
                        <span class="text-left"><?php echo $level; ?></span>
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
      <?php
      $host = "localhost";
      $username = "root";
      $pass = "";
      $db = "db_temiang";
      $conn = mysqli_connect($host, $username, $pass, $db);


      if(isset($_POST['submit'])){
        // $id_detail_rekam_medis= $_POST['id_detail_rekam_medis'];

        $id_resep_obat= $_POST['id_resep_obat'];
        $id_obat= $_POST['id_obat'];
        $jumlah= $_POST['jumlah'];
        $keterangan= $_POST['keterangan'];

        $sql =mysqli_query($conn,"insert into tb_detail_resep_obat values('','$id_resep_obat','$id_obat','$jumlah','$keterangan')") ;
        if($sql){
          echo
          '<script>
          alert("Berhasil menambahkan data.");
          document.location="/pulautemiang/pages/md/dokter/view/view_detail_rm_beranda.php?id_detail_rekam_medis='.$id_resep_obat.'";
          </script>';
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
      }
      ?>

      <div class="content-wrap">
        <div class="main">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                  <div class="page-title">
                    <h1> <b>Rekam Medis</b> | Detail Rekam Medis </h1>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                  <div class="page-title">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                      <li class="breadcrumb-item active">Tambah Detail RM</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <section id="main-content">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="basic-elements">
                        <form action="edit_resep.php?id_resep_obat=<?php echo   $data['id_resep_obat']; ?>"  method="post">

                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label>ID Resep Obat</label>
                                <input class="form-control" type="text" name="id_resep_obat"  value="<?php echo $rm?>" readonly >
                              </div>
                            </div>

                            <div class="col-lg-12">
                              <div class="form-group">
                                <label>Obat</label>
                                <select  name="id_obat"  class="form-control" id="id_obat">
                                    <option>-Pilih-</option>
                                  <?php
                                  $n=0;
                                  $host = "localhost";
                                  $username = "root";
                                  $pass = "";
                                  $db = "db_temiang";
                                  $conn = mysqli_connect($host, $username, $pass, $db);


                                  $query = mysqli_query($conn, "select * from tb_obat join tb_kategori_obat on tb_obat.id_kategori_obat=tb_kategori_obat.id_kategori_obat");
                                  while ($a = mysqli_fetch_array($query)) {
                                    $n=$n+1;
                                    ?>
                                    <option value="<?php echo $a['id_obat'];?>"><?php echo $a['nama_obat'];?></option>
                                    <?php
                                  }?>
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-12">
                              <div class="form-group">
                                <?php $query = mysqli_query($conn, "select * from tb_obat inner join tb_kategori_obat on tb_obat.id_kategori_obat=tb_kategori_obat.id_kategori_obat where tb_obat.id_obat=''"); ?>
                                <label>Kategori Obat</label>
                                <input type="text"  name="jumlah" min="0" max='100' id="nama_kategori" onchange="cek_stok();" onkeydown="return false" class="form-control"  readonly/>
                              </div>
                            </div>

                            <div class="col-lg-12">
                              <div class="form-group">
                                <?php $query = mysqli_query($conn, "select * from tb_obat where id_obat=''"); ?>
                                <label>Jumlah</label>
                                <input type="number" value="0" name="jumlah" min="0" max='100' id="jumlah" onchange="cek_stok();" onkeydown="return false" class="form-control" />
                              </div>
                            </div>

                            <div class="col-lg-12">
                              <div class="form-group">
                                <?php $query = mysqli_query($conn, "select * from tb_obat where id_obat=''"); ?>
                        				<label>Stok Obat</label>
                                <input type="text" name="stok_obat" id="stok_obat" class="form-control" readonly/>
                          			</div>
                            </div>

                            <div class="col-lg-12">
                              <div class="form-group">
                                <label>Keterangan</label>
                                <input class="form-control" type="text" name="keterangan"  value="" >
                              </div>
                            </div>
                            </div>
                          </div>

                          <div align="center">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="submit" class="btn btn-default" >Batal</button>
                            <!-- <button type="submit" name="submit"  value="submit">Batal</button> -->
                          </div>
                        </form>
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

        <script type="text/javascript">

          $("#id_obat").change(function(){
          let id_obat = $("#id_obat").val();
          let url = "../ajax/resep_obat.php?id_obat="+id_obat;
          $.ajax({url: url, success: function(result){
              console.log(result);
              var $response = $(result);
              stok = $response.filter('#stok').text();
              nama_obat = $response.filter('#nama_obat').text();
              nama_kategori = $response.filter('#nama_kategori').text();
              $("#nama_obat").val(nama_obat);
              $("#nama_kategori").val(nama_kategori);

              $("#stok_obat").val(stok);
          }});
          });

          function cek_stok(){
            let stok_obat = $("#stok_obat").val();
            let jumlah = $("#jumlah").val();

            if(jumlah>stok_obat){
              $("#jumlah").val(stok);
            }
          }

        </script>
        <script src="/pulautemiang/assets/js/lib/jquery.min.js"></script>
        <script src="/pulautemiang/assets/js/lib/jquery.nanoscroller.min.js"></script>
        <script src="/pulautemiang/assets/js/lib/menubar/sidebar.js"></script>
        <script src="/pulautemiang/assets/js/lib/preloader/pace.min.js"></script>
        <script src="/pulautemiang/assets/js/scripts.js"></script>
      </body>
    <?php } ?>
    </html>
