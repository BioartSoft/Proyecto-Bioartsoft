<div class="row">
    <div class="col-lg-12">
       <center> <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Compras</h3></center>
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
       <th>Código Compra</th>
       <th>Valor Total</th>
       <th>Fecha Registro Compra</th>
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
         <?php if($value['estado'] == 1 && $_SESSION['ROL'] == 1) { ?>
             <button type="button" class="btn btn-danger btn-circle btn-md" onclick="cambiarEstado(<?= $value['id_compras']?>, 0)" title="Anular"><i class="fa fa-remove" aria-hidden="true" title="Anular"></i></button>
           <?php }else {?>
           <?php } ?>
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
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
               <center>
                    <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Detalles de Compra número: <span id="codigoC"></span></h4>
               </center>
             </div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <h5><strong>Compra realizada por: <span id="empleado"></span></strong></h5>
        <div class="dataTable_wrapper">
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Fecha Compra</th>
                  <th>Nombre Proveedor</th>
                  <th>Total Compra</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td id="fecha-compra"></td>
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
              <h4 style="color: #3CB371">Productos</h4>
              <tbody id="detalles-productos-compra">

              </tbody>
            </table>
            <button type="button" class="btn btn-secondary btn-md active pull-right"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
          </div>
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
      title: "Realmente desea anular está compra",
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
            title: "Compra Anulada.!",
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
              url:url+"Compras/modificarEstado",
              data:{id:cod, estado:est},
              async: false
            }).done(function(respuesta){
              if(respuesta.v == 1){
                window.location = url + "Compras/listarCompras";
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
                  window.location = url + "Compras/listarCompras";
              }

            })
            // location.href="<?= URL ?>Compras/listarCompras";
          });
        }
        });

        return bandera;
}

</script>
