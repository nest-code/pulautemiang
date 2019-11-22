<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1><b>Data Obat</b>  </h1>
              <button type="button"  class="btn btn-info "          onclick="window.location.href='/pulautemiang/pages/md/cetak/print_laporan_obat.php'"  title="Cetak"><i class="fa fa-print" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <!-- /# column -->
      <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
          <div class="page-title">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
              <li class="breadcrumb-item active">Tabel Obat</li>
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
                <form class="" action="/pulautemiang/pages/md/cetak/print_laporan_durasi_obat.php" method="POST" >
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
              <!-- <h4>Table Obat </h4> -->
            </div>
            <div class="card-body">
              <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                  <table id="bootstrap-data-table-export" class="table table-striped ">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name Obat</th>
                        <th>Kategori Obat</th>
                        <th>Stok</th>
                        <th>Pemakaian</th>
                        <th>Stok Awal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      $query = mysqli_query($conn, "select * from tb_obat inner join tb_kategori_obat on tb_obat.id_kategori_obat=tb_kategori_obat.id_kategori_obat");
                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td ><?php echo "$n"?>.</td>
                          <td><?php echo $a['nama_obat'];?></td>
                          <td><?php echo $a['nama_kategori'];?></td>
                          <td><?php echo $a['stok'];?></td>
                          <?php
                          $id_obat = $a['id_obat'];
                          $query1 = mysqli_query($conn, "SELECT SUM(tb_detail_resep_obat.jumlah) as jumlah FROM tb_kategori_obat inner join tb_obat on tb_kategori_obat.id_kategori_obat=tb_obat.id_kategori_obat inner join tb_detail_resep_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat inner join tb_resep_obat on tb_resep_obat.id_resep_obat=tb_detail_resep_obat.id_resep_obat where tb_obat.id_obat='$id_obat' ");
                          $query1 = mysqli_fetch_array($query1);
                          // echo var_dump($query1);
                          ?>
                          <td><?php
                            if($query1['jumlah']==""){
                              echo '0';
                            }else{
                          echo $query1['jumlah'];
                            }
                          ?></td>
                          <td> <?php echo $jumlah=$query1['jumlah']+$a['stok'];  ?></td>
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
