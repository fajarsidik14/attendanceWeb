
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/blue.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- icons -->
  <link rel="shortcut icon" href="<?=base_url()?>assets/dist/img/logo/logo.png" type="image/x-icon">
</head>
<body class="hold-transition login-page  " style="background-color:white">
<div class="login-box">
  <div class="login-logo">
    <img src="<?=site_url()?>assets/dist/img/logo/logo1.png" alt="logo">
  </div>
  <p class="login-box-msg"><b>Selamat Datang</b></p>
    <p class="login-box-msg">Silahkan masukan ID dan Password anda</p>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color:#e1f2f1">
    <form action="<?=site_url('auth/proccess')?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="ID Users" name="idUser"required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" requred>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xs-6 pull-right">
          <button type="submit" class="btn btn-primary btn-block" name="login">Log In</button>
        </div>
      </div>
    </form>
</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>