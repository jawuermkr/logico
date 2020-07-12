<?php
    session_start();
    ob_start();

    include("abrir_conexion.php");

    $id = $_SESSION['id'];
    $foto = $_FILES["foto"]["name"];
    $ruta = $_FILES["foto"]["tmp_name"];
    $destino = "img/fotos/".$foto;
    copy($ruta,$destino);

    
    $_UPDATE_SQL="UPDATE $tablaTecnicos Set foto = '$destino' WHERE id_tec ='$id'";
    mysqli_query($conexion,$_UPDATE_SQL);
    
    include("cerrar_conexion.php");

    header("Location: perfil_tec.php");
?>