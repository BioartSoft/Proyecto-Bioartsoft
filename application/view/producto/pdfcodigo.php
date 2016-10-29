<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		.img{
			margin: 15px;
		}
		@page{
			size: 21.59cm 4.6cm;
			margin: 0.1cm;
		}
		body{
			margin: 0cm;
		}
	</style>
</head>
<body>
	<?php for($i = 0; $i < 5; $i ++): ?>
		<img src="<?= $urlImagen ?>" alt="" class="img">
	<?php endfor ?>
</body>
</html>
