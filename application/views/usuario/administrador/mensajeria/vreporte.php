<section class="content">
  <div class="row"> 
<div class="col-md-8">
	<div class="box box-info">
	        <div class="box-header">
	          <i class="fa fa-envelope"></i>
	          <h3 class="box-title">Reporte</h3>
	        </div>
	        <div class="box-body">
	          <form action="<?=site_url()?>/Registro/setRegistro" method="post">

	            <div class="form-group">

	              <input type="text" class="form-control" name="asunto" placeholder="Asunto">
	            </div>
	            <div>
	              <textarea name="descripcion" placeholder="Descripcion"
	                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
	                        	
                   </textarea>
	            </div>
	          </form>
	        </div>
	        <div class="box-footer clearfix">
	          <button type="button" class="pull-right btn btn-default" id="enviar">Enviar
	            <i class="fa fa-arrow-circle-right"></i></button>
	        </div>
	      </div>
	  </div>
  </div>
  <!-- row -->
</section>