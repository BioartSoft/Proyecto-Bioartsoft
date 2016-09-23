  <style type="text/css">
    #panel{
      height: 100%;
    }
  </style>
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Préstamos</h3>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color:#5cb85c; color: white;">
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
                <th>Tipo Empleado</th>
                <th>Ver Detalles</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($listarPrestamos as $prestamos): ?>
                <tr>
                  <td><?=  $prestamos['id_persona'] ?></td>
                  <td><?=  $prestamos['nombres'] ?></td>
                  <td><?=  $prestamos['apellidos'] ?></td>
                  <td><?=  $prestamos['Tbl_nombre_tipo_persona'] ?></td>
                  <td><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myJhoan" data-tipop = "<?=  $prestamos['Tbl_nombre_tipo_persona'] ?>" title="Generar Recibo" onclick="traerDetallePrestamos('<?=  $prestamos['id_persona'] ?>')"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                </tr>
            </tbody>

              <?php endforeach; ?>
              <div class="modal fade" id="myJhoan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
                <div class="modal-dialog" role="document" style="width: 90% !important">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Detalles de Préstamos de <span id="empleado-prestamo"></span></h4>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-green" >
                          <div class="panel-heading">
                          </div>
                          <div class="panel-body">
                            <div class="dataTable_wrapper">
                              <div class="table-responsive">
                                <div id="cont-table">

                                </div>
                              </div>
                            </div>
                      </div>
                     </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-secondary btn-active"  data-dismiss="modal" style="margin-left:80%" onclick="abrirmodal()"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="mymodificarprestamo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
          <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="abrirmodal()">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371"> Modificar Préstamo<span id=""></span></h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo URL?>Empleados/ListarPrest" method="POST" id="formModPrest" accept-charset="utf-8" data-parsley-validate="" onsubmit="return validarAbono()">
                <div class="row">
                  <div class="col-md-12">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-xs-12 col-md-6" id="divFechalimite">
                          <label>Fecha Límite:</label>
                          <div class="">
                            <div class="input-group date" data-provide = "datepicker">
                              <div class="input-group-addon" style="border-radius:5px;">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" name="txtfechalimetepre" data-parsley-required="true" style="border-radius:5px;" step="1"  value="" format="yyyy-mm-dd" id="fechalim">
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6" id="divvalorpres">
                          <label>Valor Préstamo:</label>
                          <input type="hidden" name="txthideidprestamo" id="idprest">
                          <input type="number" min ="1000" id="valorprestamos" name="txtvalorprestamos" step="1000" class="form-control" data-parsley-required="true">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="row">
                        <div class="modal-footer">
                        <div class="col-xs-12 col-md-6">
                          <button type="button" class="btn btn-secondary btn-active"  data-dismiss="modal" style="float: right;margin-right: 70px" onclick="abrirmodal()"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                        </div>
                        <div class="col-xs-12 col-md-6">

                          <button type="submit" name="btnmodificarprestamo" class="btn btn-success btn-active" id="btnmodificarprestamo" style="float: left; margin-left: 70px"><i class="fa fa-floppy-o" aria-hidden="true">   Guardar</i></button>
                        </div>
                      </div>
                    </div>
                <!-- </form> -->
              </div>
            </div>
          </div>
        </div>
      </div>
  </center>
              <div class="modal fade" id="abonosPrestamos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
                <div class="modal-dialog modal-md" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="abrirmodal()">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Detalles de abonos de <span id="empleado-det-abonos"></span></h4>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-green" >
                          <div class="panel-heading">
                          </div>
                          <div class="panel-body">
                            <div class="dataTable_wrapper">
                              <div class="table-responsive">
                                <div id="contenido_abonos">

                                </div>
                              </div>
                              <br>
                            </div>
                      </div>
                     </div>
                              <div class="col-xs-12 col-md-12">
                          <button type="button" class="btn btn-secondary btn-active"  data-dismiss="modal" style="margin-left:80%" onclick="abrirmodal()"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

              <div class="modal fade" id="abonos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
                <div class="modal-dialog" role="document" style="width: 35% !important">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"onclick="abrirmodal()" >
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Abono de Préstamos de <span id="empleado"></span></h4>
                    </div>

                    <div class="modal-body">
                    <!-- <form method="POST" id="abonar" action="<?php echo URL?>Empleados/ListarPrest" data-parsley-validate="" onsubmit="return validarAbono()"> -->
                    <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="txtidprestamo" id="idprestamos">
                        <input type="hidden" name="" id="totalsumaabono">
                        <div class="col-xs-12 col-md-6">
                          <label >Valor Abono</label><br>
                          <input type="number" class="form-control" placeholder="Valor Abono" id="idabono" min="1000" name="txtvalorabono" data-parsley-type="integer" step="1000" data-parsley-required="true">
                      </div>
                      <div class="col-xs-12 col-md-6">
                          <label >Valor Préstamo</label><br>
                          <input type="text" class="form-control" name="txtresta" placeholder="" id="idvalorPrestamo" readonly="">
                          <input type="hidden" name="txtva" id="idtruefalse" value="true">
                      </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-12 col-md-6" style="float: right">
                          <label >Valor Pendiente</label><br>
                          <input type="text" class="form-control" name="txtpendiente" placeholder="" id="idvalorPendiente" readonly="">
                        </div>
                      </div>
                    <br><br>
                      <div class="row">
                        <div class="modal-footer">
                          <div class="col-md-2">
                          </div>
                        <div class="col-xs-12 col-md-4">
                        <button type="button" class="btn btn-secondary btn-active"  data-dismiss="modal" style="float: right" onclick="abrirmodal()"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                        </div>
                        <div class="col-md-2">
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <button type="submit" name="btnRegistrarAbono" class="btn btn-success btn-active" id="btnguararAbono" style="float: left"><i class="fa fa-floppy-o" aria-hidden="true">   Guardar</i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

          <script type="text/javascript">
            $(document).ready(function(){

              $("#btnguararAbono").click(function(){

                $("#formModPrest").parsley().validate();
              })
            })
          </script>

  <script type="text/javascript">

  <script type="text/javascript">
    $(document).ready(function(){

      $("#btnmodificarprestamo").click(function(){

        $("#formModPrest").parsley().validate();
      })
    })
  </script>

<script type="text/javascript">

  function abono(valor,idprestamo,valorpen){

    $("#abonos").modal();
    $('#myJhoan').modal('hide');
    $("#idvalorPrestamo").val(valor);
    $("#idprestamos").val(idprestamo);
    $("#idvalorPendiente").val(valorpen);
  }


    function traerDetallePrestamos(id) {
      traerNombreEmpleado(id);

      $.ajax({
        url: url+'Empleados/ajaxDetallePrestamos',
        type: 'post',
        dataType: 'json',
        data: {idPersona:id},
      })
      .done(function(respuesta) {

        var html = '<table class="table table-striped table-bordered table-hover" id="listarDetalle" style="width: 100% !important">' +
                                  '<thead id="tit" >' +
                                  '</thead>' +
                                  '<tbody id="detal_pre">' +
                                  '</tbody>' +
                                '</table>';
        $("#cont-table").html(html);
        $('#detal_pre').append(respuesta.html);
        $('#tit').append(respuesta.cabecera);
        $('#empleado').append(respuesta.empleado);
        $('#empleado-prestamo').append(respuesta.empleado);
        $('#empleado-det-abonos').append(respuesta.empleado);
        $(".price").priceFormat({centsLimit: 3, clearPrefix: true});


      var tabla = $('#listarDetalle').DataTable({
      language: {
        url: "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
      }, responsive: true,
      sort: false
        });

      });

    }

    function traerDetalleAbonos(id_prestamos) {

      $.ajax({
        url: url+'Empleados/ajaxDetalleAbonos',
        type: 'post',
        dataType: 'json',
        data: {id_prestamos:id_prestamos},
      })
      .done(function(respuesta) {

        var html = '<table class="table table-striped table-bordered table-hover" id="listarabono" style="width: 100% !important">' +
                                  '<thead id="titulos" >' +
                                  '</thead>' +
                                  '<tbody id="detalles_prestamo">' +
                                  '</tbody>' +
                                '</table>';
        $('#contenido_abonos').html(html);
        $('#detalles_prestamo').append(respuesta.html);
        $('#titulos').append(respuesta.cabecera);
        $("#abonosPrestamos").modal("show");
        $('#myJhoan').modal('hide');
        $(".price").priceFormat({centsLimit: 3, clearPrefix: true});

      var tabla = $('#listarabono').DataTable({
      language: {
        url: "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
      }, responsive: true,
      sort: false
        });

      });
    }
  </script>

  <script type="text/javascript">
    function abonar(nombre, detalle)
      {

        var campos = $(detalle).parent().parent().parent();

        $('#abonos').modal("show");
        $('#myJhoan').modal('hide');
           setTimeout(function(){
            var nombre = $(detalle).attr("data-valor");

           },500);
      }
  </script>
  <script type="text/javascript">
    function abrirmodal() {
      $('#myJhoan').modal('show');
      $("#idabono").val("");
    }
  </script>
  <script type="text/javascript">
   function validarAbono() {
       var valorabo = parseInt($("#idabono").val());
       var pendiente = parseInt($("#idvalorPendiente").val())
       var valorpres = parseInt($("#idvalorPrestamo").val());
          if(valorabo > pendiente){
            swal({
                  title: "El valor del abono es superior al valor pendiente!\n Valor Pendiente: "+pendiente+"\n Valor abono: "+valorabo,
                  type: "error",
                  confirmButton: "#3CB371",
                  confirmButtonText: "Aceptar",
                  // confirmButtonText: "Cancelar",
                  closeOnConfirm: false,
                  closeOnCancel: false
                });
            return false;
            }
          else
          {
            return true;
          }
     }

  </script>
  <script type="text/javascript">
  function traerNombreEmpleado(id){
    $.ajax({
      url:url+"Empleados/ajaxNombreEmpleado",
      type:'POST',
      dataType: 'json',
      data:{
        idPersona:id,
      }
    }).done(function(respuesta){
      $("#empleado-prestamo").text(respuesta.html);
      $("#empleado-det-abonos").text(respuesta.html);
      $("#empleado").text(respuesta.html);
    });
  }
  </script>
  <script type="text/javascript">
  function Modificarprestamo(id_prestamos){
    $.ajax({
  type:"POST",
  url:url+"Empleados/infoprestamos",
  data:{
    id_prestamos: id_prestamos,
  },
  success:function(respuesta){

    $("#fechalim").val(respuesta.fecha_limite);
        $("#valorprestamos").val(respuesta.valor_prestamo);
        $("#idprest").val(respuesta.id_prestamos);
        $("#mymodificarprestamo").modal("show");
        $("#myJhoan").modal("hide");

  },
    });
}
  </script>
  <script type="text/javascript">
        function cambiarestadoabono(cod, est){
    swal({
      title: "¿Realmente Desea Anular el Abono?",
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
            title: "Abono Anulado.!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm){
            $.ajax({
              dataType:'json',
              type:'post',
              url:url+"Empleados/modificarestadoAbonos",
              data:{id:cod, estado:est}
            }).done(function(respuesta){
              if(respuesta.v == 1){
                window.location = url + "Empleados/listarPrest";
              }else{
                sweealert("Error al cambiar el estado");
              }
            }).fail(function(){

            })
          });
        }
        });
}
  </script>

  <script type="text/javascript">
  $("#valorprestamos").keydown(function(e){
    if(e.which === 189 || e.which === 69){
      e.preventDefault();

    }

  });

  $("#idabono").keydown(function(e){
    if(e.which === 189 || e.which === 69){
      e.preventDefault();

    }

  });

        function cambiarestadoprestamo(cod, est){
          validarSiTieneAbono(cod);
    swal({
      title: "¿Desea Anular el Prestamo?",
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
            title: "Prestamo Anulado.!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm){
            $.ajax({
              dataType:'json',
              type:'post',
              url:url+"Empleados/modificarestadoPrestamo",
              data:{id:cod, estado:est}
            }).done(function(respuesta){
              if(respuesta.v == 1){
                window.location = url + "Empleados/listarPrest";
              }else{
                sweealert("Error al cambiar el estado");
              }
            }).fail(function(){

            })
          });
        }
        });
}
  </script>
  <script type="text/javascript">
    function validarSiTieneAbono(cod) {
      $.ajax({
        url: url + 'Empleados/ValidarAnularPrestamo',
        type: 'POST',
        dataType: 'JSON',
        data: {cod: cod},
      })
      .done(function(respuesta) {
          if (respuesta.v == null) {
          }
          else
          {
            swal({
              title: "Préstamo con abonos realizados,no se puede anular!",
              type: "error",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            });
          }
      });

    }
  </script>
