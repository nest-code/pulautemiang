<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Poli Dots</b> | Antrian Poli DOTS </h1>
            </div>
          </div>
        </div>
        <!-- /# column -->
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
        <!-- /# column -->
      </div>







      <!-- /# row -->
      <section id="main-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-title">
                <!-- <h4>Table Bordered </h4> -->
              </div>
              <div class="card-body">
              <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                    <table id="bootstrap-data-table-export" class="table table-striped ">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>No Rekam Madis</th>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Status</th>
                        <th>No Antrian</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                        $tanggal=date('Y-m-d');
                      // $query = mysqli_query($conn, "  select * from tb_pasien inner join tb_pendaftaran on tb_pasien.id_pasien=tb_pendaftaran.id_pasien inner join tb_jenis_poli on tb_pendaftaran.id_jenis_poli=tb_jenis_poli.id_jenis_poli where tb_pendaftaran.id_jenis_poli='1' ");
                      // $query = mysqli_query($conn, "  SELECT * FROM tb_pendaftaran inner join tb_pasien on tb_pendaftaran.id_pasien=tb_pasien.id_pasien where tb_pendaftaran.status in ('Menunggu','Proses') and tb_pendaftaran.id_jenis_poli='1' and tb_pendaftaran.tanggal like '%$tanggal%' order by tb_pendaftaran.tanggal asc ");
                      $query = mysqli_query($conn, "  SELECT * FROM tb_pendaftaran inner join tb_pasien on tb_pendaftaran.id_pasien=tb_pasien.id_pasien inner join tb_rekam_medis on tb_rekam_medis.id_pasien=tb_pasien.id_pasien where tb_pendaftaran.status in ('Menunggu','Proses') and tb_pendaftaran.id_jenis_poli='5' and tb_pendaftaran.tanggal like '%$tanggal%' order by tb_pendaftaran.tanggal asc ");

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
                          <td><?php echo $a['nama'];?></td>
                          <td><?php echo $a['no_rm'];?></td>
                          <td><?php echo $usia?> </td>
                          <td>
                            <?php if($a['status'] == 'Menunggu'){ echo ' <span class="badge badge-primary">Menunggu</span>'; } ?>
                            <?php if($a['status'] == 'Proses'){ echo ' <span class="badge badge-warning">Periksa</span>'; } ?>
                            <?php if($a['status'] == 'Selesai'){ echo ' <span class="badge badge-succes">Selesai</span>'; } ?>
                          </td>
                          <td><?php echo $a['no_antrian'];?></td>
                          <td class="color-primary">
                            <form class="" action="" method="post">
                              <!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_pasien;?>"> <i class="fa fa-user"></i> Lihat Rekam Medis</button> -->
                              <button type="button"  class="btn btn-info btn-sm"          onclick="window.location.href='/pulautemiang/pages/md/petugas/view/view_pasien.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Lihat"><i class="ti-eye"></i> Lihat</button>
                              <button type="button"  class="btn btn-danger btn-sm"         onclick="hapus(<?php echo $a['id_pendaftaran']?>);"  title="Hapus"><i class="fa fa-eraser"></i> Hapus</button>
                              <!-- <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"><i class="fa fa-eraser" title="Hapus"></i> </button> -->
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
                            <!-- <p>2019 © Puskesmas Pulau Temiang<a href="#">example.com</a></p> -->
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
