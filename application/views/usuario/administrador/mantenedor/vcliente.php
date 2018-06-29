<section class="content">
      <!-- Small boxes (Stat box) -->
    <div class="row">
 
        <div class="col-lg-6">
          <div class="box box-info">
                      <div class="box-header with-border">
                          <h3 class="box-title">Registro de Cliente</h3>
                      </div>
              <div class="box-body">
              <form name="form1"  action="<?=site_url()?>/cregistro/registro" method="POST" onSubmit="javascript:return Rut(document.form1.txtRutEncargado.value);">
                  <!--***********************************Registro Usuario************************************-->
                  <!--Nombre Usuario-->
                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-user"></i>
                            </div>
                            <input id="Nombre1" name="txtNombreUsuario"  maxlength="40" type="text" class="form-control" placeholder="Nombre Usuario" maxlength="45" >
                        </div>
                   </div>
                  <!--Clave-->
                   <div class="form-group has-feedback">
                    <input name="txtClave" type="password" class="form-control" placeholder="Clave">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                   </div>
                  <!--Repetir Clave-->
                    <div class="form-group has-feedback">
                      <input name="txtRepClave" type="password" class="form-control" placeholder="Repetir Clave">
                      <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                  <!--****************************************Encargado****************************************-->
                   <div class="form-group">
                      Encargado
                   </div> 
                  <!--Nombre Encargado-->
                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-users"></i>
                            </div>
                            <input name="txtNombreEncargado" maxlength="40" type="text" class="form-control" placeholder="Nombre Encargado" >
                        </div>
                   </div>
                  <!--Rut-->
                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-briefcase"></i>
                            </div>
                                  <input id="Rut1" data-mask name="txtRutEncargado"  maxlength="12" type="text" class="form-control" placeholder="RUT" >
                            
                        </div>
                   </div>
                  <!--****************************************Contacto*****************************************-->
                   <div class="form-group">
                      Contacto
                   </div>  
                  <!--Email-->
                   <div class="form-group has-feedback">
                            <input id="email" name="txtEmail" type="email" class="form-control" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                   </div>
                  <!--Telefono-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-phone"></i>
                            </div>
                            <input id="Telefono" name="txtTelefono" type="text" class="form-control" placeholder="Telefono"  maxlength="19" data-inputmask="'mask': '9999 9999 9999 9999'">

                        </div>
                    </div>
                  <!--Celular-->
                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-mobile-phone"></i>
                            </div>
                            <input id="Celular" name="txtCelular" type="text" class="form-control" placeholder="Celular" maxlength="15" data-mask >
                        </div>
                   </div>
                  <!--*****************************************Empresa*****************************************-->
                   <div class="form-group">
                      Empresa
                   </div>
                  <!--Nombre de fantasia-->
                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-pencil-square-o"></i>
                            </div>
                            <input id="Nombre2" name="txtNombreFantasia" type="text" class="form-control" placeholder="Nombre de Fantasia" data-mask >
                        </div>
                   </div>
                  <!--Rut Empresa-->
                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-briefcase"></i>
                            </div>
                            <input id="Rut2" data-mask name="txtRutEmpresa" type="text" class="form-control" placeholder="RUT Empresa" >
                        </div>
                   </div>
                  <!--Razon Social-->
                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-pencil"></i>
                            </div>
                            <input name="txtRazonSocial" type="text" class="form-control" placeholder="Razon social" >
                        </div>
                   </div>
                  <!--Descripción-->
                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-comment"></i>
                            </div>
                            <input maxlength="100" name="txtDescripcion" type="text" class="form-control" placeholder="Descripcion de la Empresa" >
                        </div>
                   </div>
                   <!--***********************************Dirección de facturación********************************--> 
                    <div class="form-group">
                      Dirección de faturación
                   </div>
                  <!--Region-->
                   <div class="form-group">
                          <label>Region</label>
                              <select id="cboRegion" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtRegion" aria-hidden="true">
                              <option>Selecciones la Region</option>
                          </select>
                   </div>
                  <!--Provincia-->
                   <div class="form-group">
                          <label>Provincia</label>
                          <select id="cboProvincia" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtProvincia" aria-hidden="true">

                              <option> Selecciones la provincia</option>

                          </select>
                   </div>
                  <!--Comuna-->
                         <div class="form-group">
                                <label>Comuna</label>
                                <select id="cboComuna" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtComuna" aria-hidden="true">

                                <option>Selecciones la comuna</option>

                                </select>
                         </div>
                  <!--Direccion-->
                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-briefcase"></i>
                            </div>
                            <input maxlength="45" name="txtDireccion" type="text" class="form-control" placeholder="Direccion" >
                        </div>
                   </div>
                       <div class="row">
                    <div class="col-xs-8">
                   <!--  <div class="checkbox icheck">
                      <label>
                        <input name="" type="checkbox"> Estoy de acuerdo con los <a href="#">Terminos de uso</a>
                      </label>
                    </div> -->
                   </div>
                  <!-- /.col -->
                   <div class="col-xs-4">
                     <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                   </div>
                  <!-- /.col -->
                 </div>
              </form>
              <!-- /.social-auth-links -->
              </div>
                  <!-- /.box-body -->
          </div>
          <!-- fin del la información de la caja box-info -->
        </div>
        <!-- fin de  cold spam-->
        <div class="col-lg-6">
            <div class="box box-info">
                 <div class="box-header with-border">
                    <h3 class="box-title">Lista de clientes</h3>
                  </div>
                    <div class="box-body" >
                      <div class="form-group">
                       <label>Empresas</label>
                        <select id="cboEmpresas" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtEmpresa" aria-hidden="true">
                            <option> Seleccione la Empresa</option>
                        </select>
                      </div>
                      <div class="form-group">
                       <label>Cliente</label>
                        <select id="cboCliente" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtCliente" aria-hidden="true">
                            <option> Selecciones al Cliente</option>
                        </select>
                      </div>
                   </div>
            </div> 
        </div> 
    </div>
      <!-- fin del Row -->
</section>
      <!-- Fin del contenido -->
