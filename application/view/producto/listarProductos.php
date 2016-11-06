
<div class="row">
    <div class="col-lg-12">
       <center> <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Productos</h3></center>
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
       <th>Nombre Producto</th>
       <th>Categoría</th>
       <th>Talla</th>
       <th>Tamaño</th>
       <th>Cantidad </th>
       <th>Stock Mínimo</th>
       <th>Estado</th>
       <th>Opciones</th>
     </tr>
   </thead>

   <tbody>
     <?php foreach ($abrirpro as $val) :  ?>
     <tr>
       <td><?= $val["id_producto"]  ?></td>
       <td><?= $val["nombre_producto"]?></td>
       <td><?= $val["nombre"]?></td>
       <td><?= $val["talla"] ?></td>
       <td><?= $val["tamano"] ?></td>
       <td><?= $val["cantidad"] ?></td>
      <td><?= $val["stock_minimo"] ?></td>
       <td>
         <?php if($val['estado'] == 1): ?>
           Habilitado
         <?php else:  ?>
           Inhabilitado
         <?php endif ?>
       </td>

       <td>
        <?php if($val['estado'] == 1): ?>

        <?php if($_SESSION['ROL'] == 1 || $_SESSION['ROL'] == 3): ?>
          <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2"
          onclick="traerDetallesProducto(<?= $val['id_producto'] ?>)" title="Ver Detalles"><i class="fa fa-eye" aria-hidden="true"
          title="Ver Detalles"></i></button>

          <button type="button" onclick="Traerdatosdelproducto('<?= $val['id_producto'] ?>')"
            class="btn btn-success btn-circle btn-md" data-toggle="modal" data-target="#actualizar-producto" title="Modificar">
            <i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar"></i>
          </button>

             <a href="<?= URL ?>producto/generarPdfCodigo?id=<?= $val['id_producto'] ?>" target="_blank">
               <button class="btn btn-warning btn-circle btn-md" title="Generar Código de Barras">
                 <i class="fa fa-barcode" title="Generar Código de Barras"></i>
               </button>
             </a>

         <button type="button" class="btn btn-danger btn-circle btn-md" onclick="cambiarestado('<?= $val['id_producto']?>')" title="Cambiar Estado"><span class="glyphicon glyphicon-refresh" aria-hidden="true" title="Cambiar Estado"></span></button>
           <?php else : ?>
             <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2" onclick="traerDetallesProducto(<?= $val['id_producto'] ?>)" title="Ver Detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver Detalles"></i></button>

             <a href="<?= URL ?>producto/generarPdfCodigo?id=<?= $val['id_producto'] ?>" target="_blank">
               <button class="btn btn-warning btn-circle btn-md" title="Generar Código de Barras">
                 <i class="fa fa-barcode" title="Generar Código de Barras"></i>
               </button>
             </a>

        <?php endif; ?>
        <?php else:  ?>
          <button type="button" class="btn btn-danger btn-circle btn-md" onclick="cambiarestado('<?= $val['id_producto']?>')"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>

          <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2" onclick="traerDetallesProducto(<?= $val['id_producto'] ?>)" title="Ver Detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver Detalles"></i></button></a>
        <?php endif ?>
      </td>
</tr>
 <?php endforeach ?>

</tbody>
  </table>
</div>
<div class="row">
<div class="col-sm-2"></div>
  <div class="col-sm-4">
    <center>
    <a href="<?= URL ?>producto/generarPdfCodigoProductos" target="_blank">
      <button class="btn btn-primary"><i class="fa fa-barcode" aria-hidden="true">   Generar Todos los códigos</i></button>
    </a>
  </center>
  </div>
  <?php if($_SESSION['ROL'] == 1 || $_SESSION['ROL'] == 3): ?>
  <div class="col-sm-4">
    <center>
    <a href="<?= URL ?>producto/informefproducto" target="_blank">
      <button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true">   Reporte PDF Productos</i></button>
    </a>
  </center>
  </div>
<?php endif; ?>
</div>
</form>
</div>
</center>

<form action="" method="POST" id="form-modificar" data-parsley-validate="">
<div class="modal fade" id="actualizar-producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
  <div id="modal-mod-prod" method="post" data-parsley-validate="">

                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                          <center><h4 class="modal-title" id="myModalLabel" style="color: #3CB371">Modificar Producto</h4></center>
                      </div>
                   <div class="modal-body">
                       <div class="row">
                         <div class="col-md-6">
                         <label >Código</label><br>
                         <input id="txtcodigo-txt" disabled="true" style="margin-right:10px" type="text" class="form-control">
                         <input id="txtcodigo" name="txtcodigo"  type="hidden">
                         </div>
                     <div class="col-md-6">
                       <label >Nombre Producto </label><br>
                       <input id="txtnombreproducto" name="txtnombreproducto" type="text"  class="form-control" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" maxlength="50" data-parsley-required="true">
                   </div>
                   </div>

                   <br>
                   <div class="row">
                       <div class="col-md-6">
                       <label >Categoría</label><br>
                       <select id="txtcategoria" name="txtcategoria" name="txtcategoria" class="form-control" maxlength="20" data-parsley-type"alphanum" data-parsley-required="true">
                          <option value="">Seleccionar Categoría</option>
                          <?php foreach ($categorias as $value): ?>
                          <option value="<?= $value['id_categoria'] ?>"><?= $value['nombre']  ?></option>
                          <?php endforeach ?>
                       </select>
                    </div>
                    <div class="col-md-6" id="div-talla" name="txttalla">
                        <label id="lbltalla">Talla</label><br>
                        <select id="txttalla" name="txttalla" class="form-control" data-parsley-type="alphanum" maxlength="15">
                          <option value="">Seleccionar Talla</option>
                          <option>S</option>
                          <option>M</option>
                          <option>L</option>
                          <option>XL</option>
                          <option>XXL</option>
                        </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                     <div class="col-md-6" id="txttamano"  name="txttamano">
                        <label id="lbltamanio">Tamaño</label><br>
                     <input id="txttamano-input"  name="txttamano" type="text" class="form-control" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" maxlength="20">
                     </div>
                   </div>
                   <br>

                   <div class="row">
                     <div class="col-md-6">
                     <label>Precio Detal</label><br>
                      <input id="txtprecioventa" name="txtprecioventa" type="text" class="form-control"  data-parsley-type="integer" min="0" maxlength="10" data-parsley-required="true">
                   </div>

                     <div class="col-md-6" >
                       <label>Precio al por Mayor </label><br>
                       <input id="txtprecioalpormayor" name="txtprecioalpormayor" type="text" class="form-control" data-parsley-type="integer" min="0" maxlength="10" data-parsley-required="true">
                   </div>
                 </div>
                 <br>

                 <div class="row">
                   <div class="col-md-6">
                     <label>Precio Unitario</label><br>
                      <input type="text" id="txtpreciocompra" name="txtpreciocompra" class="form-control" data-parsley-type="integer" min="0" maxlength="10" data-parsley-required="true">
                   </div>

                   <div class="col-md-6">
                     <label >Stock Mínimo</label><br>
                      <input type="text" id="txtstock" name="txtstock" class="form-control" data-parsley-type="number" min="1" maxlength="3" data-parsley-required="true">
                   </div>
                   </div>
                 </div>
                   <br>

                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                   <button id="btn-modificar" type="submit" name="btn-modificar" class="btn btn-success btn-md active"><i class="fa fa-floppy-o" aria-hidden="true">   Modificar</i></button>
                </div>
               </div>
           </div>
        </div>
  </div>
</form>

<div class="modal fade" id="myForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static" style="display:none" style="width: 50px" action="<?= URL ?>producto/listarProductos">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
               <center>
                    <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Detalles de: <span id="producto"><span></h4>
               </center>
             </div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover">
              <thead>
                 <tr>
                  <th>Precio Unitario</th>
                  <th>Precio al Detal</th>
                  <th>Precio al por Mayor</th>
                </tr>
              </thead>
              <tbody class="precios" id="detalles-productos">
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

    $("#btn-modificar").click(function(){

      $("#form-modificar").parsley().validate();

    });

  });
</script>

<script type="text/javascript">
function cambiarestado(id){
  swal({
    title: "¿Realmente desea cambiar el estado del producto?",
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
            type:"POST",
            url:url+"producto/cambiarEstado",
            data:{
            'id':id,
          },
          }).done(function(respuesta){
            if(respuesta == 1){
              window.location = url + "producto/listarProductos";
            }else{
            sweetAlert("Error al cambiar el estado");
            }
          }).fail(function(){

          })

        });
      }
      });
}

function traerDetallesProducto(id){
  $.ajax({
    url:url+"producto/ajaxDetallesProducto",
    type:'POST',
    dataType: 'json',
    data:{
      'idproducto':id,
    }
  }).done(function(respuesta){
    $("#producto").text(respuesta.producto);
    $("#detalles-productos").html(respuesta.html);
    $(".price").priceFormat({centsLimit: 3, clearPrefix: true});
  });
}

</script>
