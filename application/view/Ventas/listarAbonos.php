<div class="row">
    <center>
      <div class="col-md-12">
          <h3 class="page-header" style="color: #3CB371">Listar Abonos de crédito</h3>
      </div>
    </center>
      
</div>
<div class="row">
  <div class="col-md-12">
   <div class="panel panel-green">
     <div class="panel-heading" stlyle="height: 70px; width: 100px">
     </div>
     <div class="panel-body">
       <div class="dataTable_wrapper">
        <div class="table-responsive">
         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
           <tr>
             <th>Cliente</th>
             <th>Identificación</th>
             <th>Fecha salida</th>
             <th>Código salida</th>
             <th>Total salida</th>
             <th>Total abonado</th>
             <th>Nro. abonos</th>
             <th>Crédito Pendiente</th>
             <th>Fecha de abono</th>
             <th>Código de abono</th>
             <th>Modificar abono</th>
             <th>Recibo de abono</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>Andrés Felipe Cano Gil</td>
             <td>7890654</td>
             <td>14/05/2016</td>
             <td>0001</td>
             <td>35000</td>
             <td>2000</td>
             <td>1</td>
             <td>33000</td>
             <td>20/05/2016</td>
             <td>0001</td>
             <td><center><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myModal">
                                                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></center>
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                     <span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">Modificar Abono</h4>
                   </div>
                   <div class="modal-body">
                     <form>
                        <div class="row">
                           <div class="col-md-4">
                             <label>Cliente:</label><br>
                             <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="Andrés Felipe Cano Gil" readonly>
                           </div>
                           <div class="col-md-3">
                           </div>
                           <div class="col-md-5">
                             <label>Identificación</label><br>
                             <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="7890654" readonly>
                           </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-4">
                            <label>Fecha salida</label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="12/04/2016" readonly>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-5">
                            <label>Código salida</label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0001" readonly>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-4">
                            <label>Total salida </label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="35000" readonly>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-5">
                            <label>Total abonado</label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0" readonly>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-4">
                            <label>Número de abonos</label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="1" readonly>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-5">
                            <label>Crédito pendiente</label><br>
                             <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="35000" readonly>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-4">
                            <label>Fecha abono</label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="19/04/2016" readonly>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-5">
                            <label>Código abono</label><br>
                             <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0001" readonly>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-4">
                            <label>Abono</label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="2000" readonly>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-xs-12 col-md-4">
                            <label>Crédito restante</label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="33000" readonly>
                          </div>
                        </div>
                        <br>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"> CERRAR</span></button>
                      <button type="button" class="btn btn-success btn-md active" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true" onclick="mensaje3()">  GUARDAR</span></button>
                   </div>
                   </div>
                 </div>
               </div>
            </td>
            <td>
              <a href="<?= URL ?>Ventas/reciboAbono"><center><button type="button" class="btn btn-info btn-circle btn-md" data-toggle="modal" data-target="#myModal5">
                                             <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></center></a>
            </td>
          </tr>
          <tr>
            <td>Andrés Felipe Cano Gil</td>
            <td>7890654</td>
            <td>14/05/2016</td>
            <td>0001</td>
            <td>35000</td>
            <td>5000</td>
            <td>2</td>
            <td>30000</td>
            <td>20/05/2016</td>
            <td>0002</td>
            <td><center><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myModal2">
                                                             <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></center>
              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modificar Abono</h4>
                  </div>
                  <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col-md-4">
                            <label>Cliente:</label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="Andrés Felipe Cano Gil" readonly>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-5">
                            <label>Identificación</label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="7890654" readonly>
                          </div>
                       </div>
                       <br>
                       <div class="row">
                         <div class="col-md-4">
                           <label>Fecha salida</label><br>
                           <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="12/04/2016" readonly>
                         </div>
                         <div class="col-md-3">
                         </div>
                         <div class="col-md-5">
                           <label>Código salida</label><br>
                           <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0001" readonly>
                         </div>
                       </div>
                       <br>
                       <div class="row">
                         <div class="col-md-4">
                           <label>Total salida </label><br>
                           <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="35000" readonly>
                         </div>
                         <div class="col-md-3">
                         </div>
                         <div class="col-md-5">
                           <label>Total abonado</label><br>
                           <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="2000" readonly>
                         </div>
                       </div>
                       <br>
                       <div class="row">
                         <div class="col-md-4">
                           <label>Número de abonos</label><br>
                           <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="2" readonly>
                         </div>
                         <div class="col-md-3">
                         </div>
                         <div class="col-md-5">
                           <label>Crédito pendiente</label><br>
                            <input type="text" class="form-control" id="ejemplo_password_2"value="33000">
                         </div>
                       </div>
                       <br>
                       <div class="row">
                         <div class="col-md-4">
                           <label>Fecha abono</label><br>
                           <input type="text" class="form-control" id="ejemplo_password_2"value="19/04/2016">
                         </div>
                         <div class="col-md-3">
                         </div>
                         <div class="col-md-5">
                           <label>Código abono</label><br>
                            <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0002" readonly>
                         </div>
                       </div>
                       <br>
                       <div class="row">
                         <div class="col-md-4">
                           <label>Abono</label><br>
                           <input type="text" class="form-control" id="ejemplo_password_2" value="$3000">
                         </div>
                         <div class="col-md-3">
                         </div>
                         <div class="col-xs-12 col-md-4">
                           <label>Crédito restante</label><br>
                           <input type="text" class="form-control" id="ejemplo_password_2" value="30000">
                         </div>
                       </div>
                       <br>
                     </form>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"> CERRAR</span></button>
                     <button type="button" class="btn btn-success btn-md active" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true" onclick="mensaje3()">  GUARDAR</span></button>
                  </div>
                 </div>
               </div>
             </div>
           </td>
           <td>
             <a href="<?= URL ?>Ventas/reciboAbono"><center><button type="button" class="btn btn-info btn-circle btn-md" data-toggle="modal" data-target="#myModal5">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></center></a>
           </td>
         </tr>
         <tr>
           <td>Sebastian Romero Zapata</td>
           <td>42452356</td>
           <td>17/05/2016</td>
           <td>0002</td>
           <td>20000</td>
           <td>3000</td>
           <td>1</td>
           <td>17000</td>
           <td>24/05/2016</td>
           <td>0003</td>
           <td><center><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myModal3">
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></center>
             <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title" id="myModalLabel">Modificar Abono</h4>
                 </div>
                 <div class="modal-body">
                   <form>
                       <div class="row">
                         <div class="col-md-4">
                           <label>Cliente:</label><br>
                           <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="Sebastian Romero Zapata" readonly>
                         </div>
                         <div class="col-md-3">
                         </div>
                         <div class="col-md-5">
                           <label>Identificación</label><br>
                           <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="42452356" readonly>
                         </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-4">
                          <label>Fecha salida</label><br>
                          <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="17/04/2016" readonly>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-5">
                          <label>Código salida</label><br>
                          <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0002" readonly>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-4">
                          <label>Total salida </label><br>
                          <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="20000" readonly>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-5">
                          <label>Total abonado</label><br>
                          <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0" readonly>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-4">
                          <label>Número de abonos</label><br>
                          <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="1" readonly>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-5">
                          <label>Crédito pendiente</label><br>
                          <input type="text" class="form-control" id="ejemplo_password_2"value="20000">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-4">
                          <label>Fecha abono</label><br>
                          <input type="text" class="form-control" id="ejemplo_password_2"value="24/04/2016">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-5">
                          <label>Código abono</label><br>
                           <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0003" readonly>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-4">
                          <label>Abono</label><br>
                          <input type="text" class="form-control" id="ejemplo_password_2" value="$3000">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-xs-12 col-md-4">
                          <label>Crédito restante</label><br>
                          <input type="text" class="form-control" id="ejemplo_password_2" value="4000">
                        </div>
                      </div>
                      <br>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"> CERRAR</span></button>
                    <button type="button" class="btn btn-success btn-md active" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true" onclick="mensaje3()">  GUARDAR</span></button>
                 </div>
                </div>
              </div>
            </div>
          </td>
          <td>
            <a href="<?= URL ?>Ventas/reciboAbono"><center><button type="button" class="btn btn-info btn-circle btn-md" data-toggle="modal" data-target="#myModal5">
                                           <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></center></a>
          </td>
        </tr>
        <tr>
          <td>Juan Carlos Pérez Arboleda</td>
          <td>33626346</td>
          <td>22/05/2016</td>
          <td>0003</td>
          <td>10000</td>
          <td>4000</td>
          <td>1</td>
          <td>6000</td>
          <td>29/05/2016</td>
          <td>0004</td>
          <td><center><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myModal4">
                                                           <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></center>
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Modificar Abono</h4>
                </div>
                <div class="modal-body">
                  <form>
                      <div class="row">
                        <div class="col-md-4">
                          <label>Cliente:</label><br>
                          <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="Juan Carlos Pérez Arboleda" readonly>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-5">
                          <label>Identificación</label><br>
                          <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="33626346" readonly>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                       <div class="col-md-4">
                         <label>Fecha salida</label><br>
                         <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="22/05/2016" readonly>
                       </div>
                       <div class="col-md-3">
                       </div>
                       <div class="col-md-5">
                         <label>Código salida</label><br>
                         <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0003" readonly>
                       </div>
                     </div>
                     <br>
                     <div class="row">
                       <div class="col-md-4">
                         <label>Total salida </label><br>
                         <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="10000" readonly>
                       </div>
                       <div class="col-md-3">
                       </div>
                       <div class="col-md-5">
                         <label>Total abonado</label><br>
                         <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0" readonly>
                       </div>
                     </div>
                     <br>
                     <div class="row">
                       <div class="col-md-4">
                         <label>Número de abonos</label><br>
                         <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="1" readonly>
                       </div>
                       <div class="col-md-3">
                       </div>
                       <div class="col-md-5">
                         <label>Crédito pendiente</label><br>
                          <input type="text" class="form-control" id="ejemplo_password_2"value="10000">
                       </div>
                     </div>
                     <br>
                     <div class="row">
                       <div class="col-md-4">
                         <label>Fecha abono</label><br>
                         <input type="text" class="form-control" id="ejemplo_password_2"value="29/05/2016">
                       </div>
                       <div class="col-md-3">
                       </div>
                       <div class="col-md-5">
                         <label>Código abono</label><br>
                          <input type="text" class="form-control" id="ejemplo_email_2" name="inputname" value="0001" readonly>
                       </div>
                     </div>
                     <br>
                     <div class="row">
                       <div class="col-md-4">
                         <label>Abono</label><br>
                         <input type="text" class="form-control" id="ejemplo_password_2" value="$4000">
                       </div>
                       <div class="col-md-3">
                       </div>
                       <div class="col-xs-12 col-md-4">
                         <label>Crédito restante</label><br>
                         <input type="text" class="form-control" id="ejemplo_password_2" value="6000">
                       </div>
                     </div>
                     <br>
                   </form>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"> CERRAR</span></button>
                   <button type="button" class="btn btn-success btn-md active" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true" onclick="mensaje3()">  GUARDAR</span></button>
                </div>
               </div>
             </div>
           </div>
          </td>
          <td>
           <a href="<?= URL ?>Ventas/reciboAbono"><center><button type="button" class="btn btn-info btn-circle btn-md" data-toggle="modal" data-target="#myModal5">
                                          <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></center></a>
          </td>
       </tr>
      <tbody>
     </table>
   </div>
  </div>
 </div>
</div>
</div>
</div>
