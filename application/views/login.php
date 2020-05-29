<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets//bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets//bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets//bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets//dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets//plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url()?>"><b></b>Puskesmas Pulau Temiang</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Masuk sistem</p>

    <form action="<?=base_url('auth/process')?>" method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Nama Akun">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Katasandi">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
        </div>
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="<?=base_url()?>assets//bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets//bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets//plugins/iCheck/icheck.min.js"></script>
</body>
</html>
