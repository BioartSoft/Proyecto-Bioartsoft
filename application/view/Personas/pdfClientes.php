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
<center><legend>INFORME  CLIENTES</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
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
                                <td><?= $valor['id_persona'] ?></td>
                                <td><?=  $valor['nombres'] ?></td>
                                <td><?=  $valor['apellidos'] ?></td>
                                <td style="width: 15%"><?=  $valor['Tbl_nombre_tipo_persona'] ?></td>
                                <td><?=  $valor['email'] ?></td>
                                <td><?=  $valor['celular'] ?></td>
                                <td><?=  $valor['telefono'] ?></td>
                              </tr>
                                <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
