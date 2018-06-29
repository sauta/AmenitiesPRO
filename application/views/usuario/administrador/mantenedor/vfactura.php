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