<section class="content">
  <div class="row">  
     
    <div class="col-md-4">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Eliminar Producto</h3>
            </div>

            <form action="<?=site_url()?>/Producto/deleteProducto" method="post">
              <div class="box-body">

                <div class="form-group">
                       <label>Seleccione Categoria</label>
                        <select id="cboCategoria" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="cual_categoria" aria-hidden="true" required>
                            <option> Seleccione la Categoria</option>
                        </select>
                </div>

               <div class="form-group">
                       <label>Seleccione Producto</label>
                        <select id="cboProducto" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="cual_categoria" aria-hidden="true" required>
                            <option> Seleccione un Producto</option>
                        </select>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Eliminar</button>
              </div>
            </form>
      </div>
    </div>

    <div class="col-md-4">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar Producto</h3>
            </div>
            <form action="<?=site_url()?>/Producto/updateProducto" method="post">
              <div class="box-body">

                <div class="form-group">
                       <label>Cual Categoria Es</label>
                        <select id="cboCategoria2" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="cual_categoria" aria-hidden="true" required>
                            <option> Seleccione la Categoria</option>
                        </select>
                </div>


                <div class="form-group">
                  <select id="sltProducto" name="categoria" size="6" >
                        <option value="0" selected="selected">SegundoSeleccione Producto...</option>
                  </select>
               </div>


                <div class="form-group">
                  <label>Nuevo SKU del Producto</label>
                  <input type="text" class="form-control" name="sku" placeholder="Ingresar SKU...">
                </div>

                <div class="form-group">
                  <label>Nuevo Nombre del Producto</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Ingresar Nombre...">
                </div>

                <div class="form-group">
                  <label>Nueva Descripcion del Producto</label>
                  <textarea class="form-control" name="descripcion" placeholder="Ingresar una Descripcion..."></textarea>
                </div>

                <div class="form-group">
                  <label>Nuevo Precio del Producto</label>
                  <input  type="number" step="0" class="form-control" name="precio" placeholder="$$$" min="10" max="100"/>
                </div>
               
               <div class="form-group">
                  <select id="sltCategoria" name="categoria" size="6" >
                        <option value="0" selected="selected">Seleccione Nueva Categoria...</option>
                  </select>
               </div>

                <div class="form-group">
                  <label>Agregar Nueva Imagen</label>
                  <input type="file" id="InputFile">
                  <p class="help-block">Seleccione una Imagen en su equipo.</p>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </div>
            </form>
          </div>
    </div>
        
    <div class="col-md-4">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Producto</h3>
            </div>

            <form action="<?=site_url()?>/Producto/setProducto" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label>SKU del Producto</label>
                  <input type="text" class="form-control" name="sku" placeholder="Ingresar SKU..." required>
                </div>

                <div class="form-group">
                  <label>Nombre del Producto</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Ingresar Nombre..." required>
                </div>

                <div class="form-group">
                  <label>Descripcion del Producto</label>
                  <textarea class="form-control" name="descripcion" placeholder="Ingresar una Descripcion" required>
                  </textarea>
                </div>

                <div class="form-group">
                  <label>Precio del Producto</label>
                  <input  type="number" step="0" class="form-control" name="precio" placeholder="$$$" min="10" max="100" required/>
                </div>
               
               <div class="form-group">
                  <select id="sltCategoria2" name="categoria" size="6" >
                        <option value="0" selected="selected">Seleccione Categoria...</option>
                  </select>
               </div>

                <div class="form-group">
                  <label>Agregar Imagen</label>
                  <input type="file" id="InputFile" name="url_imagen">
                  <p class="help-block">Seleccione una Imagen en su equipo.</p>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
            </form>
          </div>
    </div>

<!-- Fijarse en los required por errores... -->   
  </div>
  <!-- row -->
</section>

