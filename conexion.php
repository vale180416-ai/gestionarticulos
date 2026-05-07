<?php

$host = "mysql-vaaleeoortiiz.alwaysdata.net";
$usuario = "vaaleeoortiiz";
$password = "clase1234";
$bd = "vaaleeoortiiz_gestionarticulos";

$conn = new mysqli($host, $usuario, $password, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>