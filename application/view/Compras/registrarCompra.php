
<form id="detallesC" action="<?= URL ?>Compras/registrarCompra" method="post" name="formC" data-parsley-validate="">
   <div class="row">

    <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Registrar Entradas</h3><br>
    <div id="frmC" method="post" data-parsley-validate="">

       <div class="col-md-5">
        <div class="panel panel-default">
          <div class="panel-heading">
            <input type="hidden" name="hdempleado" value="<?= $_SESSION['USUARIO_ID'] ?>">
            <h3 class="panel-title"><strong>Proveedor</strong></h3>
          </div>
          <div class="panel-body" class="panel-proveedor">
              <div class="form-group">
                <select class="form-control" id="ddlproveedor" name="ddlproveedor" data-parsley-required="true">
                  <option value="">Seleccionar</option>
                  <?php foreach ($proveedorJ as $value): ?>
                  <?php if($value['estado'] == 1): ?>
                    <option value="<?= $value['id_persona'] ?>"><?= $value['id_persona']. " ".$value['nombres']." (".$value['Tipo_proveedor'].")" ?></option>
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
          <!-- <div id="buscar-por-codigo">
            <div class="input-group">
              <input id="input-codigo" type="text" class="form-control" disabled="true">
              <div id="detector-pistola" class="input-group-addon" tabindex="10"><i class="fa fa-barcode"></i></div>
            </div>
          </div> -->
          <div class="form-group">
            <select class="form-control" id="ddlproducto" name="ddlproducto" onchange="ponerPrecio(this)" data-parsley-type="alphanum"  data-parsley-required="true">
              <option value="">Seleccionar</option>
              <?php foreach ($producto as $value): ?>
                <?php if($value['estado'] == 1): ?>
                  <option Precio="<?= $value['precio_unitario'] ?>" value="<?= $value['id_producto'] ?>"><?= $value['id_producto']." ".$value['nombre_producto'] ?></option>
                <?php else: ?>

                <?php endif; ?>
            <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="form-control">Precio</label>
            <p id="precio">0</p>
          </div>
          <div class="form-group" id="cant">
            <label for="">Cantidad</label>
            <input type="text" id="txtcantidad" min="1" maxlength="4" name="txtcantidad" class="form-control" data-parsley-type="number" data-parsley-required="true">
          </div>
          <button type="button" onclick="agregarProducto()" class="btn btn-primary pull-right"><i class="fa fa-plus plus"></i>   Agregar</button>
      </div>
    </div>
</div>

  <div class="col-md-7">
    <div class="panel panel-default detComp">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Detalles Compra</strong></h3>
      </div>
      <div class="panel-body" id="detalle">
        <strong>Seleccione para agregar</strong>
      </div>
      <div class="panel-footer" id="footer" >
        <h3 class="panel-title"><Strong>Total:</strong> <input type="hidden" name="txttotal" id="txttotal" data-parsley-required="true"><span id="total"><strong>0</strong></span></h3>
      </div>

    </div>
      <button type="submit" class="btn btn-success pull-right" id="btnguardarC" name="btn-guardar-compra" ><i class="fa fa-floppy-o"></i>   Guardar</button>
    </div>
  </div>
</div>
</form>
<input type="hidden" id="txtProductoS" focus="true" autocomplete="off" >
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

  //  setInterval(function() {
  //    $("#txtProductoS").focus();
  //  },5000)

   function ponerPrecio(elemento){
     var valor = $("#ddlproducto").val();
     var precio = $("#ddlproducto [value='"+valor+"']").attr("precio");
      var cant = $("#txtcantidad").val();
     $("#precio").text(precio);
     $("#precio").priceFormat(
       {
         centsLimit: 3,
         clearPrefix: true
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
     precio = precio.replace(".","");
     precioGuardar = precio.replace(".","");
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
       $("#txtcantidad").val(0);

       $(".subtotal").priceFormat(
         {
           centsLimit: 3,
           clearPrefix: true
         }
       );

     $("#total").priceFormat(
       {
         centsLimit: 3,
         clearPrefix: true
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
         clearPrefix: true
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


  //  function sumarCantidad(){
  //    var cantidad = $("#txtcantidad").val();
  //    $("[data-cantidad2]").each(function(key, value){
  //       cantidad += parseInt($(value).attr("data-cantidad2"));
   //
  //    });
  //   //  $(".subtotal").html(cantidad);
  //   $("#cant").val(attr("data-cantidad"));
   //
  //  }


 </script>
