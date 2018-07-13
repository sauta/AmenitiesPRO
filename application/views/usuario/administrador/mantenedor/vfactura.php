<section class="content">
  <div class="row">
	 <div class="col-xs-12">
        <!-- <div class="box box-primary"> -->
                <!-- <div class="box-header with-border">
              <h3 class="box-title">Crear Factura</h3>
                      </div> -->
                               <!-- 
                          <form action="<?=site_url()?>/Factura/setFactura" method="post">
                            <div class="box-body">

                              <div class="form-group">
                                <label>Fecha de Factura</label>
                                <input type="text" class="form-control" name="fecha_factura" placeholder="Año/Mes/Dia"  maxlength="19" data-inputmask="'mask': 'Y-m-d'"  required>
                              </div>

                              <div class="form-group">
                                <label>Fecha de Facturacion</label>
                                <input type="text" class="form-control" name="fecha_facturacion" placeholder="Año/Mes/Dia"  maxlength="19" data-inputmask="'mask': 'Y-m-d'"  required>
                              </div>

                              <div class="form-group">
                                <label>Valor Neto</label>
                                <input  type="number" step="0" class="form-control" name="valor_neto" placeholder="Cantidad" min="0" max="10"/>
                              </div>

                              <div class="form-group">
                                <label>Empresa</label>
                                <input  type="text" class="form-control" name="empresa" placeholder="Empresa a Facturar"required/>
                              </div>            

                            </div>

                            <div class="box-footer">
                              <button type="submit" class="btn btn-primary">Crear</button>
                            </div>
                          </form>
                        </div>
                   </div>
                </div> -->

             <div class="box box-success">
                  <div class="box-header with-border">
                       <h3 class="box-title">Crear Factura</h3>
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
                                <img src="http://img.fenixzone.net/i/IKtsGba.png" style="width: 180px; height: 70px;">
                                <label>Sociedad Anonima.</label>
                                <small>Nuestro sitio web pone a su disposición todos los productos correspondientes a nuestra área de amenidades, los cuales se muestran públicamente con descripción, foto y precio.  
                                </small>
                                <br>
                                <small>FONO: +56982678755.</small>
                                <small>CORREO: amenitie@gmail.com</small>
                                </h2>
                               </div>
                               <div class="col-md-4"> 
                                <h2 class="page-header">
                                <small style="color:green;">
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
                                  "El acuse de recibo que se declara en ese acto, de acuerdo a lo dispuesto en la letra b) Art 4° y la letra c) del Art 5° de la ley 19.983, acreditada que la entrega de mercadería(s) o servicio(s) prestados(s) ha(n) sido recibido(s)" 
                                </p>
                              </div>
                              <!-- /.col -->
                              <div class="col-xs-6">
                                <p class="lead">Amount Due <?php echo strftime("%d/%m/%Y");?></p>

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
                                <a href="<?=base_url()?>AdminLTE-2.4.2/pages/examples/invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
                                <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
                                </button>
                                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                                  <i class="fa fa-download"></i> Generar PDF
                                </button>
                              </div>
                            </div>
                          </section>
                 </form>
           </div>

       </div>
     </div>
</section>