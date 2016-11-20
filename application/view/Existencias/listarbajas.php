
<div class="row">
    <br><br>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
          <div class="panel-heading" stlyle="height: 70px; width: 100px">
            <center><span style="text-align:center; color: #fff; margin-top: 10px; margin-bottom: 10px; font-size: 20px">Listar Bajas</span></center>
          </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Código Bajas</th>
                                <th>Empleado Responsable Baja</th>
                                <th>Estado</th>
                                <th>Fecha Baja</th>
                                <th>Anular</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($bajas as $value): ?>
                           <tr>
                             <td><?= $value['id_bajas'] ?></td>
                             <td><?= $value['nombre_persona'] ?></td>
                             <td><?= $value['estado'] == 1? "Activo" : "Eliminado" ?></td>
                             <td><?= $value['fecha_salida'] ?></td>
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
            <?php foreach ($bajas as $value): ?>
            <?php if($value['estado'] == 1): ?>
                <center>
                  <!-- <a href="<?= URL ?>Existencias/informbajas" target="_blank"> -->
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-reporte_bajas"><i class="fa fa-file-pdf-o" aria-hidden="true">&nbsp;&nbsp;Reporte Bajas</i></button>
                  <!-- </a> -->
                </center>
                <?php break; ?>
            <?php else: ?>
          <?php endif; ?>
          <?php endforeach; ?>
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
        <div class="modal-body">

            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-primary">
                  <div class="panel-heading" stlyle="height: 70px; width: 100px">
                      <center><span id="myModalLabel" style="text-align:center; color: #fff; font-size: 20px">Detalle de Baja Número: <span id="baja"><span></center>
                  </div>
                  <div class="panel-body">
                    <div class="dataTable_wrapper">
                      <div class="table-responsive">

                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                             <tr>
                              <th>Producto</th>
                              <th>Cantidad</th>
                              <th>Tipo de Baja</th>
                            </tr>
                          </thead>
                          <tbody class="precios" id="detalles-bajas">

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-secondary btn-md active pull-right"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-reporte_bajas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static" style="display:none" style="width: 50px" action="<?= URL ?>producto/listarProductos">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-body">

                <div class="row">
                  <div class="col-lg-12">
                    <div class="panel panel-primary">
                      <div class="panel-heading" stlyle="height: 70px; width: 100px">
                          <center><span id="myModalLabel" style="text-align:center; color: #fff; font-size: 20px">Reporte de Bajas</center>
                      </div>
                      <div class="panel-body">
                        <form id="formPdfBajas" action="<?= URL ?>producto/pdfBajas" method="post" data-parsley-validate="" target="_blank">
                        <div class="row">
                          <br>
                            <div class="panel-body">
                          <div class="row">
                            <div class="col-md-1"></div>
                            <div   class="col-md-6 col-xs-12 col-lg-5">
                                <label for="">Fecha Inicial </label>
                                <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" readonly="true"name="txtfechainicial" id="txtfechainicial" placeholder="Fecha Inicial" data-parsley-required="true">
                                <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                              </div>
                              </div>
                            </div>

                            <div   class="col-md-6 col-xs-12 col-lg-5">
                                <label for="">Fecha Final </label>
                                <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" name="txtfechafinal" readonly="true" id="txtfechafinal"  placeholder="Fecha final" data-parsley-required="true">
                                <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                              </div>
                              </div>
                          </div>
                          <div class="col-md-1"></div>
                        </div>
                        <br><br>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <button type="submit" class="btn btn-primary active" id="btn-pdf" name="btnconsultar" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"> Generar PDF Bajas</i></button>
                            </div>
                        </div>
                        </div>
                        </div>
                        </form>
                      </div>
                    </div>
                    <button type="button" class="btn btn-secondary btn-md active pull-right"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $(document).ready(function(){
            $("#btn-pdf").click(function(){
              $("#formPdfBajas").parsley().validate();
            })
          });
        </script>


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
                  title: "Error al intentar anular la baja!",
                  type: "error",
                  confirmButton: "#3CB371",
                  confirmButtonText: "Aceptar",
                  closeOnConfirm: false,
                  closeOnCancel: false
                });
              }
            }).fail(function(respuesta){
              if(respuesta.v == 0){
                swal({
                  title: "Error al intentar anular la baja!",
                  type: "error",
                  confirmButton: "#3CB371",
                  confirmButtonText: "Aceptar",
                  closeOnConfirm: false,
                  closeOnCancel: false
                });
                  window.location = url + "producto/listarBajas";
              }

            })

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
      $("#detalles-bajas").html(respuesta.html);
    });
  }
</script>
