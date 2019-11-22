<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Puskesmas Pulau Temiang | Pelayanan</title>
    <link rel="shortcut icon" href="/pulautemiang/images/logos/logo.png">
    <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
  </head>
  <style media="screen">
    p{
      font-size: 5px;
    }
  </style>
  <body>


  <br>
    <div class="" align="center">
      <h5>Laporan Transaksi Berobat | Semua</h5>
    </div>

    <br>

    <table id="bootstrap-data-table-export" width="100%" border="1"  align="center">
      <thead>
        <tr>
          <th >No</th>
          <th>ID Transaksi</th>
          <th>Tanggal Transaksi</th>
          <th>Nama Pasien</th>
          <th>Jenis Kelamin</th>
          <th>Usia</th>
          <th>No. Resep</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $n=0;
        // $host = "localhost";
        // $username = "root";
        // $pass = "";
        // $db = "db_temiang";
        // $conn = mysqli_connect($host, $username, $pass, $db);

        include_once '../../../backend/koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM tb_pasien inner join tb_resep_obat on tb_pasien.id_pasien=tb_resep_obat.id_pasien inner join  tb_transaksi_berobat on tb_resep_obat.id_resep_obat=tb_transaksi_berobat.id_resep_obat where tb_transaksi_berobat.status_bayar='Bayar'");
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
            <td><?php echo $a['id_transaksi'];?></td>
            <td><?php echo $a['tgl_transaksi'];?></td>
            <td><?php echo $a['nama'];?></td>
            <td>
                <?php if($a['jk'] == 'L'){ echo 'Laki-laki'; } ?>
                <?php if($a['jk'] == 'P'){ echo 'Perempuan'; } ?>
            </td>
            <td><?php echo  $usia?> Tahun</td>
            <td><?php echo $a['id_resep_obat'];?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <!-- <form class="" action="index.html" method="post"  >
      <div class="" >
        <section id="main-content"  class="row justify-content-center" >
          <div class="row">
            <div class="row justify-content-center">
              <div class="card" >
                <div class="card-body">
                  <div class="bootstrap-data-table-panel">
                    <div class="table-responsive">
                      <table id="bootstrap-data-table-export"  >
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>ID Transaksi</th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Usia</th>
                            <th>No. Resep</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $n=0;
                          $host = "localhost";
                          $username = "root";
                          $pass = "";
                          $db = "db_temiang";
                          $conn = mysqli_connect($host, $username, $pass, $db);
                          $query = mysqli_query($conn, "SELECT * FROM tb_pasien inner join tb_resep_obat on tb_pasien.id_pasien=tb_resep_obat.id_pasien inner join  tb_transaksi_berobat on tb_resep_obat.id_resep_obat=tb_transaksi_berobat.id_resep_obat where tb_transaksi_berobat.status_bayar='Bayar'");
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
                              <td><?php echo $a['id_transaksi'];?></td>
                              <td><?php echo $a['tgl_transaksi'];?></td>
                              <td><?php echo $a['nama'];?></td>
                              <td>
                                  <?php if($a['jk'] == 'L'){ echo 'Laki-laki'; } ?>
                                  <?php if($a['jk'] == 'P'){ echo 'Perempuan'; } ?>
                              </td>
                              <td><?php echo  $usia?> Tahun</td>
                              <td><?php echo $a['id_resep_obat'];?></td>
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
          </section>
        </div>
      </div>
    </form> -->
<br><br>
    <div class="row">
      <div class="col-lg-12">
        <div align="center">
          <p>2019 © Puskesmas Pulau Temiang</p>
        </div>
      </div>
    </div>
  </body>
</html>


<script type="text/javascript">
   window.print();
</script>
