<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "";

$conexion = new mysqli($server, $user, $pass, $db);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else{
    echo"conectado";
}

?>