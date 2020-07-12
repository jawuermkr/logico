<!DOCTYPE html>
<html lang="es">
	<head>
		<title> LÓGICO - RED DE SOPORTE TÉCNICO </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	</head>
<body>
	<header>
		<img src="img/logo-b.png"/>
		<h1>LÓGICO</h1>
		<h2>RED DE SOPORTE TÉCNICO</h2>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="registro">Si necesitas solicitar soporte técnico, registrate aquí y contacta con nuestra red de profesionales.</p>
				<a href="registro_usr.php" class="btn form-control btn-outline-warning">Registro Usuario</a>
				<center><a href="log_usr.php">Iniciar Sesión</a></center>
			</div>
			<div class="col-md-6">
				<p class="registro">Si quieres hacer parte de nuestro gran equipo de técnicos colaboradores registrate aquí. </p>
				<a href="registro_tec.php" class="btn form-control btn-outline-warning">Registro Técnico</a>
				<center><a href="log_tec.php">Iniciar Sesión</a></center>
			</div>
		</div>
	</div>

<?php
  include('footer.php');
?>