

<form class="" id="formulariopro" action="<?= URL ?>producto/registrarProductos" method="post" data-parsley-validate="">
  <div class="row">

  <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Registrar Productos (obligatorios * )</h3><br>
  <div id="frmpro" method="post" data-parsley-validate="">


    <div class="row">
    <div class="col-md-4">
        <label for="form-control" class="control-label" style="color: #3CB371">Código *</label>
        <input name="txtcodigo" id="campoCodigo" type="text" data-parsley-type="number" maxlength="8" min="1" class="form-control"  placeholder="Código" data-parsley-required="true">
    </div>

    <div class="col-md-4">
        <label for="inputTwitter" class="control-label" style="color: #3CB371">Nombre Producto *</label>
        <input name="txtnombreproducto" id="txtnombreproducto" type="text"  pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" maxlength="50" class="form-control"  placeholder="Nombre Producto" data-parsley-required="true">
    </div>

    <div class="col-md-4">
      <label for="form-control" style="color: #3CB371">Categoria *</label>
      <select name="txtcategoria" id="txtcategoria" class="form-control" maxlength="20" data-parsley-type"alphanum" data-parsley-required="true">
        <option value="">Seleccionar Categoría</option>
        <?php foreach ($categorias as   $value): ?>
          <option value="<?= $value['id_categoria']  ?>"><?= $value['nombre']  ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <br><br>

  <div class="row">

    <div class="col-md-4">
        <label for="inputTwitter" class="control-label" style="color: #3CB371">Precio Unitario *</label>
        <input name="txtpreciocompra" id="txtpreciocompra" type="number" data-parsley-type="integer" min="0" maxlength="10" class="form-control" id="inputTwitter" placeholder="Precio Unitario" data-parsley-required="true">
    </div>
    <div class="col-md-4">
        <label for="inputTwitter" class="control-label" style="color: #3CB371">Precio al detal *</label>
        <input name="txtprecioventa" type="number" id="txtprecioventa" type="text"  data-parsley-type="integer" min="0" maxlength="10" class="form-control" id="inputTwitter" placeholder="Precio Detal" data-parsley-required="true">
    </div>
    <div class="col-md-4">
        <label for="inputTwitter" class="control-label" style="color: #3CB371">Precio al por mayor * </label>
        <input id="txtprecioalpormayor" type="number" name="txtprecioalpormayor" data-parsley-type="integer" min="0" maxlength="10" class="form-control"  placeholder="Precio por mayor" data-parsley-required="true">
    </div>

  </div>
  <br><br>

  <div class="row">
    <div class="col-md-4" id="talla"  style="display: none;" >
      <label for="form-control" style="color: #3CB371">Talla</label>
      <select id="txttalla" name="txttalla" class="form-control" data-parsley-type="alphanum" maxlength="15">
        <option value="">Seleccionar Talla</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XS">XS</option>
        <option value="XM">XM</option>
      </select>
    </div>
    <div class="col-md-4" id="tamano" style="display:block" >
      <label for="form-control" style="color: #3CB371">Tamaño</label>
      <input id="txttamano"  name="txttamano" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" maxlength="20" placeholder="Tamaño" class="form-control">
    </div>

    <div class="col-md-4">
      <label for="inputTwitter" class="control-label" style="color: #3CB371">Stock Mínimo *</label>
      <input id="txtstock"  name="txtstock" data-parsley-type="number" min="1" type="number"  max="50" class="form-control"  placeholder="Stock Mínimo" data-parsley-required="true">
    </div>
  </div>

  <br><br><br>
  <div class="row">
    <div class="col-md-4">
    </div>

    <div class="col-md-4">
      <button  name="btnguardarpro" type="submit" id="btn-guardar-producto" class="btn btn-success"  ><i class="fa fa-floppy-o" aria-hidden="true">    Guardar</i></button>
    </div>

    <div class="col-md-4">
      <button type="reset" class="btn btn-danger" onclick="cancelar()"><i class="fa fa-remove" aria-hidden="true">   Cancelar</i></button>
    </div>
</div>
</div>
</div>
</form>

<?php if (isset($errorCodigo) && $errorCodigo == false): ?>
<script type="text/javascript">
    $(document).ready(function(){
      swal({
            title: "Código ya existe, no se puede registrar!",
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
$(document).ready(function(){
  $("#btn-modal").click(function(){
    $("#myForm2").modal('show');
    return false;
  });
});
</script>

<script>
$(document).ready(function(){

$("#btn-guardar-producto").click(function(){
  $('#formulariopro').parsley().validate();
});

  $("#txtcategoria").select2();
  $("#txtcategoria").change(function(){
    var categoria = $(this).val();
    if(categoria != 1){

      //$("#talla").slideDown();
      $("#talla").slideUp();
      //$("#tamano").slideUp();
      $("#tamano").slideDown();
      // $("#talla").removeAttr("required");
      // $("#talla").attr("required", 'false');

    }else{
      //$("#tamano").slideDown();
      $("#tamano").slideUp();
      //$("#talla").slideUp();
      $("#talla").slideDown();
      // $("#tamano").removeAttr("required");
      // $("#tamano").attr("required", 'true');

    }

  });

})
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

<script type="text/javascript">
  $(function(){

    $("#campoCodigo").change(function(){

      var campoCodigo = $("#campoCodigo").val();

      $.ajax({
        url: url + 'producto/validacion',
        data:{'campoCodigo': campoCodigo},
        type: 'post',
        dataType:"text"
      }).done(function(resut){

        if(resut == "1"){
          swal({
                title: "Código ya existe, no se puede registrar!",
                type: "error",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              });
        }
      });
    });
  });
</script>

<script type="text/javascript">
  $("#txtpreciocompra").keydown(function(e){
    if(e.which === 189 || e.which === 69){
      e.preventDefault();
      //return false;
    }
  });

  $("#txtprecioventa").keydown(function(e){
    if(e.which === 189 || e.which === 69){
      e.preventDefault();
      //return false;
    }
  });

  $("#txtprecioalpormayor").keydown(function(e){
    if(e.which === 189 || e.which === 69){
      e.preventDefault();
      //return false;
    }
  });

  $("#txtstock").keydown(function(e){
    if(e.which === 189 || e.which === 69){
      e.preventDefault();
      //return false;
    }
  });
</script>
