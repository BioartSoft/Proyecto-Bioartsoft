
<form id="detallesC" action="<?= URL ?>Compras/registrarCompra" method="post" name="formC" data-parsley-validate="">
  <br><br>
  <div class="panel panel-primary" style="margin-top: 5px">
    <div class="panel-heading" stlyle="height: 70px; width: 100px">
      <center><span style="color: #FFF; margin-top: 10px; margin-bottom: 10px; font-size: 25px">Registrar Entradas</span></center>
    </div>
   <div class="row">
     <br>

     <div class="panel-body">
       <div class="col-md-5">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <input type="hidden" name="hdempleado" value="<?= $_SESSION['USUARIO_ID'] ?>">
            <h3 class="panel-title"><strong>Proveedor</strong></h3>
          </div>
          <div class="panel-body" class="panel-proveedor">
              <div class="form-group">
                <select class="form-control" tabindex="1" id="ddlproveedor" name="ddlproveedor" data-parsley-required="true">
                  <option value="">Seleccionar</option>
                  <?php foreach ($proveedorN as $value): ?>
                  <?php if($value['estado'] == 1): ?>
                    <option value="<?= $value['id_persona'] ?>"><?= $value['id_persona']. " ".$value['nombres']." (".$value['Tipo_proveedor'].")" ?></option>
                  <?php else: ?>

                  <?php endif; ?>
                <?php endforeach; ?>
                <?php foreach($proveedorJ as $val): ?>
                  <?php if($value['estado'] == 1): ?>
                    <option value="<?= $val['id_persona'] ?>"><?= $val['id_persona']. " ".$val['nombres']." (".$val['empresa'].")" ?></option>
                  <?php else: ?>

                  <?php endif; ?>
                <?php endforeach; ?>
                </select>
              </div>
          </div>
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Producto</strong></h3>
      </div>
      <div class="panel-body">
          <div class="form-group">
            <select class="form-control" tabindex="2" id="ddlproducto" name="ddlproducto" onchange="ponerPrecio(this)" data-parsley-type="alphanum"  data-parsley-required="true" style="width: 85%">
              <option value="">Seleccionar</option>
              <?php foreach ($producto as $value): ?>
                <?php if($value['estado'] == 1): ?>
                  <option Precio="<?= $value['precio_unitario'] ?>" Precio2="<?= $value['precio_detal'] ?>" Precio3="<?= $value['precio_por_mayor'] ?>" value="<?= $value['id_producto'] ?>"><?= $value['id_producto']." ".$value['nombre_producto'] ?></option>
                <?php else: ?>

                <?php endif; ?>
            <?php endforeach; ?>
            </select>
            <button type="button" tabindex="3" class="btn btn-primary pull-right btn-sm" title="Registrar producto" data-toggle="modal" data-target="#modal-registroProducto"><i class="fa fa-plus plus" title="Registrar producto"></i></button>
          </div>

          <div class="row">
          <div class="form-group">
            <div class="col-md-3">
              <label for="form-control">Precio Unitario</label>
              <p id="precio">0</p>
           </div>
           <div class="col-md-3">
                <label for="form-control">Precio al Detal</label>
                <p id="precio2">0</p>
          </div>
          <div class="col-md-3">
            <label for="form-control">Precio por Mayor</label>
            <p id="precio3">0</p>
          </div>
          <div class="col-md3">
            <button type="button" tabindex="4" onclick="preciosProducto('<?= $value['id_producto'] ?>')"
              class="btn btn-success btn-circle btn-md" data-toggle="modal" data-target="#modal-modificarPrecios" title="Modificar">
              <i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar"></i>
            </button>
          </div>
          </div>
        </div>
        <br>
          <div class="form-group" id="cant">
            <label for="">Cantidad <span class="obligatorio">*</span></label>
            <input type="text" tabindex="5" id="txtcantidad" min="1" maxlength="4" name="txtcantidad" class="form-control" data-parsley-type="number" data-parsley-required="true">
          </div>
          <button type="button" tabindex="6" onclick="agregarProducto()" class="btn btn-primary active pull-right" id="btn-Agregar"><i class="fa fa-plus plus"></i>   Agregar</button>
      </div>
    </div>
</div>

  <div class="col-md-7">
    <div class="panel panel-primary detComp">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Detalles Entrada</strong></h3>
      </div>
      <div class="panel-body" id="detalle">
        <strong>Seleccione para agregar</strong>
      </div>
      <div class="panel-footer" id="footer" >
        <h3 class="panel-title"><Strong>Total:</strong> <input type="hidden" name="txttotal" id="txttotal" data-parsley-required="true"><span id="total"><strong>0</strong></span></h3>
      </div>

    </div>
    <div class="row">
      <div class="col-md-6 col-xs-12 col-lg-9">
      <button type="submit" tabindex="7" class="btn btn-success active pull-right" id="btnguardarC" name="btn-guardar-compra" ><i class="fa fa-floppy-o"></i>   Guardar</button>
    </div>
    <div class="col-md-6 col-xs-12 col-lg-3">
      <button type="reset" tabindex="8" class="btn btn-danger active pull-right" onclick="cancelar()" id="btncancelar" name="btn-cancelar-compra" ><i class="fa fa-remove"></i>   Cancelar</button>
      <input type="hidden" tabindex="9">
    </div>
  </div>
    </div>
  </div>
</div>
</div>
</form>
<input type="hidden" id="txtProductoS" focus="true" autocomplete="off" >

<form action="<?= URL ?>Compras/index" method="POST" id="form-modificar" data-parsley-validate="">
<div class="modal fade" id="modal-registroProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
               <center>
                 <h4 class="modal-title"  style="color: #337AB7" id="myModalLabel">Registrar Producto (obligatorios *)</h4>
               </center>
             </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4">
                    <label for="txtnombreProd">Nombre Producto <span class="obligatorio">*</span></label>
                    <input type="text" name="txtnombreProd" onkeypress="return soloLetras(event)" style="width: 100%" class="form-control" id="nombreProd" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" maxlength="50" class="form-control"  placeholder="Nombre Producto" data-parsley-required="true">
                  </div>
                  <div class="col-md-4">
                      <label for="txtCategoria">Seleccionar Categoría <span class="obligatorio">*</span></label>
                          <select name="txtCategoria" class="form-control" id="categoria" style="width: 100%" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \\()\/$]+" maxlength="20" data-parsley-required="true">
                              <option value="">Seleccionar</option>
                              <?php foreach($categoria as $categ): ?>
                                <option value="<?= $categ['id_categoria'] ?>"><?= $categ['nombre'] ?></option>
                            <?php endforeach; ?>
                          </select>
                    </div>
                  </div>
                  <br><br>

                  <div class="row">
                    <div class="col-md-4">
                       <label for="txtPrecioUnitario">Precio Unitario <span class="obligatorio">*</span></label>
                       <input type="text" name="txtPrecioUnitario" maxlenght="8" style="width: 100%"class="form-control" id="precioUnitario" data-parsley-type="integer" min="0" max="100000" step="10" class="form-control" placeholder="Precio Unitario" data-parsley-required="true">
                   </div>
                    <div class="col-md-4">

                        <label for="txtPrecioDetal">Precio Detal <span class="obligatorio">*</span></label>
                         <input type="text" maxlenght="8" name="txtPrecioDetal" class="form-control" style="width: 100%" id="precioDetal" data-parsley-type="integer" min="0" step="10" max="100000" placeholder="Precio Detal" data-parsley-required="true">
                   </div>

                    <div class="col-md-4">
                        <label for="txtPorMayor">Precio Por Mayor <span class="obligatorio">*</span></label>
                          <input type="text" maxlenght="8" name="txtPorMayor"  class="form-control" id="precioMayor" data-parsley-type="integer" min="0" step="10" max="100000" placeholder="Precio por Mayor" data-parsley-required="true">
                      </div>
                  </div>
                  <br><br>
                  <div class="row">
                    <div class="col-md-4">
                        <label for="txtStock">Stock Mínimo <span class="obligatorio">*</span></label>
                        <input type="text" maxlenght="8" name="txtStock" class="form-control" id="stock" data-parsley-type="number" min="1" type="number"  max="50" placeholder="Stock Mínimo" data-parsley-required="true">
                    </div>
                  </div>
                   <hr>
                  </div>
                      <div class="row">
                         <div class="col-md-6 col-xs-12 col-lg-8">
                           <button type="reset" class="btn btn-secondary active pull-right" data-dismiss="modal"><i class="fa fa-remove" aria-hidden="true">  Cerrar</i></button>
                        </div>
                        <div class="col-md-6 col-xs-12 col-lg-4">
                          <button type="submit" name="btnguardarProducto" id="btn-guardar" class="btn btn-success active" onclick="registrarProducto()"><i class="fa fa-floppy-o" aria-hidden="true">  Guardar</i></button>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
              </form>

              <script type="text/javascript">
                $(document).ready(function(){
                  $("#btnguardarC").blur(function(e){
                    $("#ddlproveedor").focus();
                  })
                })
              </script>

           <form action="<?= URL ?>Compras/index" method="POST" id="form-modificar" data-parsley-validate="" onsubmit="return validarPreciosCompra()">
           <div class="modal fade" id="modal-modificarPrecios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
             <div id="modal-mod-prod" method="post" data-parsley-validate="">
                             <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                 <div class="modal-body">
                                   <button type="button" data-toggle="modal" data-target="#mod_ayuda_precios">
                                     <i class="fa fa-question" aria-hidden="true" title="Ayuda"></i>
                                   </button>
                                   <br><br>
                            <div class="row">
                              <div class="col-xs-12 col-md-6 col-lg-12">
                                <div class="panel panel-primary">
                                  <div class="panel-heading" stlyle="height: 70px; width: 100px">
                                        <center><span class="modal-title" id="myModalLabel" style="color: #FFF; font-size: 20px">Modificar Precios Productos (obligatorios *)</span></center>
                                  </div>
                                  <div class="panel-body">
                              <input id="txtcodigo" name="txtcodigo" type="hidden">
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Precio Unitario <span class="obligatorio">*</span></label><br>
                                   <input type="text" id="txtpreciocompra" onkeypress="return soloNumeros(event)" name="txtpreciocompra" class="form-control" data-parsley-type="integer" min="0" maxlength="10" data-parsley-required="true">
                              </div>

                                <div class="col-md-6" >
                                  <label>Precio Detal <span class="obligatorio">*</span></label><br>
                                   <input id="txtprecioventa" onkeypress="return soloNumeros(event)" name="txtprecioventa" type="text" class="form-control"  data-parsley-type="integer" min="0" maxlength="10" data-parsley-required="true">
                              </div>
                            </div>
                            <br>

                            <div class="row">
                              <div class="col-md-6">
                                <label>Precio al por Mayor <span class="obligatorio">*</span></label><br>
                                <input id="txtprecioalpormayor" onkeypress="return soloNumeros(event)" name="txtprecioalpormayor" type="text" class="form-control" data-parsley-type="integer" min="0" maxlength="10" data-parsley-required="true">
                              </div>
                              </div>
                            </div>
                            <br>
                          </div>
                      </div>
                   </div>
                   <div class="row">
                     <div class="col-md-6 col-xs-12 col-lg-9">
                        <button type="button" class="btn btn-secondary btn-md active pull-right"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
                   </div>
                   <div class="col-md-6 col-xs-12 col-lg-3">
                     <button id="btn-modificar" type="submit" name="btn-modificar" class="btn btn-success btn-md active"><i class="fa fa-floppy-o" aria-hidden="true">   Modificar</i></button>
                   </div>
                 </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  </form>

  <div class="modal fade" id="mod_ayuda_precios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
                    <div class="modal-dialog" role="document" style="width: 50%">
                      <div class="modal-content">
                        <div class="modal-body">
                   <div class="row">
                     <div class="col-xs-12 col-md-6 col-lg-12">
                       <div class="panel panel-primary">
                         <div class="panel-heading" stlyle="height: 70px; width: 100px">
                               <center><span class="modal-title" id="myModalLabel" style="color: #FFF; font-size: 20px">Modificación Precios</span></center>
                         </div>
                         <div class="panel-body">
                             <p>Tener en cuenta para la modificación de los precios lo siguiente:</p>
                             <ul>
                               <li>El precio unitario no puede ser mayor precio al detal y precio al por mayor.</li>
                               <li>El precio al por mayor no puede ser menor al precio unitario, y tampoco mayor al precio al detal.</li>
                               <li>El precio al detal debe ser mayor al precio al por mayor y al precio unitario.</li>
                             </ul>
                         </div>
                         <br>
                       </div>
                     </div>
                   </div>
          <div class="row">
            <div class="col-md-6 col-xs-12 col-lg-12">
               <button type="button" class="btn btn-primary btn-md active pull-right"  data-dismiss="modal"><i class="fa fa-check-circle" aria-hidden="true">&nbsp;Aceptar</i></button>
             </div>
        </div>
    </div>
  </div>
</div>
</div>


<script>
  function soloNumeros(e){
     key = e.keyCode || e.which;
     tecla = String.fromCharCode(key).toLowerCase();
     letras = " 0123456789";
     especiales = "8-37-39-46";

     tecla_especial = false
     for(var i in especiales){
          if(key == especiales[i]){
              tecla_especial = true;
              break;
          }
      }

      if(letras.indexOf(tecla)==-1 && !tecla_especial){
          return false;
      }
  }
</script>


<script>
  function soloLetras(e){
     key = e.keyCode || e.which;
     tecla = String.fromCharCode(key).toLowerCase();
     letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
     especiales = "8-37-39-46";

     tecla_especial = false
     for(var i in especiales){
          if(key == especiales[i]){
              tecla_especial = true;
              break;
          }
      }

      if(letras.indexOf(tecla)==-1 && !tecla_especial){
          return false;
      }
  }
</script>

<style media="screen">
  #txtProductoS{
    border: 0 !important;
  }
  #txtProductoS:focus:hover{
    border: 0px solid white !important;
  }
  #txtProductoS:active{
    border: 0px solid white !important;
  }
  #txtProductoS:hover{
    border: 0px solid white !important;
  }
</style>
    <script type="text/javascript">
   $(document).ready(function(){
     var example = null;
     $("body").keydown(function(e){
       if(e.which == 13){
         $("#ddlproducto").val($("#txtProductoS").val()).trigger("change");
         $("#txtProductoS").val("");
         $("#txtcantidad").val("");
       } else {
         var c = String.fromCharCode(e.keyCode);
         var input = $("#txtProductoS");
         input.val(input.val() + c);
       }
     });

     $("#txtcantidad").keyup(function(e){
       $("#txtProductoS").val("");
     });

     $("body").attr("tabindex", "10");

     $("#ddlproveedor").change(function(){
       setTimeout(function(){
         $("body").focus();
       }, 200);
     });

     $("#detallesC").submit(function(){
      //  var enviar = validacion();
      //  alert(enviar);
      var productos = $("[data-producto]").length;
      if(productos == 0) {
        swal({
              title: "No se encontraron productos asociados!",
              type: "error",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            });
      }else{

      }
       return productos > 0;

     });

     $("#ddlproveedor").select2();
     $("#ddlproducto").select2();
    //  $("#txtProductoS").focus();
     $("#total").priceFormat(
       {
         centsLimit: 3,
         clearPrefix: true
       }
     );

   })

   $("#txtProductoS").keydown(function(){

     $("#ddlproducto").val($("#txtProductoS").val()).trigger("change");
     $("#txtProductoS").val("")
     $("#txtProductoS").focus();
   })

   function ponerPrecio(elemento){
     var valor = $("#ddlproducto").val();
     var precio = $("#ddlproducto [value='"+valor+"']").attr("precio");
     var precio2 = $("#ddlproducto [value='"+valor+"']").attr("precio2");
     var precio3 = $("#ddlproducto [value='"+valor+"']").attr("precio3");
      var cant = $("#txtcantidad").val();
     $("#precio").text(precio);
     $("#precio").priceFormat(
       {
         centsLimit: 3,
         prefix: '$ '
       }
     );


     $("#precio2").text(precio2);
     $("#precio2").priceFormat(
       {
         centsLimit: 3,
         prefix: '$ '
       }
     );

     $("#precio3").text(precio3);
     $("#precio3").priceFormat(
       {
         centsLimit: 3,
         prefix: '$ '
       }
     );


    $("#panel1").show(function(){
      $("#txtcantidad").val()
    });

   }

   function quitar(elemento){
     var e = $(elemento).parent().parent();
     $(e).remove();
     calcularTotal();
   }


   function agregarProducto(){

     if($("#detallesC").parsley().validate()){

     var proveedor = $("#ddlproveedor").val();
     var cant = $("#txtcantidad").val();

     if(proveedor != ""){
       if(cant <= 0){
         swal("Ingresar cantidad válida!");
       }else{

     var productoCd = $("#ddlproducto").val();
     var productoText = $("#ddlproducto [value='"+productoCd+"']").text();
     var precio = $("#precio").text();
     var precioGuardar = precio;
     var cantidad = $("#txtcantidad").val();
     precio = precio.replace(".","").replace("$", "");
     precioGuardar = precio.replace(".","").replace("$", "");
     var total = $("#total").val();

      var bandera = true;
      $(".datos").each(function(key, value){
         var v = $(value).find("input[id='txtProducto']").val();

         if(v == productoCd){
           var cantAnt = parseInt($(value).find("span.cantidad").text());
           var cantAct = parseInt($("#txtcantidad").val());
           $("#cantidad-prod-"+productoCd).val(cantAnt + cantAct);
           var c = $(value).find("span.cantidad").text(cantAnt + cantAct);
           $(value).find("p#cantidad").attr("data-cantidad", cantAnt + cantAct);
           $(value).find("p#cantidad").attr("data-cantidad", cantAnt + cantAct);

           var subAnt = parseInt($(value).find("span.subtotal").text().replace(".","").replace(",", ""));
           var p = $(value).find("span.subtotal").text( subAnt + parseInt(precio * cantidad) );
           $(value).find("p#subtotal").attr("data-valor", subAnt + parseInt(precio * cantidad));
           bandera = false;
         }
      });

      if(bandera == true){
        var html = '<div class="row datos" data-producto="true" ><div class="col-md-9 cta-contents">';
        html += '      <h3 class="cta-title">'+productoText+'</h3>';
        html += '        <div class="cta-desc">';
        html += '           <p data-cantidad="'+cantidad+'" id="cantidad" required value="">Cantidad: <span class="cantidad"> '+cantidad+'</span></p>';
        html += '           <p data-valor="'+precio * cantidad+'" id="subtotal" required value="">Valor subtotal: <span class="subtotal">'+precio * cantidad+'</span></p>';
        html += '    </div>';
        html += '<input id="txtProducto" type="hidden" name="producto[]" value="'+productoCd+'">';
        html += '<input type="hidden" name="precioProducto[]" value="' + precioGuardar +  '" />';
        html += '<input type="hidden" name="cantidad[]" id="cantidad-prod-'+productoCd+'" value="'+cantidad+'">';
        html += ' </div>';
        html += '  <div class="col-md-3 cta-button">';
        html += '      <a href="#" onclick="quitar(this)" class="btn btn-md btn-danger"><i class="fa fa-trash-o"></i></a>';
        html += '    </div>';
        html += '  </div>';
        html += '</div>';

        $("#detalle").append(html);
        $("#txtProductoS").focus();

      }

       calcularTotal();
       $("#txtcantidad").val(1);

       $(".subtotal").priceFormat(
         {
           centsLimit: 3,
           prefix: '$ '
         }
       );

     $("#total").priceFormat(
       {
         centsLimit: 3,
         prefix: '$ '
       });
   }

 }

 }

}//fin método agregar producto

   function calcularTotal(){
     var total = 0;
     $("[data-valor]").each(function(key, value){
       total += parseInt($(value).attr("data-valor"));

     });
     $("#total").html(total);
     $("#txttotal").val(total);

     $("#total").priceFormat(
       {
         centsLimit: 3,
         prefix: '$ '
       }
     );

   }//fin metodo calcular total

   function sumarSubtotal(){
     var subtotal = 0;
     $("[data-valor]").each(function(key, value){
        subtotal += parseInt($(value).attr("data-valor"));

     });
     $(".subtotal").html(subtotal);
     $(".subtotal").val(subtotal);

   }//Fin método sumar Subtotal
 </script>


 <script type="text/javascript">
   function registrarProducto(){

     var nombreProd = $("#nombreProd").val();
     var categ = $("#categoria").val();
     var talla = $("#txttalla").val();
     var precioUnit = $("#precioUnitario").val();
     var precioDet = $("#precioDetal").val();
     var precioMay = $("#precioMayor").val();
     var stockMin = $("#stock").val();

     if(nombreProd == "" || categ == "" || precioUnit == "" || precioDet == "" || precioMay == "" || stockMin == ""){
       swal({
         title: "Hay campos vacíos, no se puede guardar!",
         type: "error",
         confirmButton: "#3CB371",
         confirmButtonText: "Aceptar",
         closeOnConfirm: false,
         closeOnCancel: false
       });
     }else {

        // return validarNombre();

     $.ajax({
       type: 'post',
       url: '<?= URL ?>/Compras/registrarProducto',
       data: {
         nombreProd: nombreProd,
         categ: categ,
         talla: talla,
         precioUnit: precioUnit,
         precioDet: precioDet,
         precioMay: precioMay,
         stockMin: stockMin
       }
     }).done(function(data){
       if(data.error == true){
         swal({
           title: "Ocurrio un error!",
           type: "error",
           confirmButton: "#3CB371",
           confirmButtonText: "Aceptar",
           // confirmButtonText: "Cancelar",
           closeOnConfirm: false,
           closeOnCancel: false
         });
       } else if(data.error == false){
         var select = $("#ddlproducto");
         var option = $("<option/>").html(data.nombre);
         //select.select2("destroy");
         select.prepend(option);
         select.select2({
           width: "100%",
         });
         $("#modal-registroProducto").modal("hide");
         select.select2('open');
         swal({
           title: "Guardado exitoso!",
           type: "success",
           confirmButton: "#3CB371",
           confirmButtonText: "Aceptar",
           // confirmButtonText: "Cancelar",
           closeOnConfirm: false,
           closeOnCancel: false
         },
         function(isConfirm){
             if (isConfirm) {
                 window.location.reload();
               }else {
                  window.location.reload();
               }
               });
       } else {

       }

       });
     }
 }
 </script>


 <script>
 $(document).ready(function(){

   $("#categoria").select2();
 })
 </script>

 <script type="text/javascript">
   $("#precioUnitario").keydown(function(e){
     if(e.which === 189 || e.which === 69){
       e.preventDefault();
     }
   });

   $("#precioDetal").keydown(function(e){
     if(e.which === 189 || e.which === 69){
       e.preventDefault();
     }
   });

   $("#precioMayor").keydown(function(e){
     if(e.which === 189 || e.which === 69){
       e.preventDefault();
     }
   });

   $("#stock").keydown(function(e){
     if(e.which === 189 || e.which === 69){
       e.preventDefault();
     }
   });

   $("#txtpreciocompra").keydown(function(e){
     if(e.which === 189 || e.which === 69){
       e.preventDefault();
     }
   });

   $("#txtprecioventa").keydown(function(e){
     if(e.which === 189 || e.which === 69){
       e.preventDefault();
     }
   });

   $("#txtprecioalpormayor").keydown(function(e){
     if(e.which === 189 || e.which === 69){
       e.preventDefault();
     }
   });
 </script>


<script type="text/javascript">
  function validarNombre(){
    var campoNombre = $("#nombreProd").val()

    $.ajax({
      url: url + 'producto/validacionNombre',
      data:{'campoNombre': campoNombre},
      type: 'post',
      dataType:"text"
    }).done(function(resut){

      if(resut == "1"){
        swal({
              title: "Nombre de Producto ya existe, no se puede registrar!",
              type: "error",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              closeOnConfirm: false,
              closeOnCancel: false
            });
            return true;
            window.location.reload("Compras/index");
      }else{
        return false;
      }
    });
  }
</script>

 <script type="text/javascript">
   $(function(){

     $("#nombreProd").change(function(){

       var campoNombre = $("#nombreProd").val();

       $.ajax({
         url: url + 'producto/validacionNombre',
         data:{'campoNombre': campoNombre},
         type: 'post',
         dataType:"text"
       }).done(function(resut){

         if(resut == "1"){
           swal({
                 title: "Nombre de Producto ya existe, no se puede registrar!",
                 type: "error",
                 confirmButton: "#3CB371",
                 confirmButtonText: "Aceptar",
                 closeOnConfirm: false,
                 closeOnCancel: false
               });
         }
       });
     });
   });
 </script>

 <?php if (isset($errorNombre) && $errorNombre == false): ?>
 <script type="text/javascript">
     $(document).ready(function(){
       swal({
             title: "Nombre ya existe, no se puede registrar!",
             type: "error",
             confirmButton: "#3CB371",
             confirmButtonText: "Aceptar",
             // confirmButtonText: "Cancelar",
             closeOnConfirm: false,
             closeOnCancel: false
           });
     });
 </script>
 <?php endif; ?>

 <script type="text/javascript">
   function validarPreciosCompra(){
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
   function validarPreciosCompra2(){
     var precioUnit = $("#precioUnitario").val();
     var precioDet = $("#precioDetal").val();
     var precioMay = $("#precioMayor").val();

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

 function cancelar() {
     swal({
           title: "Los datos del registro no se guardarán",
           type: "warning",
           confirmButton: "#3CB371",
           confirmButtonText: "btn-danger",
           cancelButtonText: "Cancelar",
           showCancelButton: true,
           confirmButtonClass: "btn-danger",
           confirmButtonText: "Aceptar",
           closeOnConfirm: false,

           },
     function(isConfir){
         if (isConfir) {
           swal({
             title: "Registro cancelado!",
             type: "error",
             confirmButton: "#3CB371",
             confirmButtonText: "Aceptar",
             // confirmButtonText: "Cancelar",
             closeOnConfirm: false,
             closeOnCancel: false
           },
           function(isConfir){
             window.location.reload();
           });
         }
         });
      }
 </script>
