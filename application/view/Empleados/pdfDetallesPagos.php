<html>
<head>
<style media="screen">
  table{
    width: 100%;
  }
</style>
  <title>Reporte Pagos</title>
</head>
<body>
  <img src="<?php echo URL ?>img/BioartesV2.png" height="100" width="200">
  <br>
  <center><legend><h2>INFORME DE PAGOS DE: <?= ucwords($val['empleado']) ?></h2></legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Identificación</th>
        <th>Nombre Empleado</th>
        <th>Tipo Empleado</th>
        <th>Fecha Pago</th>
        <th>Tipo de Pago Pago</th>
        <th>Días Laborados</th>
        <th>Valor Día</th>
        <th>Valor Comisión</th>
        <th>Total Pago</th>
      </tr>
    </thead>
    <tbody>
      <?= $tabla ?>
    </tbody>
  </table>
</body>
</html>
