<div class="row">
  <center>
    <div class="col-lg-12">
        <h3 class="page-header" style="color: #3CB371">Listar Usuarios</h3>
    </div>
  </center>
    <!-- /.col-lg-12 -->
</div>
<!-- /.container-fluid -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-green" >
            <div class="panel-heading" stlyle="height: 70px; width: 100px">

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Tipo Documento</th>
                                <th>Número Documento</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Rol</th>
                                <th>Nombre Usuario</th>
                                <th>Email</th>
                                <th>Estado</th>
                                <th>Modificar</th>
                                <th>Cambiar Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cédula</td>
                                <td>121312343</td>
                                <td>Victor Hugo</td>
                                <td>Gómez Quintero</td>
                                <td>Administrador</td>
                                <td>vic123</td>
                                <td>victor23@gmail.com</td>
                                <td>Habilitado</td>
                                <td><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                         <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                           </button>
                                             <h4 class="modal-title" id="myModalLabel">Modificar usuario</h4>
                                         </div>
                                      <div class="modal-body">
                                        <form>
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label>Tipo Documento</label>
                                              <select class="form-control">
                                                <option>Cédula</option>
                                                  <option>Cédula extranjera</option>
                                                <option>Otra</option>
                                              </select>
                                           </div>

                                           <div class="col-md-3">
                                           </div>

                                       <div class="col-md-5">
                                         <label>Número Documento</label><br>
                                         <input type="text" class="form-control" id="ejemplo_password_2"
                                                value="121324324">
                                      </div>
                                    </div>
                                    <br>
                                     <div class="row">
                                       <div class="col-md-4">
                                         <label>Primer Nombre</label><br>
                                         <input type="text" class="form-control" id="ejemplo_password_2"
                                                value="Victor">
                                      </div>

                                      <div class="col-md-3">
                                      </div>

                                        <div class="col-md-5">
                                          <label>Segundo Nombre</label><br>
                                          <input type="text" class="form-control" id="ejemplo_password_2"
                                               value="Hugo">
                                      </div>
                                    </div>
                                    <br>
                                       <div class="row">
                                        <div class="col-md-4">
                                          <label>Primer Apellido</label><br>
                                          <input type="text" class="form-control" id="ejemplo_password_2"
                                               value="Gómez">
                                        </div>

                                        <div class="col-md-3">
                                        </div>

                                        <div class="col-md-5">
                                          <label>Segundo Apellido</label><br>
                                          <input type="text" class="form-control" id="ejemplo_password_2"
                                               value="Quintero">
                                        </div>
                                    </div>
                                    <br>
                                        <div class="row">
                                        <div class="col-md-4">
                                          <label>Rol</label><br>
                                          <select class="form-control">
                                            <option>Administrador</option>
                                            <option>Vendedor</option>
                                          </select>
                                        </div>

                                        <div class="col-md-3">
                                        </div>

                                        <div class="col-md-5">
                                          <label>Nombre Usuario</label><br>
                                          <input type="text" class="form-control" id="ejemplo_password_2"
                                               value="vic123">
                                        </div>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-xs-12 col-md-4">
                                          <label>Email</label><br>
                                          <input type="text" class="form-control" id="ejemplo_password_2"
                                               value="victor23@gmail.com.com">
                                        </div>

                                        <div class="col-md-8">
                                        </div>
                                      </div>
                                      <br>
                                    </form>
                                   <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"> CERRAR</span></button>
                                     <button type="button" class="btn btn-success btn-md active" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true" onclick="mensaje3()">  GUARDAR</span></button>
                                  </div>
                              </div>
                          </div>
                         </div></td>
                               <td><button type="button" class="btn btn-warning btn-circle btn-md" onclick="mensaje4()"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
                              </tr>

                              <tr class="odd gradeA">
                                  <td>Cédula</td>
                                  <td>98876554</td>
                                  <td>Juan Guillermo</td>
                                  <td>Gómez</td>
                                  <td>Vendedor</td>
                                  <td>guille2016</td>
                                  <td>gui@gmail.com</td>
                                  <td>Habilitado</td>
                                  <td><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <div class="modal fade" id="myForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                           <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                             </button>
                                               <h4 class="modal-title" id="myModalLabel">Modificar usuario</h4>
                                           </div>
                                        <div class="modal-body">
                                          <form>
                                            <div class="row">
                                              <div class="col-md-4">
                                                <label>Tipo Documento</label>
                                                <select class="form-control">
                                                  <option>Cédula</option>
                                                    <option>Cédula extranjera</option>
                                                  <option>Otra</option>
                                                </select>
                                             </div>

                                             <div class="col-md-3">
                                             </div>

                                         <div class="col-md-5">
                                           <label>Número Documento</label><br>
                                           <input type="text" class="form-control" id="ejemplo_password_2"
                                                  value="98876554">
                                        </div>
                                      </div>
                                      <br>
                                       <div class="row">
                                         <div class="col-md-4">
                                           <label>Primer Nombre</label><br>
                                           <input type="text" class="form-control" id="ejemplo_password_2"
                                                  value="Juan">
                                        </div>

                                        <div class="col-md-3">
                                        </div>

                                          <div class="col-md-5">
                                            <label>Segundo Nombre</label><br>
                                            <input type="text" class="form-control" id="ejemplo_password_2"
                                                 value="Guillermo">
                                        </div>
                                      </div>
                                      <br>
                                         <div class="row">
                                          <div class="col-md-4">
                                            <label>Primer Apellido</label><br>
                                            <input type="text" class="form-control" id="ejemplo_password_2"
                                                 value="Gómez">
                                          </div>

                                          <div class="col-md-3">
                                          </div>

                                          <div class="col-md-5">
                                            <label>Segundo Apellido</label><br>
                                            <input type="text" class="form-control" id="ejemplo_password_2"
                                                 value="">
                                          </div>
                                      </div>
                                      <br>
                                          <div class="row">
                                          <div class="col-md-4">
                                            <label>Rol</label><br>
                                            <select class="form-control">
                                              <option>Vendedor</option>
                                              <option>Administrador</option>
                                            </select>
                                          </div>

                                          <div class="col-md-3">
                                          </div>

                                          <div class="col-md-5">
                                            <label>Nombre Usuario</label><br>
                                            <input type="text" class="form-control" id="ejemplo_password_2"
                                                 value="guille2016">
                                          </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-xs-12 col-md-4">
                                            <label>Email</label><br>
                                            <input type="text" class="form-control" id="ejemplo_password_2"
                                                 value="gui@gmail.com.com">
                                          </div>

                                          <div class="col-md-8">
                                          </div>
                                        </div>
                                        <br>
                                      </form>
                                     <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"> CERRAR</span></button>
                                       <button type="button" class="btn btn-success btn-md active" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true" onclick="mensaje3()">  GUARDAR</span></button>
                                    </div>
                                </div>
                            </div>
                           </div></td>
                                 <td><button type="button" class="btn btn-warning btn-circle btn-md" onclick="mensaje4()"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
                                </tr>

                                <tr class="odd gradeA">
                                    <td>Cédula</td>
                                    <td>123456789</td>
                                    <td>Jorge Alejandro</td>
                                    <td>Tabares</td>
                                    <td>Vendedor</td>
                                    <td>alejo16</td>
                                    <td>george@gmail.com</td>
                                    <td>Habilitado</td>
                                    <td><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                      <div class="modal fade" id="myForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                         <div class="modal-dialog" role="document">
                                           <div class="modal-content">
                                             <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                               </button>
                                                 <h4 class="modal-title" id="myModalLabel">Modificar usuario</h4>
                                             </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <label>Tipo Documento</label>
                                                  <select class="form-control">
                                                    <option>Cédula</option>
                                                      <option>Cédula extranjera</option>
                                                    <option>Otra</option>
                                                  </select>
                                               </div>

                                               <div class="col-md-3">
                                               </div>

                                           <div class="col-md-5">
                                             <label>Número Documento</label><br>
                                             <input type="text" class="form-control" id="ejemplo_password_2"
                                                    value="123456789">
                                          </div>
                                        </div>
                                        <br>
                                         <div class="row">
                                           <div class="col-md-4">
                                             <label>Primer Nombre</label><br>
                                             <input type="text" class="form-control" id="ejemplo_password_2"
                                                    value="Jorge">
                                          </div>

                                          <div class="col-md-3">
                                          </div>

                                            <div class="col-md-5">
                                              <label>Segundo Nombre</label><br>
                                              <input type="text" class="form-control" id="ejemplo_password_2"
                                                   value="Alejandro">
                                          </div>
                                        </div>
                                        <br>
                                           <div class="row">
                                            <div class="col-md-4">
                                              <label>Primer Apellido</label><br>
                                              <input type="text" class="form-control" id="ejemplo_password_2"
                                                   value="Tabares">
                                            </div>

                                            <div class="col-md-3">
                                            </div>

                                            <div class="col-md-5">
                                              <label>Segundo Apellido</label><br>
                                              <input type="text" class="form-control" id="ejemplo_password_2"
                                                   value="">
                                            </div>
                                        </div>
                                        <br>
                                            <div class="row">
                                            <div class="col-md-4">
                                              <label>Rol</label><br>
                                              <select class="form-control">
                                                <option>Vendedor</option>
                                                <option>Administrador</option>
                                              </select>
                                            </div>

                                            <div class="col-md-3">
                                            </div>

                                            <div class="col-md-5">
                                              <label>Nombre Usuario</label><br>
                                              <input type="text" class="form-control" id="ejemplo_password_2"
                                                   value="alejo16">
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                            <div class="col-xs-12 col-md-4">
                                              <label>Email</label><br>
                                              <input type="text" class="form-control" id="ejemplo_password_2"
                                                   value="george@gmail.com.com">
                                            </div>

                                            <div class="col-md-8">
                                            </div>
                                          </div>
                                          <br>
                                        </form>
                                       <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"> CERRAR</span></button>
                                         <button type="button" class="btn btn-success btn-md active" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true" onclick="mensaje3()">  GUARDAR</span></button>
                                      </div>
                                  </div>
                              </div>
                             </div></td>
                                   <td><button type="button" class="btn btn-warning btn-circle btn-md" onclick="mensaje4()"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
                                  </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->

              </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
</div>
</div>
</div>
