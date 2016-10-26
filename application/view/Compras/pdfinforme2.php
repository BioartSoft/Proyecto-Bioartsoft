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
  <center><legend>INFORME DE ENTRADAS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Código Entrada</th>
        <th>Fecha Entrada</th>
        <th>Valor Total Entrada</th>
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
