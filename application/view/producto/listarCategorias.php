
<div class="row">
    <div class="col-lg-12">
       <center> <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Categorías</h3></center>
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
                 <th>Nombre Categoría</th>
                 <th>Modificar</th>
               </tr>
           </thead>

 <tbody>
   <?php foreach ($cate as $value): ?>
     <tr>
       <td><?= $value['id_categoria']  ?></td>
       <td><?= $value['nombre'] ?></td>
       <td>
          <button type="button" class="btn btn-success btn-circle btn-md" onclick="Traerdatoscategoria('<?= $value['id_categoria']?>')" data-toggle="modal" data-target="#myForm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

  </td>
     </tr>

   <?php endforeach ?>


 </div>
</tbody>
</table>
</div>
</div>
</center>

<form action="<?= URL ?>producto/listarCategorias/" method="POST"  id="form-modi" data-parsley-validate="">
  <div class="modal fade" id="myForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
    <div id="frmModCateg" method="post" data-parsley-validate="">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <center>
                  <h4 class="modal-title" id="myModalLabel" style="text-align:center; color: #3CB371">Modificar Categoria</h4>
                  </center>
              </div>
           <div class="modal-body">
               <div class="row">
                  <div class="col-md-6">

                    <label for="form-control" style="color: #3CB371">Código</label><br>
                    <input type="text"  id="txtcodigo-show" class="form-control" value="1" disabled="true">
                    <input type="hidden" id="txtcodigo" name="txtcodigo" class="form-control" >

                 </div>
                 <div class="col-md-6">
                   <label for="form-control" style="color: #3CB371">Nombre *</label><br>
                    <input  id="txtnombreca" name="txtnombreca" type="text" class="form-control" data-parsley-type="alphanum" minlength="3" maxlength="10" data-parsley-required="true">
                </div>
         </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><i class="fa fa-times" aria-hidden="true">   Cerrar</i></button>
           <button type="submit" id="btn-modica" name="btn-modificar-categoria" class="btn btn-success btn-md active"><i class="fa fa-floppy-o" aria-hidden="true">   Modificar</i></button>
        </div>
   </div>
  </div>
  </div>
</div>
</form>

<script type="text/javascript">
  $(document).ready(function(){
      $("#btn-modica").click(function(){
        $("#form-modi").parsley().validate();
      })
})

</script>
