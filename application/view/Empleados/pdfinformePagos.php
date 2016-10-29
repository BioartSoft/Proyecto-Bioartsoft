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
<center><legend><h2>INFORME GENERAL DE PAGOS</h2></legend></center>
  <br><br>
  <table border="1">
    <thead>
      <tr>
       <th>Identificación Empleado</th>
       <th>Nombres Empleado</th>
       <th>Tipo Empleado </th>
       <th>Fecha Pago</th>
       <th>Tipo Pago</th>
       <th>Valor Comisión</th>
       <th>Valor Día</th>
       <th>Total Días</th>
       <th>Total Pagado</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($listarPagos as $val) :  ?>
     <tr>
       <td><?= $val["id_persona"]  ?></td>
       <td style="width: 15%"><?= $val["empleado"]?></td>
       <td style="width: 15%"><?= $val["Tbl_nombre_tipo_persona"] ?></td>
       <td style="width: 15%"><?= $val["fecha_pago"] ?></td>
       <td style="width: 12%"><?= $val["tipo_pago"]  ?></td>
       <td style="width: 15%"><?= $val["valorComision"]  ?></td>
       <td><?= $val["valor_dia"] ?></td>
       <td><?= $val["cantidad_dias"] ?></td>
       <td><?= $val["total_pago"] ?></td>
</tr>
 <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>
