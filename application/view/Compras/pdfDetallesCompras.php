<html>
<head>
<style media="screen">
  table{
    width: 100%;
  }
</style>
  <title>Reporte</title>
</head>
<body>
  <img src="<?php echo URL ?>img/BioartesV2.png" height="100" width="200">
  <br>
  <center><legend>INFORME DETALLES ENTRADAS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Fecha Compra</th>
        <th>Nombre Proveedor</th>
        <th>Total Compra</th>
      </tr>
    </thead>
    <tbody>
      <?= $tabla2 ?>
    </tbody>
  </table>
  <br>

  <legend>Productos</legend>

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
