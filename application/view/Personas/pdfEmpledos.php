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
<center><legend><h2>INFORME  GENERAL DE EMPLEADOS HABILITADOS</h2></legend></center>
  <br>
  <p><strong>Fecha reporte: <?= ucwords(date("Y/m/d H:i:s")) ?></strong></p>
  <table border="1">
    <thead>
      <tr>
                                <th >Tipo de Documento</th>
                                <th>Identificación</th>
                                <th>Nombres Empleado </th>
                                <th>Apellidos Empleado</th>
                                <th>Tipo Empleado</th>
                                <th>Cargo</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Teléfono</th>
                                <th>Fecha Inicio Contrato</th>
                                <th>Fecha Terminación Contrato</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($listarEmpleados as $valor): ?>
                            <tr>
                                <td><?= $valor['tipo_documento'] == "Cedula"?"Cédula" : "Cédula Extranjera" ?></td>
                                <td style="width: 10%"><?= $valor['id_persona'] ?></td>
                                <td><?=  $valor['nombres'] ?></td>
                                <td><?=  $valor['apellidos'] ?></td>
                                <td style="width: 12%"><?=  $valor['Tbl_nombre_tipo_persona'] ?></td>
                                <td style="width: 10%"><?=  $valor['nombre_rol'] ?></td>
                                <td style="width: 8%"><?=  $valor['email'] ?></td>
                                <td><?=  $valor['celular'] ?></td>
                                <td><?=  $valor['telefono'] ?></td>
                                <td style="width: 10%"><?=  $valor['fecha_Contrato'] ?></td>
                                <td ><?=  $valor['fecha_Terminacion_Contrato'] ?></td>
                              </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
