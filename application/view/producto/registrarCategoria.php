
<form id="formulariocate" action="<?= URL ?>producto/registrarCategoria" method="post" data-parsley-validate="">
<div class="panel panel-primary" style="margin-top: 5px">
<div class="row">
  <br>

    <div class="panel-heading" stlyle="height: 70px; width: 100px">
        <center><span style="text-align:center; color: #337AB7; margin-top: 10px; margin-bottom:10px; font-size: 25px">Registrar Categoría</span></center>
  </div>
  <div class="panel-body">
      <div id="frmpro" method="post" data-parsley-validate="">

              <div class="col-md-1">
              </div>

              <div class="col-md-3">
              </div>

               <div class="col-md-4">
                  <label for="form-control" class="control-label">Nombre Categoría *</label>
                  <input type="text" name="txtnombrec" minlength="4" maxlength="30" data-parsley-type="alphanum" id="txtnombrec"class="form-control" data-parsley-required="true">
              </div>
            </div>
          </div>

     <br><br>
      <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-success" id="btn-guardar" name="btn-ca"><i class="fa fa-floppy-o" aria-hidden="true">   Guardar</i></button>
            </div>
             <div class="col-md-">
                 <button type="reset" class="btn btn-danger" onclick="cancelar()"><i class="fa fa-remove" aria-hidden="true">   Cancelar</i></button>
             </div>
      </div>
      <br>
</div>
</div>
</form>


<script>
$(document).ready(function(){

  $("#btn-guardar").click(function(){



      $("#formulariocate").parsley().validate();

  })

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

    $("#txtnombrec").blur(function(){

      var txtnombrec = $("#txtnombrec").val();

      $.ajax({
        url: url + 'producto/validacionCategoria',
        data:{'txtnombrec': txtnombrec},
        type: 'post',
        dataType:"text"
      }).done(function(resut){

        if(resut == "1"){
          swal({
                title: "Nombre de categoría ya existe, no se puede registrar!",
                type: "error",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              });

                $("#txtnombrec").val("");
        }

      });
    });
  });
</script>

<script type="text/javascript">
  $(function(){

    $("#txtnombrec").keyup(function(){

      var txtnombrec = $("#txtnombrec").val();

      $.ajax({
        url: url + 'producto/validacionCategoria',
        data:{'txtnombrec': txtnombrec},
        type: 'post',
        dataType:"text"
      }).done(function(resut){

        if(resut == "1"){
          swal({
                title: "Nombre de categoría ya existe, no se puede registrar!",
                type: "error",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              });

                $("#txtnombrec").val("");
        }

      });
    });
  });
</script>


<?php if (isset($categ) && $categ == false): ?>
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
