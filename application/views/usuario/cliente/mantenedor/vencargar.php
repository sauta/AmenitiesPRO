<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
		
      <div class="row">	
		  <div class="col-lg-12">
                 <div class="box box-success">
                  <div class="box-header with-border">
                         <h3 class="box-title">Lista de productos</h3>
                    </div>
                   <div class="box-body no-padding">
                <table id="tblProductoEncargo" class="table table-bordered table-hover">
                    <thead>
	                  	<tr>
	                  	  	<th></th>
		                    <th>Nombre</th>
		                    <th>Precio CLP</th>
                    	</tr>
                    </thead>
                    <tfoot>
	                    <tr>
	                    	<th></th>
		                    <th>Nombre</th>
		                    <th>Precio CLP</th>
	                    </tr>
                    </tfoot> 
                </table>
                  </div>
                    <!-- /.box-body -->
                 </div>
                  <!-- /.box -->
	      	</div>
      	<div class="col-lg-6">
      	   <div class="box box-success">
      		   <div class="box-header with-border">
                 <h3 class="box-title">Pedir mis prodcutos</h3>
               </div>
              <form name="formulario_producto"  action="<?=site_url()?>/Pedido/guardarPedidos" method="POST">




	           
              </form>
      		</div>
      	</div>
      	<div class="col-lg-1">
      	</div>
      </div>

    				
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


