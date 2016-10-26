<div class="row">
  <center>
    <div class="col-lg-12">
        <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Bajas</h3>
    </div>
  </center>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#5cb85c; color: white;">
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Código Producto</th>
                                <th>Nombre Producto</th>
                                <th>Categoría</th>
                                <!-- <th>Fecha Registro Baja</th> -->
                                <!-- <th>Cantidad</th>
                                <th>Tipo de Baja</th> -->
                                <th>Estado</th>
                                <th>Anular</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($bajas as $value): ?>
                           <tr>
                             <td><?= $value['Tbl_Productos_id_productos'] ?></td>
                             <td><?= $value['nombre_producto'] ?></td>
                             <td><?= $value['nombre'] ?></td>
                             <!-- <td><?= $value['fecha_salida'] ?></td>
                             <td><?= $value['Cantidad'] ?></td>
                             <td><?= $value['tipo_baja'] ?></td> -->
                             <td><?= $value['estado'] == 1? "Activo" : "Eliminado" ?></td>
                             <td>

                               <?php
                                    $fechaActual = date('Y-m-d');
                               ?>

                               <?php if($value['fecha_salida'] == $fechaActual): ?>
                               <?php if(($value['estado'] == 1) && ($_SESSION['ROL'] == 1 || $_SESSION['ROL'] == 3)) { ?>
                                   <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2" onclick="traerDetallesBaja(<?= $value['id_bajas'] ?>)" title="Ver Detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver Detalles"></i></button></a>
                                   <button type="button" class="btn btn-danger btn-circle btn-md" onclick="cambiarEstado(<?= $value['id_bajas']?>, 0)" title="Anular"><i class="fa fa-remove" aria-hidden="true" title="Anular"></i></button>
                                <?php }else {?>
                                    <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2" onclick="traerDetallesBaja(<?= $value['id_bajas'] ?>)" title="Ver Detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver Detalles"></i></button></a>
                                <?php } ?>
                                <?php else: ?>
                                  <!-- <button type="button" class="btn btn-danger btn-circle btn-md" onclick="cambiarEstado(<?= $value['id_bajas']?>, 0)" title="Anular"><i class="fa fa-remove" aria-hidden="true" title="Anular"></i></button> -->
                                  <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2" onclick="traerDetallesBaja(<?= $value['id_bajas'] ?>)" title="Ver Detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver Detalles"></i></button></a>
                                <?php endif; ?>
                             </td>
                           </tr>
                          <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
              </div>

            <div class="col-sm-12">
              <?php if($value['estado'] == 1): ?>
                <center>
                <a href="<?= URL ?>Existencias/informbajas" target="_blank">
                  <button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true">   Reporte PDF Bajas</i></button>
                </a>
              </center>
            <?php else: ?>

            <?php endif; ?>
            </div>
          </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="modal fade" id="myForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static" style="display:none" style="width: 50px" action="<?= URL ?>producto/listarProductos">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
               <center>
                    <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Detalles de Baja número: <span id="baja"><span></h4>
               </center>
             </div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <h5><strong>Baja Registrada por: <span class="empleado"></span></strong></h5>
        <div class="dataTable_wrapper">
          <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover">
              <thead>
                 <tr>
                  <th>Fecha Registro Baja</th>
                  <th>Tipo de Baja</th>
                  <th>Cantidad</th>
                </tr>
              </thead>
              <tbody class="precios" id="detalles-bajas">
              </tbody>
            </table>
            <button type="button" class="btn btn-secondary btn-md active pull-right"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<script type="text/javascript">

function cambiarEstado(cod, est){
    var bandera = true;
    swal({
      title: "¿Realmente desea anular la baja?",
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
        var bandera = true;
        if (isConfirm) {
          swal({
            title: "Baja Anulada.!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm){
            var bandera = true;
            $.ajax({
              dataType:'json',
              type:'post',
              url:url+"producto/AnularBaja",
              data:{id:cod, estado:est},
              async: false
            }).done(function(respuesta){
              if(respuesta.v == 1){
                window.location = url + "producto/listarBajas";
                bandera = false;
              }else{
                swal({
                  title: "Error al intentar anular la compra!",
                  type: "error",
                  confirmButton: "#3CB371",
                  confirmButtonText: "Aceptar",
                  // confirmButtonText: "Cancelar",
                  closeOnConfirm: false,
                  closeOnCancel: false
                });
              }
            }).fail(function(respuesta){
              if(respuesta.v == 0){
                swal({
                  title: "Error al intentar anular la compra!",
                  type: "error",
                  confirmButton: "#3CB371",
                  confirmButtonText: "Aceptar",
                  // confirmButtonText: "Cancelar",
                  closeOnConfirm: false,
                  closeOnCancel: false
                });
                  window.location = url + "producto/listarBajas";
              }

            })
            // location.href="<?= URL ?>Compras/listarCompras";
          });
        }
        });

        return bandera;
}

  function traerDetallesBaja(id){
    $.ajax({
      url:url+"producto/ajaxDetallesBajas",
      type:'POST',
      dataType: 'json',
      data:{
        'idbaja':id,
      }
    }).done(function(respuesta){
      $("#baja").text(respuesta.baja);
      $(".empleado").text(respuesta.empleado);
      $("#detalles-bajas").html(respuesta.html);
    });
  }
</script>
