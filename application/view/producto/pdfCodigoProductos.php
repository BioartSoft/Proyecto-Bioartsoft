<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Códigos</title>
	<style>
		.img{
			margin: 15px;
		}
		@page{
			size: 21.59cm 27.94cm;
			margin: 0.1cm;
		}
		body{
			margin: 0cm;
		}
	</style>
</head>
<body>
	<?php foreach($productos AS $producto): ?>
		<img src="<?= $urlImagen.$producto['id_producto'] ?>" alt="" class="img">
	<?php endforeach ?>
</body>
</html>
