<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Puskesmas Pulau Temiang | Pelayanan</title>
  <link rel="shortcut icon" href="/pulautemiang/images/logos/logo.png">
  <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
  <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="/pulautemiang/assets/css/lib/helper.css" rel="stylesheet">
  <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
</head>


<?php
if(isset($_POST['submit'])){

  $jawab= $_POST['jawaban'];


  // var_dump($jawab);
  // die();
  $akuns= $_POST['id_akun'];

  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";
  $conn = mysqli_connect($host, $username, $pass, $db);

  $sql = mysqli_query($conn,"SELECT * FROM tb_akun where id_akun='$akuns'") or die(mysqli_error($conn));
  $datas = mysqli_fetch_array($sql);

  //
  // var_dump($datas);
  // die();

  // $akun=$data['id_akun'];

  $db_jawab=$datas['jawaban'];

  if($jawab == $db_jawab){
    $akun=$datas['id_akun'];

      header('Location: pwchange.php?id_akun='.$akun.'');
    // echo "dia adalah teman saya";
  }else{
    echo '<script>alert("Jawaban Pertanyaan Tidak Cocok, silahkan hubungi bagian admin puskesmas"); </script>';
  }


  // $row = mysqli_num_rows($sql);

}



?>
<body style="background-color:#343957"; >
  <?php
  // $host = "localhost";
  // $username = "root";
  // $pass = "";
  // $db = "db_temiang";
  // $conn = mysqli_connect($host, $username, $pass, $db);

  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";

  	$conn = mysqli_connect($host, $username, $pass, $db);

  $akun= $_GET['id_akun'];
  // $jakun=$akun;
  $query = mysqli_query($conn, "  SELECT * FROM tb_akun where id_akun= '$akun'");
  $data = mysqli_fetch_array($query);
  $jakun=$data['id_akun'];

  $tanya=$data['jawaban'];




  ?>







  <div class="unix-login">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="login-content">
            <div class="login-logo">
              <!-- <a href="index.html"><span>Focus</span></a> -->
            </div>
            <div class="login-form">
              <h4>Reset Kata sandi</h4>
              <!-- <h1><?php echo $dataa['nama_akun']; ?></h1> -->

              <!-- <form class="" action="reset.php?id_akun <?php echo $jakun  ?> " method="post"> -->
              <form action="reset.php?id_akun=<?php echo "$jakun"; ?>"  method="post">

                <input type="hidden" name="id_akun" value="<?php echo $data['id_akun']; ?>">
                <div class="form-group">
                  <label>Pertanyaan Keamanan</label>
                  <select class="form-control" name="pertanyaan" >
                    <option  value="1" <?php if($data['pertanyaan'] == '1'){ echo 'selected'; } ?> >Dimana Anda Dilahirkan ?</option>
                    <option  value="2" <?php if($data['pertanyaan'] == '2'){ echo 'selected'; } ?> >Siapa Nama Sahabat Waktu Anda Kecil ?</option>
                    <option  value="3" <?php if($data['pertanyaan'] == '3'){ echo 'selected'; } ?> >Berapa ukuran Sepatu Anda ?</option>
                    <option  value="4" <?php if($data['pertanyaan'] == '4'){ echo 'selected'; } ?> >Apa cita-cita Anda Sewaktu Kecil ?</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Jawaban Pertanyaan</label>
                  <input type="text" class="form-control" name="jawaban" placeholder="jawaban..">
                </div>

                <button type="submit" name="submit"  value="submit" class="btn btn-primary">Simpan</button>
                <!-- <button type="submit" class="btn btn-primary btn-flat m-b-15">Kirim</button> -->

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
