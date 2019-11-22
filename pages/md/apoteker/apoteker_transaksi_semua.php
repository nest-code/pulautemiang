<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Data Transaksi Berobat</b> </h1>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-l-0 title-margin-left">
          <div class="page-header">
            <div class="page-title">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                <li class="breadcrumb-item active">Tabel Transaksi</li>
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
                          <th>Nama</th>
                          <th>Tanggal Transaksi</th>
                          <th>No. Resep</th>
                          <th>Jaminan Kesehatan</th>
                          <th>No Jaminan Kesehatan</th>
                          <th>Status </th>
                          <!-- <th>Tindakan</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        $sql="SELECT * FROM `tb_detail_resep_obat` inner join tb_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat inner join tb_resep_obat on tb_detail_resep_obat.id_resep_obat=tb_resep_obat.id_resep_obat inner join tb_pasien on tb_resep_obat.nik=tb_pasien.nik inner join tb_pendaftaran on tb_pendaftaran.nik=tb_pasien.nik inner join tb_transaksi_berobat on tb_transaksi_berobat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_detail_rm on tb_detail_rm.id_detail_rekam_medis=tb_detail_resep_obat.id_resep_obat group by tb_detail_resep_obat.id_resep_obat";
                        $query = mysqli_query($conn,$sql);
                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['nama'];?></td>
                            <td><?php echo $a['tgl_transaksi'];?></td>
                            <td><?php echo $a['id_resep_obat'];?></td>
                            <td><?php echo $a['jamkes'];?></td>
                            <td><?php echo $a['no_jamkes'];?></td>

                            <td>
                              <?php if($a['status_transaksi'] == 'Belum'){ echo ' <span class="badge badge-danger">Belum</span>'; } ?>
                              <?php if($a['status_transaksi'] == 'Selesai')      { echo ' <span class="badge badge-success">Selesai</span>'; } ?>
                            </td>
                            <!-- <td class="color-primary">
                              <form class="" action="" method="post"> -->
                                <!-- <button type="button"  class="btn btn-warning btn-sm"       onclick="window.location.href='/pulautemiang/pages/md/petugas/edit/edit_transaksi.php?id_transaksi=<?php echo $a['id_transaksi'] ?> '"  title="Bayarkan Obat"><i class="fa fa-money" aria-hidden="true"></i></button> -->
                                <!-- <button type="button"  class="btn btn-info btn-sm "                   onclick="window.location.href='/pulautemiang/pages/md/cetak/print_transaksi.php?id_transaksi=<?php echo$a['id_resep_obat'] ?> '"  title="Lihat"><i class="fa fa-print" aria-hidden="true"></i> Cetak</button>
                              </td> -->
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
