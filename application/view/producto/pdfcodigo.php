<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Codigo de barras</title>
	<style>
		.img{
			margin: 15px;
		}
		@page{
			/*size: 21.59cm 4.6cm;*/
			/*margin: 0.1cm;*/
		}
		body{
			margin: 0.5cm;
		}
	</style>
</head>
<center><legend><h2>Codigos de barras del producto: <?= $producto['nombre_producto']  ?></h2></legend></center>
<body>
	<?php for($i = 0; $i < $cantidad; $i ++): ?>
		<img src="<?= $urlImagen ?>" alt="" class="img">
	<?php endfor ?>
</body>
</html>
