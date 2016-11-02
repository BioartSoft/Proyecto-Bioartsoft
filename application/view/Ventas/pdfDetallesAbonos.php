<html>
<head>
<style media="screen">
  table{
    width: 100%;
  }
</style>
  <link href="<?php echo URL?>css/Estilos.css" rel="stylesheet">
  <title>Recibo de abono</title>
</head>
<body>
  <h2 style="text-align: center">BIOARTES</h2>
  <div id="reciboAbonoCredito">
    <p>Nit: </p>
    <p>Centro Comercial Cisneros</p>
    <p>Teléfono: 513-10-12</p>
    <p>Cra. 51 N° 44 – 69, Local 144 B - Medellín</p>
  </div>
  Recibo de abono número: <strong><?= $val['idabono'] ?></strong><br>
  Fecha: <?= $val['fechaAbono'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?= date("H:i:s"); ?>
  <br><br>
  Atendido por: <strong><?= ucfirst($_SESSION['USUARIO'])." ".ucfirst($_SESSION['USUARIO-APE']) ?></strong><br>
  Cliente: <strong><?= ucfirst($val['cliente']) ?></strong><br>
  Identificación: <strong><?= $val['id_persona'] ?></strong><br>
  <br>
  ----------------------------------------------------------<br>
  ----------------------------------------------------------<br><br>
  <center><legend><h3>RECIBO DE ABONO</h3></legend></center>
  <br>
  <table>
    <thead>
      <tr>
        <th>Total Crédito</th>
        <th>Valor Abono</th>
        <th>Total Abonado</th>
        <th>Pendiente</th>
      </tr>
    </thead>
    <tbody>
      <?= $tabla2 ?>
    </tbody>
  </table>
  <br><br>
  -----------------------------------------------------------<br>
  -----------------------------------------------------------<br><br>
  <p>Recuerde cancelar antes del: <?= $val['fecha_limite_credito'] ?></p>
  <br><br>
  <p style="text-align: center"><strong>Gracias por su visita</strong></p>
</body>
</html>
