<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Detail Resep Obat </b> </h1>

              <div class="container">
            </div>
          </div>
        </div>
      </div>
      <!-- /# column -->
      <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
          <div class="page-title">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/?m=beranda">Dashboard</a></li>
              <li class="breadcrumb-item active">Resep Obat</li>
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
                        <th>ID Resep Obat</th>
                        <th>Nama Pasien</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      $query = mysqli_query($conn, "select * from tb_resep_obat inner join tb_pasien on tb_resep_obat.id_pasien=tb_pasien.id_pasien where tb_resep_obat.status='Selesai' order by tb_resep_obat.waktu desc ");
                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['waktu'];?></td>
                          <td><?php echo $a['id_resep_obat'];?></td>
                          <td><?php echo $a['nama'];?></td>
                          <td >
                          <?php if($a['status'] == 'Menunggu'){ echo ' <span class="badge badge-primary">Menunggu</span>'; } ?>
                          <?php if($a['status'] == 'Proses'){ echo ' <span class="badge badge-warning">Proses</span>'; } ?>
                          <?php if($a['status'] == 'Selesai'){ echo ' <span class="badge badge-success">Telah diberikan ke pasien</span>'; } ?>
                          </td>
                          <td class="color-primary">
                            <form class="" action="" method="post">
                              <!-- <button type="button"  class="btn btn-warning btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/apoteker/edit/edit_resep_obat.php?id_resep_obat=<?php echo $a['id_resep_obat'] ?> '"  title="Ubah Status Resep"><i class="fa fa-medkit"></i></button> -->
                              <button type="button"  class="btn btn-primary btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/apoteker/view/view_resep_obat.php?id_resep_obat=<?php echo $a['id_resep_obat'] ?> '"  title="Cetak Kartu Berobat"><i class="fa fa-eye" title="Lihat"></i></button>
                              <!-- <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i></button> -->
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
