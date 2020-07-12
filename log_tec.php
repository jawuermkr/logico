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
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4 login">
				<center><img src="img/logo-b.png" width="100px"></center>

				<p class="bg-danger" align="center"><b>
					<?php
					session_start();
					ob_start();
					
					if(isset($_SESSION['correcto'])){
						if($_SESSION['correcto']==2){
							echo "Los campos son obligatorios";
						}
						if($_SESSION['correcto']==3){
							echo "Datos incorrectos";
						}
					} else {
						$_SESSION['correcto']=0;
					}
					?>
				</b></p>

				<form method="post" action="perfil_tec.php">
					<input class="form-control" type="email" name="correo" placeholder="correo">
					<input class="form-control" type="password" name="clave" placeholder="Contraseña">
					<input class="form-control btn-outline-success" type="submit" name="ini-tec" value="Ingresar">
				</form>
				<p><a href="registro_tec.php">Registrarse Como Técnico</a></p>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>

<?php
  include('footer.php');
?>