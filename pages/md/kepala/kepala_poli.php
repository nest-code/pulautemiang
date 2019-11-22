<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Data Pasien</b> </h1>
              <!-- <button type="button"  class="btn btn-info "          onclick="window.location.href='/pulautemiang/pages/md/cetak/print_laporan_obat.php'"  title="Cetak"><i class="fa fa-print" aria-hidden="true"></i></button> -->
              <!-- <button type="button" class="btn btn-info "      target="_blank" rel="nofollow"    onclick=" window.open('/pulautemiang/pages/md/cetak/print_laporan_obat.php', '_blank'); return false;" title="Cetak"><i class="ti-printer"></i></button> -->

            </div>
          </div>
        </div>
        <div class="col-lg-4 p-l-0 title-margin-left">
          <div class="page-header">
            <div class="page-title">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/pulautemiang/index.php?m=beranda">Dashboard</a></li>
                <li class="breadcrumb-item active">Tabel Pasien</li>
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
                        <h6  class="form-control">Buat Laporan </h6>
                      </div>
                      <div class="col-3">
                        <input type="date" class="form-control" name="tanggal1" value="">
                      </div>
                      -
                      <div class="col-3">
                        <input type="date" class="form-control" name="tanggal2" value="">
                      </div>

                      <div class="col-2">
                        <select class="form-control" name="id_jenis_poli" >
                          <option>-Pilih-</option>
                          <option value="1"  <?php if($data['id_jenis_poli'] == '1'){ echo 'selected'; } ?>>Poli Umum</option>
                          <option value="2"   <?php if($data['id_jenis_poli'] == '2'){ echo 'selected'; } ?>>Poli KB</option>
                          <option value="5"   <?php if($data['id_jenis_poli'] == '5'){ echo 'selected'; } ?>>Poli DOTS</option>
                          <option value="6" <?php if($data['id_jenis_poli'] == '6'){ echo 'selected'; } ?>>Poli Gigi</option>
                          <option value="7" <?php if($data['id_jenis_poli'] == '7'){ echo 'selected'; } ?>>Poli Anak</option>
                        </select>
                      </div>

                      <div class="col-1">
                        <button type="submit" class="btn btn-info " value="submit"  title="Cetak"><i class="fa fa-print" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

      <section id="main-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-title">
                <!-- <h4>Table Obat </h4> -->
              </div>
              <div class="card-body">
                <div class="bootstrap-data-table-panel">
                  <div class="table-responsive">
                    <table id="bootstrap-data-table-export" class="table table-striped ">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal Pertama Berobat </th>
                          <th>Poli </th>
                          <th>NIK </th>
                          <th>No RM </th>
                          <th>Nama </th>
                          <th>Jenis Kelamin</th>
                          <th>Usia</th>
                          <th>Jaminan Kesehatan</th>
                          <th>No Jaminan Kesehatan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        $query = mysqli_query($conn, "select * from tb_jenis_poli inner join tb_pendaftaran on tb_jenis_poli.id_jenis_poli=tb_pendaftaran.id_jenis_poli inner join tb_pasien on tb_pendaftaran.nik=tb_pasien.nik inner join tb_rekam_medis on tb_pasien.nik=tb_rekam_medis.nik where tb_pendaftaran.status='Selesai'");
                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <?php
                          $tgl_lahir =date_format(date_create($a['tgl_lahir']), 'Y');
                          $sekarang = date('Y');
                          $usia = $sekarang - $tgl_lahir;
                          ?>
                          <tr>
                            <td ><?php echo "$n"?>.</td>
                            <td><?php echo $a['tanggal'];?></td>
                            <td><?php echo $a['nama_jenis'];?></td>

                            <td><?php echo $a['nik'];?></td>
                            <td><?php echo $a['no_rm'];?></td>
                            <td><?php echo $a['nama'];?></td>
                            <td><?php echo $a['jk'];?></td>
                            <td><?php echo $usia?></td>
                            <td><?php echo $a['jamkes'];?></td>
                            <td><?php echo $a['no_jamkes'];?></td>

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
