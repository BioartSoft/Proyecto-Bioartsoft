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
  <img src="<?php echo URL ?>img/bio-artes.png" height="100" width="400">
  <br>
  <center><legend><h2>INFORME DE PAGOS DE: <?= ucwords($val['empleado']) ?></h2></legend></center>
  <br>
    <p><strong>Fecha Informe: <?= ucwords(date("Y/m/d h:i:s"))?></strong></p>
  <table border="1">
    <thead>
      <tr>
        <th>Identificación</th>
        <th>Nombre Empleado</th>
        <th>Tipo Empleado</th>
        <th>Fecha Pago</th>
        <th>Tipo de Pago Pago</th>
      <?php if($val['Tbl_nombre_tipo_persona'] == "Empleado-temporal"): ?>
        <th>Días Laborados</th>
      <?php else: ?>

      <?php endif; ?>
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
