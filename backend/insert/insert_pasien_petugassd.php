<?php
// include '../koneksi.php';
// $nik = $_POST['nik'];

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$gol_darah = $_POST['gol_darah'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$no_rm = $_POST['no_rm'];
$id_petugas = $_POST['id_petugas'];
$jamkes = $_POST['jamkes'];
$no_jamkes = $_POST['no_jamkes'];

$user =mysqli_query($conn,"insert into tb_pasien values
('$nik','$nama','$tgl_lahir','$jk','$gol_darah','$agama','$pekerjaan','$alamat','$no_hp')");


$query=mysqli_query($conn,"SELECT * FROM tb_pasien order by nik desc limit 1");
$data = mysqli_fetch_array($query);
$id=$data['nik'];
$tanggal=date('Y-m-d');
$user2=mysqli_query($conn,"insert into tb_rekam_medis (no_rm,nik,id_petugas,tgl_rekam,jamkes,no_jamkes) values('$no_rm','$id','$id_petugas','$tanggal','$jamkes','$no_jamkes')");

// eksekusi query dengan mysqli

if ($user) {
      echo '<script>alert("Berhasil menyimpan data."); document.location="/pulautemiang/index.php?m=petugas/petugas_pasien";</script>';
}else {
  // jika gagal
  ?>


  <script type="text/javascript">
  swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.", "error");
  </script>
  <?php
}

?>
