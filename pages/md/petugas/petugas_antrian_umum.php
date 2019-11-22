  <div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
            <h1> <b>Poli Umum</b> | Antrian Poli Umum </h1>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
          <div class="page-title">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
              <li class="breadcrumb-item active">Antrian Pasien</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
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
                        <th>No Antrian</th>
                        <th>Nama Pasien</th>
                        <th>No Rekam Medis</th>
                        <th>Usia</th>
                        <th>Jaminan Kesehatan</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                        ini_set('date.timezone', 'Asia/Jakarta');
                      $tanggal=date('Y-m-d');
                      // $query = mysqli_query($conn, "  select * from tb_pasien inner join tb_pendaftaran on tb_pasien.id_pasien=tb_pendaftaran.id_pasien inner join tb_jenis_poli on tb_pendaftaran.id_jenis_poli=tb_jenis_poli.id_jenis_poli where tb_pendaftaran.id_jenis_poli='1' ");
                      // $query = mysqli_query($conn, "  SELECT * FROM tb_pendaftaran inner join tb_pasien on tb_pendaftaran.id_pasien=tb_pasien.id_pasien where tb_pendaftaran.status in ('Menunggu','Proses') and tb_pendaftaran.id_jenis_poli='1' and tb_pendaftaran.tanggal like '%$tanggal%' order by tb_pendaftaran.tanggal asc ");
                      $query = mysqli_query($conn, "  SELECT * FROM tb_pendaftaran where status in ('Menunggu','Proses') and id_jenis_poli='1' and tanggal like '%$tanggal%' order by tanggal asc ");
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
                          <td><?php echo $a['no_antrian'];?></td>
                          <td>
                            <?php
                            include '../backend/koneksi.php';
                             $pasiens=$a['nik'];
                            // $query = mysqli_query($conn, "  select * from tb_pasien inner join tb_pendaftaran on tb_pasien.id_pasien=tb_pendaftaran.id_pasien inner join tb_jenis_poli on tb_pendaftaran.id_jenis_poli=tb_jenis_poli.id_jenis_poli where tb_pendaftaran.id_jenis_poli='1' ");
                            // $query = mysqli_query($conn, "  SELECT * FROM tb_pendaftaran inner join tb_pasien on tb_pendaftaran.id_pasien=tb_pasien.id_pasien where tb_pendaftaran.status in ('Menunggu','Proses') and tb_pendaftaran.id_jenis_poli='1' and tb_pendaftaran.tanggal like '%$tanggal%' order by tb_pendaftaran.tanggal asc ");
                            $queryx = mysqli_query($conn, "  SELECT * FROM tb_pasien where nik='$pasiens' ");
                            $ax = mysqli_fetch_array($queryx);
                             ?>
                            <?php echo $ax['nama'];?>
                          </td>
                          <td>
                            <?php
                            include '../backend/koneksi.php';
                             $pasienss=$a['nik'];
                            // $query = mysqli_query($conn, "  select * from tb_pasien inner join tb_pendaftaran on tb_pasien.id_pasien=tb_pendaftaran.id_pasien inner join tb_jenis_poli on tb_pendaftaran.id_jenis_poli=tb_jenis_poli.id_jenis_poli where tb_pendaftaran.id_jenis_poli='1' ");
                            // $query = mysqli_query($conn, "  SELECT * FROM tb_pendaftaran inner join tb_pasien on tb_pendaftaran.id_pasien=tb_pasien.id_pasien where tb_pendaftaran.status in ('Menunggu','Proses') and tb_pendaftaran.id_jenis_poli='1' and tb_pendaftaran.tanggal like '%$tanggal%' order by tb_pendaftaran.tanggal asc ");
                            $queryxx = mysqli_query($conn, "  SELECT * FROM tb_pasien inner join tb_rekam_medis on tb_rekam_medis.nik=tb_pasien.nik where tb_pasien.nik='$pasienss' ");
                            $axx = mysqli_fetch_array($queryxx);
                             ?>
                            <?php echo $axx['no_rm'];?>
                          </td>
                          <td>
                            <?php
                            include '../backend/koneksi.php';
                             $pasiensss=$a['nik'];
                            $queryxxx = mysqli_query($conn, "  SELECT * FROM tb_pasien  where nik='$pasiensss' ");
                            $axxx = mysqli_fetch_array($queryxxx);

                            $tgl_lahir =date_format(date_create($axxx['tgl_lahir']), 'Y');
                            $sekarang = date('Y');
                            $usia = $sekarang - $tgl_lahir;
                             ?>
                          <?php echo $usia?>
                          <td><?php echo $axx['jamkes'];?></td>
                          </td>
                          <td>
                            <?php if($a['status'] == 'Menunggu'){ echo ' <span class="badge badge-primary">Menunggu</span>'; } ?>
                            <?php if($a['status'] == 'Proses'){ echo ' <span class="badge badge-warning">Periksa</span>'; } ?>
                            <?php if($a['status'] == 'Selesai'){ echo ' <span class="badge badge-succes">Selesai</span>'; } ?>
                          </td>
                          <td class="color-primary">
                            <form class="" action="" method="post">
                              <button type="button"  class="btn btn-info btn-sm"           onclick="window.location.href='/pulautemiang/pages/md/petugas/edit/edit_daftar.php?id_pendaftaran=<?php echo $a['id_pendaftaran'] ?> '"  title="Lihat"><i class="ti-eye" aria-hidden="true"></i> Lihat </button>
                              <!-- <button type="button"  class="btn btn-danger btn-sm"         onclick="hapus(<?php echo $a['id_pendaftaran']?>);"  title="Hapus"><i class="fa fa-eraser"></i> Hapus</button> -->
                              <!-- <button type="button"  class="btn btn-danger btn-sm"       onclick="hapus(<?php echo $a['id_obat']?>);" ><i class="fa fa-eraser"></i>Hapus</button> -->
                              <button type="button"  class="btn btn-danger btn-sm"         onclick="hapus(<?php echo $a['id_pendaftaran']?>);"  title="Hapus "><i class="ti-trash"></i>  Hapus</button>

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
                  window.location.href='/pulautemiang/backend/delete/delete_pendaftaran.php?id_pendaftaran='+hapus;
              });

        }
</script>
