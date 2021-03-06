
<form id="frmBajas" method="post"  action="<?= URL ?>producto/registrarBajas" data-parsley-validate="">
   <div class="row">


    <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Registrar Bajas</h3><br>
    <div id="frmB" method="post" data-parsley-validate="">

    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Información de la Baja</strong></h3>
        </div>

        <div class="panel-body">
          <div class="form-group">
            <label for="">Tipo de baja</label>
            <select name="tipo_baja" id="baja" class="form-control" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" data-parsley-required="true">
              <option value="">Seleccionar</option>
              <option value="Robo">Robo</option>
              <option value="Averia">Averia</option>
            </select>
          </div>
          <hr>
          <div class="form-group">
            <label for="">Producto</label>

            <select class="form-control" id="cmb_producto" name="cmb_producto" data-parsley-type="alphanum" data-parsley-required="true">
              <option value="">Seleccionar</option>
              <?php foreach ($producto as $value): ?>
                <?php if($value['estado'] == 1): ?>
                  <option value="<?= $value['id_producto'] ?>" data-cantidad="<?= $value['cantidad']?>" ><?= $value['id_producto']. " ".$value['nombre_producto'] ?></option>
                <?php else: ?>

                <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group" id="cantidad">
            <label for="">Cantidad</label>
            <input id="txt_cantidad" type="text" class="form-control" min="1" maxlength="4" data-parsley-type="number" data-parsley-required="true">
            <input type="hidden" value="" id="unidades-actuales">
          </div>
          <div class="form-group">
            <button  type="button" class="btn btn-primary pull-right" id="btn-agregar"><i class="fa fa-plus plus"></i>   Agregar</button>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <table id="tabla-detalles" class="table table-bordered">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
       <button class="btn btn-success pull-right" id="btn-guardarBajas" type="submit"  name="btn-agregar"><i class="fa fa-floppy-o" ></i>   Guardar</button>
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

<script>
$(document).ready(function(){

  var example = null;
  $("body").keydown(function(e){
    if(e.which == 13){
      $("#cmb_producto").val($("#txtProductoS").val()).trigger("change");
      $("#txtProductoS").val("");
    } else {
      var c = String.fromCharCode(e.keyCode);
      var input = $("#txtProductoS");
      input.val(input.val() + c);
    }
  });

  $("#txt_cantidad").keyup(function(e){
    $("#txtProductoS").val("");
  });

  $("body").attr("tabindex", "10");

  $("#baja").change(function(){
    setTimeout(function(){
      $("body").focus();
    }, 200);
  });

    $("#baja").select2();
    $("#cmb_producto").select2();

  $("#frmBajas").submit(function(){
   var productos = $("[data-producto]").length;
   if(productos == 0) {
     swal({
           title: "No se encontrarón productos asociados!",
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
})


  $(function(){
    $("#btn-agregar").click(function(){
      agregarfila();
      return false;
    });
  });

  function agregarfila(){

    if(validarC()){

    if($("#frmBajas").parsley().validate()){

      var productoTxt = $("#cmb_producto option:selected").text();

      var producto = $("#cmb_producto").val();

      var cantidad = $("#txt_cantidad").val();

      var cantidad2 = $("#cmb_producto [value='" + producto + "']").attr("data-cantidad");

      $("#unidades-actuales").val(cantidad2);

      if(cantidad <= 0){
         swal("Ingresar una cantidad válida!");
      }else{

      var bandera =  true;
      var romper = false;
      $(".datos").each(function(key,value){
        var v=$(value).find("input[id='txtproducto']").val();
         if(v == producto){
            var cantAnt = parseInt($(value).find("td.cantidad2").text());
            var cantAct = parseInt($("#txt_cantidad").val());
            var cTotal = parseInt($("#unidades-actuales").val());

            if((cantAnt + cantAct) > cTotal){

              swal("Cantidad actual: "+cTotal+ " unidades. Cantidad agregada " + cantAnt + " unidades.");
               romper = true;
            }else{

              var c = $(value).find('td.cantidad2').text(cantAnt + cantAct);
              $(value).find('input#cantidad');
              $(value).find("td.cantidad2").text(cantAnt + cantAct);
              bandera=false;
            }

         }
      });

      if(romper === true){
        return false;
      }

      if(bandera){
        var hiddens = '<input id="txtproducto" type="hidden" name="producto[]" value="' + producto + '">';
        hiddens += '<input type="hidden" id="cantidad" name="cantidad[]" value="' + cantidad + '">';
        var html = '<tr class="datos" data-producto="true">'+
                '<td id="producto2">' + hiddens + productoTxt + '</td>' +
                '<td class="cantidad2">' + cantidad + '</td>' +
                '<td>' +
                  '<button class="btn btn-danger" onclick="eliminarfila($(this))">' +
                    '<i class="fa fa-trash"></i>' +
                  '</button>' +
                '</td>' +
              '</tr>';
        $("#tabla-detalles").append(html);
          }
        }
     }
  }

}

  function eliminarfila(obj){
    obj.closest("tr").remove();
  }

</script>


<script type="text/javascript">
  $(function(){

    $("#txt_cantidad").keyup(function(){

      var campoCant = $("#txt_cantidad").val();
      var id = $("#cmb_producto").val();

      $.ajax({
        url: url + 'producto/validacionCantidad',
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

               $("#txt_cantidad").val(resut.cantidad);
        }
      });
    });
  });

  function validarC()
  {
    var campoCant = $("#txt_cantidad").val();
    var id = $("#cmb_producto").val();
    var bandera = true;
    $.ajax({
      url: url + 'producto/validacionCantidad',
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

   var cant = $("#txt_cantidad").val();

   if(cant > resut.cantidad){
     var band = false;
   }

  }

  </script>
