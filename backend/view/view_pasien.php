<?php
include '/koneksi.php';

$id = $_GET['id'];

// $sql = mysqli_query($conn,"SELECT * FROM tb_user inner join tb_pasien on  tb_user.employees_nip = tb_employees.employees_nip  where tb_employees.employees_nip = '$id'");

$sql = mysqli_query($conn,"SELECT * FROM tb_pasien inner join tb_user on  tb_pasien.id_akun = tb_akun.id_akun  where tb_akun.id_akun = '$id'");

$row = mysqli_fetch_object($sql);
?>

<div id="id_pasien"><?php echo $row->id_pasien;?></div>
<div id="nik"><?php echo $row->nik;?></div>
<div id="nama"><?php echo $row->nama;?></div>
<div id="tgl_lahir"><?php echo $row->tgl_lahir;?></div>
<div id="jk"><?php echo $row->jk;?></div>
<div id="gol_darah"><?php echo $row->gol_darah;?></div>
<div id="agama"><?php echo $row->agama;?></div>
<div id="pekerjaan"><?php echo $row->pekerjaan;?></div>
<div id="alamat"><?php echo $row->alamat;?></div>
<div id="no_hp"><?php echo $row->no_hp;?></div>
<div id="id_akun"><?php echo $row->id_akun;?></div>

<div id="namaakun"><?php echo $row->namaakun;?></div>
<div id="katasandi"><?php echo $row->katasandi;?></div>
<div id="level"><?php echo $row->level;?></div>
<div id="pertanyaan"><?php echo $row->pertanyaan;?></div>
<div id="jawaban"><?php echo $row->jawaban;?></div>
