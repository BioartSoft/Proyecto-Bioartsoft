<div class="row">
  <center>
    <div class="col-lg-12">
        <h3 class="page-header" style="color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Clientes</h3>
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
                                <th>Tipo de Cliente</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($listarClientes as $valor): ?>
                            <tr>
                                <td><?= $valor['id_persona'] ?></td>
                                <td><?=  $valor['nombres'] ?></td>
                                <td><?=  $valor['apellidos'] ?></td>
                                <td><?=  $valor['Tbl_nombre_tipo_persona'] ?></td>
                                <td><?php if($valor['estado'] == 1): ?>
                                        Habilitado
                                       <?php else:  ?>
                                        Inhabilitado
                                       <?php endif ?></td>
                                       <td>

                                  <?php if ($valor['estado']==1): ?>

                                    <a href="<?= URL. 'Personas/listarPersonasClientes/' . $valor['id_persona'] ?>/3">
                                     <button type="button" class="btn btn-primary btn-circle btn-md" onclick=""data-toggle="modal" data-target="#modal-detalles" title="Ver detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver detalles"></i></button>
                                     </a>


                                  <a href="<?= URL. 'Personas/listarPersonasClientes/' . $valor['id_persona'] ?>/1">
                                    <button type="button" class="btn btn-success btn-circle btn-md" data-toggle="modal" data-target="#modal-actualizar" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar"></i></button>
                                  </a>

                                  <?php if($_SESSION['ROL'] == 1): ?>
                                   <button type="button"  onclick="cambiarestado('<?= $valor['id_persona']?>')" class="btn btn-danger btn-circle btn-md" title="Cambiar estado"><span class="glyphicon glyphicon-refresh" aria-hidden="true" title="Cambiar estado"></span></button>
                                 <?php endif; ?>
                                <?php else:  ?>
                                    <a href="<?= URL. 'Personas/listarPersonasClientes/' . $valor['id_persona'] ?>/3">
                                     <button type="button" class="btn btn-primary btn-circle btn-md" onclick=""data-toggle="modal" data-target="#modal-detalles" title="Ver detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver detalles"></i></button>
                                     </a>

                                       <button type="button"  onclick="cambiarestado('<?= $valor['id_persona']?>')" class="btn btn-danger btn-circle btn-md" title="Cambiar estado"><span class="glyphicon glyphicon-refresh" aria-hidden="true" title="Cambiar estado"></span></button>

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
                   <a href="<?= URL ?>Personas/generarpdfClientes" target="_blank">
                     <button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true">   Reporte PDF de Clientes</i></button>
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
                 <h4 class="modal-title"  style="color: #3CB371" id="myModalLabel">Modificar Clientes</h4>
               </center>
             </div>
             <form method="POST"  id="form-2" role="form" action="<?= URL ?>Personas/listarPersonasClientes/<?= $clientes['id_persona'] ?>" data-parsley-validate="">
              <div class="modal-body">
                <input type="hidden" name="idPersona" value="<?= $clientes['id_persona'] ?>">
                <div class="row">
                  <div class="col-md-6"  class="form-group">
                  <label>Nombres</label><br>
                  <input type="text" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" minlength="3" maxlength="30" class="form-control" name="txtnombre" id="ejemplo_password_2"
                  value="<?= $clientes['nombres'] ?>" data-parsley-required="true">
                </div>

                  <div class="col-md-6">
                    <label>Apellidos</label><br>
                      <input type="text" class="form-control" id="fecha" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" minlength="3" maxlength="30"
                         value="<?= $clientes['apellidos'] ?>" name="txtapell" onchange="(this)" data-parsley-required="true">
                  </div>

                  <div class="col-md-3">
                  </div>
        </div>
        <br>
        <div class="row">
                          <div class="col-md-6">
                            <label>Celular</label><br>
                            <input type="text" class="form-control" id="ejemplo_password_2" maxlength="12" minlength="10" data-parsley-type="number"
                                   value="<?= $clientes['celular'] ?>" name="txtcel" data-parsley-required="false">
                           </div>
                         <div class="col-md-6">
                           <label>Email</label><br>
                           <input type="email" class="form-control" id="ejemplo_password_2" data-parsley-type="email"
                           value="<?= $clientes['email'] ?>" name="txtcorreo" data-parsley-required="true">
                         </div>
        </div>
        <br>
        <div class="row">
                     <div class="col-md-6">
                       <label>Teléfono</label><br>
                       <input type="text" class="form-control" id="ejemplo_password_2" maxlength="10" minlength="7" data-parsley-type="number"
                              value="<?= $clientes['telefono'] ?>" name="txttel" data-parsley-required="false">
                      </div>
                      <div class="col-md-6">
                        <label>Dirección</label><br>
                          <input type="text" class="form-control" id="ejemplo_password_2" maxlength="22" minlength="3" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\*\?_~\\ \/$]+"
                             value="<?= $clientes['direccion'] ?>" name="txtdirecc" data-parsley-required="false">
                      </div>
        </div>
        <br>
        <div class="row">
                     <div class="col-md-6">
                       <label>Género</label>
                       <select class="form-control" name="txtgener" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" data-parsley-required="true">
                       <option value="Masculino" <?= $clientes['genero'] == 'Masculino'? 'selected="selected"' : '' ?> >Masculino</option>
                       <option value="Femenino" <?= $clientes['genero'] == 'Femenino'? 'selected="selected"' : '' ?>>Femenino</option>
                     </select>
                      </div>

                      <div class="col-md-6">
                        <label>Tipo de Cliente</label><br>
                        <select class="form-control" id="selectCliente" name="txtTipoCliente" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\*\?_~\\ \/$]+" data-parsley-required="true">
                          <?php foreach($TipoCliente AS $tipo): ?>
                            <option value="<?= $tipo['idTbl_tipo_persona'] ?>" <?= $clientes['idTbl_tipo_persona'] == $tipo['idTbl_tipo_persona'] ? 'selected="selected"' : '' ?>>
                              <?= $tipo['Tbl_nombre_tipo_persona']?>
                            </option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                      <br>

                      </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                         <button type="submit" name="btn-modificar-cliente" id="btnmodClientes"  class="btn btn-success btn-md"><i class="fa fa-floppy-o" aria-hidden="true">   Modificar</i></button>
                       </div>
                     </form>
                  </div>
                </div>
              </div>
<?php endif; ?>

<script type="text/javascript">
$(document).ready(function(){

 $("#modal-actualizar").modal("show");

$("#btnmodClientes").click(function(){

  $("#form-2").parsley().validate();

})

  });
 </script>


<?php if ($id!= "" && $tipo == 3): ?>
  <div class="modal fade" id="modal-detalles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog" style="width: 80%" role="document">
       <div class="modal-content" style="width: 100%">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
               </button>
                 <center>
                   <h4 class="modal-title"  style="color: #3CB371" id="myModalLabel">Detalles de <?php echo $clientes['nombres'].' '.$clientes['apellidos']?></h4>
                 </center>
               </div>
               <form method="POST" action="<?= URL ?>Personas/listarPersonasClientes/<?=  $valor['id_persona'] ?>">
                <div class="modal-body">
                  <input type="hidden" name="idPersona" value="<?= $clientes['id_persona'] ?>">
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
                          <th>Celular</th>
                          <th>Teléfono</th>
                          <th>Dirección</th>
                          <th>Email</th>
                          <th>Género</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td><?=  $clientes['celular'] ?></td>
                          <td><?=  $clientes['telefono'] ?></td>
                          <td><?=  $clientes['direccion'] ?></td>
                          <td><?=  $clientes['email'] ?></td>
                          <td><?=  $clientes['genero'] ?></td>
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

<script type="text/javascript">
function cambiarestado(id){
    swal({
    title: "¿Realmente desea cambiar el estado del cliente?",
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
        url:url+"Personas/cambiarEstadoCliente",
        data:{
        'id':id,
      },
      }).done(function(respuesta){
        if(respuesta == 1){
          window.location = url + "Personas/listarPersonasClientes";
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
