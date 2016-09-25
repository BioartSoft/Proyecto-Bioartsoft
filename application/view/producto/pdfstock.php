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
<center><legend>INFORME STOCK MÍNIMO</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
         <th>Código</th>
         <th>Nombre Producto</th>
         <th>categoria</th>
         <th>Cantidad </th>
         <th>Stock</th>
         <!-- <th>Precio Detal</th>
         <th>Precio Por Mayor</th>
         <th>Precio Unitario</th>
         <th>Estado</th> -->
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
       <!-- <td class="precio1"><?= $val["precio_detal"] ?></td>
       <td class="precio2"><?= $val["precio_por_mayor"] ?></td>
       <td class="precio3"><?= $val["precio_unitario"] ?></td>
       <td>
         <?php if($val['estado'] == 1): ?>
          Habilitado
         <?php else:  ?>
          Inhabilitado
         <?php endif ?>
       </td> -->
 </tr>

  <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>
