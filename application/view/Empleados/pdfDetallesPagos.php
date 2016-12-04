<html>
<head>
<style media="screen">
  table{
    width: 100%;
  }
</style>
<link href="<?php echo URL?>css/Estilos.css" rel="stylesheet">
  <link href="<?php echo URL?>css/bootstrap.min.css" rel="stylesheet">
  <title>Comprobante de Pago</title>
</head>
<body>
  <h2 style="text-align: center">BIOARTES</h2>
  <div id="comprobante">
    <p>Nit: </p>
    <p>Centro Comercial Cisneros</p>
    <p>Teléfono: 513-10-12</p>
    <p>Cra. 51 N° 44 – 69, Local 144 B - Medellín</p>
  </div>
  Comprobante de pago número: <strong><?= $val['id_pago'] ?></strong><br>
  Fecha: <?= $val['fecha_pago'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?= date("H:i:s"); ?>
  <br><br>
  Empleado: <strong><?= ucwords($val['empleado']) ?></strong><br>
  Identificación: <strong><?= $val['id_persona'] ?></strong><br>
  Tipo Empleado: <strong><?= $val['Tbl_nombre_tipo_persona'] ?></strong><br>
  Tiempo Pago: <strong><?= $val['tipo_pago'] == "Pago Normal"?"Quincenal":"Anual" ?></strong><br>
  <br>
  ------------------------------------------------------------------------------
  ------------------------------------------------------------------------------
  ---------------------------------------------------------------------------------<br>
  ------------------------------------------------------------------------------
  ------------------------------------------------------------------------------
  ---------------------------------------------------------------------------------<br><br>
  <center><legend><h3>DETALLES PAGO</h3></legend></center>
  <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Concepto</th>
        <?php if($val['tipo_pago'] == "Pago Final"): ?>
        <th>Valor Ventas</th>
        <th>Valor Comisión</th>
        <th>Vacaciones</th>
        <th>Cesantías</th>
        <th>Prima</th>
      <?php else: ?>
        <th>Valor Día</th>
        <th>Valor en Ventas</th>
        <th>Valor Comisión</th>
      <?php endif; ?>
      </tr>
    </thead>
    <tbody>
      <?= $tabla ?>
    </tbody>
  </table>
  <br><br>

  ------------------------------------------------------------------------------
  ------------------------------------------------------------------------------
  ---------------------------------------------------------------------------------<br>
  ------------------------------------------------------------------------------
  ------------------------------------------------------------------------------
  ---------------------------------------------------------------------------------<br><br>
    <p>Valor total a pagar: $ <strong><?= number_format($val['total_pago'], "0", ".", "."); ?></p>
    <br><br>
    <br>
   <p>Recibído:&nbsp; -----------------------------------------------------------------------------------</p>
    <script src="<?php echo URL ?>js/bootstrap.min.js"></script>
</body>
</html>
