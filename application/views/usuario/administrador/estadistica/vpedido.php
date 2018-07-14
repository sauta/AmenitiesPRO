<section class="content">
<div class="col-xs-12">
         
  <div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Seleccion de Empresa</h3>
  </div>
  <form action="<?=site_url()?>/Factura/setUsuario" method="post">
    <div class="box-body">
     <div class="form-group">
              <select id="cboEmpresa4" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="cual_categoria" aria-hidden="true" required>
                  <option> Seleccione una Empresa</option>
              </select>
      </div>
    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Escoger</button>
    </div>
  </form>

    <div class="box-header with-border">
      <h3 class="box-title">Estadistica de Pedidos</h3>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-8">          
          <div class="chart">
            <canvas id="lineChart" style="height: 126px; width: 476px;" width="476" height="126"></canvas>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</section>