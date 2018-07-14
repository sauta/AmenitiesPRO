
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


<h2>Contacto</h2>
<form action="<?=base_url("RecoverPass/enviar")?>" method="post">
    Correo electronico: <br/>
    <input type="email" name="email" /><br/>
    Asunto: <br/>
    <input type="text" name="asunto" /><br/>
    Mensaje:<br/>
    <textarea name="mensaje"></textarea><br/>
    <input type="submit" name="submit" value="Enviar"/>
</form>
<?php
if($this->session->flashdata('envio')){
    echo $this->session->flashdata('envio');
}
?>
<!-- <form id="frmRestablecer" action="<?=site_url()?>/RecoverPass/recuperar" method="post">
  <div class="panel panel-default">
    <div class="panel-heading">Restaurar contraseña </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="email"> Escribe el email asociado a tu cuenta para recuperar tu contraseña </label>
        <input type="email" id="email" class="form-control" name="email" required>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Recuperar contraseña" >
      </div>
    </div>
  </div>
</form> -->
 
<div id="mensaje"></div>

 <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#frmRestablecer").submit(function(event){
          event.preventDefault();
          $.ajax({
            url:'validaremail.php',
            type:'post',
            dataType:'json',
            data:$("#frmRestablecer").serializeArray()
          }).done(function(respuesta){
            $("#mensaje").html(respuesta.mensaje);
            $("#email").val('');
          });
        });
      });
    </script>

    <!-- <form action="<?=site_url()?>/RecoverPass/recuperar" method="post">
      <div class="form-group has-feedback">

        <input type="text" name="email" class="form-control" placeholder="Correo Electronico" required>

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="row">

        <div class="col-xs-4 col-xs-offset-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
        </div>
       
      </div>
    </form> -->
    <a href="<?=base_url()?>">Volver</a><br>
  </div>
</div>
</body>
</html>