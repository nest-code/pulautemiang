
  <?php

    // $host = "localhost";
    // $username = "root";
    // $pass = "";
    // $db = "db_temiang";
    // $conn = mysqli_connect($host, $username, $pass, $db);
    // include_once '../../backend/koneksi.php';
    $nik= $_POST['nik'];


    // $sql = mysqli_query($conn,"SELECT nama_akun FROM `tb_akun` where nama_akun='$nama_akun'") or die(mysqli_error($conn));
    $sql = mysqli_query($conn,"SELECT nik FROM `tb_pasien` where nik='$nik'") or die(mysqli_error($conn));
    $row = mysqli_num_rows($sql);

    // var_dump($row);
    // die();

    // echo '<script>alert("Berhasil menyimpan data.   echo "$nama_akun);</script>';
    // echo '<script>alert("Berhasil menyimpan data.   echo "$nama_akun";"); document.location="edit_pasien.php?id_pasien='.$id_pasien.'";</script>';


    // Kalau username sudah ada yang pakai
    if ($row > 0){
    echo '<script>alert("Maaf NIK sudah tersimpan pada database"); </script>';
    }
    // Kalau username valid, inputkan data ke tabel users
    else{


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


      // $query=mysqli_query($conn,"SELECT * FROM tb_pasien where order by nik desc limit 1");
      // $data = mysqli_fetch_array($query);
      $id=$_POST['nik'];
      $tanggal=date('Y-m-d');
      $user2=mysqli_query($conn,"insert into tb_rekam_medis (no_rm,nik,id_petugas,tgl_rekam,jamkes,no_jamkes) values('$no_rm','$id','$id_petugas','$tanggal','$jamkes','$no_jamkes')");

      // eksekusi query dengan mysqli

      if ($user) {
            echo '<script>alert("Berhasil menyimpan data."); document.location="/pulautemiang/pages/md/petugas/edit/edit_kajian_awal.php?nik='.$id.'";</script>';

      }else {
        // jika gagal
        ?>


        <script type="text/javascript">
        swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.", "error");
        </script>
        <?php
      }




    }


    ?>
