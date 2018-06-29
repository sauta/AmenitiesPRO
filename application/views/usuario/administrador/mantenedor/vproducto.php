  <section class="content">
      <div class="row">  
        <!-- <div class="col-lg-12"> -->
         <!-- <div class="box box-success">
          <div class="box-header with-border">
                 <h3 class="box-title">Lista de productos</h3>
            </div>
           <div class="box-body no-padding">
                <table id="tblProducto" class="table table-bordered table-hover">
           <thead>
          <tr>
            <th style="width: 10px">SKU</th>
            <th style="width: 40%" >Nombre</th>
            <th style="width: 40%">Precio</th>
            <th style="width: 60px">Imagen</th>
            </tr>
          </thead>

          <tfoot>
            <tr>
            <th style="width: 10px">SKU</th>
            <th style="width: 40%" >Nombre</th>
            <th style="width: 40%">Precio</th>
            <th style="width: 60px">Imagen</th>
            </tr>
          </tfoot> 
                   </table>
            </div>

          </div> -->
      <!-- row -->
    <div class="col-md-6">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Producto</h3>
            </div>

            <form action="<?=site_url()?>/Producto/setProducto" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label>SKU del Producto</label>
                  <input type="text" class="form-control" name="sku" placeholder="Ingresar SKU...">
                </div>

                <div class="form-group">
                  <label>Nombre del Producto</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Ingresar Nombre...">
                </div>

                <div class="form-group">
                  <label>Descripcion del Producto</label>
                  <textarea class="form-control" name="descripcion" placeholder="Ingresar una Descripcion...">
                  </textarea>
                </div>

                <div class="form-group">
                  <label>Precio del Producto</label>
                  <input  type="number" step="0" class="form-control" name="precio" placeholder="$$$" min="10" max="100"/>
                </div>
               
               <div class="form-group">
                  <select id="sltCategoria" name="categoria" size="6" >
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

    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar Producto</h3>
            </div>
            <form action="<?=site_url()?>/Producto/updateProducto" method="post">
              <div class="box-body">

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
                        <option value="0" selected="selected">Seleccione Categoria...</option>
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

    <div class="col-md-6">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Insertar Categoria</h3>
            </div>
            <form action="<?=site_url()?>/Producto/setCategoria" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nombre de la Categoria</label>
                  <input type="text" class="form-control" name="sku" placeholder="Ingresar Nombre...">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
            </form>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Eliminar Categoria</h3>
            </div>
            <form action="<?=site_url()?>/Producto/deleteCategoria" method="post">
              <div class="box-body">
                <div class="form-group">
                  <select id="sltCategoria" name="categoria" size="6" >
                        <option value="0" selected="selected">Seleccione Categoria...</option>
                  </select>
               </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Eliminar</button>
              </div>
            </form>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Eliminar Producto</h3>
            </div>
            <form action="<?=site_url()?>/Producto/deleteProducto" method="post">
              <div class="box-body">
                <div class="form-group">
                  <select id="sltCategoria" name="categoria" size="6" >
                        <option value="0" selected="selected">Primero Seleccione Categoria...</option>
                  </select>
               </div>
               <div class="form-group">
                  <select id="sltProducto" name="categoria" size="6" >
                        <option value="0" selected="selected">SegundoSeleccione Producto...</option>
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
  <!-- row -->
</section>

