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
<center><legend>INFORME  USUARIOS/EMPLEADOS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
                                <th>Identificación</th>
                                <th>Nombre Empleado</th>
                                <th>Apellidos Empleado</th>
                                <th>Tipo Empleado</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Teléfono</th>
                                <th>Fecha Contrato</th>
                                <th>Fecha Terminación Contrato</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($listarEmpleados as $valor): ?>
                            <tr>
                                <td><?= $valor['id_persona'] ?></td>
                                <td><?=  $valor['nombres'] ?></td>
                                <td><?=  $valor['apellidos'] ?></td>
                                <td style="width: 15%"><?=  $valor['Tbl_nombre_tipo_persona'] ?></td>
                                <td><?=  $valor['email'] ?></td>
                                <td><?=  $valor['celular'] ?></td>
                                <td><?=  $valor['telefono'] ?></td>
                                <td style="width: 10%"><?=  $valor['fecha_Contrato'] ?></td>
                                <td><?=  $valor['fecha_Terminacion_Contrato'] ?></td>
                              </tr>
                                <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
