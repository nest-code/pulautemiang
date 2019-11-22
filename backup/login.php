<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Masuk Sistem</title>

  <!-- Styles -->
  <link href="../../admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="../../admin/assets/css/lib/themify-icons.css" rel="stylesheet">
  <link href="../../admin/assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="../../admin/assets/css/lib/helper.css" rel="stylesheet">
  <link href="../../admin/assets/css/style.css" rel="stylesheet">
</head>


<?php
include 'backend/kontroller.php';
?>
<body class="bg-primary">
  <div class="unix-login">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="login-content">
            <div class="login-logo">
              <a href="index.html"><span>Selamat Datang</span></a>
            </div>

            <div class="login-form">
              <h4>Masuk Sistem</h4>
              <div id="login">
                <form method="post" action="#">
                  <div class="form-group">
                    <label>Nama Akun</label>
                    <input type="text" class="form-control" placeholder="Nama Akun"  name="namaakun"  id="namaakun">
                  </div>
                  <div class="form-group">
                    <label>Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Kata Sandi"  name="katasandi" id="katasandi" >
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Ingat Saya
                    </label>
                    <label class="pull-right">
                      <a href="login_lupa.php">Lupa Kata Sandi?</a>
                    </label>

                  </div>

                  <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"  name="login" >Masuk</button>
                  <!-- <div class="register-link m-t-15 text-center">
                  <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>
