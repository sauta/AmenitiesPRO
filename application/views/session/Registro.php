<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php if(isset($titulo)) echo $titulo?> | Registro</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url()?>"><b>Amenities </b> PRO</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Registro en Amenities PRO</p>

    <form name="form1"  action="<?=site_url()?>/Registro/registro" method="POST" >
        <!--***********************************Registro Usuario************************************-->
        <!--Nombre Usuario-->
         <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
                  <input id="nombreUsuario" name="txtNombreUsuario"  maxlength="40" type="text" class="form-control" placeholder="Nombre Usuario" maxlength="45" >
              </div>
         </div>
        <!--Clave-->
         <div class="form-group has-feedback">
          <input name="txtClave" id="clave"  type="password" class="form-control" placeholder="Clave"  min="6" max="13">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         </div>
        <!--Repetir Clave-->
          <div class="form-group has-feedback">
            <input name="txtRepClave" id="repClave" type="password" class="form-control" placeholder="Repetir Clave"  min="6" max="13">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
        <!--****************************************Encargado****************************************-->
         <div class="form-group">
            Encargado
         </div> 
        <!--Nombre Encargado-->
         <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-users"></i>
                  </div>
                  <input id="nombreEncargado"  name="txtNombreEncargado" maxlength="40" type="text" class="form-control" placeholder="Nombre Encargado"  >
              </div>
         </div>
        <!--Rut-->
         <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-briefcase"></i>
                  </div>
                        <input id="rutEncargado" data-mask name="txtRutEncargado"  maxlength="12" type="text" class="form-control" placeholder="RUT"  >
                  
              </div>
         </div>
        <!--****************************************Contacto*****************************************-->
         <div class="form-group">
            Contacto
         </div>  
        <!--Email-->
         <div class="form-group has-feedback">
                  <input id="email" name="txtEmail" type="email" class="form-control" placeholder="Email" >
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         </div>
        <!--Telefono-->
          <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input id="telefono" name="txtTelefono" type="text" class="form-control" placeholder="Telefono"  maxlength="19" data-inputmask="'mask': '9999 9999 9999 9999'"  >

              </div>
          </div>
        <!--Celular-->
         <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-mobile-phone"></i>
                  </div>
                  <input id="celular" name="txtCelular" type="text" class="form-control" placeholder="Celular" maxlength="15" data-mask  >
              </div>
         </div>
        <!--*****************************************Empresa*****************************************-->
         <div class="form-group">
            Empresa
         </div>
        <!--Nombre de fantasia-->
         <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil-square-o"></i>
                  </div>
                  <input id="nombreFantasia" name="txtNombreFantasia" type="text" class="form-control" placeholder="Nombre de Fantasia"   >
              </div>
         </div>
        <!--Rut Empresa-->
         <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-briefcase"></i>
                  </div>
                  <input id="rutEmpresa" onchange=""  data-mask name="txtRutEmpresa" type="text" class="form-control" 
                  placeholder="RUT Empresa"  
                  onchange="return function RutEmpresa(document.getElementById('#Rut2').value()" 
                  min=13>
              </div>
         </div>
        <!--Razon Social-->
         <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <input id="razonSocial" name="txtRazonSocial" type="text" class="form-control" placeholder="Razon social"  >
              </div>
         </div>
        <!--Descripción-->
         <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-comment"></i>
                  </div>
                  <textarea id="descripcion" maxlength="100" name="txtDescripcion" type="text" class="form-control" placeholder="Descripcion de la Empresa"></textarea>
                  
              </div>
         </div>
         <!--***********************************Dirección de facturación********************************--> 
          <div class="form-group">
            Dirección de faturación
         </div>
        <!--Region-->
         <div class="form-group">
                <label>Region</label>
                    <select id="cboRegion" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtRegion" aria-hidden="true" >
                    <option>Selecciones la Region</option>
                </select>
         </div>
        <!--Provincia-->
         <div class="form-group">
                <label>Provincia</label>
                <select id="cboProvincia" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtProvincia" aria-hidden="true">

                    <option> Selecciones la provincia</option>

                </select>
         </div>
        <!--Comuna-->
               <div class="form-group">
                      <label>Comuna</label>
                      <select id="cboComuna" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtComuna" aria-hidden="true">

                      <option>Selecciones la comuna</option>

                      </select>
               </div>
        <!--Direccion-->
         <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-briefcase"></i>
                  </div>
                  <input maxlength="45" id="direccion" name="txtDireccion" type="text" class="form-control" placeholder="Direccion">
              </div>
         </div>
             <div class="row">
          <div class="col-xs-8">
         <div class="checkbox icheck">
            <label>
              <input id="terminos" name="btnterminos" type="checkbox"> Estoy de acuerdo con los <a href="#">Terminos de uso</a>
            </label>
          </div>
         </div>
        <!-- /.col -->
         <div class="col-xs-4">
           <input name="registro" value="Registrarse" type="button" onClick="validacion()" class="btn btn-primary btn-block btn-flat">
           <!-- <button name="registro" onClick="validacion()" class="btn btn-primary btn-block btn-flat">Registrarse</button> -->
         </div>
        <!-- /.col -->
       </div>
    </form>
    <!-- /.social-auth-links -->
    <a href="<?=base_url()?>">Ya estoy registrado</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url()?>AdminLTE-2.4.2/plugins/iCheck/icheck.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
  <!-- delcaro la direccion del post de javaScrip-->
<script type="text/javascript">
        var site_url = '<?=site_url()?>/'; 
</script>
<script src="<?=base_url()?>js/clases/Direccion.js"></script> 
<script src="<?=base_url()?>js/validadores/validadores.js"></script> 
  <script>
    $('#rutEmpresa').mask('99.999.999-A');
    $('#rutEncargado').mask('99.999.999-A');
    $('#celular').mask('+56 9 99999999');
    $('#telefono').mask('02 999-9999');
    // $('#').mask('#AAAAAAAAAAA');
  </script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>