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
      <div class="col-md-9">
        <div class="post">
          <?php
          // DATOS Y NUEVO POST
            $ide = $_SESSION['id'];
            include("abrir_conexion.php");
            $resultados = mysqli_query($conexion,"SELECT * FROM $tablaTecnicos WHERE id_tec = '$ide'");
            while($consulta = mysqli_fetch_array($resultados)) {
              echo "<img src=".$consulta['foto']." width=\"50px\">";
              echo "<h3>".$consulta['nombres']." ".$consulta['apellidos']."</h3>";
              $nom = $consulta['nombres']." ".$consulta['apellidos'];
              include("cerrar_conexion.php");
            }
          ?>
          <form action="muro.php" method="post">
            <textarea class="form-control" name="mensaje"></textarea>
            <input class="form-control" type="submit" name="post-t" value="Publicar">
          </form>
          <?php
          // INSERTAR POST
                
          if (isset($_POST['post-t'])){
              
              $codt = $ide;
              $nombre = $nom;
              $date = date("Y")."-".date("m")."-".date("d");
              $men = $_POST['mensaje'];

              if($men == ""){
                  echo "No hay mensaje para publicar.";
              } else {
              
              include("abrir_conexion.php");

              $conexion->query("INSERT INTO $tablaPostTec (id_tec,nombre_tec,fecha,mensaje) values('$codt','$nombre','$date','$men')"); 
              
              include("cerrar_conexion.php");
              }
          }
          ?>
        <hr>
        </div>
        <div class="post-s">
        <?php
        // CONSULTA DE POSTS Y BOTONES | EDITAR | ELIMINAR | COMENTAR
          include("abrir_conexion.php");
          $resultados = mysqli_query($conexion,"SELECT * FROM $tablaPostTec ORDER BY id_postt DESC");
          while($consulta = mysqli_fetch_array($resultados)) {

            $idep = $consulta['id_postt']; 
            $cod = $consulta['id_tec'];
            echo "<p><small>".$consulta['nombre_tec']." | ".$consulta['fecha']."</small></p>";
            echo $consulta['mensaje']. "<br/>";

            if($_SESSION['id'] == $cod){
              echo "<form action=\"muro.php\" method=\"post\">
                <input class=\"oculto\" type=\"text\" name=\"codi\" value=".$idep.">
                <input class=\"btn\" type=\"submit\" name=\"eli-tec\" value=\"Eliminar\">
              </form><hr>";
            } else {
              echo "<form action=\"muro.php\" method=\"post\">
              <input class=\"btn\" type=\"submit\" name=\"com-tec\" value=\"Comentar\">
            </form><hr>";
            }

            include("cerrar_conexion.php");
          }
          // ELIMINAR POST
          if(isset($_POST['eli-tec'])){

            $codi = $_POST['codi'];
            include("abrir_conexion.php");
            $_DELETE_SQL = "DELETE FROM $tablaPostTec WHERE id_postt = '$codi'";
            mysqli_query($conexion,$_DELETE_SQL);
          }
          
            include("cerrar_conexion.php");
          ?>
        </div>
      </div>

			<div class="col-md-3 sidebar">
        <h2>Ads</h2>
        <hr>
        <h3>¿Qué hacer?</h3>
        <p>Estamos trabajando cada día para cargar nuevas actualizaciones y realizar el lanzamiento oficial en poco tiempo.
        Puedes preparar tu perfil de la mejor forma para que los clientes lo vean.<br/>
        Ahora también puedes postear en el muro, interactuar con otros técnicos y formar grandes lazos colaborativos.</p>
			</div>
		</div>
	</div>

<?php
  include('footer.php');
?>