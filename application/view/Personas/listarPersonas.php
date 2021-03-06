<div class="row">
    <center>
      <div class="col-lg-12">
          <h3 class="page-header" style="color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Usuarios/Empleados</h3>
      </div>
    </center>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-green" >
              <div class="panel-heading" stlyle="height: 70px; width: 100px">
              </div>
                <div class="panel-body">
                  <div class="dataTable_wrapper">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                          <thead>
                              <tr>
                                  <th>Identificación</th>
                                  <th>Nombres</th>
                                  <th>Apellidos</th>
                                  <th>Celular</th>
                                  <th>Dirección</th>
                                  <th>Tipo Empleado</th>
                                  <th>Estado</th>
                                  <th>Opciones</th>
                              </tr>
                          </thead>
                          <tbody>

                            <?php foreach ($listarE as $valor): ?>
                              <tr>
                                  <td><?= $valor['id_persona'] ?></td>
                                  <td><?=  $valor['nombres'] ?></td>
                                  <td><?=  $valor['apellidos'] ?></td>
                                  <td><?=  $valor['celular'] ?></td>
                                  <td><?=  $valor['direccion'] ?></td>
                                  <td><?=  $valor['Tbl_nombre_tipo_persona'] ?></td>
                                  <td><?php if($valor['estado'] == 1): ?>
                                          Habilitado
                                         <?php else:  ?>
                                          Inhabilitado
                                         <?php endif ?></td>
                                         <td>

                                    <?php if ($valor['estado']==1): ?>

                                      <a href="<?= URL. 'Personas/listarPersonasEmpleados/' . $valor['id_usuarios'] ?>/3">
                                       <button type="button" class="btn btn-primary btn-circle btn-md" onclick=""data-toggle="modal" data-target="#modal-detalles" title="Ver detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver detalles"></i></button>
                                       </a>


                                    <a href="<?= URL. 'Personas/listarPersonasEmpleados/' . $valor['id_usuarios'] ?>/1">
                                      <button type="button" class="btn btn-success btn-circle btn-md" onclick=""data-toggle="modal" data-target="#modal-actualizar" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar"></i></button>
                                    </a>

                                     <button type="button"  onclick="cambiarestado('<?= $valor['id_usuarios']?>')" class="btn btn-danger btn-circle btn-md" title="Cambiar estado"><span class="glyphicon glyphicon-refresh" aria-hidden="true" title="Cambiar estado"></span></button>

                                   <a href="<?= URL. 'Personas/modificarContrasenia/' . $valor['id_usuarios'] ?>/2">
                                        <button type="button" class="btn btn-warning btn-circle btn-md" data-toggle="modal" data-target="#modal-cambiar-contras" title="Cambiar contraseña"><i class="fa fa-key" aria-hidden="true" title="Cambiar contraseña"></i></button>
                                     </a>
                                    <?php else:  ?>
                                      <a href="<?= URL. 'Personas/listarPersonasEmpleados/' . $valor['id_usuarios'] ?>/3">
                                       <button type="button" class="btn btn-primary btn-circle btn-md" onclick=""data-toggle="modal" data-target="#modal-detalles" title="Ver detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver detalles"></i></button>
                                       </a>

                                         <button type="button"  onclick="cambiarestado('<?= $valor['id_usuarios']?>')" class="btn btn-danger btn-circle btn-md" title="Cambiar estado"><span class="glyphicon glyphicon-refresh" aria-hidden="true" title="Cambiar estado"></span></button>

                                   <?php endif ?>
                                </td>
                                </tr>
                                  <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
                  <div class="row">
                   <div class="col-sm-12">
                     <center>
                     <a href="<?= URL ?>Personas/generarpdfEmpleados" target="_blank">
                       <button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true">   Reporte PDF de Empledos</i></button>
                     </a>
                   </center>
                   </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>

  <?php if ($id!= "" && $tipo == 1): ?>

  <div class="modal fade" id="modal-actualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
               </button>
                 <center>
                   <h4 class="modal-title"  style="color: #3CB371" id="myModalLabel">Modificar Usuarios/Empleados</h4>
                 </center>
               </div>
               <form method="POST"  id="form-2" role="form" action="<?= URL ?>Personas/listarPersonasEmpleados/<?= $persona['id_usuarios'] ?>" data-parsley-validate="">
                <div class="modal-body">
                  <input type="hidden" name="idPersona" value="<?= $persona['id_persona'] ?>">

        <div class="row">
                <div class="col-md-6" class="form-group">
                    <label>Nombres</label><br>
                    <input type="text" class="form-control" name="txtnombre" id="ejemplo_password_2"
                    value="<?= $persona['nombres'] ?>" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" minlength="3" maxlength="30" data-parsley-required="true">
                  </div>

                    <div class="col-md-6">
                      <label>Apellidos</label><br>
                        <input type="text" class="form-control" id="fecha"
                           value="<?= $persona['apellidos'] ?>" name="txtapell" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" minlength="3" maxlength="30" onchange="(this)" data-parsley-required="true">
                    </div>

                    <div class="col-md-3">
                    </div>
          </div>
          <br>
          <div class="row">
                       <div class="col-md-6">
                         <label>Nombre Usuario</label><br>
                         <input type="text" class="form-control" id="ejemplo_password_2"
                                value="<?= $persona['nombre_usuario'] ?>" name="txtnombreusuario" maxlength="30" minlength="3" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9@#\-\_\\.\\ \/$]+" data-parsley-required="true">
                      </div>
                        <div class="col-md-6">
                          <label>Rol Usuario</label><br>
                          <select class="form-control" name="txtrol" data-parsley-required="true">
                              <!-- <option>Seleccione un rol</option> -->
                            <?php foreach($roles AS $rol): ?>
                              <option value="<?= $rol['id_rol'] ?>" <?= $persona['rol'] == $rol['id_rol'] ? 'selected="selected"' : '' ?>>
                                <?= $rol['nombre_rol']?>
                              </option>
                            <?php endforeach ?>
                          </select>
                        </div>
          </div>
          <br>
          <div class="row">
                            <div class="col-md-6">
                              <label>Celular</label><br>
                              <input type="text" class="form-control" id="ejemplo_password_2"
                                     value="<?= $persona['celular'] ?>" name="txtcel" maxlength="12" minlength="10" data-parsley-type="number" data-parsley-required="false">
                             </div>

                           <div class="col-md-6">
                             <label>Email</label><br>
                             <input type="email" class="form-control" id="ejemplo_password_2"
                             value="<?= $persona['email'] ?>" name="txtcorreo" ata-parsley-type="email" data-parsley-required="true">
                           </div>
          </div>
          <br>
          <div class="row">
                       <div class="col-md-6">
                         <label>Telefono</label><br>
                         <input type="text" class="form-control" id="ejemplo_password_2"
                                value="<?= $persona['telefono'] ?>" name="txttel" maxlength="10" minlength="7" data-parsley-type="number" data-parsley-required="false">
                        </div>
                        <div class="col-md-6">
                          <label>Direccion</label><br>
                            <input type="text" class="form-control" id="ejemplo_password_2"
                               value="<?= $persona['direccion'] ?>" name="txtdirecc" maxlength="22" minlength="3" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\*\?_~\\ \/$]+" ata-parsley-required="false">
                        </div>
          </div>
          <br>
          <div class="row">
                       <div class="col-md-6">
                         <label>Género</label>
                         <select class="form-control" name="txtgenero" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" data-parsley-required="true">
                         <option value="Masculino" <?= $persona['genero'] == 'Masculino'? 'selected="selected"' : '' ?> >Masculino</option>
                         <option value="Femenino" <?= $persona['genero'] == 'Femenino'? 'selected="selected"' : '' ?>>Femenino</option>
                       </select>
                        </div>

                        <div class="col-md-6">
                          <label>Tipo Empleado</label><br>
                          <select class="form-control" name="txtTipoEmpleado" id="Select-Empleado" data-parsley-type="alphanum" data-parsley-required="true">
                              <!-- <option>Seleccione un rol</option> -->
                            <?php foreach($TipoEmpleado AS $tipo): ?>
                              <option value="<?= $tipo['idTbl_tipo_persona'] ?>" <?= $persona['idTbl_tipo_persona'] == $tipo['idTbl_tipo_persona'] ? 'selected="selected"' : '' ?>>
                                <?= $tipo['Tbl_nombre_tipo_persona']?>
                              </option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                        <br>
                          <?php if ($persona['Tbl_TipoPersona_idTbl_TipoPersona'] == 1): ?>
                        <div class="row">
                        <div id="conFechaContrato" style="" class="col-md-6">
                            <label for="form-control">Fecha contrato</label>
                            <div class="input-group date" data-provide="datepicker" id="dataPicker">
                            <input type="text" class="form-control" value="<?= $persona['fecha_Contrato'] ?>" name="txtfechac" id="campoFechaContrato" placeholder="Fecha Contrato" data-parsley-required="false">
                            <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                          </div>
                          </div>
                        </div>
                          </div>
                           <?php endif; ?>

                          <?php if ($persona['Tbl_TipoPersona_idTbl_TipoPersona'] == 2): ?>
                            <div class="row">
                            <div id="conFechaContrato" style="" class="col-md-6" style="display: none">
                                <label for="" style="display: none" id="ftitulo">Fecha contrato</label>
                                <div class="input-group date" data-provide="datepicker" id="dataPicker" style="display: none">
                                <input type="text" class="form-control" value="" name="txtfechac" id="campoFechaContrato" data-parsley-required="false">
                                <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                              </div>
                              </div>
                            </div>
                              </div>
                          <?php endif; ?>
                        </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-secondary btn-md active" id="btnguardarP"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                           <button type="submit" name="btn-modificar" class="btn btn-success btn-md"><i class="fa fa-floppy-o" aria-hidden="true">   Modificar</i></button>

                         </div>
                       </form>
                    </div>
                  </div>
</div>
  <?php endif; ?>
<script type="text/javascript">
 $(document).ready(function(){
   $("#modal-actualizar").modal("show");

   $("#btnguardarP").click(function(){

     $("#form-2").parsley().validate();

   })
    });
</script>


  <?php if ($id!= "" && $tipo == 3): ?>
  <div class="modal fade" id="modal-detalles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
       <div class="modal-dialog" style="width: 80%" role="document">
         <div class="modal-content" style="width: 100%">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
                 </button>
                   <center>
                     <h4 class="modal-title"  style="color: #3CB371" id="myModalLabel">Detalles de <?php echo $persona['nombres'].' '.$persona['apellidos']?></h4>
                   </center>
                 </div>
                 <form method="POST" action="<?= URL ?>Personas/listarPersonasEmpleados/<?=  $valor['id_usuarios'] ?>">
                  <div class="modal-body">
                    <input type="hidden" name="idPersona" value="<?= $persona['id_persona'] ?>">
                    <div class="row">
                    <div class="col-md-12">
                      <div class="panel panel-green" >
                          <div class="panel-heading" stlyle="height: 70px; width: 100px">
                          </div>
                            <div class="panel-body">
                              <div class="dataTable_wrapper">
                                <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                          <th>Nombre Usuario</th>
                          <th>Rol usuario</th>
                          <th>Email</th>
                          <th>Género</th>
                        <?php if($persona['Tbl_TipoPersona_idTbl_TipoPersona'] == 1): ?>
                          <th>Fecha inicio contrato</th>
                          <th>Fecha Terminación contrato</th>
                        <?php endif; ?>
                          <th>Teléfono</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td><?=  $persona['nombre_usuario'] ?></td>
                            <td><?=  $persona['nombre_rol'] ?></td>
                            <td><?=  $persona['email'] ?></td>
                            <td><?=  $persona['genero'] ?></td>
                            <?php if($persona['Tbl_TipoPersona_idTbl_TipoPersona'] == 1): ?>
                              <td><?= $persona['fecha_Contrato'] ?></td>
                              <td><?= $persona['fecha_Terminacion_Contrato'] ?></td>
                           <?php endif; ?>
                            <td><?=  $persona['telefono'] ?></td>
                          </tr>
                        </tbody>
                      </table>
                   </div>
                 </div>
               </div>
            </div>
         </div>
      <hr>

     <div class="row">
       <div class="col-md-11">
  <button type="button" class="btn btn-secondary btn-md active pull-right"  data-dismiss="modal" style="float: center"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

  <?php endif; ?>
    <script type="text/javascript">
      $(document).ready(function(){
      $("#modal-detalles").modal("show");
    });
    </script>

  <?php if ($id != "" && $tipo == 2): ?>
  <form method="POST" id="form-3" role="form"  action="#" data-parsley-validate="">
  <div class="modal fade" id="modal-cambiar-contras" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
             </button>
               <center>
                 <h4 class="modal-title"  style="color: #3CB371" id="myModalLabel">Cambiar contraseña de <?= $persona['nombres'].' '.$persona['apellidos']?></h4>
               </center>
             </div>

              <div class="modal-body">
                <input type="hidden" name="idusuario" value="<?= $persona['id_usuarios'] ?>">

            <div class="row">
                  <div class="col-xs-12 col-md-6" id="conClave" >
                        <label for="inputPassword"  class="control-label" style="color: #3CB371">Nueva Contraseña</label>
                        <input type="password"  maxlength="12" minlength="3" name="txtnueva" class="form-control" id="campoClave" placeholder="Contraseña" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\*\?_~\\.\\()\/$]+" data-parsley-required="true">
                  </div>
                  <div class="col-xs-12 col-md-6" id="conConfirmar">
                        <label for="" style="color: #3CB371">Confirmar Contraseña</label>
                        <input type="password" maxlength=12 minlength="3" name="txtConfClave" data-parsley-equalto="#campoClave" class="form-control" id="campoConfirmar" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\*\?_~\\.\\()\/$]+" placeholder="Confirmar Contraseña" data-parsley-required="true">
                  </div>

                  <div class="col-md-3">
                  </div>
            </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                         <button type="submit" name="btn-modificar-clave" class="btn btn-success btn-md active"><i class="fa fa-floppy-o" aria-hidden="true">  Modificar</i></button>
                      </div>

                    </div>
                  </div>
                </div>
              </form>

  <script type="text/javascript">
    $(document).ready(function(){
    $("#modal-cambiar-contras").modal("show");

  });
  </script>

  <?php endif; ?>
  <script type="text/javascript">
  function cambiarestado(id){
swal({
  title: "Realmente desea cambiar el estado del usuario",
  type: "warning",
  confirmButton: "#3CB371",
  confirmButtonText: "btn-danger",
  cancelButtonText: "Cancelar",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Aceptar",
  closeOnConfirm: false,

},
function(isConfirm){
    if (isConfirm) {
      swal({
        title: "Estado cambiado.!",
        type: "success",
        confirmButton: "#3CB371",
        confirmButtonText: "Aceptar",
        // confirmButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        $.ajax({
          type:"POST",
          url:url+"Personas/cambiarEstado",
          data:{
          'id':id,
        },
        }).done(function(respuesta){
          if(respuesta == 1){
            window.location = url + "Personas/listarPersonasEmpleados";
          }else{
          sweetAlert("Error al cambiar el estado");
          }
        }).fail(function(){

        })

      });
    }
    });

}
  </script>

  <?php if ($persona['Tbl_TipoPersona_idTbl_TipoPersona'] == 1): ?>
  <script type="text/javascript">
  $(document).ready(function(){
  $("#Select-Empleado").select2();
  $("#Select-Empleado").change(function(){
   var tipo=$(this).val();
   if(tipo == 1){
     $("#conFechaContrato").slideDown();
       $("#dataPicker").slideDown();
     $("#campoFechaContrat").attr("required", 'true');

   }else if(tipo == 2){
     $("#conFechaContrato").slideUp();
     $("#dataPicker").slideUp();
     $("#campoFechaContrat").removeAttr("required");
   }
  });
  });
  </script>
  <?php endif; ?>

 <?php if ($persona['Tbl_TipoPersona_idTbl_TipoPersona'] == 2): ?>
  <script type="text/javascript">
  $(document).ready(function(){
  $("#Select-Empleado").select2();
  $("#Select-Empleado").change(function(){
   var tipo=$(this).val();
   if(tipo == 1){

     $("#ftitulo").slideDown();
     $("#conFechaContrato").slideDown();
      $("#dataPicker").slideDown();
     $("#campoFechaContrato").attr("required", 'true');

   }else if(tipo == 2){

     $("#ftitulo").slideUp();
     $("#conFechaContrato").slideUp();
     $("#dataPicker").slideUp();
     $("#campoFechaContrato").removeAttr("required");
   }
  });
  });
  </script>
<?php endif; ?>
