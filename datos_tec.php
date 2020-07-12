<?php
  include('header_tec.php');

    session_start();
    ob_start();

    if($_SESSION['correcto']<>1){
      header('Location:index.php');
    }
?>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
            <?php

            include("abrir_conexion.php");

                $ide = $_SESSION['id'];
                            
                $resultados = mysqli_query($conexion,"SELECT * FROM $tablaTecnicos WHERE id_tec = '$ide'");
                while($consulta = mysqli_fetch_array($resultados)){
                    
                    $rol = $consulta['rol'];
                    $nombre = $consulta['nombres'];
                    $apell = $consulta['apellidos'];
                    $tdoc = $consulta['t_documento'];
                    $ndoc = $consulta['n_documento'];
                    $loc = $consulta['localidad'];
                    $mail = $consulta['email'];
                    $cel = $consulta['celular'];
                    $clave = $consulta['clave'];
                    $des = $consulta['descripcion'];
                    $foto = $consulta['foto'];

                }
                include("cerrar_conexion.php");
                
                echo "<form method=\"POST\" action=\"datos_tec.php\">";
                echo "<input class=\"form-control\" type=\"text\" name=\"nomo\" value=\"" . $nombre . "\" >";
                echo "<input class=\"form-control\" type=\"text\" name=\"apell\" value=\"" . $apell . "\" >";
                echo "<input class=\"form-control\" type=\"text\" name=\"tdoc\" value=\"" . $tdoc . "\" >";
                echo "<input class=\"form-control\" type=\"text\" name=\"ndoc\" value=\"" . $ndoc . "\" >";
                echo "<input class=\"form-control\" type=\"text\" name=\"loc\" value=\"" . $loc . "\" >";
                echo "<input class=\"form-control\" type=\"text\" name=\"mail\" value=\"" . $mail . "\" >";
                echo "<input class=\"form-control\" type=\"text\" name=\"cel\" value=\"" . $cel . "\" >";
                echo "<input class=\"form-control\" type=\"password\" name=\"clave\" value=\"" . $clave . "\" >";
                echo "<input class=\"form-control\" type=\"text\" name=\"des\" value=\"" . $des . "\" >";
                echo "<input name=\"btnap\" class=\"btn btn-block btn-outline-success\" type=\"submit\"  value=\"Actualizar\">";
                echo "</form>";
                
                        
                if(isset($_POST['btnap'])){
                    
                    $rolo = $rol;
                    $nomo = $_POST['nomo'];
                    $apelli = $_POST['apell'];
                    $tdocu = $_POST['tdoc'];
                    $ndocu = $_POST['ndoc'];
                    $loco = $_POST['loc'];
                    $mailo = $_POST['mail'];
                    $celu = $_POST['cel'];
                    $clavel = $_POST['clave'];
                    $desc = $_POST['des'];
                    $fot = $foto;
                    
                include("abrir_conexion.php");
                    
                    if($nomo=="" || $apelli=="" || $tdocu=="" || $ndocu=="" || $loco=="" || $mailo=="" || $celu=="" || $clavel=="" || $desc==""){
                        echo "Los campos son obligatorios";
                    } else {
                        $_UPDATE_SQL="UPDATE $tablaTecnicos Set
                        
                        rol = '$rolo',
                        nombres = '$nomo',
                        apellidos = '$apelli',
                        t_documento = '$tdocu',
                        n_documento = '$ndocu',
                        localidad = '$loco',
                        email = '$mailo',
                        celular = '$celu',
                        clave = '$clavel',
                        descripcion = '$desc',
                        foto = '$fot'
                        
                        WHERE id_tec = '$ide'";
                    }	
                    mysqli_query($conexion,$_UPDATE_SQL);
                    include("cerrar_conexion.php");
                    header("Location: perfil_tec.php");
                    
                }
            ?>
			</div>
			<div class="col-md-4 img-perfil">
      <?php
				$ide = $_SESSION['id'];
				include("abrir_conexion.php");
				$resultados = mysqli_query($conexion,"SELECT * FROM $tablaTecnicos WHERE id_tec = '$ide'");
				while($consulta = mysqli_fetch_array($resultados)) {
					echo "<img src=".$consulta['foto']."><br/><br/>";	
				
					include("cerrar_conexion.php");
				}
			?>
      <form action="perfil_pic.php" method="post" enctype="multipart/form-data">
					<input name="foto" type="file">
					<input class="form-control" name="send-f" type="submit" value="Subir">
				</form>
			</div>
			
		</div>
	</div>

<?php
  include('footer.php');
?>