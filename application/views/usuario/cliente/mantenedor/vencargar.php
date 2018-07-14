<section class="content">
      <!-- Small boxes (Stat box) -->
   <div class="row">
    <div class="col-md-12">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#op1" data-toggle="tab">Orden de compra</a></li>
          <li><a href="#op2" data-toggle="tab">Elija sus productos</a></li>
        </ul>
        <div class="tab-content">
          <!-- Contenido  --> 
        <div class="active tab-pane" id="op1">
            <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                      <div class="col-xs-12">
                        <h2 class="page-header">
                          <i class="fa fa-globe"></i><?=$empresa?>
                          <small class="pull-right">Fecha: <?=strftime("%d/%m/%Y");?></small>
                        </h2>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                      <div class="col-sm-12 invoice-col">
                       <div class="row">
                          <div class="col-md-4">
                              <label class="col-md-12">SEÑOR(ES):</label>
                              <label class="col-md-12">DIRECCION:</label>
                              <label class="col-md-12">RUT:</label>
                          </div>
                          <div class="col-md-2">
                              <label class="col-md-12"><?=$nombre?></label>
                              <label class="col-md-12"><?php echo $direccion+' '+$comuna+' '+ $provincia+' '+$region ?></label>
                              <label class="col-md-12"><?=$rut?></label>
                          </div>
                          <div class="col-md-3">
                              <label class="col-md-12">A Sr(a):</label>
                              <label class="col-md-12">FONO:</label>
                              <label class="col-md-12">FAX:</label>
                          </div>
                          <div class="col-md-3">
                              <label class="col-md-12">Carlos Gaete</label>
                              <label class="col-md-12"><?=$telefono?></label>
                              <label class="col-md-12">N/N</label>
                          </div>
                            </div>  
                         </div>
                      <!-- /.col -->
                      <div class="col-sm-12 invoice-col">
                       <div class="row">
                      <div class="col-sm-4">
                          <label class="col-sm-12">NOMBRE ORDEN DE COMPRA:   </label>
                          <label class="col-sm-12">FECHA DE ENTREGA PRODCUTOS:</label>
                          <label class="col-sm-12">DIRECCION DE ENVIO FACTURA:</label>
                          <label class="col-sm-12">CONTACTO:</label>
                      </div>
                       <div class="col-sm-2">
                          <input type="text" name="nomre orden de compra">
                          <input type="date" name="fecha de entrega">
                          <label "><?php echo $direccion+' '+$comuna+' '+ $provincia+' '+$region ?></label>
                          <label class="col-sm-12"><?=$telefono?> <?=$celular?> <?=$email?></label>
                      </div>
                      <div class="col-sm-3">
                          <label class="col-sm-12">DIRECCION DE DESPACHO:</label>
                          <label class="col-sm-12">METODO DE DESPACHO:   </label>
                          <label class="col-sm-12">FOMRA DE PAGO:        </label>
                      </div>
                      <div class="col-sm-3">
                          <label class="col-sm-12"><?php echo $direccion+' '+$comuna+' '+ $provincia+' '+$region ?></label>
                          <label class="col-sm-12">N/N</label>
                          <label class="col-sm-12">transferencia</label>
                      </div>
                    </div>
                      </div>
                      <!-- /.col -->
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                      <div class="col-xs-12 table-responsive">
                        <table id="compra" class="table table-striped">
                          <thead>
                              <tr>
                                  <th >Codigo SKU</th>
                                  <th >Producto</th>
                                  <th >Cantidad/ Unidad</th>
                                  <th >Descripcion</th>
                                  <th >Precio unitario(CLP)</th>
                                  <th >Decuentos</th>
                                  <th >Cargos</th>
                                  <th >Subtotal</th>
                              </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <!-- accepted payments column -->
                      <div class="col-xs-6">
                        <p class="lead">Payment Methods:</p>
                        <img src="../../dist/img/credit/visa.png" alt="Visa">
                        <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                        <img src="../../dist/img/credit/american-express.png" alt="American Express">
                        <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
                          dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                        </p>
                      </div>
                      <!-- /.col -->
                      <div class="col-xs-6">
                        <p class="lead">Monto <?=strftime("%d/%m/%Y");?></p>

                        <div class="table-responsive">
                          <table class="table">
                            <tbody><tr>
                              <th style="width:50%">Subtotal:</th>
                              <td>$250.30</td>
                            </tr>
                            <tr>
                              <th>IVA (19%)</th>
                              <td>$10.34</td>
                            </tr>
                            <tr>
                              <th>Descuento:</th>
                              <td>$-1.210</td>
                            </tr>
                            <tr>
                              <th>Cargo:</th>
                              <td>$5.80</td>
                            </tr>
                            <tr>
                              <th>Total:</th>
                              <td>$265.24</td>
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
                        <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
                        <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Confirmar pedido
                        </button>
                        <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                          <i class="fa fa-download"></i> Generr PDF
                        </button>
                      </div>
                    </div>
                  </section>
      </div>
      <!-- fin de contenido de compra -->
          <!-- Contenido  --> 
      <div class="tab-pane" id="op2">
     <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Lista de productos</h3>
        </div>
        <div class="box-body">
        <div class="row">
          <div class="col-lg-12">    
            <table id="tblProductoEncargo" class="table table-bordered table-hover">
              <thead>
              <tr>
              <th></th>
              <th>Nombre</th>
              <th>Precio CLP</th>
              <th>Cantidad</th>
              <th></th>
              </tr>
              </thead>
              <tfoot>
              <tr>
              <th></th>
              <th>Nombre</th>
              <th>Precio CLP</th>
              <th>Cantidad</th>
              <th></th>
              </tr>
              </tfoot> 
              </table>
              <!-- col -->
            </div>
            <!-- row -->
          </div>
          <!-- box-body -->
         </div>
         <!-- box-success -->
         </div>
         <!--  -->
        </div>
        <!-- content -->
       </div>
       <!-- av-tabs-custom -->
      </div>
      <!--  col-md-10-->
    </div>
    <!-- row -->
  </div>
            <div class="row">
                <div class="col-lg-12">
                  <div class="box box-success">
                    <div class="box-header with-border">
                    <form class="form-horizontal col-md-12 center">
                    <!-- Form Name -->
                          <h3 style="text-align:center" class="">Orden de compra</h3>
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                     
                                </div>
                              <div class="panel-body">
                                  <div class="row col-md-12">
                                      <div class="checkbox">
                                          <label class="col-md-2 control-label">
                                              <input type="checkbox" id="acopio" value="" class=""><strong class="">Acopio</strong>
                                          </label>
                                      </div>
                                    </div>
                              </div>
                              </div>
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                   <h4 class=""><strong class="">Destino</strong></h4>
                                </div>
                              <div class="panel-body">
                                   
                                </div>
                                </div>     
                              </div>
                            
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                         <h4 class=""><strong class="">Detalle</strong></h4>

                                    </div>
                                    <div class="panel-body">
                                        <!-- Appended Input-->
                                        <div class="col-md-12">
                                            <table id="myTable" class="table table-bordered" data-toggle="table">
                                                <thead>
                                                    <tr>
                                                        <th class="">Codigo SKU</th>
                                                        <th class="">Producto</th>
                                                        <th class="">Cantidad/ Unidad</th>
                                                        <th class="">Descripcion</th>
                                                        <th class="">Precio unitario(CLP)</th>
                                                        <th class="">Decuentos</th>
                                                        <th class="">Cargos</th>
                                                        <th class="">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="trE1" style="">
                                                        <td><div class="">Arena</div></td>
                                                        <td><div align="right" class="">100</div></td>
                                                        <td><div align="right" class="">m<sup class="">3</sup></div></td>
                                                        <td><div align="right" class="">1.95</div></td>
                                                        <td><div align="right">195</div></td>
                                                        <td><div align="right">0</div></td>
                                                        <td><div align="right">0</div></td>
                                                        <td><div align="right">0</div></td>
                                                    </tr>
                                                    <tr id="trE1" style="">
                                                        <td><div class=""></div></td>
                                                        <td><div class=""></div></td>
                                                        <td><div class=""></div></td>
                                                        <td><div class=""></div></td>
                                                        <td><div class=""></div></td>
                                                        <td><div class=""></div></td>
                                                        <td><div class=""></div></td>
                                                        <td><div class=""></div></td>
                                                    </tr>
                                                    <tr id="trE1" style="background-color: whitesmoke;">
                                                        <td style="border:none !important" class="text-center"><i class="glyphicon glyphicon-plus" title="Agregar fila" style="cursor:pointer"></i></td>
                                                        <td style="border:none !important" colspan="7" class=""></td>
                                                    </tr>
                                                    <tr>
                                                      <td align="right" colspan="7"><strong>Total<strong></strong></strong></td>
                                                      <td align="right">195</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12 form-group">
                                             <h5 class="pull-right"><strong class="">Los precios no incluyen IVA.</strong></h5>

                                        </div>
                                       <div class="col-md-12 form-group">
                                             <h4 class="col-md-3"><strong class="">Comentario</strong></h4>

                                            <div class="col-md-12">
                                                <textarea class="form-control" style="height:60px" id="descripcion" name="descripcion">Describa aquí las observaciones necesarias / sector</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="button" class="btn btn-success col-md-5 margin">IMPRIMIR</button>
                                
                                <button type="button" class="btn btn-primary col-md-6 margin">ENVIAR</button>
                                
                            </form>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>


                  </div>
              <!-- /.tab-pane -->
                <!-- The timeline -->

</section>

<!-- <script type="text/javascript" src="js/clases/Pedidos.js"></script> -->

