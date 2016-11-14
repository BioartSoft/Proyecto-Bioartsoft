<!DOCTYPE html>
<html>
<head>
  <style media="screen">
    table{
      width: 100%;
    }
  </style>
</head>
<body>
<img src="<?php echo URL ?>img/bio-artes.png" height="100" width="400">
<br>
<center><legend><h2>INFORME GENERAL DE CLIENTES HABILITADOS</h2></legend></center>
  <br>
  <p><strong>Fecha reporte: <?= ucwords(date("Y/m/d H:i:s")) ?></strong></p>
  <table border="1">
    <thead>
      <tr>
                                <th >Tipo de Documento</th>
                                <th>Identificación</th>
                                <th>Nombre Cliente</th>
                                <th>Apellidos Cliente</th>
                                <th>Tipo Cliente</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Teléfono</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($listarClientes as $valor): ?>
                            <tr>
                                <td><?= $valor['tipo_documento'] == "Cedula"?"Cédula" : "Cédula Extranjera" ?></td>
                                <td><?= $valor['id_persona'] ?></td>
                                <td><?=  $valor['nombres'] ?></td>
                                <td><?=  $valor['apellidos'] ?></td>
                                <td style="width: 15%"><?=  $valor['Tbl_nombre_tipo_persona'] ?></td>
                                <td style="width: 15%"><?=  $valor['email'] ?></td>
                                <td style="width: 12%"><?=  $valor['celular'] ?></td>
                                <td style="width: 12%"><?=  $valor['telefono'] ?></td>
                              </tr>
                                <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
