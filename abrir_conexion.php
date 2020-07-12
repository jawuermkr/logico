<?php

    $host = "localhost";
    $database = "logico";
    $name = "root";
    $clave = "132435";

    // Tablas

    $tablaTecnicos = "tecnicos";
    $tablaUsuarios = "usuarios";
    $tablaAdmin = "admin";
    $tablaPostTec = "PostTec";

    error_reporting(1);

    $conexion = new mysqli($host, $name, $clave, $database);

    if ($conexion->errno) {
        echo "No se puede acceder a la base de datos";
        exit();
    }
?>