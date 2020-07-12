<?php
  include('header_tec.php');
  
	session_start();
    ob_start();
    if(isset($_POST['ini-tec'])){
        $_SESSION['correcto']=0;
        $cor = $_POST['correo'];
        $pass = $_POST['clave'];
        if($cor=="" || $pass==""){
            $_SESSION['correcto']=2;//2 sera error de campos vacios
        } else {
        include("abrir_conexion.php");
        $_SESSION['correcto']=3;//2 seran datos incorrectos
        $resultados = mysqli_query($conexion,"SELECT * FROM $tablaTecnicos WHERE email = '$cor' AND clave = '$pass'");
        while($consulta = mysqli_fetch_array($resultados)) {
				$_SESSION['correcto']=1;
				$_SESSION['id'] = $consulta['id_tec'];
            }
        include("cerrar_conexion.php");
      }
    }
        
    if($_SESSION['correcto']<>1){
      header('Location:log_tec.php');
    }
?>

	<div class="container">
		<div class="row">
			<div class="col-md-4 img-perfil">
				<?php
				$ide = $_SESSION['id'];
				include("abrir_conexion.php");
				$resultados = mysqli_query($conexion,"SELECT * FROM $tablaTecnicos WHERE id_tec = '$ide'");
				while($consulta = mysqli_fetch_array($resultados)) {
					echo "<img src=".$consulta['foto'].">";	
				
					include("cerrar_conexion.php");
				}
				?>
			</div>
			<div class="col-md-8">
				<?php
					$id = $_SESSION['id'];
					include("abrir_conexion.php");
					$resultados = mysqli_query($conexion,"SELECT * FROM $tablaTecnicos WHERE id_tec = '$id'");
					while($consulta = mysqli_fetch_array($resultados)) {
							echo "<h3>".$consulta['nombres']." ".$consulta['apellidos']."</h3>";
							echo "<p>".$consulta['descripcion']."<br/>";
							echo "<p>".$consulta['localidad']."<br/>".
							$consulta['celular']."<br/>".
							$consulta['email']."</p>";
						}
					include("cerrar_conexion.php");
				?>
				<p><a href="datos_tec.php">Actualizar...</a></p>
			</div>
			<div class="col-md-12"><hr></div>
			<div class="col-md-12">
				<h3>SERVICIOS TOMADOS</h3>
				<div class="notas">
					<h4>Nombre de Cliente</h4>
					<p>Descripción del servicio a realizar.</p>
					<p><a href="#">Gestionar...</a></p>
				</div><br/>
				<div class="notas">
					<h4>Nombre de Cliente</h4>
					<p>Descripción del servicio a realizar.</p>
					<p><a href="#">Gestionar...</a></p>
				</div><br/>
			</div>
		</div>
	</div>

<?php
  include('footer.php');
?>