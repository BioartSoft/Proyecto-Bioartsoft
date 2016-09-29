<!DOCTYPE html>
<html>
<head>
  <style media="screen">
    table{
      width: 100%;
    }
  </style>
</head>
<body>
<!-- <div class="row" style="border: 2px solid black"> -->
  <img src="<?php echo URL ?>img/BioartesV2.png" height="100" width="200">
<!-- </div> -->
  <br>
<center><legend>INFORME DE BAJAS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
      <th>Código Producto</th>
      <th>Nombre</th>
      <th>Categoría</th>
      <th>Fecha Registro Baja</th>
      <th>Cantidad</th>
      <th>Tipo de Baja</th>

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
</body>
</html>
