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
<center><legend>INFORME DE PRÉSTAMOS</legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
       <th>Identificación Empleado</th>
       <th>Nombre Empleado</th>
       <th>Apellido Empleado</th>
       <th>Tipo Empleado </th>
       <th>Fecha Préstamo</th>
       <th>Valor Préstamo</th>
       <th>Descripción</th>
       <th>Fecha Límite</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($listarPrestamos as $val) :  ?>
     <tr>
       <td><?= $val["id_persona"]  ?></td>
       <td style="width: 12%"><?= $val["nombres"]?></td>
       <td style="width: 12%"><?= $val["apellidos"]?></td>
       <td style="width: 12%"><?= $val["Tbl_nombre_tipo_persona"] ?></td>
       <td style="width: 12%"><?= $val["fecha_prestamo"] ?></td>
       <td style="width: 12%"><?= $val["valor_prestamo"]  ?></td>
       <td style="width: 10%"><?= $val["descripcion"]  ?></td>
       <td><?= $val["fecha_limite"] ?></td>
</tr>
 <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>
