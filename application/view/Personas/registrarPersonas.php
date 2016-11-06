
<form  id="el-form" method="post" action="<?= URL ?>Personas/registrarPersonas" data-parsley-validate="">
<div class="row">

  <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Registrar Personas (obligatorios * )</h3><br>

    <div class="container-fluid">
        <div class="row">
          <?php if ($_SESSION['ROL'] == 1):?>
          <div class="col-md-4">
            <label for="" style="color: #3CB371">Seleccionar tipo persona *</label>
            <select class="form-control" id="tipoPersona" name="txtTipoPersona" style="width: 100%" data-parsley-type="alphanum" data-parsley-required="true">
              <option value="">Seleccionar tipo persona</option>
              <?php foreach ($TipoPersona as $value): ?>
                <?php if($value['idTbl_tipo_persona'] != 1 && $value['idTbl_tipo_persona'] != 2): ?>
                <option value="<?= $value['idTbl_tipo_persona'] ?>"><?= $value['Tbl_nombre_tipo_persona'] ?></option>
              <?php endif; ?>

               <?php endforeach; ?>
            </select>
          </div>
        <?php elseif ($_SESSION['ROL'] == 3):?>
        <div class="col-md-4">
          <label for="" style="color: #3CB371">Seleccionar tipo persona *</label>
          <select class="form-control" id="tipoPersona" name="txtTipoPersona" style="width: 100%" data-parsley-type="alphanum" data-parsley-required="true">
            <option value="">Seleccionar tipo persona</option>
            <?php foreach ($TipoPersona as $value): ?>
              <option value="<?= $value['idTbl_tipo_persona'] ?>"><?= $value['Tbl_nombre_tipo_persona'] ?></option>

             <?php endforeach; ?>
          </select>
        </div>
        <?php elseif ($_SESSION['ROL'] == 2):?>
        <div class="col-md-4">
          <label for="" style="color: #3CB371">Seleccionar tipo persona *</label>
          <select class="form-control" id="tipoPersona" name="txtTipoPersona" style="width: 100%" data-parsley-type="alphanum" data-parsley-required="true">
            <option value="">Seleccionar tipo persona</option>
            <?php foreach ($TipoPerVendedor as $value): ?>
              <option value="<?= $value['idTbl_tipo_persona'] ?>"><?= $value['Tbl_nombre_tipo_persona'] ?></option>

             <?php endforeach; ?>
          </select>
        </div>
      <?php endif; ?>

          <div class="col-md-4">
              <label for="" style="color: #3CB371">Seleccionar tipo de documento *</label>
              <select name="txtTipoDocumento"class="form-control" id="documento" style="width: 100%" data-parsley-required="true" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \\()\/$]+">
                  <option value="">Seleccionar tipo de documento</option>
                  <option value="Cedula">Cédula</option>
                  <option value="Cédula_Extranjera">Documento de  Extranjería</option>
                  <option value="Otro">Otro</option>
              </select>
            </div>
             <div class="col-md-4">
                <label for="" style="color: #3CB371">Número de documento *</label>
                <input type="text" name="txtIdPersona"  minlength="8" maxlength="10" style="width: 100%"class="form-control" id="campoId" placeholder="Número Documento" data-parsley-required="true">
            </div>
          </div>
          <br><br>

          <div class="row">
            <div class="col-md-4">
                <label for="" style="color: #3CB371">Nombres *</label>
                 <input type="text"  name="txtNombres" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" minlength="3" maxlength="30" class="form-control" style="width: 100%" id="campoNombre" placeholder="Nombres" data-parsley-required="true">
           </div>

            <div class="col-md-4">
                <label for="" style="color: #3CB371">Apellidos *</label>
                  <input type="text"  name="txtApellidos" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" minlength="3" maxlength="30" class="form-control" id="campoApellido" placeholder="Apellidos" data-parsley-required="true">
              </div>
             <div class="col-md-4">
                 <label for="" style="color: #3CB371">Número de teléfono</label>
                <input type="text"  name="txtTelefono" maxlength="10" minlength="7" data-parsley-type="number" class="form-control" id="campoTelefono" placeholder="Telefono" data-parsley-required="false">
            </div>
          </div>
          <br><br>

       <div class="row">
         <div class="col-md-4">
             <label for="" style="color: #3CB371">Número de Celular *</label>
             <input type="text"  name="txtCelular" maxlength="12" minlength="10" data-parsley-type="number" class="form-control" id="campoCelular" placeholder="Numero Celular" data-parsley-required="true">
         </div>
          <div class="col-xs-12 col-md-4">
              <div class="form-group">
                <label for="" style="color: #3CB371">Correo Electrónico <span id="asterisco">*</span></label>
                <input type="email" class="form-control" name="txtEmail" id="campoEmail" data-parsley-type="email" placeholder="Email"  data-parsley-required="true">
               </div>
          </div>
          <div class="col-md-4">
            <label for="" style="color: #3CB371">Género *</label>
            <select id="genero" name="txtGenero" class="form-control" style="width: 100%" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" data-parsley-required="true">
                <option value="">Seleccionar</option>
                 <option value="Masculino">Masculino</option>
                 <option value="Femenino">Femenino</option>
            </select>
          </div>
            </div>
            <br><br>

            <div class="row">
              <div class="col-md-4">
                    <label for="" style="color: #3CB371">Dirección</label>
                     <input type="text" name="txtDireccion" maxlength="22" minlength="3" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9@#\-\_\\.\\ \/$]+" class="form-control" id="campoDireccion" placeholder="Dirección" data-parsley-required="false">
                </div>

              <div id="conFechaContrato" style="display: none" class="col-md-4">
                  <label for="" style="color: #3CB371">Fecha Contrato *</label>
                  <div class="input-group date" data-provide="datepicker">
                  <input type="text" class="form-control" name="txtFechaContrato" id="campoFechaContrato" readonly="true" placeholder="Fecha Contrato" data-parsley-requred="true">
                  <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
                </div>
                </div>
              </div>
              <div class="col-md-4" id="conTipoRol" style="display: none">
                  <label for="" style="color: #3CB371">Seleccionar Rol *</label>
                <select name="txtRol" id="campoTipoRol" class="form-control"  style="width: 100%" data-parsley-required="true">
                     <option value="" >Seleccionar Rol</option>
                     <?php foreach ($Roles as $valor): ?>
                       <option value="<?= $valor['id_rol'] ?>"><?= $valor['nombre_rol'] ?></option>
                      <?php endforeach; ?>
                </select>
              </div>
            </div>

                <hr>
                <div class="row">
                  <div class="col-md-4" id="conNombreUsuario" style="display: none">
                        <label for="" style="color: #3CB371">Nombre usuario *</label>
                      <input type="text"  name="txtUsuario" maxlength="30" minlength="3" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9@#\-\_\\.\\ \/$]+" class="form-control" id="campoNombreUsuario" placeholder="Nombre Usuario" data-parsley-required="true">
                  </div>
            <div class="col-xs-12 col-md-4" id="conClave" style="display: none">
                  <label for="inputPassword"  class="control-label" style="color: #3CB371">Contraseña *</label>
                  <input type="password"  maxlength="12" minlength="3" name="txtClave" class="form-control" id="campoClave" placeholder="Contraseña" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\*\?_~\\.\\()\/$]+" data-parsley-required="true">
            </div>
            <div class="col-xs-12 col-md-4" id="conConfirmar" style="display: none">
                  <label for="" style="color: #3CB371">Confirmar contraseña *</label>
                  <input type="password" maxlength=12 minlength="3" name="txtConfClave" data-parsley-equalto="#campoClave" class="form-control" id="campoConfirmar" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\*\?_~\\.\()\/$]+" placeholder="Confirmar Contraseña" data-parsley-required="true">
            </div>
          </div>
          <br><br>

          <div class="row">
              <div class="col-xs-12 col-md-4" id="conNit" style="display: none">
                    <label for="" style="color: #3CB371">Nit Empresa *</label>
                  <input type="text"  name="txtnit" maxlength="30" minlength="6" class="form-control" id="campoNit" placeholder="Nit Empresa" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\*\?_~\\.\()\/$]+" data-parsley-required="true">
            </div>

            <div class="col-xs-12 col-md-4" id="conNombreEmpresa" style="display: none">
                <label for="" style="color: #3CB371">Nombre Empresa *</label>
                <input type="text"  name="txtnombreEmpresa" maxlength="30" minlength="3" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \\()\/$]+" class="form-control" id="campoNombreEmpresa" placeholder="Nombre Empresa" data-parsley-required="true">
            </div>

            <div class="col-xs-12 col-md-4" id="conDireccionEmpresa" style="display: none">
                <label for="" style="color: #3CB371">Teléfono Empresa *</label>
                  <input type="text"  name="txtDireccionEmpresa" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \\()\/$]+" minlength="6" maxlength="20" class="form-control" id="campoDireccionEmpresa" placeholder="Telefono Empresa" data-parsley-required="true">
            </div>
          </div>
          </div>
            <br><br>
              <div class="row">
              <div class="col-md-3">
              </div>
                 <div class="col-md-3">
                     <button type="submit" name="btnGuardarPersona" id="btn-enviar" class="btn btn-success active"><i class="fa fa-floppy-o" aria-hidden="true">  Guardar</i></button>
                 </div>
                   <div class="col-md-1">
                   </div>
                 <div class="col-md-3">
                   <button type="reset" class="btn btn-danger active" onclick="cancelar()"><i class="fa fa-remove" aria-hidden="true">  Cancelar</i></button>
                </div>
             <div class="col-md-2">
          </div>
        </div>
     <hr>
  </div>
</form>

<script type="text/javascript">

  $(document).ready(function(){
    $("#btn-enviar").click(function(){
        $("#el-form").parsley().validate();
    });

     $("#tipoPersona").select2();
     $("#tipoPersona").change(function(){
      var tipo=$(this).val();
      if (tipo == 1) {
        $("#conFechaContrato").slideDown();
        $("#campoFechaContrato").attr("data-parsley-required", 'true');
        $("#conTipoRol").slideDown();
        $("#campoTipoRol").attr("data-parsley-required", 'true');
        $("#conNombreUsuario").slideDown();
        $("#campoNombreUsuario").attr("data-parsley-required", 'true');
        $("#conClave").slideDown();
        $("#campoClave").attr("data-parsley-required", 'true');
        $("#conConfirmar").slideDown();
        $("#campoConfirmar").attr("data-parsley-required", 'true');
        $("#conNit").slideUp();
        $("#campoNit").removeAttr("data-parsley-required");
        $("#conNombreEmpresa").slideUp();
        $("#campoNombreEmpresa").removeAttr("data-parsley-required");
        $("#conDireccionEmpresa").slideUp();
        $("#campoDireccionEmpresa").removeAttr("data-parsley-required");
        $("#campoEmail").attr("data-parsley-required", "true");
        $("#asterisco").show();
      }else if (tipo == 2) {
        $("#conFechaContrato").slideUp();
        $("#campoFechaContrato").removeAttr("data-parsley-required");
        $("#conTipoRol").slideDown();
        $("#campoTipoRol").attr("data-parsley-required", 'true');
        $("#conNombreUsuario").slideDown();
        $("#campoNombreUsuario").attr("data-parsley-required", 'true');
        $("#conClave").slideDown();
        $("#campoClave").attr("data-parsley-required", 'true');
        $("#conConfirmar").slideDown();
        $("#campoConfirmar").attr("data-parsley-required", 'true');
        $("#conNit").slideUp();
        $("#campoNit").removeAttr("data-parsley-required");
        $("#conNombreEmpresa").slideUp();
        $("#campoNombreEmpresa").removeAttr("data-parsley-required");
        $("#conDireccionEmpresa").slideUp();
        $("#campoDireccionEmpresa").removeAttr("data-parsley-required");
        $("#campoEmail").attr("data-parsley-required", "true");
        $("#asterisco").show();
      }else if(tipo == 4){
        $("#conFechaContrato").slideUp()
        $("#campoFechaContrato").removeAttr("data-parsley-required");
        $("#conNit").slideDown();
        $("#campoNit").attr("data-parsley-required", 'true');
        $("#conNombreEmpresa").slideDown();
        $("#campoNombreEmpresa").attr("data-parsley-required", 'true');
        $("#conDireccionEmpresa").slideDown();
        $("#campoDireccionEmpresa").attr("data-parsley-required", 'true');
        $("#conNombreUsuario").slideUp();
        $("#campoNombreUsuario").removeAttr("data-parsley-required");
        $("#conClave").slideUp();
        $("#campoClave").removeAttr("data-parsley-required");
        $("#conConfirmar").slideUp();
        $("#campoConfirmar").removeAttr("data-parsley-required");
        $("#conTipoRol").slideUp();
        $("#campoTipoRol").removeAttr("data-parsley-required");
        $("#campoEmail").removeAttr("data-parsley-required");
        $("#asterisco").hide();
      }else if(tipo == 3){
        $("#conFechaContrato").slideUp()
        $("#campoFechaContrato").removeAttr("data-parsley-required");
        $("#conNit").slideUp();
        $("#campoNit").removeAttr("data-parsley-required");
        $("#conNombreEmpresa").slideUp();
        $("#campoNombreEmpresa").removeAttr("data-parsley-required");
        $("#conDireccionEmpresa").slideUp();
        $("#campoDireccionEmpresa").removeAttr("data-parsley-required");
        $("#conNombreUsuario").slideUp();
        $("#campoNombreUsuario").removeAttr("data-parsley-required");
        $("#conClave").slideUp();
        $("#campoClave").removeAttr("data-parsley-required");
        $("#conConfirmar").slideUp();
        $("#campoConfirmar").removeAttr("data-parsley-required");
        $("#conTipoRol").slideUp();
        $("#campoTipoRol").removeAttr("data-parsley-required");
        $("#campoEmail").removeAttr("data-parsley-required");
        $("#asterisco").hide();
        }else if(tipo == 5){
          $("#conFechaContrato").slideUp()
          $("#campoFechaContrato").removeAttr("data-parsley-required");
          $("#conNit").slideUp();
          $("#campoNit").removeAttr("data-parsley-required");
          $("#conNombreEmpresa").slideUp();
          $("#campoNombreEmpresa").removeAttr("data-parsley-required");
          $("#conDireccionEmpresa").slideUp();
          $("#campoDireccionEmpresa").removeAttr("data-parsley-required");
          $("#conNombreUsuario").slideUp();
          $("#campoNombreUsuario").removeAttr("data-parsley-required");
          $("#conClave").slideUp();
          $("#campoClave").removeAttr("data-parsley-required");
          $("#conConfirmar").slideUp();
          $("#campoConfirmar").removeAttr("data-parsley-required");
          $("#conTipoRol").slideUp();
          $("#campoTipoRol").removeAttr("data-parsley-required");
          $("#campoEmail").removeAttr("data-parsley-required");
          $("#asterisco").hide();
          }else if(tipo == 6){
            $("#conFechaContrato").slideUp()
            $("#campoFechaContrato").removeAttr("data-parsley-required");
            $("#conNit").slideUp();
            $("#campoNit").removeAttr("data-parsley-required");
            $("#conNombreEmpresa").slideUp();
            $("#campoNombreEmpresa").removeAttr("data-parsley-required");
            $("#conDireccionEmpresa").slideUp();
            $("#campoDireccionEmpresa").removeAttr("data-parsley-required");
            $("#conNombreUsuario").slideUp();
            $("#campoNombreUsuario").removeAttr("data-parsley-required");
            $("#conClave").slideUp();
            $("#campoClave").removeAttr("data-parsley-required");
            $("#conConfirmar").slideUp();
            $("#campoConfirmar").removeAttr("data-parsley-required");
            $("#conTipoRol").slideUp();
            $("#campoTipoRol").removeAttr("data-parsley-required");
            $("#campoEmail").removeAttr("data-parsley-required");
            $("#asterisco").hide();
          }else{
            $("#conFechaContrato").slideUp()
            $("#campoFechaContrato").removeAttr("data-parsley-required");
            $("#conNit").slideUp();
            $("#campoNit").removeAttr("data-parsley-required");
            $("#conNombreEmpresa").slideUp();
            $("#campoNombreEmpresa").removeAttr("data-parsley-required");
            $("#conDireccionEmpresa").slideUp();
            $("#campoDireccionEmpresa").removeAttr("data-parsley-required");
            $("#conNombreUsuario").slideUp();
            $("#campoNombreUsuario").removeAttr("data-parsley-required");
            $("#conClave").slideUp();
            $("#campoClave").removeAttr("data-parsley-required");
            $("#conConfirmar").slideUp();
            $("#campoConfirmar").removeAttr("data-parsley-required");
            $("#conTipoRol").slideUp();
            $("#campoTipoRol").removeAttr("data-parsley-required");
            $("#campoEmail").removeAttr("data-parsley-required");
            $("#asterisco").hide();
            }
    });
  });
</script>

<?php if (isset($errorId) && $errorId == false): ?>
  <script type="text/javascript">
    $(document).ready(function(){
      swal({
            title: "Identificación ya existe, no se puede registrar!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          });
    });
  </script>
<?php endif; ?>

<?php if (isset($errorUsuario) && $errorUsuario == false): ?>
  <script type="text/javascript">
    $(document).ready(function(){
      swal({
            title: "Nombre de usuario ya existe, no se puede registrar!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          });
    });
  </script>
<?php endif; ?>

<?php if (isset($errorEmail) && $errorEmail == false): ?>
  <script type="text/javascript">
    $(document).ready(function(){
      swal({
            title: "Correo ya existe, no se puede registrar!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          });
    });
  </script>
<?php endif; ?>


<script type="text/javascript">
  $(function(){

    $("#campoId").change(function(){

      var campoId = $("#campoId").val();

      $.ajax({
        url: url + 'Personas/validacion',
        data:{'campoId': campoId},
        type: 'post',
        dataType:"text"
      }).done(function(resut){

        if(resut == "1"){
          swal({
                title: "Identificación ya existe, no se puede registrar!",
                type: "error",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              });
        }
      });
    });
  });
</script>

<script type="text/javascript">
  $(function(){

    $("#campoEmail").change(function(){

      var campoEmail = $("#campoEmail").val();

      $.ajax({
        url: url + 'Personas/validacionEmail',
        data:{'campoEmail': campoEmail},
        type: 'post',
        dataType:"text"
      }).done(function(resut){

        if(resut == "1"){
          swal({
                title: "Correo ya existe, no se puede registrar!",
                type: "error",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              });
        }
      });
    });
  });
</script>

<script type="text/javascript">
  $(function(){

    $("#campoNombreUsuario").change(function(){

      var campoNombreUsuario = $("#campoNombreUsuario").val();

      $.ajax({
        url: url + 'Personas/validacionUsuario',
        data:{'campoNombreUsuario': campoNombreUsuario},
        type: 'post',
        dataType:"text"
      }).done(function(resut){

        if(resut == "1"){
          swal({
                title: "Nombre de usuario ya existe, no se puede registrar!",
                type: "error",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              });
        }
      });
    });
  });
</script>


<script type="text/javascript">
$(document).ready(function(){


  $("#documento").change(function(){
    var documento = $("#documento").val();
    if(documento == "Cedula"){
      $("#campoId").removeAttr("data-parsley-type", "alphanum");
      $("#campoId").attr("data-parsley-type", "number");

    }else{
        $("#campoId").removeAttr("data-parsley-type");
      $("#campoId").attr("data-parsley-type", "alphanum");

    }
  })
})
</script>

<script type="text/javascript">

function cancelar() {
    swal({
          title: "Los datos del registro no se guardarán",
          type: "warning",
          confirmButton: "#3CB371",
          confirmButtonText: "btn-danger",
          cancelButtonText: "Cancelar",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Aceptar",
          closeOnConfirm: false,

          },
    function(isConfir){
        if (isConfir) {
          swal({
            title: "Registro cancelado!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfir){
            window.location.reload();
          });
        }
        });
     }
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#asterisco").hide();
  });
</script>
