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
    <title>Cetak Resep Obat Pasien</title>
  </head>
  <?php
  // $host = "localhost";
  // $username = "root";
  // $pass = "";
  // $db = "db_temiang";
  // $conn = mysqli_connect($host, $username, $pass, $db);

  include_once '../../../backend/koneksi.php';



  $id_detail_resep= $_GET['id_detail_resep_obat'];
  // $query = mysqli_query($conn, "  SELECT * , sum(tb_detail_resep_obat.jumlah*tb_obat.harga_satuan) as subtotal FROM `tb_detail_resep_obat` inner join tb_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat inner join tb_transaksi_berobat on tb_transaksi_berobat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_detail_rm on tb_detail_rm.id_detail_rekam_medis=tb_detail_resep_obat.id_resep_obat where tb_detail_resep_obat.id_resep_obat ='$id_transaksi' group by tb_detail_resep_obat.id_resep_obat ");
  $query = mysqli_query($conn, "SELECT  * , sum(tb_detail_resep_obat.jumlah) as subtotal  from tb_kategori_obat inner join tb_obat on tb_kategori_obat.id_kategori_obat=tb_obat.id_kategori_obat inner join tb_detail_resep_obat on tb_detail_resep_obat.id_obat=tb_obat.id_obat inner join tb_resep_obat on tb_resep_obat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_pasien on tb_resep_obat.nik=tb_pasien.nik inner join tb_rekam_medis on tb_pasien.nik=tb_rekam_medis.nik  where tb_detail_resep_obat.id_resep_obat='$id_detail_resep'");
  // $query = mysqli_query($conn, "SELECT * from tb_kategori_obat inner join tb_obat on tb_kategori_obat.id_kategori_obat=tb_obat.id_kategori_obat inner join tb_detail_resep_obat on tb_detail_resep_obat.id_obat=tb_obat.id_obat inner join tb_resep_obat on tb_resep_obat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_pasien on tb_resep_obat.id_pasien=tb_pasien.id_pasien  where tb_detail_resep_obat.id_resep_obat='$id_detail_resep'");
  // $query = mysqli_query($conn, " SELECT * from tb_kategori_obat inner join tb_obat on tb_kategori_obat.id_kategori_obat=tb_obat.id_kategori_obat inner join tb_detail_resep_obat on tb_detail_resep_obat.id_obat=tb_obat.id_obat  where tb_detail_resep_obat.id_resep_obat='$id_detail_resep'");
  $data = mysqli_fetch_array($query);
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
        <b>No. Resep :  # <?php echo $data['id_resep_obat'];?>  </b> <br>
        <!-- <b>  Nama Pasien:<?php echo $b['nama'];?> </b> <br> -->
        <b>Nama Pasien : <?php echo $data['nama'];?>  </b> | <?php echo $data['no_rm'];?>  </b> <br>
        <!-- <b>Nama Poli : <?php echo $data['nama'];?>  </b> | <?php echo $data['no_rm'];?>  </b> <br> -->
        <?php   ini_set('date.timezone', 'Asia/Jakarta'); ?>
        <?php
        $host = "localhost";
        $username = "root";
        $pass = "";
        $db = "db_temiang";
        $conn = mysqli_connect($host, $username, $pass, $db);
        $query = mysqli_query($conn, "SELECT tb_akun.id_akun,tb_dokter.nama,tb_dokter.id_jenis_poli from tb_dokter inner join tb_akun on tb_dokter.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
        while ($a = mysqli_fetch_array($query)) {
          ?>
          Dokter Pemeriksa :      <?php echo $a['nama'];?> <br>
          Nama Poli :
          <?php if($a['id_jenis_poli'] == '1'){ echo 'Umum'; } ?>
          <?php if($a['id_jenis_poli'] == '2'){ echo 'KB'; } ?>
          <?php if($a['id_jenis_poli'] == '5'){ echo 'DOTS'; } ?>
          <?php if($a['id_jenis_poli'] == '6'){ echo 'GIgi'; } ?>
          <?php if($a['id_jenis_poli'] == '7'){ echo 'Anak'; } ?>
          <?php
        }?>
        <br>
        Waktu : <?php echo date('Y-m-d H:i:s'); ?><br>
      </p>
    </div>
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
  </div>
<?php } ?>
</html>

<script type="text/javascript">
window.print();
</script>
