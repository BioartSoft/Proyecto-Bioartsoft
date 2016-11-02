<html>
<head>
<style media="screen">
  table{
    width: 100%;
  }
</style>
  <link href="<?php echo URL?>css/Estilos.css" rel="stylesheet">
  <title>Recibo de caja</title>
</head>
<body>
  <h2 style="text-align: center">BIOARTES</h2>
  <div id="reciboVenta">
    <p>Nit: </p>
    <p>Centro Comercial Cisneros</p>
    <p>Teléfono: 513-10-12</p>
    <p>Cra. 51 N° 44 – 69, Local 144 B - Medellín</p>
  </div>
  Recibo de caja número: <strong><?= $info['id_ventas'] ?></strong><br>
  Fecha: <?= $info['fecha_venta'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?= date("H:i:s"); ?>
  <br><br>
  Atendido por: <strong><?= ucfirst($info['empleado']);?></strong><br>
  Cliente: <strong><?= ucfirst($info['cliente']) ?></strong><br>
  Identificación: <strong><?= $info['id_persona'] ?></strong><br>
  <br>
  ------------------------------------------------------------------------<br>
  ------------------------------------------------------------------------<br><br>
  <center><legend><h3>DETALLES VENTA</h3></legend></center>
  <br>
  <table>
    <thead>
      <tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>
      <?= $tabla ?>
    </tbody>
  </table>
  <br><br>

    ------------------------------------------------------------------------<br>
    ------------------------------------------------------------------------<br><br>
    <p>Tipo de pago: <strong><?= $info['tipo_de_pago'] == 1? "Crédito" : "Contado";  ?></strong></p>
    <p>Descuento: <strong><?= $info['descuento']; ?></p>
    <p>Valor total a pagar: <strong><?= $info['total']; ?></p>
    <br><br>
    <p style="text-align: center"><strong>Gracias por su visita</strong></p>

</body>
</html>
