<section class="content">
  <div class="row">  
     
     <div class="col-md-4">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Insertar Categoria</h3>
            </div>
            <form action="<?=site_url()?>/Categoria/setCategoria" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nombre de la Categoria</label>
                  <input type="text" class="form-control" name="sku" placeholder="Ingresar Nombre..." required>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
            </form>
      </div>
    </div>

    <div class="col-md-4">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Eliminar Categoria</h3>
            </div>
            <form action="<?=site_url()?>/Categoria/deleteCategoria" method="post">
              <div class="box-body">
               <div class="form-group">
                       <label>Seleccione Categoria</label>
                        <select id="cboCategoria" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="cual_categoria" aria-hidden="true" required>
                            <option> Seleccione la Categoria</option>
                        </select>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Eliminar</button>
              </div>
            </form>
      </div>
    </div>

   </div>
</section>