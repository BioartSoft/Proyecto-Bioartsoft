

<form class="" id="formulariopro" action="<?= URL ?>producto/registrarProductos" method="post" data-parsley-validate="">
  <div class="panel panel-primary" style="margin-top: 5px">
  <div class="row">
    <br>
    <div class="panel-heading" stlyle="height: 70px; width: 100px">
       <center><span style="color: #337AB7; margin-top: 10px; margin-bottom: 10px; font-size: 25px">Registrar Productos (obligatorios * )</span></center>
    </div>
      <div class="panel-body" style="width: 100%">
        <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-12 col-xs-12 col-lg-3">
                    <label for="inputTwitter" class="control-label">Nombre Producto *</label>
                    <input name="txtnombreproducto" id="txtnombreproducto" type="text"  pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" maxlength="20" class="form-control"  placeholder="Nombre Producto" data-parsley-required="true">
                </div>

              <div class="col-md-12 col-xs-12 col-lg-3">
                <label for="form-control">Categoría *</label>
                <select name="txtcategoria" id="txtcategoria" class="form-control" maxlength="20" data-parsley-type"alphanum" data-parsley-required="true">
                  <option value="">Seleccionar Categoría</option>
                  <?php foreach ($categorias as   $value): ?>
                    <option value="<?= $value['id_categoria']  ?>"><?= $value['nombre']  ?></option>
                  <?php endforeach ?>
                </select>
              </div>

            <div class="col-md-12 col-xs-12 col-lg-3">
                <label for="inputTwitter" class="control-label">Precio Unitario *</label>
                <input name="txtpreciocompra" id="txtpreciocompra" type="number" data-parsley-type="integer" min="0" max="100000" step="10" class="form-control" placeholder="Precio Unitario" data-parsley-required="true">
            </div>
            <div class="col-md-1">
            </div>
          </div>
          <br><br>

  <div class="row">
  <div class="col-md-1">
  </div>

    <div class="col-md-12 col-xs-12 col-lg-3">
        <label for="inputTwitter" class="control-label">Precio al Detal *</label>
        <input name="txtprecioventa" type="number" id="txtprecioventa" type="text"  data-parsley-type="integer" min="0" step="10" max="100000" class="form-control" placeholder="Precio Detal" data-parsley-required="true">
    </div>
    <div class="col-md-12 col-xs-12 col-lg-3">
        <label for="inputTwitter" class="control-label">Precio al por Mayor * </label>
        <input id="txtprecioalpormayor" type="number" name="txtprecioalpormayor" data-parsley-type="integer" min="0" step="10" max="100000" class="form-control"  placeholder="Precio por Mayor" data-parsley-required="true">
    </div>

    <div class="col-md-12 col-xs-12 col-lg-3" id="talla"  style="display: none;" >
      <label for="form-control">Talla</label>
      <select id="txttalla" name="txttalla" class="form-control" data-parsley-type="alphanum" maxlength="15">
        <option value="">Seleccionar Talla</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XS">XL</option>
        <option value="XM">XXL</option>
      </select>
    </div>

    <div class="col-md-12 col-xs-12 col-lg-3" id="tamano" style="display:block" >
      <label for="form-control">Descripción</label>
      <textarea id="txttamano"  name="txttamano" pattern="[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ@\-\.\\ \/$]+" maxlength="100"  class="form-control"></textarea>
    </div>

    <div class="col-md-1">
    </div>
  </div>
  <br><br>

  <div class="row">

    <div class="col-md-1">
    </div>

    <div class="col-md-12 col-xs-12 col-lg-3">
      <label for="inputTwitter" class="control-label">Stock Mínimo *</label>
      <input id="txtstock"  name="txtstock" data-parsley-type="number" min="1" type="number"  max="50" class="form-control"  placeholder="Stock Mínimo" data-parsley-required="true">
    </div>

    <div class="col-md-8 col-xs-12 col-lg-3">
    </div>

  </div>

  <br><br><br>
  <div class="row">
    <center>
    <div class="col-md-12 col-xs-12 col-lg-3">
    </div>

    <div class="col-md-12 col-xs-12 col-lg-3">
      <button  name="btnguardarpro" type="submit" id="btn-guardar-producto" class="btn btn-success"  ><i class="fa fa-floppy-o" aria-hidden="true">    Guardar</i></button>
    </div>

    <div class="col-md-12 col-xs-12 col-lg-3">
      <button type="reset" class="btn btn-danger" onclick="cancelar()"><i class="fa fa-remove" aria-hidden="true">   Cancelar</i></button>
    </div>
  </center>
</div>
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

      $("#txttamano").slideDown();
      $("#talla").slideUp();
      $("#tamano").slideDown();

    }else{
      $("#tamano").slideUp();
      $("#txttamano").slideUp();
      $("#talla").slideDown();

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

  $("#txtstock").keydown(function(e){
    if(e.which === 189 || e.which === 69){
      e.preventDefault();
    }
  });
</script>

<script type="text/javascript">
  $(function(){

    $("#txtnombreproducto").change(function(){

      var campoNombre = $("#txtnombreproducto").val();

      $.ajax({
        url: url + 'producto/validacionNombre',
        data:{'campoNombre': campoNombre},
        type: 'post',
        dataType:"text"
      }).done(function(resut){

        if(resut == "1"){
          swal({
                title: "Nombre Producto ya existe, no se puede registrar!",
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
