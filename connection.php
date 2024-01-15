<?php

$host = 'localhost';
$usuario = 'root';
$password = '';
$base_datos = 'bancodb';

$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error Makiabelico de conexión: " . $conexion->connect_error);
}

?>