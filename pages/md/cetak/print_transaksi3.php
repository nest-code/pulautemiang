<?php
session_start();
$id_akun=$_SESSION['id_akun'];
$namaakun=$_SESSION['nama_akun'];
$level=$_SESSION['level'];
if(!isset($_SESSION['nama_akun'])){
  header('location: ../login.php');
}else{
  // $idpetugas=$_SESSION['id_petugas'];
  ?>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak transaksi berobat pasien</title>

  </head>
  <?php
  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";
  $conn = mysqli_connect($host, $username, $pass, $db);
  $id_transaksi= $_GET['id_transaksi'];
  $query = mysqli_query($conn, "  SELECT *  FROM `tb_detail_resep_obat` inner join tb_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat inner join tb_transaksi_berobat on tb_transaksi_berobat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_detail_rm on tb_detail_rm.id_detail_rekam_medis=tb_detail_resep_obat.id_resep_obat where tb_transaksi_berobat.id_transaksi ='$id_transaksi' group by tb_detail_resep_obat.id_resep_obat");
  $data = mysqli_fetch_array($query);
  $id=$data['id_resep_obat'];

  $id_detail_resep=$data['id_detail_resep_obat'];

  // $query2 = mysqli_query($conn, " SELECT * FROM tb_pasien inner join tb_resep_obat on tb_pasien.id_pasien=tb_resep_obat.id_pasien inner join tb_pendaftaran on tb_pendaftaran.id_pasien=tb_pasien.id_pasien  where tb_resep_obat.id_resep_obat='$id'");
  // $b = mysqli_fetch_array($query2);
  // $jamkes = $b['jamkes'];

  ?>



  <form class=""  method="post" align="center">

    <table  align="center">
      <tr>
        <td rowspan="2">
          <img src="/pulautemiang/img/laporan/kab.png" alt="" width="80px">
        </td>
        <td align="center" width="700px">
          <h4>
          PEMERINTAH KABUPTEN TEBO <br>
                DINAS KESEHATAN <br>
              UPDT PUSKESMAS PULAU TEMIANG
          </h4>
        </td>
        <td rowspan="2">
          <img src="/pulautemiang/img/laporan/puskesmas.png" alt="" width="80px">
        </td>
      </tr>

      <tr>
        <td align="center" width="100%">
        <p>  Jln Padang Lamo Kelurahan Pulau Temiang, Kode Pos : 37254 <br>
          Email: pkmppltemiang123@gmail.com . Facebook : Pkmppltemiang
          PULAU TEMIANG</p>
        </td>
      </tr>

    </table>
  </form>

  <div class="title">
    <p>
      <b>Bukti Pembayaran :  # <?php echo $data['id_transaksi'];?>  </b> <br>
     <b>  Nama Pasien:<?php echo $b['nama'];?> </b> <br>
      No. resep :  <?php echo $b['id_resep_obat'];?>   <br>
      Masuk : <?php echo $b['tanggal'];?>
      <!-- <br> Dokter : -->
      <?php   ini_set('date.timezone', 'Asia/Jakarta'); ?>
      <br> Keluar : <?php echo date('Y-m-d H:i:s'); ?>
      <br>
      <?php
      $host = "localhost";
      $username = "root";
      $pass = "";
      $db = "db_temiang";

      $conn = mysqli_connect($host, $username, $pass, $db);
      $query = mysqli_query($conn, "SELECT tb_akun.id_akun,tb_petugas.nama  from tb_petugas inner join tb_akun on tb_petugas.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
      while ($a = mysqli_fetch_array($query)) {
        ?>
        Petugas :      <?php echo $a['nama'];?>
        <?php
      }?>
    </p>
  </div>

  <!-- <table width="100%" border="1">
    <tr>
      <td width="80%">
        <b>Deskripsi</b>
      </td>
      <td>
        <b>Sub Total</b>
      </td>
    </tr>

    <tr>
      <td>Biaya Obat</td>
      <td>Rp.<?php echo $data['subtotal']; ?></td>
    </tr>

    <tr>
      <td align="center">

        <h2>  Total</h2>
      </td>
      <td><?php
      // $periksa=$data['biaya_periksa'];
      $obat=$data['subtotal'];
      if ($jamkes == "BPJS") {
        ?>
        <h2 style="text-decoration:line-through"> Rp. <?php echo $data['subtotal']; ?></h2>
      <?php }else{?>
        <h2>Rp.<?php echo $data['subtotal']; ?></h2>
      <?php } ?></td>
    </tr>
  </table> -->

  <table  class="table table-striped " width="100%" border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
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
      $query = mysqli_query($conn, "Select * from tb_kategori_obat inner join tb_obat on tb_kategori_obat.id_kategori_obat=tb_obat.id_kategori_obat inner join tb_detail_resep_obat on tb_detail_resep_obat.id_obat=tb_obat.id_obat where tb_detail_resep_obat.id_resep_obat='$id_detail_resep'");
      while ($a = mysqli_fetch_array($query)) {
        $n=$n+1;
        ?>
        <tr>
          <td><?php echo "$n"?>.</td>
          <td><?php echo $a['nama_obat'];?></td>
          <td><?php echo $a['nama_kategori'];?></td>
          <td><?php echo $a['jumlah'];?> item</td>
          <td><?php echo $a['keterangan'];?></td>
        </tr>
      <?php } ?>
      <tr >
        <td colspan="3" align="center"><b>Total</b></td>
        <td>
          <b>  <?php echo $data['subtotal'];?> item</b>

        </td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <div id="legalcopy">
    <p class="legal"> Bawa resep obat ke bagian <b>apoteker</b></p>
  </div>

<div align="right">
  <div class="pull-right">
    <?php if ($jamkes == "BPJS") {?>
      <p class="">Gratis, Semua biaya ditanggung BPJS</p>
    <?php } ?>
  </div>
  <div id="legalcopy">
    <p class="legal"><strong>Terima Kasih</strong>  Semoga lekas sembuh, ambil obat pada ruang apoteker</p>
  </div>
</div>
  <br>


<?php } ?>
</html>

<script type="text/javascript">
  window.print();
</script>
