<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
		
      <div class="row">	
      	<div class="col-lg-12">
      	   <div class="box box-success">

             
            		  <div class="box-header with-border">
                       <h3 class="box-title">Crear Pedido</h3>
                 </div>
                  <form name="formulario_producto"  action="<?=site_url()?>/Pedido/guardarPedidos" method="POST">

                         <section class="invoice">
                            <!-- title row -->
                            <div class="row">
                              <!-- <div class="col-md-8">
                              <h2 class="page-header">
                                  <i class="fa fa-globe"></i> 
                                    <?=$empresa?>, Inc.
                              </h2>
                              </div>
                              <div class="col-md-4 ml-auto">
                                <small class="" >
                                RUT: <?=$rut?><br>
                                Factura Electronica<br>
                                N° <?=rand(100000,999999)?><br>
                                </small>
                              </div> -->
                              
                              <div class="col-md-8">
                                <h2 class="page-header">
                                <i class="fa fa-globe"></i> 
                                , Inc.
                                </h2>
                               </div>
                               <div class="col-md-4"> 
                                <h2 class="page-header">
                                <small>
                                RUT: <?=$rut?><br>
                                Factura Electronica<br>
                                N° <?=rand(100000,999999)?><br>
                                </small>
                                </h2>
                               </div>
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                              <div class="col-sm-4 invoice-col">
                                De: <strong><?=$nombre?></strong><br>
                                <address>
                                  Empresa: <?=$empresa?>.<br>
                                  RUT: <?=$rut?><br>
                                  Encargado: <?=$nombre?><br>
                                  Direccion: <?=$direccion?><br>
                                  <?=$provincia?>, <?=$comuna?>, <?=$region?><br>
                                  Celular: <?=$celular?><br>
                                  Telefono <?=$telefono?><br>
                                  Email: <?=$email?>
                                </address>
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-4 invoice-col">
                                Para: <strong>Carlos Gaete</strong><br>
                                <address>
                                Empresa: Amenities Chile<br>
                                Horus Promotion & Marketing Ltda.<br>
                                RUT: 77.893.570-8<br>
                                Dirección: Carretera General San Martín 6.000, Of. 207<br>
                                Colina, Santiago. Chile<br>
                                Telefono: +56 2 2 406 91 60 <br>
                                Email:  postulaciones@horuschile.com
                                  
                                </address>
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-4 invoice-col">
                                <b>Invoice #007612</b><br>
                                <br>
                                <b>Order ID:</b> 4F3S8J<br>
                                <b>Payment Due:</b> <?php echo strftime("%d/%m/%Y");?><br>
                                <b>Account:</b> 968-34567
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                              <div class="col-xs-12 table-responsive">
                                <table id="tablaFactura" class="table table-striped">
                                  <thead>
                                  <tr>
                                    <th>cantidad</th>
                                    <th>Producto</th>
                                    <th>Serial SKU#</th>
                                    <th>Descriptcion</th>
                                    <th>Subtotal</th>
                                  </tr>
                                  </thead>
                                </table>
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                              <!-- accepted payments column -->
                              <div class="col-xs-6">
                                <p class="lead">Medio de pago:</p>
                                <img src="<?=base_url()?>AdminLTE-2.4.2/dist/img/credit/visa.png" alt="Visa">
                                <img src="<?=base_url()?>AdminLTE-2.4.2/dist/img/credit/mastercard.png" alt="Mastercard">
                                <img src="<?=base_url()?>AdminLTE-2.4.2/dist/img/credit/american-express.png" alt="American Express">
                                <img src="<?=base_url()?>AdminLTE-2.4.2/dist/img/credit/paypal2.png" alt="Paypal">

                                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">


                                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
                                  dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                </p>
                              </div>
                              <!-- /.col -->
                              <div class="col-xs-6">
                                <p class="lead">Amount Due 2/22/2014</p>

                                <div class="table-responsive">
                                  <table class="table">
                                    <tbody><tr>
                                      <th style="width:50%">Subtotal:</th>
                                      <td id="Subtotal" >$250.30</td>
                                    </tr>
                                    <tr>
                                      <th>Impuesto (19%)</th>
                                      <td id="impuesto">$10.34</td>
                                    </tr>
                                    <tr>
                                      <th>Envio:</th>
                                      <td id="Envio">$5.80</td>
                                    </tr>
                                    <tr>
                                      <th>Total:</th>
                                      <td id="Total">$265.24</td>
                                    </tr>
                                  </tbody></table>
                                </div>
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                              <div class="col-xs-12">
                                <a href="<?=base_url()?>AdminLTE-2.4.2/pages/examples/invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
                                </button>
                                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                                  <i class="fa fa-download"></i> Generate PDF
                                </button>
                              </div>
                            </div>
                          </section>
                 </form>
      		 </div>
           </div>
        </div>

          <div class="row">
          <div class="col-lg-12">
                 <div class="box box-success">
                  <div class="box-header with-border">
                         <h3 class="box-title">Lista de productos</h3>
                    </div>
                   <div class="box-body">
                    <div class="row">
                      <div class="col-lg-6">
                    <table id="tblProductoEncargo" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Nombre</th>
                            <th>Precio CLP</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th></th>
                            <th>Nombre</th>
                            <th>Precio CLP</th>
                          </tr>
                        </tfoot> 
                    </table>
                  </div>
                  <!-- ./col -->
                  </div>
                  <!-- /.row -->
                  </div>
                    <!-- /.box-body -->
                 </div>
                  <!-- /.box -->
          </div>
      </div>
   				
	                <!-- <tr>
	                  <td>707425</td>
	                  <td>Shampoo Acondicionador 2 en 1 de 20ml. </td>
	                  <td>
	                      <div class="label label-warning pull-right" style="width: 100%">
	                      	<span class="">$1800</span>
	                      </div>
	                  </td>
	                  <td>
	                  	<img src="http://www.amenitieschile.cl/6558-large_default/shampoo-45ml-frutos-del-bosque.jpg" 
	                  	alt="Product Image" style="width: 100%">
	                  </td>
	                </tr> -->

      	<!--  -->

    </section>


