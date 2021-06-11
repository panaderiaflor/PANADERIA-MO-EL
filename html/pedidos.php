<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Pedidos</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/estilos_pedidos.css">
</head>
<body>

	<div id="particles-js"></div>

	<header>
		<div class="menu">
			<div class="contenedor">
				<div class="logo"><a href="../index.html" class="inicio">Panaderia</a></div>
				<nav>
					<ul>
						<li><a href="../html/inicio.html">Inicio</a></li>
						<li><a href="../html/informacion.html">Información</a></li>
						<li><a href="../html/entrar.html">Entrar</a></li>
						<li><a href="#">Pedidos</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>


	<form method="post">
		<input type="text" placeholder="Nombre" name="name" required="">
		<input type="email" placeholder="Correo Electronico" name="email" required="">
		<input type="text" placeholder="Lugar de entrega" name="le" required="">
		<input type="text" placeholder="Fecha de pedido" name="asunto" required="">
		<textarea placeholder="Pedido" name="msg"></textarea>
		<input type="submit" name="enviar" value="Enviar pedido">
	</form>


	<?php
	include("correo.php");
	?>
	
	

</body>
</html>




