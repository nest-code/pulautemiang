<?php
$tgl1=$_POST['tanggal1'];
$tgl2=$_POST['tanggal2'];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="index.html" method="post" align="center">
      <br><br>
      <table  align="center">
        <tr>
          <td rowspan="2">
            <img src="/pulautemiang/img/laporan/kab.png" alt="" width="80px">
          </td>
          <td align="center" width="700px">
            <h6>
            PEMERINTAH KABUPTEN TEBO <br>
                  DINAS KESEHATAN <br>
                UPDT PUSKESMAS PULAU TEMIANG
            </h6>
          </td>
          <td rowspan="2">
            <img src="/pulautemiang/img/laporan/puskesmas.png" alt="" width="80px">
          </td>
        </tr>

        <tr>
          <td align="center" width="800px">
            <p>  Jln Padang Lamo Kelurahan Pulau Temiang, Kode Pos : 37254 <br>
              Email: pkmppltemiang123@gmail.com . Facebook : Pkmppltemiang
              PULAU TEMIANG</p>
          </td>
        </tr>

      </table>
    </form>

    <br><br>

    <table id="bootstrap-data-table-export" width="100%" border="1"  align="center">
      <thead>
        <tr>
          <th >No</th>
          <!-- <th>ID Transaksi</th> -->
          <th>Tanggal Transaksi</th>
          <th>NIK</th>

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

        $query = mysqli_query($conn, "SELECT * FROM tb_pasien inner join tb_resep_obat on tb_pasien.nik=tb_resep_obat.nik inner join  tb_transaksi_berobat on tb_resep_obat.id_resep_obat=tb_transaksi_berobat.id_resep_obat where (tb_transaksi_berobat.tgl_transaksi BETWEEN '$tgl1' and '$tgl2')");

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
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>


<br>
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
