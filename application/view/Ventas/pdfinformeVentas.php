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
  <center><legend><h2>INFORME DE VENTAS</h2></legend></center>
  <?php foreach ($ver as $valor): ?>
      <h4>Informe del mes de: <?= ucfirst($valor['mes']); ?></h4>
  <?php break; ?>
  <?php endforeach; ?>
  <br>
  <table border="1">
    <thead>
      <tr>
        <th>Código Venta</th>
        <th>Fecha Venta</th>
        <th>Valor Subtotal Venta</th>
        <th>Descuento</th>
        <th>Valor Total Venta</th>
        <th>Cliente</th>
        <th>Tipo Pago</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($ver as $valor): ?>
      <tr>
          <td><?= $valor['id_ventas'] ?></td>
          <td><?= $valor['fecha_venta'] ?></td>
          <td class="price"><?= $valor['subtotal_venta'] ?></td>
          <td class="price"><?= $valor['descuento'] ?></td>
          <td class="price"><?= $valor['total_venta'] ?></td>
          <td><?= $valor['cliente'] ?></td>
          <td> <?= $valor["tipo_de_pago"] == 2? "Contado": "Crédito" ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  <?php foreach($totalVentasPorFecha as $total): ?>
      <p style="text-align: right"><strong>Total Ventas: </strong><strong><?= $total['total']; ?></strong></p>
  <?php endforeach; ?>
</body>
</html>

<script type="text/javascript">
  $(".price").priceFormat({centsLimit: 3, clearPrefix: true});
</script>
