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
  <center><legend>INFORME DETALLES COMPRAS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($detalles as $valor): ?>
      <tr>
          <td><?= $valor['nombre_producto'] ?></td>
          <td><?= $valor['cantidad'] ?></td>
          <td><?= $valor['precio_unitario'] ?></td>
          <td><?= $valor['total'] ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
