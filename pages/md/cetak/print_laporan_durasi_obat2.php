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

    <!-- <a href="/pulautemiang/backend/koneksi.php">aaa</a> -->

    <br><br>
    <table  class="table table-striped " align="center" border="1" width="100%">
      <thead>
        <tr>
          <th>No</th>

          <th>Tanggal</th>
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
        $n=0;
        $host = "localhost";
        $username = "root";
        $pass = "";
        $db = "db_temiang";

        $nama_obat1="asd";
          $conn = mysqli_connect($host, $username, $pass, $db);
        $query = mysqli_query($conn, "SELECT * from tb_obat inner join tb_kategori_obat on tb_obat.id_kategori_obat=tb_kategori_obat.id_kategori_obat inner join tb_detail_resep_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat inner join tb_resep_obat on tb_resep_obat.id_resep_obat=tb_detail_resep_obat.id_resep_obat where  (tb_resep_obat.waktu BETWEEN '$tgl1' and '$tgl2') order by tb_obat.nama_obat asc");
        while ($a = mysqli_fetch_array($query)) {
          $id_obat = $a['id_obat'];
          $n=$n+1;
          ?>
          <tr>
            <?php
            $cek_obat = mysqli_query($conn, "SELECT * from tb_obat inner join tb_kategori_obat on tb_obat.id_kategori_obat=tb_kategori_obat.id_kategori_obat inner join tb_detail_resep_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat inner join tb_resep_obat on tb_resep_obat.id_resep_obat=tb_detail_resep_obat.id_resep_obat where  (tb_resep_obat.waktu BETWEEN '$tgl1' and '$tgl2')  and tb_obat.id_obat='$id_obat'");
            $cek_obat = mysqli_num_rows($cek_obat);
            // var_dump($cek_obat);
            ?>

            <td><?php echo "$n"?>.</td>
            <td><?php echo $a['waktu'];?></td>
            <td><?php echo $a['nama_obat']; ?></td>
            <td><?php echo $a['nama_kategori'];?></td>
            <td><?php echo $a['stok'];?></td>
            <?php
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
          <?php
            $nama_obat1=$a['nama_obat'];
         } ?>
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
