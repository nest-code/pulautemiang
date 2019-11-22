<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Data Transaksi</b> | Transaksi Berobat  </h1>
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
              <div class="card-title">
              </div>
              <div class="card-body">
                <div class="bootstrap-data-table-panel">
                  <form class="" action="/pulautemiang/pages/md/cetak/print_laporan_durasi.php" method="POST" target="_blank" >
                    <div class="row">
                      <div class="col-2" >
                        <h6  class="form-control">Buat Laporan</h6>
                      </div>
                      <div class="col-3">
                        <input type="date" class="form-control" name="tanggal1" value="">
                      </div>
                      -
                      <div class="col-3">
                        <input type="date" class="form-control" name="tanggal2" value="">
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn btn-info " value="submit"  title="Cetak"><i class="fa fa-print" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
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
                          <th>Tanggal Transaksi</th>
                          <th>NIK</th>

                          <th>Nama Pasien</th>
                          <th>Jenis Kelamin</th>
                          <th>Usia</th>
                          <th>No. Resep</th>
                          <th>Status</th>
                          <!-- <th>Aksi</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        $query = mysqli_query($conn, "SELECT * FROM tb_pasien inner join tb_resep_obat on tb_pasien.nik=tb_resep_obat.nik inner join  tb_transaksi_berobat on tb_resep_obat.id_resep_obat=tb_transaksi_berobat.id_resep_obat where tb_transaksi_berobat.status_transaksi='Selesai' ");
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
                            <!-- <td><?php echo $a['id_transaksi'];?></td> -->
                            <td><?php echo $a['tgl_transaksi'];?></td>
                            <td><?php echo $a['nik'];?></td>
                            <td><?php echo $a['nama'];?></td>
                            <td>
                              <?php if($a['jk'] == 'L'){ echo 'Laki-laki'; } ?>
                              <?php if($a['jk'] == 'P'){ echo 'Perempuan'; } ?>
                            </td>
                            <td><?php echo  $usia?> Tahun</td>
                            <td><?php echo $a['id_resep_obat'];?></td>
                            <td>
                              <td><?php echo $a['status_transaksi'];?></td>
                            </td>
                            <!-- <td class="color-primary">
                            <form class="" action="" method="post">
                            <button type="button"  class="btn btn-info btn-sm"          onclick="window.location.href='/pulautemiang/pages/md/kepala/view/view_transaksi.php?id_transaksi=<?php echo $a['id_transaksi'] ?> '"  title="Lihat"><i class="ti-eye"></i></button>
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
</div>
