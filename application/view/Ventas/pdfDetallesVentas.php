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
  <center><legend>INFORME DETALLES VENTAS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Fecha Venta</th>
        <th>Nombre Cliente</th>
        <th>Subtotal venta</th>
        <th>Descuento</th>
        <th>Total Venta</th>
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
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?= $tabla ?>
    </tbody>
  </table>
</body>
</html>
