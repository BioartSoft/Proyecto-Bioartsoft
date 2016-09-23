<html>
<head>

  <style media="screen">
    table{
      width: 100%;
    }
  </style>
</head>
<body>
  <center><legend>INFORME DE COMPRAS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Código Compra</th>
        <th>Fecha Compra</th>
        <th>Valor Total Compra</th>
        <th>Proveedor</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($ver as $valor): ?>
      <tr>
          <td><?= $valor['id_compras'] ?></td>
          <td><?= $valor['fecha_compra'] ?></td>
          <td class="price"><?= $valor['valor_total'] ?></td>
          <td><?= $valor['proveedor'] ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>

<script type="text/javascript">
  $(".price").priceFormat({centsLimit: 3, clearPrefix: true});
</script>
