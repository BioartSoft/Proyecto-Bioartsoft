<html>
<head>
<style media="screen">
  table{
    width: 100%;
  }
</style>
  <title>Reporte Préstamos</title>
</head>
<body>
  <img src="<?php echo URL ?>img/BioartesV2.png" height="100" width="200">
  <br>
  <center><legend><h2>INFORME DE PRÉSTAMOS DE: <?= $val['empleado'] ?></h2></legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Identificación</th>
        <th>Nombre Empleado</th>
        <th>Tipo Empleado</th>
        <th>Fecha Préstamo</th>
        <th>Valor Préstamo</th>
        <th>Descripción</th>
        <th>Fecha Límite</th>
      </tr>
    </thead>
    <tbody>
      <?= $tabla ?>
    </tbody>
  </table>
</body>
</html>

<script type="text/javascript">
  $(".price").priceFormat({centsLimit: 3, clearPrefix: true});
</script>
