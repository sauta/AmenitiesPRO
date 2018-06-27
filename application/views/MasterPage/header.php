<body class="hold-transition 

<?php  if($this->session->userdata('s_permiso') == 'Administrador'){?>
skin-yellow 
<?php }else if($this->session->userdata('s_permiso') == 'Cliente'){ ?>
skin-blue 
<?php } ?>
 fixed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=site_url()?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Amenities PRO</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
         
          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>AdminLTE-2.4.2/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">
                <?php echo $this->session->userdata('s_nombreEncargado');?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>AdminLTE-2.4.2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?=$nombre?> - <?=$permiso?>
                  <small>Mi since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-left">

                  <?php  if($this->session->userdata('s_permiso') == 'Cliente') {?>
                    <!-- Manda a ver el perfil del cliente -->
                    <a href="<?=site_url()?>/Cliente/perfil" class="btn btn-default btn-flat">Perfil</a>

                  <?php }elseif($this->session->userdata('s_permiso') == 'Administrador'){ ?>
                    <!-- Manda a ver el perfil del admintrador -->
                    <a href="<?=site_url()?>/Administrador/perfil" class="btn btn-default btn-flat">Perfil</a>

                  <?php }?>

                </div>

                <div class="pull-right">
                  <!-- Se destrulle la session y se redirige a Login para loguearse nuevamente -->
                  <a href="<?=site_url()?>/Login/destruirSession" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>