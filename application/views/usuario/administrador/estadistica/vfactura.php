
    <!-- Main content -->
<section class="content">
<div class="col-xs-12">
         
  <div class="box">
	<div class="box-header with-border">
	  <h3 class="box-title">Selecciona a un Usuario</h3>
	</div>
	<form action="<?=site_url()?>/Factura/setUsuario" method="post">
	  <div class="box-body">
	   <div class="form-group">
	           <label>Seleccione al Usuario</label>
	            <select id="cboUsuarios" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="cual_categoria" aria-hidden="true" required>
	                <option> Seleccione un Usuario</option>
	            </select>
	    </div>
	  </div>
	  <div class="box-footer">
	    <button type="submit" class="btn btn-primary">Escoger</button>
	  </div>
	</form>

    <div class="box-header with-border">
      <h3 class="box-title">Estadisticas de Facturas de Clientes</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-8">
          <p class="text-center">
            <strong>Facturas de ??</strong>
          </p>

          <div class="chart">
            <!-- Sales Chart Canvas -->
            <canvas id="estadisticas" style="height: 126px; width: 476px;" width="476" height="126"></canvas>
          </div>
          <!-- /.chart-responsive -->
        </div>

        <div class="row">
        <!-- /.col -->
        <div class="col-sm-3 col-xs-6">
          <div class="description-block">
            <h5 class="description-header">??</h5>
            <span class="description-text">Facturas Realizadas</span>
          </div>
          <!-- /.description-block -->
        </div>
      </div>
        <!-- /.col -->
        <!-- <div class="col-md-4">

          <p class="text-center">
            <strong>Registro</strong>
          </p>

          <div class="progress-group">
            <span class="progress-text">Facturas Realizadas</span>
            <span class="progress-number"><b>??</b>/??</span>
            <div class="progress sm">
              <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
            </div>
          </div>
        </div> -->
        <!-- /.col -->
      </div>
    </div>
</div>
</section>