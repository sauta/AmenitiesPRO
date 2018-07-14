<section class="content">
      <!-- Small boxes (Stat box) -->

      <div class="row">
    <div class="col-md-12">
    <div class="box box-primary">

    <div class="box-header with-border">
      <div class="row justify-content-center"">
        <div class="col-md-4 col-md-offset-4">
          <h3>Registro en Amenities PRO</h3>    
        </div>
      </div>
    </div>
         <div class="box-body">

            <form name="form1"  action="<?=site_url()?>/Registro/registroAdmin" method="POST" >
                <!--***********************************Registro Usuario************************************-->
          
                <div class="row justify-content-center">
                  <div class="col-md-4 ">
                    <h3>Cuenta de Usuario</h3>
                   </div>
                 </div>
                <!--Nombre Usuario-->
                  <div class="row">
                  <div class="col-xs-4">
                 <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                          </div>
                          <input id="nombreUsuario" name="txtNombreUsuario"  maxlength="40" type="text" class="form-control" placeholder="Nombre Usuario" maxlength="45" >
                      </div>
                    </div>
                   </div>
                  
                <!--Clave-->
                <div class="col-xs-4">
                 <div class="form-group has-feedback">
                  <input name="txtClave" id="clave"  type="password" class="form-control" placeholder="Clave"  min="6" max="13">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                 </div>
               </div>
                <!--Repetir Clave-->
                <div class="col-xs-4">
                  <div class="form-group has-feedback">
                    <input name="txtRepClave" id="repClave" type="password" class="form-control" placeholder="Repetir Clave"  min="6" max="13">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                  </div>
                </div>
                  </div>
                <!--****************************************Encargado****************************************-->
                
                 <div class="form-group">
                    <h3>Encargado</h3>
                 </div> 
                <!--Nombre Encargado-->
                <div class="row">
                  <div class="col-xs-6">
                 <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-users"></i>
                          </div>
                          <input id="nombreEncargado"  name="txtNombreEncargado" maxlength="40" type="text" class="form-control" placeholder="Nombre Encargado"  >
                      </div>
                   </div>
                 </div>
                <!--Rut-->
                  <div class="col-xs-6">
                    <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-briefcase"></i>
                             </div>
                              <input id="rutEncargado" data-mask name="txtRutEncargado"  maxlength="12" type="text" class="form-control" placeholder="RUT"  >
                      </div>
                    </div>
                   </div>
                 </div>
                <!--****************************************Contacto*****************************************-->
                

                 <div class="form-group">
                  <h3>  Contacto </h3>
                 </div>  
                 <div class="row">

                <!--Email-->
                <div class="col-md-4">
                    <div class="form-group has-feedback">
                          <input id="email" name="txtEmail" type="email" class="form-control" placeholder="Email" >
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                 </div>
                </div>
                <!--Telefono-->
                <div class="col-md-4">
                  <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input id="telefono" name="txtTelefono" type="text" class="form-control" placeholder="Telefono"  maxlength="19" data-inputmask="'mask': '9999 9999 9999 9999'"  >

                      </div>
                  </div>
                </div>
                <!--Celular-->
                <div class="col-md-4">
                 <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-mobile-phone"></i>
                          </div>
                          <input id="celular" name="txtCelular" type="text" class="form-control" placeholder="Celular" maxlength="15" data-mask  >
                      </div>
                 </div>
               </div>
                </div>
                <!--*****************************************Empresa*****************************************-->
                 <div class="form-group">
                    <h3>Empresa</h3>
                 </div>
                 <div class="row">
                <!--Nombre de fantasia-->
                <div class="col-md-4">
                 <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-pencil-square-o"></i>
                          </div>
                          <input id="nombreFantasia" name="txtNombreFantasia" type="text" class="form-control" placeholder="Nombre de Fantasia"   >
                      </div>
                 </div>
                </div>
                <!--Rut Empresa-->
                <div class="col-md-4">
                 <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-briefcase"></i>
                          </div>
                          <input id="rutEmpresa" onchange="" data-mask name="txtRutEmpresa" type="text" class="form-control" 
                          placeholder="RUT Empresa"  
                          onchange="return function RutEmpresa(document.getElementById('#Rut2').value()" 
                          min=13>
                      </div>
                 </div>
               </div>
                <!--Razon Social-->
                <div class="col-md-4">
                 <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                          </div>
                          <input id="razonSocial" name="txtRazonSocial" type="text" class="form-control" placeholder="Razon social"  >
                      </div>
                 </div>
               </div>
                <!--Descripción-->
                <div class="col-md-8">
                 <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-comment"></i>
                          </div>
                          <textarea id="descripcion" maxlength="100" name="txtDescripcion" type="text" class="form-control" placeholder="Descripcion de la Empresa"></textarea>
                          
                      </div>
                 </div>
                 </div>
               </div>
                 <!--***********************************Dirección de facturación********************************--> 
                  <div class="form-group">
                    <h3>Dirección de faturación</h3>
                 </div>
                 <div class="row">
                <!--Region-->
                <div class="col-md-4">
                 <div class="form-group">
                        <label>Region</label>
                        <select id="cboRegion" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtRegion" aria-hidden="true" >
                            <option value="" >Selecciones la Region</option>
                        </select>
                  </div>
                  </div>
                <!--Provincia-->
                <div class="col-md-4">
                 <div class="form-group">
                        <label>Provincia</label>
                        <select id="cboProvincia" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtProvincia" aria-hidden="true">

                            <option value="" > Selecciones la provincia</option>

                        </select>
                   </div>
                  </div>
                <!--Comuna-->
                  <div class="col-md-4">
                       <div class="form-group">
                              <label>Comuna</label>
                              <select id="cboComuna" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="txtComuna" aria-hidden="true">

                              <option value="" >Selecciones la comuna</option>

                              </select>
                       </div>
                     </div>
                   </div>
                <!--Direccion-->
                  <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-briefcase"></i>
                          </div>
                          <input maxlength="45" id="direccion" name="txtDireccion" type="text" class="form-control" placeholder="Direccion">
                      </div>
                  </div>
                  <div class="row">
                  <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <label>
                      <input id="terminos" name="btnterminos" type="checkbox"> Estoy de acuerdo con los <a href="#">Terminos de uso</a>
                    </label>
                  </div>
                 </div>
                <!-- /.col -->
                 <div class="col-xs-4">
                    <input id="boton" name="registro" value="Registrarse" type="button" onclick="validacion();" class="btn btn-primary btn-block btn-flat"/>
                   </div>
                <!-- /.col -->
               </div>
            </form>
            </div>
         </div>
        <!-- /.login-box-body -->
       </div>
<!-- /.login-box -->
      </div>

    <div class="row">
      
      <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
              <h3 class="box-title">Tabla de Clientes</h3>
        </div>
        <div class="box-body">
         <table id="tblClientes" width="100%" class="display"  cellspacing="0">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Empresa</th>
                    <th>Contacto</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Usuario</th>
                    <th>Empresa</th>
                    <th>Contacto<w/th>
                    <th>Direccion</th>
                </tr>
            </tfoot>
        </table>
        </div>
      </div>
      </div>

    </div>
      <!-- fin del Row -->
</section>




      <!-- Fin del contenido -->
