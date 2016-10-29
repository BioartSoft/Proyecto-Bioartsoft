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
<center><legend><h2>INFORME GENERAL  DE STOCK MÍNIMO</h2></legend></center>
  <br><br>
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
