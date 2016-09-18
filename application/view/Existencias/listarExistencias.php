<div class="row">
  <center>
    <div class="col-lg-12">
        <h3 class="page-header" style="text-align:center; color: #3CB371">Listar Existencias</h3>
    </div>
  </center>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#5cb85c; color: white;">
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Código Del Producto</th>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th>Fecha De Ingreso</th>
                                <th>Costo Inicial</th>
                                <th>Costo Final</th>
                                <th>Cantidad</th>
                                <th>Dar De Baja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Pipas</td>
                                <td>Metalicas</td>
                                <td>05/10/2015</td>
                                <td>10.000 Unidad</td>
                                <td>11.000 Unidad</td>
                                <td>123</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Manillas</td>
                                <td>Lana jkl</td>
                                <td>04/12/2015</td>
                                <td>1.000 Unidad</td>
                                <td>2.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>026</td>
                                <td>Bate</td>
                                <td>Metalicos</td>
                                <td>02/08/2016</td>
                                <td>3.000 Unidad</td>
                                <td>5.000 Unidad</td>
                                <td>56</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Ruanas</td>
                                <td>Bogotanas</td>
                                <td>02/07/2015</td>
                                <td>10.000 Unidad</td>
                                <td>15.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Alebriges</td>
                                <td>Ponchos</td>
                                <td>01/16/2015</td>
                                <td>12.000 Unidad</td>
                                <td>16.000 Unidad</td>
                                <td>33</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Aroma Canela</td>
                                <td>Aromas</td>
                                <td>11/22/2016</td>
                                <td>4.000 Unidad</td>
                                <td>7.000 Unidad</td>
                                <td>150</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                             <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Pipas</td>
                                <td>Metalicas</td>
                                <td>05/10/2015</td>
                                <td>10.000 Unidad</td>
                                <td>11.000 Unidad</td>
                                <td>123</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Manillas</td>
                                <td>Lana jkl</td>
                                <td>04/12/2015</td>
                                <td>1.000 Unidad</td>
                                <td>2.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>026</td>
                                <td>Bate</td>
                                <td>Metalicos</td>
                                <td>02/08/2016</td>
                                <td>3.000 Unidad</td>
                                <td>5.000 Unidad</td>
                                <td>56</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Ruanas</td>
                                <td>Bogotanas</td>
                                <td>02/07/2015</td>
                                <td>10.000 Unidad</td>
                                <td>15.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Alebriges</td>
                                <td>Ponchos</td>
                                <td>01/16/2015</td>
                                <td>12.000 Unidad</td>
                                <td>16.000 Unidad</td>
                                <td>33</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Aroma Canela</td>
                                <td>Aromas</td>
                                <td>11/22/2016</td>
                                <td>4.000 Unidad</td>
                                <td>7.000 Unidad</td>
                                <td>150</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                             <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Pipas</td>
                                <td>Metalicas</td>
                                <td>05/10/2015</td>
                                <td>10.000 Unidad</td>
                                <td>11.000 Unidad</td>
                                <td>123</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Manillas</td>
                                <td>Lana jkl</td>
                                <td>04/12/2015</td>
                                <td>1.000 Unidad</td>
                                <td>2.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>026</td>
                                <td>Bate</td>
                                <td>Metalicos</td>
                                <td>02/08/2016</td>
                                <td>3.000 Unidad</td>
                                <td>5.000 Unidad</td>
                                <td>56</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Ruanas</td>
                                <td>Bogotanas</td>
                                <td>02/07/2015</td>
                                <td>10.000 Unidad</td>
                                <td>15.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Alebriges</td>
                                <td>Ponchos</td>
                                <td>01/16/2015</td>
                                <td>12.000 Unidad</td>
                                <td>16.000 Unidad</td>
                                <td>33</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Aroma Canela</td>
                                <td>Aromas</td>
                                <td>11/22/2016</td>
                                <td>4.000 Unidad</td>
                                <td>7.000 Unidad</td>
                                <td>150</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                             <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Pipas</td>
                                <td>Metalicas</td>
                                <td>05/10/2015</td>
                                <td>10.000 Unidad</td>
                                <td>11.000 Unidad</td>
                                <td>123</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Manillas</td>
                                <td>Lana jkl</td>
                                <td>04/12/2015</td>
                                <td>1.000 Unidad</td>
                                <td>2.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>026</td>
                                <td>Bate</td>
                                <td>Metalicos</td>
                                <td>02/08/2016</td>
                                <td>3.000 Unidad</td>
                                <td>5.000 Unidad</td>
                                <td>56</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Ruanas</td>
                                <td>Bogotanas</td>
                                <td>02/07/2015</td>
                                <td>10.000 Unidad</td>
                                <td>15.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Alebriges</td>
                                <td>Ponchos</td>
                                <td>01/16/2015</td>
                                <td>12.000 Unidad</td>
                                <td>16.000 Unidad</td>
                                <td>33</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Aroma Canela</td>
                                <td>Aromas</td>
                                <td>11/22/2016</td>
                                <td>4.000 Unidad</td>
                                <td>7.000 Unidad</td>
                                <td>150</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                             <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Pipas</td>
                                <td>Metalicas</td>
                                <td>05/10/2015</td>
                                <td>10.000 Unidad</td>
                                <td>11.000 Unidad</td>
                                <td>123</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Manillas</td>
                                <td>Lana jkl</td>
                                <td>04/12/2015</td>
                                <td>1.000 Unidad</td>
                                <td>2.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>026</td>
                                <td>Bate</td>
                                <td>Metalicos</td>
                                <td>02/08/2016</td>
                                <td>3.000 Unidad</td>
                                <td>5.000 Unidad</td>
                                <td>56</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Ruanas</td>
                                <td>Bogotanas</td>
                                <td>02/07/2015</td>
                                <td>10.000 Unidad</td>
                                <td>15.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Alebriges</td>
                                <td>Ponchos</td>
                                <td>01/16/2015</td>
                                <td>12.000 Unidad</td>
                                <td>16.000 Unidad</td>
                                <td>33</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Aroma Canela</td>
                                <td>Aromas</td>
                                <td>11/22/2016</td>
                                <td>4.000 Unidad</td>
                                <td>7.000 Unidad</td>
                                <td>150</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                             <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Pipas</td>
                                <td>Metalicas</td>
                                <td>05/10/2015</td>
                                <td>10.000 Unidad</td>
                                <td>11.000 Unidad</td>
                                <td>123</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Manillas</td>
                                <td>Lana jkl</td>
                                <td>04/12/2015</td>
                                <td>1.000 Unidad</td>
                                <td>2.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>026</td>
                                <td>Bate</td>
                                <td>Metalicos</td>
                                <td>02/08/2016</td>
                                <td>3.000 Unidad</td>
                                <td>5.000 Unidad</td>
                                <td>56</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Ruanas</td>
                                <td>Bogotanas</td>
                                <td>02/07/2015</td>
                                <td>10.000 Unidad</td>
                                <td>15.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Alebriges</td>
                                <td>Ponchos</td>
                                <td>01/16/2015</td>
                                <td>12.000 Unidad</td>
                                <td>16.000 Unidad</td>
                                <td>33</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Aroma Canela</td>
                                <td>Aromas</td>
                                <td>11/22/2016</td>
                                <td>4.000 Unidad</td>
                                <td>7.000 Unidad</td>
                                <td>150</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Pipas</td>
                                <td>Metalicas</td>
                                <td>05/10/2015</td>
                                <td>10.000 Unidad</td>
                                <td>11.000 Unidad</td>
                                <td>123</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Manillas</td>
                                <td>Lana jkl</td>
                                <td>04/12/2015</td>
                                <td>1.000 Unidad</td>
                                <td>2.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Ruanas</td>
                                <td>Bogotanas</td>
                                <td>02/07/2015</td>
                                <td>10.000 Unidad</td>
                                <td>15.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Alebriges</td>
                                <td>Ponchos</td>
                                <td>01/16/2015</td>
                                <td>12.000 Unidad</td>
                                <td>16.000 Unidad</td>
                                <td>33</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Aroma Canela</td>
                                <td>Aromas</td>
                                <td>11/22/2016</td>
                                <td>4.000 Unidad</td>
                                <td>7.000 Unidad</td>
                                <td>150</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                             <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Pipas</td>
                                <td>Metalicas</td>
                                <td>05/10/2015</td>
                                <td>10.000 Unidad</td>
                                <td>11.000 Unidad</td>
                                <td>123</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Manillas</td>
                                <td>Lana jkl</td>
                                <td>04/12/2015</td>
                                <td>1.000 Unidad</td>
                                <td>2.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Ruanas</td>
                                <td>Bogotanas</td>
                                <td>02/07/2015</td>
                                <td>10.000 Unidad</td>
                                <td>15.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Alebriges</td>
                                <td>Ponchos</td>
                                <td>01/16/2015</td>
                                <td>12.000 Unidad</td>
                                <td>16.000 Unidad</td>
                                <td>33</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Aroma Canela</td>
                                <td>Aromas</td>
                                <td>11/22/2016</td>
                                <td>4.000 Unidad</td>
                                <td>7.000 Unidad</td>
                                <td>150</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                             <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Pipas</td>
                                <td>Metalicas</td>
                                <td>05/10/2015</td>
                                <td>10.000 Unidad</td>
                                <td>11.000 Unidad</td>
                                <td>123</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Manillas</td>
                                <td>Lana jkl</td>
                                <td>04/12/2015</td>
                                <td>1.000 Unidad</td>
                                <td>2.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>026</td>
                                <td>Bate</td>
                                <td>Metalicos</td>
                                <td>02/08/2016</td>
                                <td>3.000 Unidad</td>
                                <td>5.000 Unidad</td>
                                <td>56</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Ruanas</td>
                                <td>Bogotanas</td>
                                <td>02/07/2015</td>
                                <td>10.000 Unidad</td>
                                <td>15.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Alebriges</td>
                                <td>Ponchos</td>
                                <td>01/16/2015</td>
                                <td>12.000 Unidad</td>
                                <td>16.000 Unidad</td>
                                <td>33</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Aroma Canela</td>
                                <td>Aromas</td>
                                <td>11/22/2016</td>
                                <td>4.000 Unidad</td>
                                <td>7.000 Unidad</td>
                                <td>150</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Ruanas</td>
                                <td>Bogotanas</td>
                                <td>02/07/2015</td>
                                <td>10.000 Unidad</td>
                                <td>15.000 Unidad</td>
                                <td>13</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Alebriges</td>
                                <td>Ponchos</td>
                                <td>01/16/2015</td>
                                <td>12.000 Unidad</td>
                                <td>16.000 Unidad</td>
                                <td>33</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>0256</td>
                                <td>Aroma Canela</td>
                                <td>Aromas</td>
                                <td>11/22/2016</td>
                                <td>4.000 Unidad</td>
                                <td>7.000 Unidad</td>
                                <td>150</td>
                                <td><a href="Vista-ControlDeExistencia3.html" class="btn btn-warning btn-lg active col-lg-push-3" role="button" style="padding: 0px" data-toggle="modal"   data-target="#myModal"><span class="glyphicon glyphicon-wrench"></span></a>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                <label style="margin-top: 0px;">Motivo De Baja</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>Averia</option>
                                                    <option>Robo</option>
                                                </select >
                                                <label style="margin-top: 0px;">Cantidad</label>
                                                <select class="form-control" sy style="width: 180px; margin-top: 0px;">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                                                  Guardar
                                                </button>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal">Guardar</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Bajas</h4>
                                            </div>
                                            <div class="modal-body">
                                                Existencias Actualizadas.!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
</div>
