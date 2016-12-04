
<div class="row">
    <br><br>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading" stlyle="height: 70px; width: 100px">
              <center> <span style="color: #fff; margin-top: 10px; margin-bottom: 10px; font-size: 20px">Listar Productos</span></center>
            </div>
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
     <tr>
       <th>Código</th>
       <th>Nombre Producto</th>
       <th>Categoría</th>
       <th>Descripción</th>
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

             <a href="" target="_blank" data-toggle="modal" data-target="#myForm3">
               <button class="btn btn-warning btn-circle btn-md" title="Generar Código de Barras" onclick="traerDetallesProducto('<?= $val['id_producto']?>')">
                 <i class="fa fa-barcode" title="Generar Código de Barras"></i>
               </button>
             </a>
         <button type="button" class="btn btn-danger btn-circle btn-md" onclick="cambiarestado('<?= $val['id_producto']?>')" title="Cambiar Estado"><span class="glyphicon glyphicon-refresh" aria-hidden="true" title="Cambiar Estado"></span></button>
       <?php else : ?>
             <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2"
             onclick="traerDetallesProducto(<?= $val['id_producto'] ?>)" title="Ver Detalles"><i class="fa fa-eye"
             aria-hidden="true" title="Ver Detalles"></i></button>

             <a href="<?= URL ?>producto/generarPdfCodigo?id=<?= $val['id_producto'] ?>" target="_blank">
               <button class="btn btn-warning btn-circle btn-md" title="Generar Código de Barras">
                 <i class="fa fa-barcode" title="Generar Código de Barras"></i>
               </button>
             </a>

        <?php endif; ?>
        <?php else:  ?>
          <button type="button" class="btn btn-primary btn-circle btn-md" data-toggle="modal" data-target="#myForm2" onclick="traerDetallesProducto(<?= $val['id_producto'] ?>)" title="Ver Detalles"><i class="fa fa-eye" aria-hidden="true" title="Ver Detalles"></i></button></a>
          <button type="button" class="btn btn-danger btn-circle btn-md" onclick="cambiarestado('<?= $val['id_producto']?>')"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
        <?php endif ?>
      </td>
</tr>
 <?php endforeach ?>

</tbody>
  </table>
</div>
<div class="row">
<div class="col-sm-2"></div>
  <!-- <div class="col-sm-4">
    <center>
    <a href="<?= URL ?>producto/generarPdfCodigoProductos" target="_blank">
      <button class="btn btn-primary"><i class="fa fa-barcode" aria-hidden="true">   Generar Todos los códigos</i></button>
    </a>
  </center>
  </div> -->
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

<form action="" method="POST" id="form-modificar" data-parsley-validate="" onsubmit="return validarPreciosModificacion()">
<div class="modal fade" id="actualizar-producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
  <div id="modal-mod-prod" method="post" data-parsley-validate="">

                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">

                          <center><h4 class="modal-title" id="myModalLabel" style="color: #337AB7">Modificar Producto (obligatorios *)</h4></center>
                      </div>
                   <div class="modal-body">
                       <div class="row">
                         <div class="col-md-6">
                         <label >Código</label><br>
                         <input id="txtcodigo-txt" tabindex="1" readonly="true" style="margin-right:10px" type="text" class="form-control">
                         <input id="txtcodigo" name="txtcodigo"  type="hidden">
                         </div>
                     <div class="col-md-6">
                       <label >Nombre Producto <span class="obligatorio">*</span></label><br>
                       <input id="txtnombreproducto" tabindex="2" name="txtnombreproducto" type="text"  class="form-control" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" maxlength="50" data-parsley-required="true">
                   </div>
                   </div>

                   <br>
                   <div class="row">
                       <div class="col-md-6">
                       <label >Categoría <span class="obligatorio">*</span></label><br>
                       <select id="txtcategoria1" tabindex="2" name="txtcategoria1"  class="form-control" maxlength="20" data-parsley-type"alphanum" data-parsley-required="true">
                          <option value="">Seleccionar Categoría <span class="obligatorio">*</span></option>
                          <?php foreach ($categorias as $value): ?>
                          <option value="<?= $value['id_categoria'] ?>"><?= $value['nombre']  ?></option>
                          <?php endforeach ?>
                       </select>
                    </div>

                       <div class="col-md-6" id="txttamano"  name="txttamano">
                          <label id="lbltamanio">Descripción</label><br>
                          <textarea id="txttamano-input" tabindex="4"  name="txttamano" type="text" class="form-control" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" maxlength="20"></textarea>
                       </div>
                  </div>
                  <br><br>
                   <div class="row">
                     <div class="col-md-6">
                     <label>Precio Detal <span class="obligatorio">*</span></label><br>
                      <input id="txtprecioventa" tabindex="5" name="txtprecioventa" type="number" class="form-control"  data-parsley-type="integer" min="0" maxlength="10" step="50" data-parsley-required="true">
                   </div>

                     <div class="col-md-6" >
                       <label>Precio al por Mayor <span class="obligatorio">*</span></label><br>
                       <input id="txtprecioalpormayor" tabindex="6" name="txtprecioalpormayor" type="number" class="form-control" data-parsley-type="integer" min="0" maxlength="10" step="50" data-parsley-required="true">
                   </div>
                 </div>
                 <br>

                 <div class="row">
                   <div class="col-md-6">
                     <label>Precio Unitario <span class="obligatorio">*</span></label><br>
                      <input type="number" id="txtpreciocompra" tabindex="7" name="txtpreciocompra" class="form-control" data-parsley-type="integer" min="0" maxlength="10" step="50" data-parsley-required="true">
                   </div>

                   <div class="col-md-6">
                     <label >Stock Mínimo <span class="obligatorio">*</span></label><br>
                      <input type="number" id="txtstock" name="txtstock" class="form-control" data-parsley-type="number" min="1" maxlength="3" step="1" data-parsley-required="true">
                   </div>
                   </div>
                 </div>
                   <br>

                 <div class="modal-footer">
                   <button type="button" tabindex="8" class="btn btn-secondary btn-md active"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                   <button id="btn-modificar" tabindex="9" type="submit" name="btn-modificar" class="btn btn-success btn-md active"><i class="fa fa-floppy-o" aria-hidden="true">   Modificar</i></button>
                   <input type="hidden" tabindex="10">
                </div>
               </div>
           </div>
        </div>
  </div>
</form>

<script type="text/javascript">
  $(document).ready(function(){
    $("#btn-modificar").blur(function(e){
      $("#txtcodigo-txt").focus();
    })
  })
</script>

<div class="modal fade" id="myForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static" style="display:none" style="width: 50px" action="<?= URL ?>producto/listarProductos">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-body">

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" stlyle="height: 70px; width: 100px">
            <center><span id="myModalLabel" style="text-align:center; color: #fff; font-size: 20px">Detalles de: <span id="producto"></span> (<span id="producto3"></span>)</center>
        </div>
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


<div class="modal fade" id="myForm3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static" style="display:none" style="width: 50px" action="<?= URL ?>producto/listarProductos">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-body">
           <form method="POST"  id="form-2" target="_blank" role="form"  data-parsley-validate="">

            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading" stlyle="height: 70px; width: 100px">
                        <center><span id="myModalLabel" style="text-align:center; color: #fff; font-size: 20px">Producto: <span id="productoid"> </span> - <span id="producto2"></span></span></center>
                    </div>
                  <div class="panel-body">
                    <div class="dataTable_wrapper">
                      <div >
                         <center>
                          <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-4">
                            <input type="number" tabindex="1" id="txtCantidad" name="txtCantidad" class="form-control" data-parsley-type="number" min="1" maxlength="3" step="1" data-parsley-required="true" placeholder="Ingresar cantidad">
                          </div>
                        <div class="col-md-2">

                        <button  type="submit" tabindex="2" name="btn-imprimir" class="btn btn-success btn-md active" id="enviar-imprimir"><i class="fa fa-floppy-o" aria-hidden="true">   Generar Código</i></button>
                        </div>
                      <div class="col-md-3">
                      </div>
                        </center>
                      </div>
                      </div>
                    </div>
                  </div>
                    <button type="reset" tabindex="3" id="mcerrar"  onclick="" class="btn btn-secondary btn-md active pull-right"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                    <input type="hidden" tabindex="4">
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#mcerrar").blur(function(e){
          $("#txtCantidad").focus();
        })
      })
    </script>



<script type="text/javascript">
  $(document).ready(function(){

    $("#btn-modificar").click(function(){

      $("#form-modificar").parsley().validate();

    });

  });
</script>
<script type="text/javascript">
  $(document).ready(function(){

    $("#mcerrar").click(function(){

      $("#txtCantidad").val("");

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
  // here
  var form = $("#form-2");
  var _url = '<?= URL ?>producto/generarPdfCodigo?id=' + id;
  form.attr("action", _url);

  $.ajax({
    url:url+"producto/ajaxDetallesProducto",
    type:'POST',
    dataType: 'json',
    data:{
      'idproducto':id,
    }
  }).done(function(respuesta){

    $("#producto").text(respuesta.producto);
    $("#producto2").text(respuesta.producto);
    $("#producto3").text(respuesta.id2);
    $("#productoid").text(respuesta.id2);
    $("#detalles-productos").html(respuesta.html);
    $(".price").priceFormat({centsLimit: 3, prefix: '$ '});
  });
}
</script>

<script type="text/javascript">
  function validarPreciosModificacion(){
    var precioUnit = $("#txtpreciocompra").val();
    var precioDet = $("#txtprecioventa").val();
    var precioMay = $("#txtprecioalpormayor").val();

    if((precioUnit >  precioDet && precioUnit > precioMay) || precioDet < precioMay || precioMay < precioUnit){
      swal({
            title: "Precios inválidos, verificar valores!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          });
          return false;
    }else{
      return true;
    }
  }
</script>


<script type="text/javascript">
  $("#txtpreciocompra").keydown(function(e){
    if(e.which === 189 || e.which === 69 || e.which === 190){
      e.preventDefault();
    }
  });

  $("#txtprecioventa").keydown(function(e){
    if(e.which === 189 || e.which === 69 || e.which === 190){
      e.preventDefault();
    }
  });

  $("#txtprecioalpormayor").keydown(function(e){
    if(e.which === 189 || e.which === 69 || e.which === 190){
      e.preventDefault();
    }
  });

  $("#txtstock").keydown(function(e){
    if(e.which === 189 || e.which === 69 || e.which === 190){
      e.preventDefault();
    }
  });

  $("#txtCantidad").keydown(function(e){
    if(e.which === 189 || e.which === 69 || e.which === 190){
      e.preventDefault();
    }
  })
</script>
