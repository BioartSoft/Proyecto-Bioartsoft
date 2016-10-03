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
<img src="<?php echo URL ?>img/BioartesV2.png" height="100" width="200">
<br>
<center><legend>INFORME DE PRODUTOS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
       <th>Código Producto</th>
       <th>Nombre Producto</th>
       <th>Categoría</th>
       <th>Cantidad Disponible</th>
       <th>Precio Unitario</th>
       <th>Precio Detal</th>
       <th>Precio al por Mayor</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($ver2 as $val) :  ?>
     <tr>
       <td><?= $val["id_producto"]  ?></td>
       <td><?= $val["nombre_producto"]?></td>
       <td><?= $val["nombre"] ?></td>
       <td><?= $val["cantidad"] ?></td>
       <td><?= $val["precio_unitario"] ?></td>
       <td><?= $val["precio_detal"] ?></td>
       <td><?= $val["precio_por_mayor"] ?></td>
</tr>
 <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>
