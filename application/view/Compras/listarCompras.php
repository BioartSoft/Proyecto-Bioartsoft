<div class="row">
    <br><br>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
          <div class="panel-heading" stlyle="height: 70px; width: 100px">
                <center><span style="text-align:center; color: #fff; margin-top: 10px; margin-bottom: 10px; font-size: 20px">Listar Entradas</span></center>
          </div>
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
     <tr>
       <th>Código Entrada</th>
       <th>Valor Total</th>
       <th>Fecha Registro Entrada</th>
       <th>Identificación Proveedor</th>
       <th>Nombre Proveedor</th>
       <th>Estado</th>
       <th>Opciones</th>
     </tr>
   </thead>

   <tbody>
      <?php foreach ($datos as $value): ?>
     <tr>
       <td><?= $value["id_compras"] ?></td>
       <td class="valor"><?= $value["valor_total"] ?></td>
       <td><?= $value["fecha_compra"] ?></td>
       <td><?= $value["id_persona"] ?></td>
       <td><?= $value["proveedor"] ?></td>
       <td><?= $value["estado"] == 1?"Activa":"Anulada" ?></td>
       <td>
         <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2" onclick="traerDetallesCompra(<?= $value['id_compras'] ?>)" title="Ver Detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver Detalles"></i></button></a>

         <?php
                $fechaActual = date("Y-m-d");
         ?>

         <?php if($value['fecha_compra'] == $fechaActual): ?>
         <?php if(($value['estado'] == 1) && ($_SESSION['ROL'] == 1 || $_SESSION['ROL'] == 3)) { ?>
             <button type="button" class="btn btn-danger btn-circle btn-md" onclick="cambiarEstado(<?= $value['id_compras']?>, 0)" title="Anular"><i class="fa fa-remove" aria-hidden="true" title="Anular"></i></button>
           <?php }else {?>
           <?php } ?>
         <?php else: ?>

        <?php endif; ?>
       </td>
     </tr>
<?php endforeach; ?>
 </tbody>
  </table>
</div>
</div>

<div class="modal fade" id="myForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static" style="display:none" style="width: 50px" action="<?= URL ?>Compras/registrarCompra">
   <div class="modal-dialog" role="document">
       <div class="modal-content" style="width: 900px">
         <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-primary">
                  <div class="panel-heading" stlyle="height: 70px; width: 100px">
                        <center><span id="myModalLabel" style="text-align:center; color: #fff; font-size: 20px">Detalles de Entrada Número: <span id="codigoC"></span></center>
                  </div>
                <div class="panel-body" id="panel_compras">
                  <h5><strong>Entrada realizada por: <span id="empleado"></span></strong></h5>
                  <div class="dataTable_wrapper">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Fecha Entrada</th>
                            <th>Identificación Proveedor</th>
                            <th>Nombre Proveedor</th>
                            <th>Total Entrada</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td id="fecha-compra"></td>
                            <td id="id-proveedor"></td>
                            <td id="proveedor-compra"></td>
                            <td id="total-compra"></td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table table-striped table-bordered table-hover" id="table-detalles">
                        <thead>
                          <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        <h4 style="color: #337AB7">Productos</h4>
                        <tbody id="detalles-productos-compra">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9">
                <button type="button" class="btn btn-secondary btn-md active pull-right"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
              </div>

              <div class="col-md-0.5">
              </div>
              <?php if($_SESSION['ROL'] == 1 || $_SESSION['ROL'] == 3): ?>
              <div class="col-md-2">
                <a href="<?= URL ?>Compras/generarpdfDetallesCompras" target="_blank" id="pdfDeta">
                  <button class="btn btn-primary" name="btnComprasD"><i class="fa fa-file-pdf-o" aria-hidden="true">   Pdf Detalles Entradas</i></button>
                </a>
              </div>
            <?php endif; ?>
            </div>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">

$(document).ready(function(){

  $(".valor").priceFormat({centsLimit: 3, clearPrefix: true});

})

function traerDetallesCompra(id){
  var enlace = $("#pdfDeta");
  var nUrl = '<?= URL ?>Compras/generarpdfDetallesCompras?id=' + id;
  enlace.attr("href", nUrl);

  $.ajax({
    url:url+"Compras/ajaxDetallesCompra",
    type:'POST',
    dataType: 'json',
    data:{
      idCompra:id,
    }
  }).done(function(respuesta){
    $("#codigoC").text(respuesta.compra);
    $("#empleado").text(respuesta.empleado);
    $("#fecha-compra").text(respuesta.fecha);
    $("#proveedor-compra").text(respuesta.proveedor);
    $("#id-proveedor").text(respuesta.id);
    $("#total-compra").text(respuesta.total).priceFormat({
      centsLimit: 3,
      clearPrefix: true
    });
    $("#detalles-productos-compra").html(respuesta.html);
    $(".price").priceFormat({centsLimit: 3, clearPrefix: true});
  });
}

function cambiarEstado(cod, est){
    var bandera = true;
    swal({
      title: "¿Realmente desea anular esta entrada?",
      type: "warning",
      confirmButton: "#3CB371",
      confirmButtonText: "btn-danger",
      cancelButtonText: "Cancelar",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Aceptar",
      closeOnConfirm: false,

    },
    function(){
            var bandera = true;
            $.ajax({
              dataType:'json',
              type:'post',
              url:url+"Compras/modificarEstado",
              data:{id:cod, estado:est},
              async: false
            }).done(function(respuesta){
              if(respuesta.v == 1){

                window.location = url + "Compras/listarCompras";

              }else{

                  bandera = false;
              }
            }).fail(function(){


            })
            // location.href="<?= URL ?>Compras/listarCompras";
          });
          return bandera;
        }

        $(".modal-content").css({
          width: '900px'
        });
</script>
