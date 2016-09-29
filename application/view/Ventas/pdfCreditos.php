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
  <center><legend>INFORME DE CRÉDITOS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Identificación Cliente</th>
        <th>Nombres Cliente</th>
        <th>Tipo Cliente</th>
        <th>Valor Crédito</th>
        <th>Valor Abonado</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listarC as $valor): ?>
      <tr>
          <td><?= $valor['id_persona'] ?></td>
          <td><?= $valor['cliente'] ?></td>
          <td class="price"><?= $valor['Tbl_nombre_tipo_persona'] ?></td>
          <td class="price"><?= $valor['total_venta'] ?></td>
          <td class="price"><?= $valor['abonado'] ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>

<script type="text/javascript">
  $(".price").priceFormat({centsLimit: 3, clearPrefix: true});
</script>
