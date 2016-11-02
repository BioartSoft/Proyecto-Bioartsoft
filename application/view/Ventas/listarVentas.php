<div class="row">
    <div class="col-lg-12">
       <center> <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Ventas</h3></center>
    </div>
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
       <th>Código</th>
       <th>Total Venta</th>
       <th>Fecha Registro Venta</th>
       <th>Identificación Cliente</th>
       <th>Nombre Cliente</th>
       <th>Tipo Pago</th>
       <th>Estado</th>
       <th>Opciones</th>
     </tr>
   </thead>

   <tbody>
      <?php foreach ($Ventas as $value):?>
     <tr>
       <td><?= $value["id_ventas"] ?></td>
       <td class="price"><?= $value["total_venta"] ?></td>
       <td><?= $value["fecha_venta"] ?></td>
       <td><?= $value["Tbl_persona_idpersona_cliente"] ?></td>
       <td><?= $value["cliente"] ?></td>
       <td><?= $value["tipo_de_pago"] == 2? "Contado": "Crédito" ?></td>
       <td><?= $value["estado"] == 1?"Activa":"Anulada" ?></td>
       <td>

         <?php
                $fechaActual = date('Y-m-d');
         ?>

         <!-- <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2" onclick="traerDetallesVenta(<?= $value['id_ventas'] ?>)" title="Detalles venta"><i class="fa fa-eye" aria-hidden="true" title="Detalles venta"></i></button></a> -->
        <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2" onclick="traerDetallesVenta(<?= $value['id_ventas'] ?>)" title="Detalles venta"><i class="fa fa-eye" aria-hidden="true" title="Detalles venta"></i></button></a>

        <?php if($value['fecha_venta'] == $fechaActual): ?>
         <?php if(($value['estado'] == 1) && ($_SESSION['ROL'] == 1 || $_SESSION['ROL'] == 3)) { ?>
             <button type="button" class="btn btn-danger btn-circle btn-md" onclick="cambiarEstado(<?= $value['id_ventas']?>, 0)" title="Anular venta"><i class="fa fa-remove" aria-hidden="true" title="Anular venta"></i></button>
           <?php }else {?>
             <!-- <button type="button" class="btn btn-danger btn-circle btn-md" onclick="cambiarEstado(<?= $value['codigo']?>, 1)"><i class="fa fa-remove" aria-hidden="true"></i></button> -->
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
<div class="modal fade" id="myForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static" style="display:none" action="<?= URL ?>Ventas/index">
   <div class="modal-dialog" role="document">
       <div class="modal-content" style="">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
               <center>
                    <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Detalles de Venta Número: <span id="codigo-venta"></span></h4>
               </center>
             </div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-body">
          <h5><strong>Venta realizada por: <span id="empleado"></span></strong></h5>
        <div class="dataTable_wrapper">
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Fecha Venta</th>
                  <th>Nombre Cliente</th>
                  <th>Subtotal</th>
                  <th>Descuento</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td id="fecha-venta"></td>
                  <td id="cliente-venta"></td>
                  <td id="subtotal-venta"></td>
                  <td id="descuento-venta"></td>
                  <td id="total-venta"></td>
                </tr>
              </tbody>
            </table>
            <table class="table table-striped table-bordered table-hover" id="table-detalles-ventas">
              <thead>
                <tr>
                  <th>Producto</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>Total</th>
                </tr>
              </thead>
              <h4 style="color: #3CB371">Productos</h4>
              <tbody id="detalles-productos-venta">

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-9">
      <button type="button" class="btn btn-secondary btn-md active pull-right"  data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"> Cerrar</span></button>
    </div>
<?php if($_SESSION['ROL'] == 1 || $_SESSION['ROL'] == 3): ?>
    <div class="col-md-2">
      <a href="<?= URL ?>Ventas/generarpdfDetallesVentas" target="_blank" id="pdfDeta">
        <button class="btn btn-primary" name="btnComprasD"><i class="fa fa-file-pdf-o" aria-hidden="true">   Recibo de Caja</i></button>
      </a>
    </div>
<?php endif; ?>
  </div>
</div>
      <br>
    </div>
  </div>
</div>


<script type="text/javascript">

function traerDetallesVenta(id){
  var enlace = $("#pdfDeta");
  var nUrl = '<?= URL ?>Ventas/generarpdfDetallesVentas?id=' + id;
  enlace.attr("href", nUrl);


  $.ajax({
    url:url+"Ventas/ajaxDetallesVenta",
    type:'POST',
    dataType: 'json',
    data:{
      idVenta:id,
    }
  }).done(function(respuesta){
    $("#codigo-venta").text(respuesta.codigoV);
    $("#empleado").text(respuesta.empleado);
    $("#fecha-venta").text(respuesta.fecha);
    $("#cliente-venta").text(respuesta.cliente);
    $("#subtotal-venta").text(respuesta.subtotal).priceFormat({centsLimit: 3, clearPrefix: true});
    $("#descuento-venta").text(respuesta.descuento).priceFormat({centsLimit: 3, clearPrefix: true});
    $("#total-venta").text(respuesta.total).priceFormat({centsLimit: 3, clearPrefix: true});
    $("#detalles-productos-venta").html(respuesta.html);
    $(".price").priceFormat({centsLimit: 3, clearPrefix: true});
  });
}


function cambiarEstado(cod, est){
    var bandera = true;
  swal({
    title:"¿Realmente desea anular esta venta?",
    type: "warning",
    confirmButton: "#3CB371",
    confirmButtonText:"btn-error",
    cancelButtonText:"Cancelar",
    showCancelButton: true,
    confirmButtonClass:"btn-danger",
    confirmButtonText:"Aceptar",
    closeOnConfirm:false,
  },
      function(){
          var bandera = true;
        $.ajax({
          dataType:'json',
          type:'post',
          url:url+"Ventas/modificarEstado",
          data:{id:cod, estado:est},
          async: false
        }).done(function(respuesta){
          if(respuesta.v == 1){
            window.location = url + "Ventas/listarVentas";
          }else{

            bandera = false;
          }
        }).fail(function(){

        })
        });
          return bandera;
       }

       $(".modal-content").css({
         width: '900px'
       });
</script>
