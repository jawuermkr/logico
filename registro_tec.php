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
                <center><img src="img/logo-b.png" width="100px"></center>
                <h2>¡Te damos la bienvenida!</h2>
                <p>Pronto serás parte de la red más grande de profesionales técnicos que podrá atender casos de nuestros usuarios y empresas asociadas.</br>
                Genera ingresos extra con tus conocimientos en el campo de la computación.</p>
            </div>
            <div class="col-md-8">
                <h2>Completa todos los campos.</h2>
                <form method="post" action="registro_tec.php">
                    <input class="form-control" name="name" type="text" placeholder="Nombres"/>
                    <input class="form-control" name="f-name" type="text" placeholder="Apellidos"/>
                    <select class="form-control" name="tdocu" type="text">
                        <option value="C.C.">Cédula de Ciudadanía</option>
                        <option value="C.E.">Cédula de Extranjería</option>
                        <option value="C">Contraseña</option>
                    </select>
                    <input class="form-control" name="n-d" type="text" placeholder="Número de Documento"/>
                    <select class="form-control" name="localidad" type="text">
                        <option value="Usaquén">Usaquén</option>
                        <option value="Chapinero">Chapinero</option>
                        <option value="Santa Fe">Santa Fe</option>
                        <option value="San Cristóbal">San Cristóbal</option>
                        <option value="Usme">Usme</option>
                        <option value="Tunjuelito">Tunjuelito</option>
                        <option value="Bosa">Bosa</option>
                        <option value="Kennedy">Kennedy</option>
                        <option value="Fontibón">Fontibón</option>
                        <option value="Engativá">Engativá</option>
                        <option value="Suba">Suba</option>
                        <option value="Barrios Unidos">Barrios Unidos</option>
                        <option value="Teusaquillo">Teusaquillo</option>
                        <option value="Los Mártires">Los Mártires</option>
                        <option value="Antonio Nariño">Antonio Nariño</option>
                        <option value="Puente Aranda">Puente Aranda</option>
                        <option value="La Candelaria">La Candelaria</option>
                        <option value="Rafael Uribe Uribe">Rafael Uribe Uribe</option>
                        <option value="Ciudad Bolivar">Ciudad Bolivar</option>
                        <option value="Sumapaz">Sumapaz</option>
                    </select>
                    <input class="form-control" name="mail" type="text" placeholder="E-mail"/>
                    <input class="form-control" name="cel" type="text" placeholder="Celular"/>
                    <input class="form-control" name="clave" type="password" placeholder="Clave"/>
                    <input class="btn form-control btn-outline-success" name="btn-rt" type="submit" value="Enviar Registro" />
                </form>
                <?php
                // INSERTAR
                if (isset($_POST['btn-rt'])){
                    
                    $rol = "tec";
                    $nomo = $_POST['name']; 
                    $apelli = $_POST['f-name'];
                    $tdocume = $_POST['tdocu'];
                    $nd = $_POST['n-d'];
                    $loka = $_POST['localidad'];
                    $ema = $_POST['mail'];
                    $tel = $_POST['cel'];
                    $clavenew = $_POST['clave'];
                    $des = "Actualiza esta sección con tu perfíl profesional.";
                    $pic = "img/perfil.png";
      
                    if($nomo == "" || $nd == "" || $clavenew == ""){
                        echo "Completa los datos";
                    } else {
                    
                    include("abrir_conexion.php");
      
                    $conexion->query("INSERT INTO $tablaTecnicos
                    (rol,nombres,apellidos,t_documento,n_documento,localidad,email,celular,clave,descripcion,foto)
                    values('$rol','$nomo','$apelli','$tdocume','$nd','$loka','$ema','$tel','$clavenew','$des','$pic')"); 
                    
                    include("cerrar_conexion.php");
                    echo "<center><h3 class=\"alert-success\">Los datos se guardaron corectamente</h3></center>";
                    echo "<center><a href=\"log_tec.php\">¡Ingresar Ahora!</a></center>";
                    }
                }
                
                ?>
            </div>
        </div>
    </div>

<?php
  include('footer.php');
?>