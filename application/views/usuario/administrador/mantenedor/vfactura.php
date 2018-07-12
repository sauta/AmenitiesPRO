<section class="content">
  <div class="row">
	 <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Factura</h3>
            </div>

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
  </div>
</section>

     <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">AdminLTE, Inc.
             </font></font><small class="pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha: 2/10/2014</font></font></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          De
          </font></font><address>
            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Admin, Inc.</font></font></strong><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
            795 Folsom Ave, Suite 600 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            San Francisco, CA 94107 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Teléfono: (804) 123-5432 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Correo electrónico: info@almasaeedstudio.com
          </font></font></address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          A
          </font></font><address>
            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">John Doe</font></font></strong><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
            795 Folsom Ave, Suite 600 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            San Francisco, CA 94107 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Teléfono: (555) 539-1037 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Correo electrónico: john.doe@example.com
          </font></font></address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Factura # 007612 </font></font></b><br>
          <br>
          <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID del pedido:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 4F3S8J </font></font><br>
          <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">pago de vencimiento:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 22/02/2014 </font></font><br>
          <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuenta:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 968-34567
        </font></font></div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cantidad</font></font></th>
              <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Producto</font></font></th>
              <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Número de serie</font></font></th>
              <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descripción</font></font></th>
              <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total parcial</font></font></th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Llamado del deber</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">455-981-221</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">El snort testosterona trofeo guantes de conducción guapo</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 64.50</font></font></td>
            </tr>
            <tr>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Need for Speed ​​IV</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">247-925-726</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wes Anderson umami biodiesel</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 50.00</font></font></td>
            </tr>
            <tr>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">DVD Monsters</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">735-845-642</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terry Richardson helvetica tousled maestro de arte callejero</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 10.70</font></font></td>
            </tr>
            <tr>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Grown Ups Blue Ray</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">422-568-642</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desplegable tipografía lomo</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 25.99</font></font></td>
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
          <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Métodos de pago:</font></font></p>
          <img src="../../dist/img/credit/visa.png" alt="Visa">
          <img src="../../dist/img/credit/mastercard.png" alt="Tarjeta MasterCard">
          <img src="../../dist/img/credit/american-express.png" alt="American Express">
          <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </font></font></p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cantidad a pagar 2/22/2014</font></font></p>

          <div class="table-responsive">
            <table class="table">
              <tbody><tr>
                <th style="width:50%"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total parcial:</font></font></th>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 250.30</font></font></td>
              </tr>
              <tr>
                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Impuesto (9.3%)</font></font></th>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 10.34</font></font></td>
              </tr>
              <tr>
                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envío:</font></font></th>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 5.80</font></font></td>
              </tr>
              <tr>
                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total:</font></font></th>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 265.24</font></font></td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Impresión</font></font></a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i>
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Enviar pago
          </font>
        </font>
      </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i><font style="vertical-align: inherit;"><
              font style="vertical-align: inherit;"> Generar PDF
          </font>
        </button>
        </div>
      </div>
    </section>
