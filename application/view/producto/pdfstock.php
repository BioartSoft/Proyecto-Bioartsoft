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
<center><legend><h2>INFORME GENERAL  DE PRODUCTOS EN STOCK MÍNIMO</h2></legend></center>
  <br>
  <p><strong>Fecha Reporte: <?= ucwords(date("Y/m/d h:i:s"))?></strong></p>
  <table border="1">
    <thead>
      <tr>
         <th>Código Producto</th>
         <th>Nombre Producto</th>
         <th>Categoría</th>
         <th>Cantidad Disponible</th>
         <th>Stock Mínimo</th>
      </tr>
    </thead>
    <tbody>
       <?php foreach ($stock as $val) :  ?>
     <tr>
       <td><?= $val["id_producto"]  ?></td>
       <td><?= $val["nombre_producto"]?></td>
       <td><?= $val["nombre"] ?></td>
       <td><?= $val["cantidad"] ?></td>
       <td><?= $val["stock_minimo"] ?></td>
 </tr>

  <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>
