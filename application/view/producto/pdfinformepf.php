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
<center><legend>INFORME DE PRODUTOS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
       <th>Código Producto</th>
       <th>Nombre Producto</th>
       <th>Categoria</th>
       <th>Cantidad </th>
       <th>Precio Unitario</th>
       <th>Precio detal</th>
       <th>Precio al por mayor</th>
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
