<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
		
      <div class="row">	
		<div class="col-lg-3">
      	</div>
      	<div class="col-lg-6">
      	   <div class="box box-success">
      		   <div class="box-header with-border">
                 <h3 class="box-title">Pedir</h3>
               </div>
              <form name="formulario_producto"  action="<?=site_url()?>/Pedido/guardarPedidos" method="POST">
	              <div class="box-body">
	              	 <table class="table table-striped">
	              	 	<tbody>
	              	 	<tr>
	              	 		<td>Producto</td>
	              	 		<td>Precio</td>
	              	 		<td>Cantidad</td>
	              	 		<td>Total</td>
	              	 	</tr>
	              	 	<tr>
	              	 		<td>
	              	 			<select>
	              	 				<option>Producto 1</option>
	              	 				<option>Producto 2</option>
	              	 				<option>Producto 3</option>
	              	 				<option>Producto 4</option>
	              	 				<option>Producto 4</option>
	              	 				<option>Producto 4</option>
	              	 				<option>Producto 4</option>
	              	 				<option>Producto 4</option>
	              	 				<option>Producto 4</option>
	              	 				<option>Producto 4</option>
	              	 				<option>Producto 4</option>
	              	 			</select>
	              	 		</td>
	              	 		<td>Precio</td>
	              	 		<td>Cantidad</td>
	              	 		<td>Total</td>
	              	 	</tr>
	              	 	<tr>
	              	 	</tr>
	              	 </tbody>
	              	 </table>	
		              <br>
		              Producto
		              <div class="form-group">
		                <label>Minimal</label>
		                <select class="form-control select2 select2-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
		                  <option selected="selected">Alabama</option>
		                  <option>Alaska</option>
		                  <option>California</option>
		                  <option>Delaware</option>
		                  <option>Tennessee</option>
		                  <option>Texas</option>
		                  <option>Washington</option>
		                </select>
		              </div>

		             <div class="form-group">
                  		<label for="exampleInputEmail1">Email address</label>
	                  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
               		 </div>
		              <input class="form-control" type="text" placeholder="Default input">
		              Cantidad
		              <input class="form-control" type="text" placeholder="Default input">
		              <br>
		              <input class="form-control" type="text" placeholder="Default input">
		              <br>
		              <input class="form-control" type="text" placeholder="Default input">
		              <br>
		              <input class="form-control" type="text" placeholder="Default input">
		              <br>
		              <input class="form-control" type="text" placeholder="Default input">
		              <br>
		              <input class="form-control" type="text" placeholder="Default input">
		              <br>
		              <input class="form-control input-sm" type="text" placeholder=".input-sm">
		              <br>
		              <div class="box-footer">
			                <button type="submit" class="btn btn-default col-lg-5">Cancel</button>
			                <button type="submit" class="btn btn-info pull-right col-lg-5">Enviar</button>
              		  </div>
	              </div>
              </form>
      		</div>
      	</div>
      	<div class="col-lg-3">
      	</div>
      </div>

      <div class="row">	
      	<div class="col-lg-12">
      	 <div class="box box-success">
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

					
	                <!-- <tr>
	                  <td>707425</td>
	                  <td>Shampoo Acondicionador 2 en 1 de 20ml. </td>
	                  <td>
	                      <div class="label label-warning pull-right" style="width: 100%">
	                      	<span class="">$1800</span>
	                      </div>
	                  </td>
	                  <td>
	                  	<img src="http://www.amenitieschile.cl/6558-large_default/shampoo-45ml-frutos-del-bosque.jpg" 
	                  	alt="Product Image" style="width: 100%">
	                  </td>
	                </tr> -->
      	</div>

      	<!--  -->

    </section>


