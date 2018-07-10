<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amenities PRO</title>
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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/dist/css/skins/_all-skins.min.css">
<!-- generico -->
  <?php if($this->uri->segment(2)=='cpanel'){?>

  <?php }?>
  <?php if($this->uri->segment(2)=='perfil'){?>

  <?php }?>
  <?php if($this->uri->segment(2)=='productos'){?>

    <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <?php } ?>

<!-- cliente -->

  <?php if($this->uri->segment(2)=='consumo'){?>


  <?php }?>

  <?php if($this->uri->segment(2)=='productos'){?>

    <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/bower_components/datatables.net-bs/css/jquery.dataTables.min.css">

  <?php }?>
  <?php if($this->uri->segment(2)=='estadisticas_de_pedidos'){?>
    
  <?php }?>
  <?php if($this->uri->segment(2)=='encargadado'){?>
    
  <?php }?>
  <?php if($this->uri->segment(2)=='encargar'){?>
    
  <?php }?>
  <?php if($this->uri->segment(2)=='compra'){?>


  <?php }?>
  <?php if($this->uri->segment(2)=='ofertas'){?>
    
  <?php }?>
  <?php if($this->uri->segment(2)=='pedidos'){?>
    
  <?php }?>
  <?php if($this->uri->segment(2)=='prueba'){?>
    
  <?php }?>

<!-- adminitrador -->


  <?php if($this->uri->segment(2)=='estadisticas_de_pedidos'){?>
    
  <?php }?>
  <?php if($this->uri->segment(2)=='estadisticas_de_ventas'){?>
    
  <?php }?>
  <?php if($this->uri->segment(2)=='clientes'){?>
   <!--    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
   <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/bower_components/datatables.net-bs/css/jquery.dataTables.min.css">
  <?php }?>
  <?php if($this->uri->segment(2)=='demanda'){?>
    
  <?php }?>
  <?php if($this->uri->segment(2)=='envio_de_ofertas'){?>
    
  <?php }?>
  <?php if($this->uri->segment(2)=='reportes'){?>
    
  <?php }?>
  <?php if($this->uri->segment(2)=='facturas'){?>
    <link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />

  <?php }?>
  <?php if($this->uri->segment(2)=='encargar'){?>
    
    <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <?php }?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>