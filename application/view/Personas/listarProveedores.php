<div class="row">
  <center>
    <div class="col-lg-12">
        <h3 class="page-header" style="color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Proveedores</h3>
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
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Estado</th>
                                <th>Opciones</th>

                              </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($listarP as $valor): ?>
                            <tr>
                                <td><?= $valor['id_persona'] ?></td>
                                <td><?=  $valor['nombres'] ?></td>
                                <td><?=  $valor['apellidos'] ?></td>
                                <td><?=  $valor['telefono'] ?></td>
                                <td><?=  $valor['direccion'] ?></td>
                                <td><?php if($valor['estado'] == 1): ?>
                                        Habilitado
                                       <?php else:  ?>
                                        Inhabilitado
                                       <?php endif ?></td>
                                       <td>

                                  <?php if ($valor['estado']==1): ?>

                                     <a href="<?= URL. 'Personas/listarProveedores/' . $valor['id_persona'] ?>/3">
                                     <button type="button" class="btn btn-primary btn-circle btn-md" onclick="" data-toggle="modal" data-target="#modal-detalles-Proveedor" title="Ver detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver detalles"></i></button>
                                     </a>

                                     <a href="<?= URL. 'Personas/listarProveedores/' . $valor['id_persona'] ?>/1">
                                     <button type="button" class="btn btn-success btn-circle btn-md" onclick=""data-toggle="modal" data-target="#modal-actualizar-prov" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar"></i></button>
                                     </a>

                                   <button type="button"  onclick="cambiarestado(<?= $valor['id_persona']?>)" class="btn btn-danger btn-circle btn-md" title="Cambiar estado"><span class="glyphicon glyphicon-refresh" aria-hidden="true" title="Cambiar estado"></span></button>

                                  <?php else:  ?>

                                    <a href="<?= URL. 'Personas/listarProveedores/' . $valor['id_persona'] ?>/3">
                                    <button type="button" class="btn btn-primary btn-circle btn-md" onclick=""data-toggle="modal" data-target="#modal-detalles-Proveedor" title="Ver detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver detalles"></i></button>
                                    </a>

                                   <button type="button"  onclick="cambiarestado(<?= $valor['id_persona']?>)" class="btn btn-danger btn-circle btn-md" title="Cambiar estado"><span class="glyphicon glyphicon-refresh" aria-hidden="true" title="Cambiar estado"></span></button>

                                 <?php endif ?>
                              </td>
                              </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- </form> -->

<?php if ($id!= 0 && $tipo == 1): ?>

<div class="modal fade" id="modal-actualizar-prov" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
             </button>
               <center>
                 <h4 class="modal-title"  style="color: #3CB371" id="myModalLabel">Modificar Proveedores</h4>
               </center>
             </div>
             <form method="POST"  id="form-2" role="form" action="<?= URL ?>Personas/listarProveedores/<?=  $valor['id_persona'] ?>" data-parsley-validate="">
              <div class="modal-body">
                <input type="hidden" name="txtidPersona" value="<?= $proveedor['id_persona'] ?>">

        <div class="row">
              <div class="col-md-6"  class="form-group">
                  <label>Nombres</label><br>
                  <input type="text" class="form-control" name="txtnombre" id="ejemplo_password_2" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" minlength="3" maxlength="30"
                  value="<?= $proveedor['nombres'] ?>" data-parsley-required="true">
               </div>

                  <div class="col-md-6">
                    <label>Apellidos</label><br>
                      <input type="text" class="form-control" id="fecha" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" minlength="3" maxlength="30"
                         value="<?= $proveedor['apellidos'] ?>" name="txtapell" data-parsley-required="true">
                  </div>
        </div>
        <br>

        <div class="row">
                          <div class="col-md-6">
                            <label>Celular</label><br>
                            <input type="text" class="form-control" id="ejemplo_password_2" maxlength="12" minlength="10" data-parsley-type="number"
                                   value="<?= $proveedor['celular'] ?>" name="txtcel" data-parsley-required="false">
                           </div>
                         <div class="col-md-6">
                           <label>Email</label><br>
                           <input type="email" class="form-control" id="ejemplo_password_2" data-parsley-type="email"
                           value="<?= $proveedor['email'] ?>" name="txtcorreo" data-parsley-required="true">
                         </div>
        </div>
        <br>
        <div class="row">
                     <div class="col-md-6">
                       <label>Teléfono</label><br>
                       <input type="text" class="form-control" id="ejemplo_password_2" maxlength="10" minlength="7" data-parsley-type="number"
                              value="<?= $proveedor['telefono'] ?>" name="txttel" data-parsley-required="false">
                      </div>
                      <div class="col-md-6">
                        <label>Dirección</label><br>
                          <input type="text" class="form-control" id="ejemplo_password_2" maxlength="22" minlength="3"  pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\*\?_~\\ \/$]+"
                             value="<?= $proveedor['direccion'] ?>" name="txtdirecc" data-parsley-required="false">
                      </div>
        </div>
        <br>
        <div class="row">

                   <div class="col-md-6">
                     <label>Tipo Proveedor</label><br>
                     <select class="form-control" name="txtTipoEmpleado" id="select-proveedor" data-parsley-type="alphanum" data-parsley-required="true">
                         <!-- <option>Seleccione un rol</option> -->
                       <?php foreach($TipoProveedor AS $tipo): ?>
                         <option value="<?= $tipo['idTbl_tipo_persona'] ?>" <?= $proveedor['Tbl_TipoPersona_idTbl_TipoPersona'] == $tipo['idTbl_tipo_persona'] ? 'selected="selected"' : '' ?>>
                           <?= $tipo['Tbl_nombre_tipo_persona']?>
                         </option>
                       <?php endforeach ?>

                     </select>

                   </div>
                   <?php if (isset($proveedorJ)): ?>
                     <div class="col-md-6" id="div-empresa">
                       <label>Nit empresa</label><br>
                       <input type="text" class="form-control" id="txtnit"  maxlength="30" minlength="6" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \\()\/$]+"
                              value="<?= $proveedorJ['nit'] ?>" name="txtNit" data-parsley-required="true">
                      </div>
                   <?php endif; ?>
                    <br>

                      </div>
                      <br>
                      <div class="row">
                         <?php if (isset($proveedorJ)): ?>
                                   <div class="col-md-6" id="div-nombreEmp">
                                     <label>Nombre empresa</label><br>
                                     <input type="text" class="form-control" id="txtnombreEmp" maxlength="30" minlength="3" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \\()\/$]+"
                                            value="<?= $proveedorJ['empresa'] ?>" name="txtEmpresa" data-parsley-required="true">
                                    </div>
                                    <div class="col-md-6" id="div-telefonoEmp">
                                      <label>Teléfono empresa </label><br>
                                        <input type="text" class="form-control" id="txttelefonoEmp" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \\()\/$]+" minlength="6" maxlength="20"
                                           value="<?= $proveedorJ['telefono_empresa'] ?>" name="txtTele" data-parsley-required="true">
                                    </div>
                          <?php endif; ?>
                      </div>
                      <?php if ($proveedor['Tbl_TipoPersona_idTbl_TipoPersona'] == 3): ?>
                      <div class="row">
                                  <div class="" style="display: none" id="div-titulo">
                                    <center>
                                      <h4 class="modal-title"  style="color: #3CB371" id="ftitulo">Datos de empresa a ingresar</h4>
                                    </center>

                                  </div>
                                  <br>
                                  <div class="col-md-4" id="div-emp" style="display: none">
                                    <label>Nit empresa</label><br>
                                    <input type="text" class="form-control" id="txtNitE" maxlength="30" minlength="6" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \/$]+"
                                           value="" name="txtNitEmp" data-parsley-required="true">
                                   </div>
                                   <div class="col-md-4" id="div-nombreEmpresa"  style="display: none">
                                     <label>Nombre empresa</label><br>
                                     <input type="text" class="form-control" id="txtNombreEmpresa" maxlength="30" minlength="3" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \\()\/$]+"
                                            value="" name="txtNombreE" data-parsley-required="true">
                                    </div>
                                    <div class="col-md-4" id="div-telefEmp"  style="display: none">
                                      <label>Teléfono empresa </label><br>
                                        <input type="text" class="form-control" id="txttelefonoEmpresa" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \\()\/$]+" minlength="6" maxlength="20"
                                           value="" name="txtTeleEmp" data-parsley-required="true">
                                    </div>

                      </div>
                      <?php endif; ?>
                      <br>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                         <button type="submit" name="btn-modificar-prov" id="btn-guardar-Mod-Prov" class="btn btn-success btn-md"><i class="fa fa-floppy-o" aria-hidden="true">   Modificar</i></button>

                       </div>
                     </form>
                  </div>
                </div>
</div>
 <?php endif; ?>

 <?php if ($id!= "" && $tipo == 3): ?>
 <div class="modal fade" id="modal-detalles-Proveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
     <div class="modal-dialog" style="width: 80%" role="document">
       <div class="modal-content" style="width: 100%">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
               </button>
                 <center>
                   <h4 class="modal-title"  style="color: #3CB371" id="myModalLabel">Detalles de <?php echo $proveedor['nombres'].' '.$proveedor['apellidos']?></h4>
                 </center>
               </div>
               <form method="POST" action="<?= URL ?>Personas/listarProveedores/<?=  $valor['id_persona'] ?>">
                <div class="modal-body">
                  <input type="hidden" name="idPersona" value="<?= $proveedor['id_persona'] ?>">
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
                        <th>E-mail</th>
                        <th>Tipo proveedor</th>
                      <?php if ( $proveedor['Tbl_TipoPersona_idTbl_TipoPersona'] == 4): ?>
                        <th>Nit empresa</th>
                        <th>Nombre empresa</th>
                        <th>Teléfono empresa</th>
                      <?php endif; ?>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td><?=  $proveedor['celular'] ?></td>
                          <td><?=  $proveedor['email'] ?></td>
                          <td><?=  $proveedor['Tbl_nombre_tipo_persona'] ?></td>
                          <?php if ( $proveedor['Tbl_TipoPersona_idTbl_TipoPersona'] == 4): ?>
                            <td><?=  $proveedorJ['nit'] ?></td>
                            <td><?=  $proveedorJ['empresa'] ?></td>
                            <td><?=  $proveedorJ['telefono_empresa'] ?></td>
                          <?php endif; ?>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        <div>
      <div class="row">
          <div class="col-md-11">
            <button type="button" class="btn btn-secondary btn-md active pull-right"  data-dismiss="modal" style="float: center"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
          </div>
        </div>
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
   $("#modal-actualizar-prov").modal("show");

   $("#btn-guardar-Mod-Prov").click(function(){

     $("#form-2").parsley().validate();

   });

 });
</script>

<script type="text/javascript">
    $(document).ready(function(){
    $("#modal-detalles-Proveedor").modal("show");

  });
</script>

<script type="text/javascript">
function cambiarestado(id){
swal({
title: "¿Realmente desea cambiar el estado del proveedor?",
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
        url:url+"Personas/cambiarEstadoProveedor",
        data:{
        'id':id,
      },
      }).done(function(respuesta){
        if(respuesta == 1){
          window.location = url + "Personas/listarProveedores";
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

<?php if ($proveedor['Tbl_TipoPersona_idTbl_TipoPersona'] == 4): ?>
<script type="text/javascript">
$(document).ready(function(){
$("#select-proveedor").change(function(){
 var tipo=$(this).val();
 if(tipo == 4){
   $("#div-empresa").slideDown();
   $("#txtnit").attr("data-parsley-required", 'true');
   $("#div-nombreEmp").slideDown();
   $("#txtnombreEmp").attr("data-parsley-required", 'true');
   $("#div-telefonoEmp").slideDown();
   $("#txttelefonoEmp").attr("required", 'true');
   $("#txtnit").removeAttr("data-parsley-required");
   $("#txtNitE").removeAttr("data-parsley-required");
   $("#txtNombreEmpresa").removeAttr("data-parsley-required");
   $("#txttelefonoEmpresa").removeAttr("data-parsley-required");
   $("#txtnit").removeAttr("data-parsley-required");
   $("#txtnombreEmp").removeAttr("data-parsley-required");
   $("#txttelefonoEmp").removeAttr("data-parsley-required");

 }else if(tipo == 3){
   $("#div-empresa").slideUp();
   $("#txtnit").removeAttr("data-parsley-required");
   $("#div-nombreEmp").slideUp();
   $("#txtnombreEmp").removeAttr("data-parsley-required");
   $("#div-telefonoEmp").slideUp();
   $("#txttelefonoEmp").removeAttr("data-parsley-required");
   $("#txtNitE").removeAttr("data-parsley-required");
   $("#txtNombreEmpresa").removeAttr("data-parsley-required");
   $("#txttelefonoEmpresa").removeAttr("data-parsley-required");

   }
});
});
</script>
<?php endif; ?>

<?php if ($proveedor['Tbl_TipoPersona_idTbl_TipoPersona'] == 3): ?>
<script type="text/javascript">
$(document).ready(function(){
$("#select-proveedor").change(function(){
 var tipo=$(this).val();
 if(tipo == 4){
   $("#div-emp").slideDown();
   $("#txtNitE").attr("data-parsley-required", 'true');
   $("#div-nombreEmpresa").slideDown();
   $("#txtNombreEmpresa").attr("data-parsley-required", 'true');
   $("#div-telefEmp").slideDown();
   $("#txttelefonoEmpresa").attr("data-parsley-required", 'true');
   $("#div-titulo").slideDown();
   $("#ftitulo").attr("data-parsley-required", 'true');
   $("#ftitulo").removeAttr("data-parsley-required");
   $("#txtnit").removeAttr("data-parsley-required");
   $("#txtnombreEmp").removeAttr("data-parsley-required");
   $("#txttelefonoEmp").removeAttr("data-parsley-required");

 }else if(tipo == 3){
   $("#div-emp").slideUp();
   $("#txtNitE").removeAttr("data-parsley-required");
   $("#div-nombreEmpresa").slideUp();
   $("#txtNombreEmpresa").removeAttr("data-parsley-required");
   $("#div-telefEmp").slideUp();
   $("#txttelefonoEmpresa").removeAttr("data-parsley-required");
   $("#div-titulo").slideUp();
   $("#ftitulo").removeAttr("data-parsley-required");
   $("#txtnit").removeAttr("data-parsley-required");
   $("#txtnombreEmp").removeAttr("data-parsley-required");
   $("#txttelefonoEmp").removeAttr("data-parsley-required");
   }
});
});
</script>
<?php endif; ?>

<?php if ( $proveedor['Tbl_TipoPersona_idTbl_TipoPersona'] == 3): ?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#txtNitE").removeAttr("data-parsley-required");
    $("#txtNombreEmpresa").removeAttr("data-parsley-required");
    $("#txttelefonoEmpresa").removeAttr("data-parsley-required");

  })
</script>
<?php endif; ?>
