<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Pagos</h3>
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
                <th>Ver Detalle</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($listarE as $empleado): ?>
                <tr>
                  <td><?=  $empleado['id_persona'] ?></td>
                  <td><?=  $empleado['nombres'] ?></td>
                  <td><?=  $empleado['apellidos'] ?></td>
                  <td><?=  $empleado['Tbl_nombre_tipo_persona'] ?></td>
                  <td><button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myJhoan" data-tipop = "<?=  $empleado['Tbl_nombre_tipo_persona'] ?>" title="Generar Recibo" onclick="traerDetallePagos('<?=  $empleado['id_persona'] ?>')"><i class="fa fa-eye" aria-hidden="true"></i></button>
              <?php endforeach; ?>
              <div class="modal fade" id="myJhoan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Detalles de pago de <span id="empleado"></span></h4>
                    </div>
                    <div class="modal-body">
                      <form class="" action="" method="post">
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
                    <button type="button" class="btn btn-secondary btn-active pull-rigth"  data-dismiss="modal" style="margin-left:80%"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                </div>
  </td>
       </tr>
   </tbody>
    </table>
  </div>
  </form>
  </div>
  </center>
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
                <div class="modal-dialog" role="document" >
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">¿Generar Recibo de pago?</h4>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-xs active"  data-dismiss="modal">No</button>
                        <a href="<?= URL ?>Empleados/reciboPago"><button type="button" class="btn btn-primary btn-xs active">Si</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  <script type="text/javascript">
    function traerDetallePagos(id) {
      traerNombreEmpleado(id);

      $.ajax({
        url: url+'Empleados/ajaxDetallePagos',
        type: 'post',
        dataType: 'json',
        data: {idPersona:id},
      })
      .done(function(respuesta) {

        var html = '<table class="table table-striped table-bordered table-hover" id="listarDetalle" style="width: 100% !important">' +
                                  '<thead id="titulos" >' +
                                  '</thead>' +
                                  '<tbody id="detalles_pagos">' +
                                  '</tbody>' +
                                '</table>';
                                '';
        $("#cont-table").html(html);
        $('#detalles_pagos').append(respuesta.html);
        $('#titulos').append(respuesta.cabecera);
        $(".price").priceFormat({centsLimit: 3, clearPrefix: true});

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
    function cambiarestado(cod, est){
    swal({
      title: "¿Realmente Desea Anular el Pago?",
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
            title: "Pago Anulado.!",
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

    });
  }
  </script>
