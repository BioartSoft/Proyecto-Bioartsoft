<div class="row">
    <div class="col-lg-12">
       <center> <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top:10px; margin-bottom: 10px">Listar Stock Mínimo</h3></center>
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
     </tr>
   </thead>

   <tbody>
     <?php foreach ($stock as $val) :  ?>
     <tr>
       <td><?= $val["id_producto"]  ?></td>
       <td><?= $val["nombre_producto"]?></td>
       <td><?= $val["nombre"] ?></td>
       <td><?= $val["talla"] ?></td>
       <td><?= $val["tamano"] ?></td>
      <td><?= $val["cantidad"] ?></td>
      <td><?= $val["stock_minimo"] ?></td>
 </tr>

  <?php endforeach ?>

 </tbody>
  </table>
</div>
<div class="col-sm-12">
    <center>
    <a href="<?= URL ?>producto/informestock" target="_blank">
      <button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true">   Reporte PDF de Stock</i></button>
    </a>
  </center>
  </div>
</form>
</div>

<script type="text/javascript">
  $(document).ready(function(){

    $(".precio1").priceFormat({centsLimit: 3, clearPrefix: true});
    $(".precio2").priceFormat({centsLimit: 3, clearPrefix: true});
    $(".precio3").priceFormat({centsLimit: 3, clearPrefix: true});

  });
</script>
