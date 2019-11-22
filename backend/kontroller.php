<?php
include_once 'koneksi.php';

// # =============  Edit


if(isset($_POST['tambah_pendaftaran_dokter_foto'])){
    include_once 'insert/insert_dokter_foto.php';
}

if(isset($_POST['select'])){
    include_once '.. /admin/index.php?m=karyawan/edit/edit_pasien';
}

if(isset($_POST['edit_obat'])){
    include_once 'update/proses_obat.php';
}

if(isset($_POST['cetak_kartu'])){
    include_once '../admin/pages/md/cetak/print_kartu_berobat.php';
}

if(isset($_POST['delete_poli'])){
    include_once 'delete/delete_poli.php';
}

if(isset($_POST['delete_dokter'])){
    include_once 'delete/delete_dokter.php';
    // include_once 'delete/delete_akun.php';
}

if(isset($_POST['hapus_poli'])){
    include_once 'delete/delete_poli.php';
}

if(isset($_POST['tambah_poli'])){
    include_once 'insert/insert_pendaftaran.php';
}

if(isset($_POST['tambah_dokter_baru'])){
    include_once 'insert/insert_dokter.php';
    include_once 'insert/Insert_akun.php';
}

if(isset($_POST['cetak_kartu'])){
    include_once 'print/print_kartu_berobat.php';
}

if(isset($_POST['tambah_pendaftaran'])){
    include_once 'insert/insert_pasien.php';
    // include_once 'insert/Insert_akun.php';
}

if(isset($_POST['tambah_pendaftaran_petugas'])){
    include_once 'insert/insert_pasien_petugas.php';
    // include_once 'insert/Insert_akun.php';
}

if(isset($_POST['tambah_pendaftaran_karyawan'])){
    include_once 'insert/insert_karyawan.php';
    include_once 'insert/Insert_akun.php';
}

if(isset($_POST['tambah_pendaftaran_dokter'])){
    include_once 'insert/insert_dokter.php';
    include_once 'insert/Insert_akun.php';
}



if(isset($_POST['delete_pasien'])){
    include_once 'delete/delete_pasien.php';
}

if(isset($_POST['edit_dokter'])){
    include_once 'delete/update_dokter.php';
}

if(isset($_POST['edit_dt_rm'])){
    include_once 'delete/update_detail_rm.php';
}

if(isset($_POST['edit_akun'])){
    include_once 'delete/update_akun.php';
}


if(isset($_POST['edit_rm'])){
    include_once 'delete/update_rm.php';
}



if(isset($_POST['edit_karyawan'])){
    include_once 'delete/update_dokter.php';
}

if(isset($_POST['edit_obat'])){
    include_once 'delete/update_obat.php';
}

if(isset($_POST['edit_pasien'])){
    include_once 'delete/update_pasien.php';
}
if(isset($_POST['edit_pendaftaran'])){
    include_once 'delete/update_obat.php';
}

if(isset($_POST['edit_resep'])){
    include_once 'delete/update_resep_obat.php';
}

if(isset($_POST['edit_transaksi'])){
    include_once 'delete/update_transaksi.php';
}


// # =============  Hapus

if(isset($_POST['hapus_obat'])){
    include_once 'delete/delete_obat.php';
}

if(isset($_POST['hapus_akun'])){
    include_once 'delete/delete_akun.php';
}


if(isset($_POST['delete_akun'])){
    include_once 'delete/delete_akun.php';
}


if(isset($_POST['tambah_rm'])){
    include_once 'insert/insert_rm.php';
}

if(isset($_POST['tambah_pasien'])){
  include_once 'insert/insert_pasien.php';
}

if(isset($_POST['tambah_dokter'])){
  include_once 'insert/insert_dokter.php';
}

if(isset($_POST['tambah_akun'])){
  include_once 'insert/insert_akun.php';
}

if(isset($_POST['tambah_obat'])){
    include_once 'insert/insert_obat.php';
}
if(isset($_POST['login'])){
    include_once 'process_login_level.php';
}

if(isset($_POST['logut'])){
    include_once 'process_logout.php';
}



 ?>
