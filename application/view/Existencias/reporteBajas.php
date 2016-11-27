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
  <img src="<?php echo URL ?>img/bio-artes.png" height="100" width="400">
  <br>
<center><legend><h2>INFORME DE BAJAS</h2></legend></center>
    <h4>Informe de : <?= $rango ?> </h4>
  <br>
  <table border="1">
    <thead>
      <tr>
         <th>Código Producto</th>
         <th>Nombre Producto</th>
         <th>Categoría</th>
         <th>Fecha Registro Baja </th>
         <th>Cantidad</th>
         <th>Tipo de Baja</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($ver as $value): ?>
                           <tr>
                             <td><?= $value['id_producto'] ?></td>
                             <td><?= $value['nombre_producto'] ?></td>
                             <td><?= $value['nombre'] ?></td>
                             <td><?= $value['fecha_salida'] ?></td>
                             <td><?= $value['cantidad'] ?></td>
                             <td><?= $value['tipo_baja'] ?></td>
                           </tr>
                         <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
