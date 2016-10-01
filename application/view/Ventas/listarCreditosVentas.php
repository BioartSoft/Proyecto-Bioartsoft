<style type="text/css">
  #panel{
    height: 100%;
  }
</style>
<div class="row">
<div class="col-lg-12">
  <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Créditos Ventas</h3>
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
              <th>Tipo Cliente</th>
              <th>Ver Detalles</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($clientesCredito as $cliente): ?>
              <tr>
                <td><?=  $cliente['id_persona'] ?></td>
                <td><?=  $cliente['nombres'] ?></td>
                <td><?=  $cliente['apellidos'] ?></td>
                <td><?=  $cliente['Tbl_nombre_tipo_persona'] ?></td>
                <td><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myJhoan" data-tipop = "<?=  $cliente['Tbl_nombre_tipo_persona'] ?>" title="Listar Créditos" onclick="traerDetalleCreditoV('<?=  $cliente['id_persona'] ?>')"><i class="fa fa-eye" aria-hidden="true"></i></button>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

            <div class="row">
             <div class="col-sm-12">
               <center>
               <a href="<?= URL ?>Ventas/generarpdfCreditos" target="_blank">
                 <button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true">   Reporte PDF de Créditos</i></button>
               </a>
             </center>
             </div>
           </div>

            <div class="modal fade" id="mdListarCreditos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
              <div class="modal-dialog" role="document" style="width: 96% !important">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrar()">
                      <span aria-hidden="true">&times;</span>
                    </button>
                      <h4 class="modal-title" id="creditosClientModal" style="text-align:center; color: #3CB371">Detalles de Crédito de: <span id="cliente"></span> </h4>
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
                              <div id="cont-CreditosV">

                              </div>
                            </div>
                          </div>
                    </div>
                   </div>
                  </div>
                </div>
                <button type="button" class="btn btn-secondary btn-active pull-rigth"  data-dismiss="modal" style="margin-left:80%"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
              </div>
          </div>
        </div>
      </div>
</center>
            <div class="modal fade" id="mdListarAbonosCreditosV" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
              <div class="modal-dialog" role="document" style="width: 45% !important">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="abrirmodal()">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="creditosClientModal" style="text-align:center; color: #3CB371">Detalles Abonos de: <span id="cliente-DetallesAbonos"><span></h4>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="panel panel-green" >
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body" id="panelAb">
                          <div class="dataTable_wrapper">
                            <div class="table-responsive">
                              <div id="contenido_abonos_CreditosV">

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

            <div class="modal fade" id="abonoCreditosV" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
              <div class="modal-dialog" role="document" style="width: 40% !important">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"onclick="abrirmodal()" >
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Abono a Créditos de: <span id="cliente-abonos"></span></h4>
                  </div>
                  <div class="modal-body">
                  <form method="POST" id="form-abonos" action="<?php echo URL?>Ventas/registrarAbonoCreditoVen" data-parsley-validate="">
                  <div class="row">
                      <input type="hidden" name="txtidprestamoCredV" id="idprestamosCreditoV">
                      <input type="hidden" name="" id="totalsumaabonoCred" value="">
                      <div class="col-xs-12 col-md-6">
                          <label >Total Crédito Venta</label><br>
                          <input type="text" class="form-control" name="txtresta" placeholder="" id="idvalorCreditoV" disabled="">
                          <input type="hidden" name="txtva" id="idtruefalse" value="true">
                      </div>
                      <div class="col-xs-12 col-md-6">
                          <label >Crédito Pendiente</label><br>
                          <input type="text" class="form-control" name="txtresta" placeholder="" id="totalCreditoPendiente" disabled="">
                          <input type="hidden" name="txtva" id="idtruefalse" value="true">
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-xs-12 col-md-6">
                         <br>
                         <label >Ingresar Abono</label><br>
                         <input type="number" class="form-control" placeholder="Valor Abono" id="idabono" onblur="validarAbonoCreditoV()" name="txtvalorabono" data-parsley-type="number" data-parsley-required="true">
                     </div>
                  </div>
                  <br>
                    <div class="row">
                      <div class="modal-footer">
                        <div class="col-md-2">
                        </div>

                      <div class="col-xs-12 col-md-4">
                        <button type="button" class="btn btn-secondary btn-active"  data-dismiss="modal" style="float: left" onclick="abrirmodal()"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                      </div>

                      <div class="col-xs-12 col-md-4">
                        <button type="submit" name="btnRegistrarAbono" onclick="return validarAbonoCreditoV()" class="btn btn-success btn-active" id="btn-Guardar-Abono" style="float: right"><i class="fa fa-floppy-o" aria-hidden="true">   Guardar</i></button>
                      </div>

                      <div class="col-md-2">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


<script type="text/javascript">

function abonosV(valor,id_ventas, valorCreditoPendienteV){

  $("#abonoCreditosV").modal();
  $('#mdListarCreditos').modal('hide');
  $("#idvalorCreditoV").val(valor);
  $("#idprestamosCreditoV").val(id_ventas);
  $("#totalCreditoPendiente").val(valorCreditoPendienteV);
  $("#totalCreditoPendiente").priceFormat({centsLimit: 3, clearPrefix: true});
  $("#idvalorCreditoV").priceFormat({centsLimit: 3, clearPrefix: true});
}


  function traerDetalleCreditoV(id) {
    traerNombreCliente(id);

    $.ajax({
      url: url+'Ventas/ajaxDetalleCreditosV',
      type: 'post',
      dataType: 'json',
      data: {idPersona:id},
    })
    .done(function(respuesta) {

      var html = '<table class="table table-striped table-bordered table-hover" id="listarDetalleV" style="width: 100% !important">' +
                                '<thead id="cabecTab" >' +
                                '</thead>' +
                                '<tbody id="detal_CreditosV">' +
                                '</tbody>' +
                                '</table>';
      $("#cont-CreditosV").html(html);
      $('#detal_CreditosV').append(respuesta.html);
      $('#cabecTab').append(respuesta.cabecera);
      //$("#cliente").text(respuesta.cliente);
      $('#mdListarCreditos').modal("show");
      $(".price").priceFormat({centsLimit: 3, clearPrefix: true});

    var tabla = $('#listarDetalleV').DataTable({
    language: {
      url: "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
    }, responsive: true,
    sort: false
      });

    });

  }

  function traerDetalleAbonosCreditosV(id_ventas) {
    $.ajax({
      url: url+'Ventas/ajaxDetalleAbonosCreditosV',
      type: 'post',
      dataType: 'json',
      data: {id_ventas:id_ventas},
    })
    .done(function(respuesta) {

      var html = '<table class="table table-striped table-bordered table-hover" id="listarAbonoCreditosVent" style="width: 100% !important">' +
                                '<thead id="titulosCredV">' +
                                '</thead>' +
                                '<tbody id="detalles_prestamoCredV">' +
                                '</tbody>' +
                                '</table>';
      $('#contenido_abonos_CreditosV').html(html);
      $('#detalles_prestamoCredV').append(respuesta.html);
      $('#titulosCredV').append(respuesta.cabecera);
      $("#mdListarAbonosCreditosV").modal("show");
      $('#mdListarCreditos').modal('hide');
      $(".price").priceFormat({centsLimit: 3, clearPrefix: true});

    var tabla = $('#listarAbonoCreditosVent').DataTable({
    language: {
      url: "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
    }, responsive: true,
    sort: false
      });

    });
  }
</script>

<script type="text/javascript">
  function abrirmodal() {
    $('#mdListarCreditos').modal('show');
  }
</script>

<script type="text/javascript">
 function validarAbonoCreditoV(){
   var valorAbonoCV = parseInt($("#idabono").val());
   var valorTotalCV = parseInt($("#idvalorCreditoV").val());
   var valorPendienteCV = parseInt($("#totalCreditoPendiente").val().replace(".", ""));
        if(valorAbonoCV > valorPendienteCV){
          swal({
            title: "El valor del abono es superior al crédito pendiente! \n \n Crédito Pendiente = "+ valorPendienteCV + " pesos.",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          });

          $("#idabono").val("");

          return false;
          }
        else
        {
          return true;
        }
   }
</script>


<script type="text/javascript">
  function cambiarestado2(cod, est){
  swal({
    title: "¿Realmente desea cambiar el estado del crédito?",
    type: "warning",
    confirmButton: "#3CB371",
    //confirmButtonText: "btn-danger",
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
            dataType:'json',
            type:'post',
            url:url+"Ventas/modificarEstadoC",
            data:{codigo:cod, estado:est}
          }).done(function(respuesta){
            if(respuesta.v == 1){
              window.location = url + "Ventas/listarVentasCredito";
            }else if(respuesta.v == 2){
            window.location = url + "Ventas/listarVentasCredito";
          }else{
            sweealert("Error cambiando el estado");
          }
          }).fail(function(){

          })
        });
      }
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

    function traerNombreCliente(id){
      $.ajax({
        url:url+"Ventas/ajaxNombreCliente",
        type:'POST',
        dataType: 'json',
        data:{ idCliente:id}
      }).done(function(respuesta){
        $("#cliente").text(respuesta.cliente);
        $("#cliente-abonos").text(respuesta.cliente);
        $("#cliente-DetallesAbonos").text(respuesta.cliente);
      });
    }
</script>

<script type="text/javascript">
$("#btn-Guardar-Abono").click(function(){

  $("#form-abonos").parsley().validate();
})

</script>


<script type="text/javascript">
  function cambiarestado(cod, est){
  swal({
    title: "¿Realmente desea cambiar el estado del abono?",
    type: "warning",
    confirmButton: "#3CB371",
    //confirmButtonText: "btn-danger",
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
            dataType:'json',
            type:'post',
            url:url+"Ventas/modificarestadoAbonos",
            data:{codigo:cod, estado:est}
          }).done(function(respuesta){
            if(respuesta.v == 1){
              // window.location = url + "Ventas/listarVentasCredito";
            }else if(respuesta.v == 0){
              // window.location = url + "Ventas/listarVentasCredito";
          }else{
            sweealert("Error cambiando el estado");
          }
          }).fail(function(){

          })
        });
      }
      });
}

</script>
