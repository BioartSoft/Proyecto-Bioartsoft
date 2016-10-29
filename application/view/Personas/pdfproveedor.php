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
<img src="<?php echo URL ?>img/BioartesV2.png" height="100" width="200">
<br>
<center><legend><h2>INFORME GENERAL DE PROVEEDORES</h2></legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
                                <th>Identificación</th>
                                <th>Nombres Proveedor</th>
                                <th>Apellidos Proveedor</th>
                                <th>Tipo Proveedor</th>
                                <!-- <th>NiT Empresa</th>
                                <th>Nombre Empresa</th> -->
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Celular</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($listarP as $valor): ?>
                            <tr>
                                <td><?= $valor['id_persona'] ?></td>
                                <td><?=  $valor['nombres'] ?></td>
                                <td><?=  $valor['apellidos'] ?></td>
                                <td><?=  $valor['Tbl_nombre_tipo_persona'] ?></td>
                                <td style="width: 15%"><?=  $valor['email'] ?></td>
                                <td style="width: 10%"><?=  $valor['telefono'] ?></td>
                                <td style="width: 10%"><?=  $valor['celular'] ?></td>
                              </tr>
                                <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
