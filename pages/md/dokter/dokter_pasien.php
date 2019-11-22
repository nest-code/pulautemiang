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
  $query = mysqli_query($conn, " SELECT * FROM tb_jenis_poli INNER JOIN tb_dokter on tb_jenis_poli.id_jenis_poli=tb_dokter.id_jenis_poli inner JOIN tb_akun on tb_dokter.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
  $data = mysqli_fetch_array($query);
  $poli=$data['id_jenis_poli'];
  $p=$poli;
  ?>


<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Data Pasien | Poli <?php echo $data['nama_jenis']; ?></b>  | Ubah Status Periksa </h1>
            </div>
          </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
          <div class="page-header">
            <div class="page-title">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
                <li class="breadcrumb-item active">Ubah Status Periksa</li>
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
                <div class="bootstrap-data-table-panel">
                  <div class="table-responsive">
                    <table id="bootstrap-data-table-export" class="table table-striped ">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Usia</th>
                          <!-- <th>Gol. Darah</th> -->
                          <th>Status</th>
                          <th>No. Antrian</th>
                          <th>No. Rekam Medis</th>

                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        $query = mysqli_query($conn, "select * from tb_pendaftaran inner join tb_pasien on tb_pasien.nik=tb_pendaftaran.nik inner join tb_rekam_medis on tb_rekam_medis.nik=tb_pasien.nik where tb_pendaftaran.status='Proses' and tb_pendaftaran.id_jenis_poli='$p' order by tb_pendaftaran.tanggal desc");
                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <?php
                          $tgl_lahir =date_format(date_create($a['tgl_lahir']), 'Y');
                          $sekarang = date('Y');
                          $usia = $sekarang - $tgl_lahir;
                          ?>

                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['tanggal'];?></td>
                            <td><?php echo $a['nik'];?></td>

                            <td><?php echo $a['nama'];?></td>
                            <td>
                              <?php if($data['jk'] == 'L'){ echo 'Laki-laki'; } ?>
                              <?php if($data['jk'] == 'P'){ echo 'Perempuan'; } ?>

                            </td>
                            <td><?php echo  $usia?> Tahun</td>
                            <!-- <td><?php echo $a['gol_darah'];?></td> -->
                            <td>
                             <?php if($a['status'] == 'Menunggu'){ echo ' <span class="badge badge-primary">Menunggu</span>'; } ?>
                             <?php if($a['status'] == 'Proses'){ echo ' <span class="badge badge-warning">Periksa</span>'; } ?>
                            </td>
                            <td><?php echo $a['no_antrian'];?></td>

                            <td><?php echo $a['no_rm'];?></td>

                            <td class="color-primary">
                              <form class="" action="" method="post">
                                <button type="button"  class="btn btn-warning btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/dokter/edit/edit_pendaftaran_selesai.php?id_pendaftaran=<?php echo $a['id_pendaftaran'] ?> '"  title="Selesai Periksa"><i class="fa fa-stethoscope"></i>  Selesai Periksa</button>
                                <button type="button" class="btn btn-info btn-sm"       onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_rm.php?nik=<?php echo $a['nik'];  ?>'"  title="Lihat Rekam Medis"  ><i class="ti-eye"></i>  lihat</button>

                                <!-- <button type="submit" class="btn btn-danger btn-sm"           name="delete_pasien" ><i class="ti-trash"></i></button> -->
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


  <?php } ?>
