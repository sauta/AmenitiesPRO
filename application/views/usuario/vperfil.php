<section class="content">
  <div class="row">
    <div class="col-md-8">

          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#op1" data-toggle="tab">Hacerca de Mi</a></li>
              <li><a href="#op2" data-toggle="tab">Editar</a></li>
            </ul>
            <div class="tab-content">
                  
<!-- aca  -->   <div class="tab-pane fade show active" id="op1" role="tabpanel" aria-labelledby="home-tab">

                      <div class="box-header with-border">
                        <h3 class="box-title">Hacerca de Mi</h3>
                      </div>
                      <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Trabajo en: </strong>
                        <p class="text-muted">Empresa Hostelera</p>
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
                </div>


<!-- aca  -->   <div class="tab-pane fade" id="op2" role="tabpanel" aria-labelledby="profile-tab">
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
                        </ul>
                        <button type="submit" class="btn btn-primary"><b>Editar</b></button>
                    </div>
                  </form>
                </div> 
            </div>
          </div>
     </div>     
          <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                aaa
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                bbb
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                ccc
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
        </div>
      </div>
    </section>
