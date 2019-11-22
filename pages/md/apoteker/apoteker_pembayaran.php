<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Data Transaksi</b> | Bayar Obat </h1>
              <button type="button" class="btn btn-primary"        onclick="window.location.href='?m=apoteker/apoteker_transaksi_semua'"  title="Lihat Semua Data"><i class="fa fa-table" aria-hidden="true"></i> Data Transaksi Berobat</button>
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
                          <th>NIK</th>
                          <th>No RM</th>

                          <th>Nama</th>
                          <th>Tanggal Transaksi</th>
                          <th>No. Resep</th>
                          <!-- <th>Biaya Periksa</th> -->
                          <!-- <th>Biaya Obat</th> -->
                          <th>Jamkes</th>
                          <th>Status Transaksi</th>
                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        // $sql="SELECT *,sum(tb_detail_resep_obat.jumlah*tb_obat.harga_satuan) as subtotal, tb_pasien.nama, tb_pendaftaran.jamkes,tb_transaksi_berobat.status_transaksi FROM `tb_detail_resep_obat` inner join tb_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat inner join tb_resep_obat on tb_detail_resep_obat.id_resep_obat=tb_resep_obat.id_resep_obat inner join tb_pasien on tb_resep_obat.nik=tb_pasien.nik inner join tb_pendaftaran on tb_pendaftaran.nik=tb_pasien.nik inner join tb_transaksi_berobat on tb_transaksi_berobat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_detail_rm on tb_detail_rm.id_detail_rekam_medis=tb_detail_resep_obat.id_resep_obat where tb_transaksi_berobat.status_transaksi='Belum'  group by tb_detail_resep_obat.id_resep_obat";

                        $sql="SELECT *,sum(tb_detail_resep_obat.jumlah*tb_obat.harga_satuan) as subtotal, tb_pasien.nama, tb_rekam_medis.jamkes,tb_transaksi_berobat.status_transaksi FROM `tb_detail_resep_obat` inner join tb_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat inner join tb_resep_obat on tb_detail_resep_obat.id_resep_obat=tb_resep_obat.id_resep_obat inner join tb_pasien on tb_resep_obat.nik=tb_pasien.nik inner join tb_rekam_medis on tb_pasien.nik=tb_rekam_medis.nik inner join tb_pendaftaran on tb_pendaftaran.nik=tb_pasien.nik inner join tb_transaksi_berobat on tb_transaksi_berobat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_detail_rm on tb_detail_rm.id_detail_rekam_medis=tb_detail_resep_obat.id_resep_obat where tb_transaksi_berobat.status_transaksi='Belum'  group by tb_detail_resep_obat.id_resep_obat";



                        $query = mysqli_query($conn,$sql);
                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['nik'];?></td>
                            <td><?php echo $a['no_rm'];?></td>


                            <td><?php echo $a['nama'];?></td>
                            <td><?php echo $a['tgl_transaksi'];?></td>
                            <td><?php echo $a['id_resep_obat'];?></td>
                            <!-- <td><?php echo $a['biaya_periksa'];?></td> -->
                            <!-- <td><?php echo $a['subtotal'];?></td> -->
                            <td><?php echo $a['jamkes'];?></td>
                            <td>
                              <?php if($a['status_transaksi'] == 'Selesai')      { echo ' <span class="badge badge-success">Sudah Ambil</span>'; } ?>
                              <?php if($a['status_transaksi'] == 'Belum'){ echo ' <span class="badge badge-danger">Belum Ambil</span>'; } ?>
                            </td>
                            <td class="color-primary">
                              <form class="" action="" method="post">
                                <button type="button"  class="btn btn-warning btn-sm"       onclick="window.location.href='/pulautemiang/pages/md/apoteker/edit/edit_transaksi.php?id_transaksi=<?php echo $a['id_transaksi'] ?> '"  title="Bayar"><i class="fa fa-money" aria-hidden="true"></i> Bayar</button>
                                <button type="button"  class="btn btn-info btn-sm "                   onclick="window.location.href='/pulautemiang/pages/md/cetak/print_transaksi.php?id_transaksi=<?php echo$a['id_resep_obat'] ?> '"  title="Lihat"><i class="fa fa-print" aria-hidden="true"></i> Cetak</button>
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
