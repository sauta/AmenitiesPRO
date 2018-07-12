  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>AdminLTE-2.4.2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?=$nombre?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegacion</li>
        <li>
          <a href="<?=site_url()?>/Cliente/cpanel">
            <i class="fa fa-th"></i> <span>Panel <?=$this->session->userdata('s_permiso')?></span>
          </a>
        </li>
      <!---------------------- Opciones cliente ------------------------>
      <?php  if($this->session->userdata('s_permiso') == 'Cliente') {?>

        <!-- Estadisticas -->
          <li class="treeview">
            <a href="<?=site_url()?>/Cliente/cpanel">
              <i class="fa fa-dashboard"></i>
              <span>Estadisticas</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?=site_url()?>/Cliente/consumo">
                  <i class="fa fa-circle-o"></i> Consumo</a>
                </li>
                <li>
                  <a href="<?=site_url()?>/Cliente/facturas">
                  <i class="fa fa-circle-o"></i> Facturas</a>
                </li>
                <li>
                  <a href="<?=site_url()?>/Cliente/estadisticas_de_pedidos">
                  <i class="fa fa-circle-o"></i>Pedidos</a>
                </li>
              </ul>
          </li>

        <!-- Mantendores -->
          <li class="treeview">
            <a href="<?=site_url()?>/Administrador/cpanel">
                <i class="fa fa-cart-arrow-down"></i> 
                <span>Creación y Solicitudes</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
              <ul class="treeview-menu" ">

                <li><a href="<?=site_url()?>/Cliente/encargadado">
                  <i class="fa fa-circle-o">
                </i>Nuevo Encargado</a></li>

                <li><a href="<?=site_url()?>/Cliente/encargar">
                  <i class="fa fa-circle-o">
                  </i>Crear un Pedido</a>
                </li>

                <li><a href="<?=site_url()?>/Cliente/productos">
                  <i class="fa fa-circle-o">
                  </i>Ver Productos</a>
                </li>

              </ul>
          </li>

        <!-- mensajeria -->
          <li class="treeview">
            <a href="<?=site_url()?>/Administrador/cpanel">
                <i class="fa  fa-truck"></i> 
                <span>Buzón de mensajes</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
              <ul class="treeview-menu" >

                <li><a href="<?=site_url()?>/Cliente/compra">
                  <i class="fa fa-circle-o">
                  </i>Compras realizadas</a>
                </li>

                <li><a href="<?=site_url()?>/Cliente/factura">
                  <i class="fa fa-circle-o">
                  </i>Facturaciones!</a>
                </li>

                <li><a href="<?=site_url()?>/Cliente/ofertas">
                  <i class="fa fa-circle-o">
                  </i>Ofertas!</a>
                </li>

                <li><a href="<?=site_url()?>/Cliente/pedidos">
                  <i class="fa fa-circle-o">
                  </i>Mis Pedidos!</a>
                </li>

              </ul>
          </li>

        <?php } ?>
        <!-------------------- Opciones administador ------------------->
        <?php if($this->session->userdata('s_permiso') == 'Administrador'){ ?>

          <!-- Estadisticas -->
            <li class="treeview">
              <a href="<?=site_url()?>/Administrador/cpanel">
                  <i class="fa fa-line-chart"></i> 
                  <span>Estadisticas</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
                <ul class="treeview-menu" >

                  <li><a href="<?=site_url()?>/Administrador/estadisticas_de_facturas">
                    <i class="fa fa-circle-o">
                    </i>Facturas</a></li>

                  <li><a href="<?=site_url()?>/Administrador/estadisticas_de_pedidos">
                    <i class="fa fa-circle-o">
                    </i>Pedidos</a>
                  </li>

                  <li><a href="<?=site_url()?>/Administrador/estadisticas_de_ventas">
                    <i class="fa fa-circle-o">
                    </i>Ventas</a>
                  </li>

                </ul>
            </li>

          <!-- Mantenedores -->
            <li class="treeview">
              <a href="<?=site_url()?>/Administrador/cpanel">
                  <i class="fa fa-wrench"></i> 
                  <span>Mantenedores</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
                <ul class="treeview-menu" >

                  <li><a href="<?=site_url()?>/Administrador/clientes">
                    <i class="fa fa-circle-o">
                    </i>Clientes</a></li>

                  <li><a href="<?=site_url()?>/Administrador/encargo">
                    <i class="fa fa-circle-o">
                    </i>Pedidos</a>
                  </li>

                  <li><a href="<?=site_url()?>/Administrador/facturas">
                    <i class="fa fa-circle-o">
                    </i>Facturas</a>
                  </li>

                  <li><a href="<?=site_url()?>/Administrador/categorias">
                    <i class="fa fa-circle-o">
                    </i>Categorias de Productos</a>
                  </li>

                  <li><a href="<?=site_url()?>/Administrador/productos">
                    <i class="fa fa-circle-o">
                    </i>Productos</a>
                  </li>

                </ul>
            </li>


          <!-- mensajeria -->
            <li class="treeview">
              <a href="<?=site_url()?>/Administrador/cpanel">
                  <i class="fa fa-envelope"></i> 
                  <span>Buzón de mensajes</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
                <ul class="treeview-menu">

                  <li><a href="<?=site_url()?>/Administrador/demanda">
                    <i class="fa fa-circle-o">
                    </i>Solicitudes de Pedidos</a>
                  </li>

                  <li><a href="<?=site_url()?>/Administrador/envio_de_ofertas">
                    <i class="fa fa-circle-o">
                    </i>Crear y Enviar Ofertas</a>
                  </li>

                  <li><a href="<?=site_url()?>/Administrador/reportes">
                    <i class="fa fa-circle-o">
                    </i>Reportes de Estadisticas</a>
                  </li>

                </ul>
            </li>

          <?php } ?>

      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>


    <!-- Contenido de la pagina vpanel -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Panel <?=$this->session->userdata('s_permiso')?>
        <small> <?=$this->uri->segment(2)?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?=$this->uri->segment(1)?></a></li>
        <li class="active">
        <?=$this->uri->segment(2)?>
        </li>
      </ol>
   </section>
 