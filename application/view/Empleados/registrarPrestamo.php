 <div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Registrar Préstamos</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#5cb85c; color: white">
            </div>
            <div class="panel-body">
              <div class="dataTable_wrapper">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <th>Número Documento</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Tipo Empleado</th>
                        <th>Estado</th>
                        <th>Realizar Préstamo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($listarEmpleadoFijo as $empleado): ?>
                        <tr>
                          <td><?=  $empleado['id_persona'] ?></td>
                          <td><?=  $empleado['nombres'] ?></td>
                          <td><?=  $empleado['apellidos'] ?></td>
                          <td><?=  $empleado['Tbl_nombre_tipo_persona'] ?></td>
                          <td><?php if($empleado['estado'] == 1): ?>
                                Habilitado
                              <?php else:  ?>
                                Inhabilitado
                          <?php endif ?></td>
                          <td><button type="button" class="btn btn-primary btn-circle btn-md" data-tipo = "<?= $empleado['Tbl_nombre_tipo_persona']?>" data-estadoE = "<?= $empleado['estado'] ?>" data-identi = "<?= $empleado['id_persona'] ?>" onclick="prestamosEmp('<?= $empleado['id_persona'] ?>',this)"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
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

    <div class="modal fade" id="myjh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
      <div class="modal-dialog" role="document" style="width: 40% !important" id="modalcss" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarpre()">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Registrar Préstamo</h4>
          </div>
          <div class="modal-body" style="margin: 0 auto">
                <form class="" action="<?php echo URL?>Empleados/registrarPrestamo" method="post" id="myFor" onsubmit="return validarfe()" data-parsley-validate="">
                  <input type="hidden" name="tipoEmpl" id="tipoEmpl" value="">
                <div class="row">
                <input type="hidden"  id="estadoempleado">
                  <div class="col-xs-12 col-md-6">
                      <label id="labelIdentificacion">Identificación</label><br>
                      <input type="text" class="form-control" name="txtIdentifica" placeholder="Identificacion" value="" id="iden" readonly="">
                  </div>
                  <div class="col-md-6">
                      <label id="labelTipoEmpleado">Tipo de Empleado</label><br>
                      <input type="text" class="form-control" name="txtTipoEmpleado" placeholder="Tipo Empleado" value="" id="tipoEmplea" readonly="">
                  </div>
                </div>
              <br>
              <div class="row">
                <div class="col-xs-12 col-md-6" id="divFechapago">
                  <label id="labelFechaPago">Fecha de Préstamo:</label>
                  <div class="">
                    <div class="input-group date">
                      <!-- <div style="border-radius:5px;">
                         <i class="fa fa-calendar"></i> -->
                      </div>
                      <input type="text" class="form-control" name="txtfechaPrestamo" step="1"  value="<?php echo date("Y-m-d");?>" format="yyyy-mm-dd" readonly="">
                    </div>
                  </div>

                <div class="col-xs-12 col-md-6" id="divFechapagolimite">
                  <label id="labelFechaLimite">Fecha Límite:</label>
                  <div class="">
                    <div class="input-group date" data-provide = "datepicker">
                      <div class="input-group-addon" style="border-radius:5px;">
                        <i class="fa fa-calendar"></i>
                      </div>
                        <?php $hoy = date("Y-m-d");
                            $nuevafecha = strtotime ('+30 day' , strtotime($hoy)) ;
                            $nuevafecha = date ('Y-m-d', $nuevafecha);
                        ?>
                        <?php $hoy2 = date("Y-m-d");
                            $nuevafecha2 = strtotime ('+30 day' , strtotime($hoy2)) ;
                            $nuevafecha2 = date ('Y-m-d', $nuevafecha2);
                        ?>
                      <input type="text" class="form-control pull-right" name="txtfechalimite" onchange="validarfe()" required="" id="Flimite" style="border-radius:5px;" step="1"  value="<?php echo $nuevafecha ?>" format="yyyy-mm-dd" readonly="">
                    </div>
                      <input type="hidden" value="<?php echo $nuevafecha2 ?>" format="yyyy-mm-dd" id="limite">
                  </div>
                </div>
              </div>

                <div class="row">
                <div class="col-xs-12 col-md-6" id="divvalorprestamo">
                  <br>
                  <label>Valor Préstamo</label>
                  <input type="number" min ="1000" id="valorpres" maxlength="8" name="txtvalorprestamo" size="9" step="1000" class="form-control" data-parsley-type="integer" data-parsley-required="true">
                </div>
                <div class="col-xs-12 col-md-6" id="divdescripcion">
                  <br>
                  <label>Descripción</label>
                  <textarea class="form-control" rows="3" name="txtdescripcion" id="descri"></textarea>
                </div>
              </div>
              <div class="row">
              <br>
          </div>
          <br>
              <div class="row">
                <div class="col-xs-1 col-md-2">
                </div>
                <div class="col-xs-5 col-md-4" id="btnGuardarPrestamo">
                  <button type="submit" class="btn btn-success btn-md active"  name="btnRegistrarPrestamo" id="btnguardarPrestamo"><i class="fa fa-floppy-o" aria-hidden="true">   Guardar</i></button>
                </div>

                <div class="col-md-2">
                </div>

                <div class="col-xs-5 col-md-4">
                  <button type="button" class="btn btn-danger btn-md active" onclick="cancelarprestamo()" style="float: right; margin-right: 55%" id="btncancelar"><i class="fa fa-times" aria-hidden="true">   Cancelar</i></button>
                </div>
              </div>
              </div>
            </form>
        </div>
      </div>
    </div>
</div>

          <script type="text/javascript">
            $(document).ready(function(){

              $("#btnguardarPrestamo").click(function(){
                validarfe();
                $("#myFor").parsley().validate();
              })
            })
          </script>

          <script type="text/javascript">
            function cancelarprestamo() {
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
            title: "Registro de préstamo cancelado!",
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

            function cerrarpre() {
              $("#valorpres").val("");
              $("#descri").val("");
            }
          </script>
          <script type="text/javascript">

<script type="text/javascript">

$(function(){

  $("#btnguardarPrestamo").click(function(){
    validarfe();
    var campoId = $("#iden").val();

    $.ajax({
      url: url + 'Empleados/validacionPrestamo',
      data:{'campoId': campoId},
      type: 'post',
      dataType:"text"
    }).done(function(resut){

      if(resut == "1"){
        swal({
              title: "Empleado ya tiene préstamos registrados en estado Pendiente, no se puede registrar!",
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
$("#valorpres").keydown(function(e){
  if(e.which === 189 || e.which === 69){
    e.preventDefault();

  }

});

function validarfe() {
  var felimite = $("#Flimite").val();
  var feli = $("#limite").val();
  if (felimite < feli) {
    swal({
      title: "La fecha modificada no puede ser menor a la fecha límite!",
      type: "error",
      confirmButton: "#3CB371",
      confirmButtonText: "Aceptar",
      // confirmButtonText: "Cancelar",
      closeOnConfirm: false,
      closeOnCancel: false
    });
    return false;
  }else{
    return true;
  }
}
</script>
