<section>
  <div class="row">

    <div class="col-md-6">
    
             <div class="col-lg-12">
             <div class="box box-success">
              <div class="box-header with-border">
                     <h3 class="box-title">Lista de Encargados</h3>
                </div>

              <div class="col-lg-12">
                
               <div class="box-body no-padding">

                <table id="tblEncargados" class="table table-bordered table-hover">
                  <div class="col-lg-11">
                  <thead>
                    <tr>
                      <th style="width: 70%">Nombre</th>
                      <th style="width: 30%">Rut</th>
                      </tr>
                    </thead>

                    <tfoot>
                      <tr>
                      <th style="width: 70%">Nombre</th>
                      <th style="width: 30%">Rut</th>
                    </tr>
                    </tfoot>
                    </div> 
                  </table>

                 </div>
              </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
          <a href="javascript:void(0)" class="uppercase">Ver Todos los Encargados</a>
        </div>

    </div>

    <div class="col-md-3">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Encargado</h3>
            </div>
          <form action="<?=site_url()?>/Encargado/setEncargado" method="post">   
            <div class="box-body">
              <label>Nombre de Encargado</label>
              <div class="input-group">      
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" name="" placeholder="Nombre" required>
              </div>
              <br>

              <label>Rut del Encargado</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" name="rut" placeholder="Rut" required>
              </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
          </form>
     </div>
    </div>

    <div class="col-md-3">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Eliminar Encargado</h3>
            </div>
          <form action="<?=site_url()?>/Encargado/deleteEncargado" method="post">   
            <div class="box-body">
              <label>Seleccione Encargado</label>
              <select id="cboEncargados" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="cual_encargado" aria-hidden="true" required>
              <option> Seleccione un Encargado</option>
              </select>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Eliminar</button>
              </div>
          </form>
     </div>
    </div>


  </div>
</section>