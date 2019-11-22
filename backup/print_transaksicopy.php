<!DOCTYPE html>
<?php
session_start();
$id_akun=$_SESSION['id_akun'];
$namaakun=$_SESSION['namaakun'];
$level=$_SESSION['level'];
if(!isset($_SESSION['namaakun'])){
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
    <link rel="shortcut icon" href="/pulautemiang/img/logo.png">

    <!-- Styles -->
    <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">
  </head>
  <?php
  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";
  $conn = mysqli_connect($host, $username, $pass, $db);
  $id_transaksi= $_GET['id_transaksi'];
  $query = mysqli_query($conn, "  SELECT * , sum(tb_detail_resep_obat.jumlah*tb_obat.harga_satuan) as subtotal FROM `tb_detail_resep_obat` inner join tb_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat inner join tb_transaksi_berobat on tb_transaksi_berobat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_detail_rm on tb_detail_rm.id_detail_rekam_medis=tb_detail_resep_obat.id_resep_obat where tb_detail_resep_obat.id_resep_obat ='$id_transaksi' group by tb_detail_resep_obat.id_resep_obat ");
  $data = mysqli_fetch_array($query);
  $id=$data['id_resep_obat'];
  $query2 = mysqli_query($conn, " SELECT * FROM tb_pasien inner join tb_resep_obat on tb_pasien.id_pasien=tb_resep_obat.id_pasien inner join tb_pendaftaran on tb_pendaftaran.id_pasien=tb_pasien.id_pasien  where tb_resep_obat.id_resep_obat='$id'");
  $b = mysqli_fetch_array($query2);
  $jamkes = $b['jamkes'];
  ?>

  <body class="bg-primary">
    <div class="unix-invoice">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div id="invoice" class="effect2 m-t-120">
              <div id="invoice-top">
                <div class="invoice-logo"></div>
                <div class="invoice-info">
                  <h2>PUSKESMAS PULAU TEMIANG</h2>
                  <p> Jln Padang Lamo Kelurahan Pulau Temiang, Kode Pos : 37254 <br> Email: pkmppltemiang123@gmail.com | Facebook : Pkmppltemiang
                  </p>
                </div>
                <!--End Info-->
                <div class="title">
                  <h4>Bukti Pembayaran : </h4>
                  <h2 align="right"> # <?php echo $data['id_transaksi'];?> </h2>
                  <h3 align="right">  <?php echo $b['nama'];?> </h3>
                  <!-- <td><?php echo $b['nama'];?></td> -->
                  <p>
                   No. resep :  <?php echo $b['id_resep_obat'];?>   <br>
                    Masuk : <?php echo $b['tanggal'];?>
                    <!-- <br> Dokter : -->
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
                <!--End Title-->
              </div>
              <div id="invoice-bot">

                <div id="invoice-table">
                  <div class="table-responsive">
                    <table class="table">
                      <tr class="tabletitle">
                        <td class="table-item">
                          <h2>Deskripsi</h2>
                        </td>
                        <td class="Hours">

                        </td>
                        <td class="Rate">

                        </td>
                        <td class="subtotal">
                          <h2>Sub-total</h2>
                        </td>
                      </tr>

                      <tr class="service">
                        <td class="tableitem">
                          <p class="itemtext">Biaya : Periksa</p>
                        </td>
                        <td class="tableitem">

                        </td>
                        <td class="tableitem">

                        </td>
                        <td class="tableitem">
                          <p class="itemtext">Rp.<?php echo $data['biaya_periksa']; ?></p>
                        </td>
                      </tr>

                      <tr class="service">
                        <td class="tableitem">
                          <p class="itemtext">Biaya Obat</p>
                        </td>
                        <td class="tableitem">

                        </td>
                        <td class="tableitem">

                        </td>
                        <td class="tableitem">
                          <p class="itemtext">Rp.<?php echo $data['subtotal']; ?></p>
                        </td>
                      </tr>


                      <tr class="tabletitle">
                        <td></td>
                        <td></td>
                        <td class="Rate">
                          <h2>Total</h2>
                        </td>
                        <td class="payment">
                          <?php
                          $periksa=$data['biaya_periksa'];
                          $obat=$data['subtotal'];
                          if ($jamkes == "BPJS") {
                            ?>
                            <h2 style="text-decoration:line-through"> Rp. <?php echo $periksa + $obat; ?></h2>
                          <?php }else{?>
                            <h2> Rp. <?php echo $periksa + $obat; ?></h2>
                          <?php } ?>
                        </td>
                      </tr>

                    </table>
                  </div>
                </div>
                <!--End Table-->
                <div class="pull-right">
                  <?php if ($jamkes == "BPJS") {?>
                    <p class="">Gratis, Semua biaya ditanggung BPJS</p>
                  <?php } ?>
                </div>
                <div id="legalcopy">
                  <p class="legal"><strong>Terima Kasih</strong>  Semoga lekas sembuh, ambil obat pada ruang apoteker</p>

                </div>
              </div>
              <!--End InvoiceBot-->
            </div>
            <!--End Invoice-->
          </div>
        </div>
      </div>
    </div>

  </body>
<?php } ?>
</html>

<script type="text/javascript">
  window.print();
</script>
