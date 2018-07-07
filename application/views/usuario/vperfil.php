<section class="content">

      <div class="row">
  <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-5">

          <!-- Profile Image -->
          <div class="box box-primary">
            <form action="<?=site_url()?>/Usuario/updatePerfil" method="post">
              <div class="box-body">

                  <img class="profile-user-img img-responsive img-circle"
                  src="http://iuniveerser.com.ve/sala/imagenes/no_foto.png" alt="User profile picture">

                  <h3 class="profile-username text-center"><?=$nombre?></h3>

                  <p class="text-muted text-center">Trabajador de <?=$empresa?></p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <label><b>Nombre de Cuenta: </b></label><a class="pull-right">
                        <input  type="text" class="form-control" name="nombre" required maxlength="20"/></a>
                    </li>
                    <li class="list-group-item">
                      <div class="form-group">
                        <label><b>Contraseña: </b></label><a class="pull-right">
                        <input  type="password" class="form-control" name="clave" required maxlength="15"/> </a>
                      </div>
                       
                    </li>
                    <li class="list-group-item">
                      <div class="form-group">
                        <label><b>Confirmar Nueva Contraseña: </b></label><a class="pull-right">
                        <input  type="password" class="form-control" name="repClave" required maxlength="15"/> </a>
                      </div>
                       
                    </li>
                    <!-- <li class="list-group-item">
                      <div class="form-group">
                        <label><b>Agregar Nueva Imagen</b></label>
                        <input type="file" id="InputFile">
                        <p class="help-block">Seleccione una Imagen en su equipo.</p>
                      </div>                     
                    </li> -->
                  </ul>
                    

                  <button type="submit" class="btn btn-primary"><b>Editar</b></button>
     
              </div>
            </form>
            <!-- /.box-body -->
          </div>

        </div>
        <!-- /.col -->
        <div class="col-md-7">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Hacerca de Mi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Trabajo en: </strong>

              <p class="text-muted">
                Empresa Hostelera
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Localizada En:</strong>

              <p class="text-muted">Santiago, Chile</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Habilidades</strong>

              <p>
                <span class="label label-danger">Vendedor</span>
                <span class="label label-success">Organizado</span>

              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Extras</strong>

              <p>El cielo no ha sido nunca el límite, lo somos nosotros. Es momento entonces de romper nuestros límites personales y superarnos para vivir una vida mejor..</p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <!-- /.row -->
    </section>

</div>
      <!-- /.row -->
</section>