
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php if(isset($titulo)) echo $titulo?> | Recuperar por Email</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
  <body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url()?>"><b>Amenities </b> PRO</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Recuperar Clave Por Email</p>

    <form action="<?=site_url()?>/RecoverPass/recuperar" method="post">
      <div class="form-group has-feedback">

        <input type="text" name="email" class="form-control" placeholder="Correo Electronico" required>

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4 col-xs-offset-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="<?=base_url()?>">Volver</a><br>
  </div>
</div>
</body>
</html>