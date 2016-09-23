<div class="row">
  <center>
    <div class="col-lg-12">
        <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Listar Bajas</h3>
    </div>
  </center>
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
                                <th>Código Producto</th>
                                <th>Nombre Producto</th>
                                <th>Categoría</th>
                                <th>Fecha Registro Baja</th>
                                <th>Cantidad</th>
                                <th>Tipo De Baja</th>

                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($bajas as $value): ?>
                           <tr>
                             <td><?= $value['Tbl_Productos_id_productos'] ?></td>
                             <td>
                               <?= $value['nombre_producto'] ?>
                             </td>
                             <td>
                               <?= $value['nombre'] ?>
                             </td>
                             <td>
                               <?= $value['fecha_salida'] ?>
                             </td>
                             <td>
                               <?= $value['Cantidad'] ?>
                             </td>
                             <td>
                               <?= $value['tipo_baja'] ?>
                             </td>
                           </tr>
                          <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
              </div>
                  <div class="col-sm-12">
    <center>
    <a href="<?= URL ?>Existencias/informbajas" target="_blank">
      <button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true">   Reporte PDF Bajas</i></button>
    </a>
  </center>
  </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
</div>
