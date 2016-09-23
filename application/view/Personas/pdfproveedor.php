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
<center><legend>INFORME  PROVEEDORES</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
                                <th>Identificación</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
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
                                <td><?=  $valor['email'] ?></td>
                                <td><?=  $valor['telefono'] ?></td>
                                <td><?=  $valor['celular'] ?></td>
                              </tr>
                                <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
