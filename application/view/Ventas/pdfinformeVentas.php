<html>
<head>

  <style media="screen">
    table{
      width: 100%;
    }
  </style>
</head>
<body>
  <center><legend>INFORME DE VENTAS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Código Venta</th>
        <th>Fecha Venta</th>
        <th>Valor Total Venta</th>
        <th>Valor Subtotal Venta</th>
        <th>Descuento</th>
        <th>Cliente</th>
        <th>Tipo Pago</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($ver as $valor): ?>
      <tr>
          <td><?= $valor['id_ventas'] ?></td>
          <td><?= $valor['fecha_venta'] ?></td>
          <td class="price"><?= $valor['total_venta'] ?></td>
          <td class="price"><?= $valor['subtotal_venta'] ?></td>
          <td class="price"><?= $valor['descuento'] ?></td>
          <td><?= $valor['cliente'] ?></td>
          <td> <?= $valor["tipo_de_pago"] == 2? "Contado": "Crédito" ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>

<script type="text/javascript">
  $(".price").priceFormat({centsLimit: 3, clearPrefix: true});
</script>
