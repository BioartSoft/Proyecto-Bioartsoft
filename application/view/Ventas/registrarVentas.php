
<form id="forventas" method="post" action="<?= URL ?>Ventas/index"  name="fmVentas" data-parsley-validate="">
  <div class="panel panel-primary" style="margin-top: 5px">
   <div class="row">
    <br>

    <div class="panel-heading" stlyle="height: 70px; width: 100px">
      <center><span style="color: #337AB7; margin-top: 10px; margin-bottom: 10px; font-size: 25px">Registrar Ventas</span></center>
    </div>
    <div class="panel-body">
       <div class="col-md-5">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Cliente</strong></h3>
          </div>
          <div class="panel-body" id="cliente">
              <div class="form-group">
                <input type="hidden" name="empleado" value="<?= $_SESSION['USUARIO_ID'] ?>">
                <select class="form-control" id="ddlcliente" name="ddlcliente" style="width: 85%" data-parsley-required="true">
                  <option value="">Seleccionar</option>
                  <?php foreach ($cliente as $val): ?>
                    <?php if($val['estado'] == 1): ?>
                      <option data-creditos="<?= $val['total_creditos'] ?>" data-tipo="<?= $val['tipo']?>" value="<?= $val['documento'] ?>"><?= $val['documento']." - " .$val['nombres'] . " (" . $val['tipo_cliente'] . ")"?></option>
                    <?php else: ?>

                      <<?php endif; ?>
                <?php endforeach; ?>
                </select>
                  <button type="button" class="btn btn-primary pull-right btn-sm" title="Registrar Cliente" data-toggle="modal" data-target="#modal-registroCliente"><i class="fa fa-plus plus" title="Registrar Cliente"></i></button>
                <input type="hidden" id="tipoP" name="txttipo" value="<?= $val['Tbl_TipoPersona_idTbl_TipoPersona'] ?>">
            </div>
          </div>

      <div class="panel-heading">
        <h3 class="panel-title"><strong>Producto</strong></h3>
      </div>
      <div class="panel-body" id="panel"  style="height: 280px">
          <div class="form-group" id="productos">
            <select class="form-control" id="ddlproducto" name="ddlproducto" maxlength="20" onchange="ponerPrecio(this)" data-parsley-type="alphanum" data-parsley-required="true">
              <option value="">Seleccionar</option>
              <?php foreach ($producto as $value): ?>
                <?php if($value['estado'] == 1): ?>
                    <option Precio="<?= $value['precio_detal'] ?>" Precio2="<?= $value['precio_por_mayor'] ?>" data-cantidad="<?= $value['cantidad'] ?>" value="<?= $value['id_producto'] ?>" data-precio-unitario="<?= $value['precio_unitario'] ?>" data-algo="true">
                      <?= $value['id_producto']." ".$value['nombre_producto'] ?>
                    </option>
                <?php else:  ?>

                <?php endif; ?>
            <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <table class="table table-striped">
              <tr>
                <th style="text-align: center">Precio Detal</th>
                <th style="text-align: center">Precio Por Mayor</th>
                <th style="text-align: center">Aplicar Precio Al por Mayor</th>
              </tr>
              <tr>
                <td style="text-align: center" id="precio">0</td>
                <td style="text-align: center" id="precioPorMayor">0</td>
                <td style="text-align: center"><input type="checkbox" id="check"></td>
              </tr>
            </table>
            <input type="hidden" value="" id="unidades-actuales">
          </div>

          <div class="form-group" id="cantidad">
            <label for="form-control">Cantidad</label>
            <div class="input-group">
              <input type="text" id="txtcantidad" min="1" maxlength="6" name="txtcantidad" class="form-control" data-parsley-type="number" data-parsley-required="true">
              <div class="input-group-addon">Unidades (<span id="unidades-actuales-info"></span>)</div>
            </div>
        </div>

          <!-- <div class="form-group">
            <label for="form-control">Pago</label>
                <select class="form-control" id="select-pago"  name="txtpago" data-parsley-type="alphanum" data-parsley-required="true">
                  <option value="">Seleccionar</option>
                  <option value="1">Crédito</option>
                  <option value="2">Contado</option>
                </select>
              </div> -->
            <!-- <div style="display: none" id="div-plazo">
              <label for="form-control">Días Plazo Crédito</label>
              <input type="number" id="txtplazo" min="1" maxlength="2" max="30" name="txtplazo" class="form-control" data-parsley-type="number" data-parsley-required="true">
            </div> -->
              <!-- <br>
              <?php foreach ($listarConfiguracionVentas as $va): ?>
              <input type="hidden" value="<?= $va['Porcentaje_Maximo_Dcto'] ?>" id="porc-max">
              <input type="hidden" value="<?= $va['Porcentaje_Minimo_Dcto'] ?>" id="porc-min">
              <input type="hidden" value="<?= $va['Valor_Subtotal_Maximo'] ?>" id="vlr-max">
              <input type="hidden" value="<?= $va['Valor_Subtotal_Minimo'] ?>" id="vlr-min">
            <?php endforeach; ?> -->
              <!-- <div class="form-group" id="contenedorDescuento">
                <label for="form-control">Descuento</label>
                <input type="number" id="txt-campo-des" name="txt-campo-des" class="form-control" value="0" min="0" data-parsley-type="integer">
              </div> -->
            </div>
          </div>
          <button onclick="agregarProducto()" type="button" class="btn btn-primary pull-right" title="Agregar Producto"><i class="fa fa-plus plus" title="Agregar Producto"></i>   Agregar</button>
      </div>

  <div class="col-md-7">
    <div class="panel panel-primary detVenta">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Detalles Venta</strong></h3>
      </div>
      <div class="panel-body" id="detalleV">
        Seleccione para agregar
      </div>
      <div class="panel-footer">
        <h3 class="panel-title"><strong>Subtotal:</strong> <input type="hidden" id="txtsubtotal" name="txtsubtotal" value=""> <span id="sub-total">0</span></h3>
      </div>
       <div class="panel-footer">
        <h3 class="panel-title"><strong>Descuento:</strong> <input type="hidden" id="txtdescuento" name="txtdescuento" value="0"><span id="span-desc">0</span></h3>
      </div>
      <div class="panel-footer" id="foodertotal">
        <h3 class="panel-title"><strong>Total:</strong> <input type="hidden" id="txttotal" name="txttotal" value=""> <span id="total">0</span></h3>
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
        <div class="form-group">
          <label for="form-control">Tipo de Pago</label>
              <select class="form-control" id="select-pago" name="txtpago" data-parsley-type="alphanum" data-parsley-required="true">
                <option value="">Seleccionar</option>
                <option value="1">Crédito</option>
                <option value="2">Contado</option>
              </select>
            </div>
          </div>
            <div class="col-md-6">
              <div style="display: none" id="div-plazo">
                <label for="form-control">Días Plazo Crédito</label>
                <input type="number" id="txtplazo" min="1" maxlength="2" max="30" name="txtplazo" class="form-control" data-parsley-type="number" data-parsley-required="true">
              </div>
            </div>
            <br>
            <?php foreach ($listarConfiguracionVentas as $va): ?>
            <input type="hidden" value="<?= $va['Porcentaje_Maximo_Dcto'] ?>" id="porc-max">
            <input type="hidden" value="<?= $va['Porcentaje_Minimo_Dcto'] ?>" id="porc-min">
            <input type="hidden" value="<?= $va['Valor_Subtotal_Maximo'] ?>" id="vlr-max">
            <input type="hidden" value="<?= $va['Valor_Subtotal_Minimo'] ?>" id="vlr-min">
          <?php endforeach; ?>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group" id="contenedorDescuento">
                <label for="form-control">Descuento en Pesos</label>
                <input type="number" id="txt-campo-des" name="txt-campo-des" class="form-control" value="0" min="0" data-parsley-type="integer">
              </div>
            </div>
          </div>
          </div>
      </div>
      <button type="submit" class="btn btn-success pull-right" name="btn-guardar-venta" id="btnGuardar" onclick="validarCantidad()" title="Guardar Venta"><i class="fa fa-floppy-o" title="Guardar Venta"></i>   Guardar</button><br><br>
    </div>

  </div>
  <input type="hidden" id="txtProductoS" focus="true" autocomplete="off" >
   </div>
 </div>
 </form>

 <div class="modal fade" id="modal-registroCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
              </button>
                <center>
                  <h4 class="modal-title"  style="color: #337AB7" id="myModalLabel">Registrar Clientes (obligatorios *)</h4>
                </center>
              </div>
               <div class="modal-body">
                 <div class="row">
                   <div class="col-md-4">
                     <label for="txtTipoPersona">Tipo persona *</label>
                     <select class="form-control" id="tipoPersona" name="txtTipoPersona" style="width: 100%">
                       <option value="">Seleccionar tipo persona</option>
                       <?php foreach ($TipoPersona as $value): ?>
                         <option value="<?= $value['idTbl_tipo_persona'] ?>"><?= $value['Tbl_nombre_tipo_persona'] ?></option>
                        <?php endforeach; ?>
                     </select>
                   </div>
                   <div class="col-md-4">
                       <label for="txtTipoDocumento">Tipo de documento *</label>
                       <select name="txtTipoDocumento"class="form-control" id="documento" style="width: 100%" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\-\.\?_~\\ \\()\/$]+">
                           <option value="">Seleccionar tipo de documento</option>
                           <option value="Cedula">Cédula</option>
                           <option value="Cédula_Extranjera">Documento de  Extranjería</option>
                           <option value="Otro">Otro</option>
                       </select>
                     </div>
                      <div class="col-md-4">
                         <label for="">Número de documento *</label>
                         <input type="text" name="txtIdPersona" style="width: 100%" class="form-control" id="campoId" placeholder="Número Documento">
                     </div>
                   </div>
                   <br><br>

                   <div class="row">
                     <div class="col-md-4">
                         <label for="txtNombres">Nombres *</label>
                          <input type="text"  name="txtNombres" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" class="form-control" style="width: 100%" id="campoNombre" placeholder="Nombres">
                    </div>

                     <div class="col-md-4">
                         <label for="txtApellidos">Apellidos *</label>
                           <input type="text"  name="txtApellidos" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" class="form-control" id="campoApellido" placeholder="Apellidos">
                       </div>
                       <div class="col-md-4">
                           <label for="txtCelular">Número de Celular *</label>
                           <input type="text"  name="txtCelular" class="form-control" id="campoCelular" placeholder="Numero Celular">
                       </div>
                   </div>
                   <br><br>

                <div class="row">
                   <div class="col-md-4">
                     <label for="txtGenero">Género *</label>
                     <select id="genero" name="txtGenero" class="form-control" style="width: 100%" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+">
                         <option value="">Seleccionar</option>
                          <option value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
                     </select>
                   </div>
                     </div>
                     <br><br>
                    <hr>
                   </div>
                       <div class="row">
                       <div class="col-md-3">
                       </div>
                          <div class="col-md-3">
                              <button type="button" name="btnGuardarPersona" id="btn-guardar" class="btn btn-success active" onclick="registrarCliente()"><i class="fa fa-floppy-o" aria-hidden="true">  Guardar</i></button>
                          </div>
                            <div class="col-md-1">
                            </div>
                          <div class="col-md-3">
                            <button type="reset" class="btn btn-secondary active" data-dismiss="modal"><i class="fa fa-remove" aria-hidden="true">  Cerrar</i></button>
                         </div>
                      <div class="col-md-2">
                   </div>
                 </div>
                 <br>
               </div>
              </div>
            </div>
          </div>

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

   $("#txtProductoS").keydown(function(){

     $("#ddlproducto").val($("#txtProductoS").val()).trigger("change");
     $("#txtProductoS").val("")
     $("#txtProductoS").focus();
   })

     $("#forventas").submit(function(){
      var productos = $("[data-producto]").length;
      if(productos == 0) {
        swal({
              title: "No se encontraron productos asociados!",
              type: "error",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              closeOnConfirm: false,
              closeOnCancel: false
            });
      }else{

      }
       return productos > 0;

     });
     // este es el código
     $("#ddlproducto").change(function(){
        $("#txtcantidad").val();
        var op = $(this).find("option:selected");
        $("#unidades-actuales-info").html(op.attr("data-cantidad"));
     });

     $("#ddlcliente").select2();
     $("#ddlproducto").select2();
     $("#").change(function(){
        if ($(this).val() != null) {
            $("#contenedorDescuento").slideDown();
            $("#txt-campo-des").focus().select();
        }else{
            $("#contenedorDescuento").slideUp();
            $("#txtdescuento").val(0);
            $("#txt-campo-des").val(0);
        }
     calcularTotal();
     });

     $("#txt-campo-des").keyup(function(){
      var obj = $(this);
      setTimeout(function(){

         var desMin = parseInt($("#vlr-min").val());
         var desMax = parseInt($("#vlr-max").val());
         var porMax = parseFloat($("#porc-max").val()) / 100;
         var porMin = parseFloat($("#porc-min").val()) / 100;
         var descuento = parseFloat(obj.val());
         var total = parseFloat($("#txttotal").val());

         var valMinDes = total * porMin;
         var valMaxDes = total * porMax;

         console.log(valMinDes, valMaxDes, desMin, desMax);

         if(total > desMin && total < desMax && descuento > valMinDes){
           swal({
                 title: "Descuento mayor al " + (porMin * 100) + "%",
                 type: "error",
                 confirmButton: "#3CB371",
                 confirmButtonText: "Aceptar",
                 closeOnConfirm: false,
                 closeOnCancel: false
               });

           $("#txt-campo-des").val(valMinDes);
         } else if(total > desMax && descuento > valMaxDes){
           swal({
                 title: "Descuento mayor al " + (porMax * 100) + "%",
                 type: "error",
                 confirmButton: "#3CB371",
                 confirmButtonText: "Aceptar",
                 // confirmButtonText: "Cancelar",
                 closeOnConfirm: false,
                 closeOnCancel: false
               });
           $("#txt-campo-des").val(valMaxDes);
         }

         if(total < desMin){
            $("#txt-campo-des").val(0);
         }

        if(obj.val() == ""){
          $("#span-desc").text(0);
          $("#txtdescuento").val(0);
        }
        else if(obj.val() == "-"){
          swal({
                title: "No puede ingresar valores negativos!",
                type: "error",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              });

              $("#txt-campo-des").val("");
        }
        else {
          $("#span-desc").text(obj.val());
          $("#txtdescuento").val(obj.val());
        }
        calcularTotal();
      }, 100);
     });
   });

   function ponerPrecio(elemento){
     var valor = $("#ddlproducto").val();
     var precio = $("#ddlproducto [value='"+valor+"']").attr("Precio");
     var precio2 = $("#ddlproducto [value='"+valor+"']").attr("Precio2");
     var cantidad = $("#ddlproducto [value='" + valor + "']").attr("data-cantidad");
     $("#precio").text(precio);
     $("#precioPorMayor").text(precio2);
     $("#unidades-actuales").val(cantidad);
     $("#precio").priceFormat(
       {
         centsLimit:3,
         clearPrefix: true
       });

       $("#precioPorMayor").priceFormat(
         {
           centsLimit:3,
           clearPrefix: true
         });
   }

   function quitar(elemento){
     var e = $(elemento).parent().parent();
     $("#txt-campo-des").val("");
    $("#txtdescuento").val(0);
     $(e).remove();
     calcularTotal();
     sumarSubtotal();

     $(".subtotal").priceFormat(
       {
         centsLimit:3,
         clearPrefix: true
       });
   }

   function agregarProducto(){

     if(validarC()){
       if($("#forventas").parsley().validate()){
      // if(true){
         var cliente = $("#ddlcliente").val();
         var cant = $("#txtcantidad").val();
         var prod = $('#ddlproducto').val();

     if(cliente != " ")
     {
       if(cant <= 0){
         swal("Ingresar cantidad válida");
       }else{
         var productoCd = $("#ddlproducto").val();
         var productoText = $("#ddlproducto [value='"+productoCd+"']").text();

         var opt = $("#ddlcliente option:selected");
         var tipo = opt.attr("data-tipo");
         var checkeado = $("#check").is(":checked");
         var alPorMayor = $("#ctrl-por-mayor-" + productoCd).val();
         var precioUnitario = $("#ddlproducto option:selected").attr("data-precio-unitario");

         if(tipo == '5'){
           var precio = $("#precioPorMayor").text();
         } else if(alPorMayor != undefined && alPorMayor == 1) {
           var precio = $("#precioPorMayor").text();
         } else if(alPorMayor != undefined && alPorMayor == 0){
           var precio = $("#precio").text();
         } else if(tipo == '6' && checkeado === true){
           var precio = $("#precioPorMayor").text();
         }else {
           var precio = $("#precio").text();
         }
         var cantidad = $("#txtcantidad").val();
         precio = precio.replace(".", "");
         var precioGuardar = precio;
         var total = $("#total").val();
         var bandera = true;
         var romper = false;
         $(".datos").each(function(key,value){
           var v = $(value).find("input[id='txtProducto']").val();
           if(v == productoCd){
             var cantAnt = parseInt($(value).find("span.cantidad").text());
             var cantAct = parseInt($("#txtcantidad").val());
             var cTotal = parseInt($("#unidades-actuales").val());
             if((cantAnt + cantAct) > cTotal){
               swal({
                     title: "Cantidad actual: "+cTotal+ " unidades. Cantidad agregada " + cantAnt + " unidades.",
                     type: "error",
                     confirmButton: "#3CB371",
                     confirmButtonText: "Aceptar",
                     closeOnConfirm: false,
                     closeOnCancel: false
                   });
               romper = true;
             } else {
               var c = $(value).find("span.cantidad").text(cantAnt + cantAct);
               $("#cantidad-prod-"+productoCd).val(cantAnt + cantAct);
               $(value).find("p#cantidad").attr("data-cantidad", cantAnt + cantAct);
               var subAnt = parseInt($(value).find("span.subtotal").text().replace(".","").replace(",","").replace(",",""));
               var p = $(value).find("span.subtotal").text(subAnt + parseInt(precio * cantidad));
               $(value).find("p#subtotal").attr("data-valor", subAnt + parseInt (precio * cantidad));

               bandera = false;
             }
           }
         });

         if(romper === true){
           return false;
         }

         if(bandera == true){
           var html = '<div class="row datos" data-producto="true"><div class="col-md-9 cta-contents">';
           html += '<input type="hidden" id="ctrl-por-mayor-' + productoCd + '" value="' + (checkeado === true? '1' : '0') + '">'
           html += '      <h3 class="cta-title">'+productoText+'</h3>';
           html += '        <div class="cta-desc">';
           html += '           <p data-cantidad="'+cantidad+'" id="cantidad">Cantidad: <span class="cantidad" id="cantidad-' + productoCd + '">'+cantidad+'</span></p>';
           html += '           <p data-valor="'+precio * cantidad+'" id="subtotal">Valor subtotal: <span class="subtotal"> '+precio * cantidad+'</span></p>';
           html += '    </div>';
           html += '<input type="hidden" id="txtProducto" name="producto[]" value="'+productoCd+'">';
           html += '<input type="hidden" name="precioProducto[]" value="' + precioGuardar +  '" />';
           html += '<input type="hidden" name="precioUnitario[]" value="' + precioUnitario +  '" />';
           html += '<input type="hidden" name="cantidad[]" id="cantidad-prod-'+productoCd+'" value="'+cantidad+'">';
           html += ' </div>';
           html += '  <div class="col-md-3 cta-button">';
           html += '      <a href="#" onclick="quitar(this)" class="btn btn-md btn-danger" title="remover"><i class="fa fa-trash-o" title="remover"></i></a>';
           html += '    </div>';
           html += '  </div>';
           html += '</div>';

          $("#detalleV").append(html);
         }
         calcularTotal();
         sumarSubtotal();
         $("#txtcantidad").val(1);

         $("#total").priceFormat(
           {
             centsLimit:3,
             clearPrefix: true
           });
         $(".subtotal").priceFormat(
           {
             centsLimit:3,
             clearPrefix: true
           });
         }
       }
     }
   }
}

   function calcularTotal(){
     var total = 0;
     var descuento = parseInt($("#txtdescuento").val());

     $("[data-valor]").each(function(key, value){
       total += parseInt($(value).attr("data-valor"));
     });

     $("#total").html(total - descuento);
     $("#span-desc").html(descuento);
     $("#txttotal").val(total);
     $("#sub-total").html(total);

     $("#sub-total").priceFormat({
       centsLimit: 3,
       clearPrefix: true
     });

     $("#span-desc").priceFormat({
      centsLimit: 3,
      clearPrefix: true
     });

     $("#total").priceFormat({
      centsLimit: 3,
      clearPrefix: true
     });
    }

    function sumarSubtotal(){
      var subtotal = 0;
      $("[data-valor]").each(function(key, value){
       subtotal += parseInt($(value).attr("data-valor"));
     });

     $("#txtsubtotal").val(subtotal);
     $(".subtotal").priceFormat(
       {
         centsLimit: 3,
         claearPrefix: true
       }
     );
    }

 </script>

 <script type="text/javascript">
 $(document).ready(function(){

   $("#ddlcliente").change(function(){
     var option = $("#ddlcliente option:selected");
     var tipo = option.attr("data-tipo");
     if(tipo == '5'){
      $("#check").prop('checked', true);
     } else {
       $("#check").prop('checked', false);
     }
   })

 });

 </script>

<script type="text/javascript">
  $(function(){

    $("#txtcantidad").change(function(){

      var campoCant = $("#txtcantidad").val();
      var id = $("#ddlproducto").val();

      $.ajax({
        url: url + 'Ventas/validacion',
        data:{'id': id},
        type: 'post',
        dataType:"json",
        async:false
      }).done(function(resut){
        var cantidad = parseInt(resut.cantidad);
        var ccant = parseInt(campoCant);
        if(cantidad < ccant){
          swal({
                title: "Cantidad ingresada no disponible!\n Cantidad actual: "+resut.cantidad+ " unidades",
                type: "error",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              });

              $("#txtcantidad").val(resut.cantidad);
        }
      });
    });
  });

  function validarC()
  {
    var campoCant = $("#txtcantidad").val();
    var id = $("#ddlproducto").val();
    var bandera = true;
    $.ajax({
      url: url + 'Ventas/validacion',
      data:{'id': id},
      type: 'post',
      dataType:"json",
      async:false
    }).done(function(resut){
      var cantidad = parseInt(resut.cantidad);
      var ccant = parseInt(campoCant);
      if(cantidad < ccant){
        swal({
              title: "Cantidad ingresada no disponible!\n Cantidad actual: "+resut.cantidad+ " unidades",
              type: "error",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            });
        bandera = false;
      }
    });

    return bandera;
  }

</script>

<script type="text/javascript">

var band = true;
function validarCantidad(){

 var cant = $("#cantidad").val();

 if(cant > resut.cantidad){
   var band = false;
 }

}

</script>

<script type="text/javascript">
  $("#ddlcliente").change(function(){
    $("#select-pago").val("");
  });
  $("#select-pago").change(function(){
    if($(this).val() == 1){
      var cliente = $("#ddlcliente option:selected");
      var totalCreditos = parseInt(cliente.attr("data-creditos"));
      if(totalCreditos > 0){
        swal({
        title: "Este cliente ya tiene créditos registrados en estado pendiente!",
        type: "error",
        confirmButton: "#3CB371",
        confirmButtonText: "Aceptar",
        closeOnConfirm: false,
        closeOnCancel: false
        });
        $(this).val(2);
      }
    }

      if($("#select-pago").val() == "1"){
      $("#div-plazo").css("display", "block");
      $("#txtplazo").val(30);
    }else{
      $("#div-plazo").css("display", "none");
      $("#txtplazo").removeAttr("data-parsley-required");
    }
});

  $("#txtplazo").keyup(function(e){
    var input = $(this);

    setTimeout(function(){

      if(parseInt(input.val()) > 30){
        input.val(30);
      }else if(parseInt(input.val()) < 0){
          input.val(0);
      }

    }, 100);
  }).keydown(function(e){
    if(e.which === 189 || e.which === 69){
      e.preventDefault();
      //return false;
    }
  });
</script>


<script type="text/javascript">

function cancelar() {
     }
</script>

<script type="text/javascript">
  function registrarCliente(){

    var tipoPersona = $("#tipoPersona").val();
    var tipoDoc = $("#documento").val();
    var numeroDoc = $("#campoId").val();
    var nombres = $("#campoNombre").val();
    var apellidos = $("#campoApellido").val();
    var celular = $("#campoCelular").val();
    var genero = $("#genero").val();

    if(tipoPersona == "" || tipoDoc == "" || numeroDoc == "" || nombres == "" || apellidos == "" || celular == "" || genero == ""){
      swal({
        title: "Hay campos vacíos, no se puede guardar!",
        type: "error",
        confirmButton: "#3CB371",
        confirmButtonText: "Aceptar",
        // confirmButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: false
      });
    }else {

    $.ajax({
      type: 'post',
      url: '<?= URL ?>/Ventas/registrarCliente',
      data: {
        tipoPersona: tipoPersona,
        tipoDoc: tipoDoc,
        numeroDoc: numeroDoc,
        nombres: nombres,
        apellidos: apellidos,
        celular: celular,
        genero: genero,
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
        var select = $("#ddlcliente");
        var option = $("<option/>", {value: numeroDoc, 'data-creditos' : 0, 'data-tipo' : tipoPersona}).html(data.nombre);
        select.select2("destroy");
        select.prepend(option);
        select.select2({
          width: "100%",
        });
        $("#modal-registroCliente").modal("hide");
        select.select2('open');
        swal({
          title: "Guardado exitoso!",
          type: "success",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        });
      } else {

      }

      });
    }
}
</script>
