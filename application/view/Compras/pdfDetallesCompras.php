<html>
<head>
<style media="screen">
  table{
    width: 100%;
  }
</style>
  <title>Reporte Entradas</title>
</head>
<body>
  <img src="<?php echo URL ?>img/BioartesV2.png" height="100" width="200">
  <br>
  <center><legend><h2>INFORME DE ENTRADA NÚMERO:<?= $val['id_compras'] ?></h2></legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Fecha Entrada</th>
        <th>Nombre Proveedor</th>
        <th>Total Entrada</th>
      </tr>
    </thead>
    <tbody>
      <?= $tabla2 ?>
    </tbody>
  </table>
  <br>

  <legend><h4>Productos</h4></legend>
  <table border="1">
    <thead>
      <tr>
        <th>Nombre Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?= $tabla ?>
    </tbody>
  </table>
</body>
</html>
