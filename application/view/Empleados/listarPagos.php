<div class="row">
  <br><br>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-primary">
    <div class="panel-heading" stlyle="height: 70px; width: 100px">
        <center><span style="text-align:center; color: #fff; margin-top: 10px; margin-bottom: 10px; font-size: 20px">Listar Pagos</span></center>
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
                <th>Ver Detalle</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($listarEmp as $empleado): ?>
                <tr>
                  <td><?=  $empleado['id_persona'] ?></td>
                  <td><?=  $empleado['nombres'] ?></td>
                  <td><?=  $empleado['apellidos'] ?></td>
                  <td><?=  $empleado['Tbl_nombre_tipo_persona'] ?></td>
                  <td><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myJhoan" data-tipop = "<?=  $empleado['Tbl_nombre_tipo_persona'] ?>" title="Generar Recibo" onclick="traerDetallePagos('<?=  $empleado['id_persona'] ?>')"><i class="fa fa-eye" aria-hidden="true"></i></button>
                  <a href="<?= URL ?>Empleados/generarpdfPagos/<?= $empleado['id_persona'] ?>" target="_blank" id="pdfDetalPagos">
                      <button class="btn btn-success btn-circle btn-md" name="btnPdfPagos" title="Generar Pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
                  </a>
              <?php endforeach; ?>
              <div class="modal fade" id="myJhoan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
                <div class="modal-dialog modal-lg" role="document" style="width: 90% !important">
                  <div class="modal-content">
                    <div class="modal-body">
                      <form class="" action="" method="post">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="panel panel-primary" >
                            <div class="panel-heading" stlyle="height: 70px; width: 100px">
                                  <center><span style="text-align:center; color: #fff; font-size: 20px">Detalles de Pago de: <span id="empleadoId"></span> - <span id="empleado"></span></center>
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
                          <button type="button" class="btn btn-secondary btn-active pull-rigth"  data-dismiss="modal" style="margin-left:80%"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                      </div>
                    </td>
                  </tr>
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

      <div class="row">
      <div class="col-sm-12">
    <center>
    <a href="<?= URL ?>Empleados/informePagos" target="_blank">
      <button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true">   Reporte PDF Pagos</i></button>
    </a>
  </center>
  </div>
</div>
  </form>

  </center>


  <script type="text/javascript">
    function traerDetallePagos(id) {
      var enlace = $("#pdfDetalPagos");
      var nUrl = '<?= URL ?>Empleados/generarpdfPagos?id=' + id;
      enlace.attr("href", nUrl);

      traerNombreEmpleado(id);

      $.ajax({
        url: url+'Empleados/ajaxDetallePagos',
        type: 'post',
        dataType: 'json',
        data: {idPersona:id},
      })
      .done(function(respuesta) {

        var html = '<table class="table table-striped table-bordered table-hover" id="listarDetalle" style="width: 100% !important">' +
                                  '<thead id="titulos">' +
                                  '</thead>' +
                                  '<tbody id="detalles_pagos">' +
                                  '</tbody>' +
                                '</table>';
        $('#cont-table').html(html);
        $('#detalles_pagos').append(respuesta.html);
        $('#titulos').append(respuesta.cabecera);
        $(".price").priceFormat({centsLimit: 3, prefix: '$ '});

      var tabla = $('#listarDetalle').DataTable({
      language: {
        url: "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
      }, responsive: true,
      sort: false
        });

      });

    }
  </script>
  <script type="text/javascript">
    function cambiarestado(cod, est, iden, tipo){
      if (tipo == "Pago Final") {
        cambiarEstadoAlAnularLiquidacion(iden);
      };
      swal({
        title: "¿Realmente desea anular el pago?",
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
            title: "Pago anulado.!",
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
              url:url+"Empleados/modificarEstado",
              data:{id:cod, estado:est}
            }).done(function(respuesta){
              if(respuesta.v == 1){
                window.location = url + "Empleados/listarPagos";
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
  function traerNombreEmpleado(id){
    $.ajax({
      url:url+"Empleados/ajaxNombreEmpleado",
      type:'POST',
      dataType: 'json',
      data:{
        idPersona:id,
      }
    }).done(function(respuesta){
      $("#empleado").text(respuesta.html);
      $("#empleadoId").text(respuesta.id);

    });
  }

  function cambiarEstadoAlAnularLiquidacion(id) {
    $.ajax({
      url: url+'Personas/cambiarEstado',
      type: 'POST',
      dataType: 'JSON',
      data: {id: id},
    })
    .done(function() {
    });
  }
  </script>
