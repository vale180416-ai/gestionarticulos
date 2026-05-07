<?php

$host = "mysql-vaaleeoortiiz.alwaysdata.net";
$usuario = "vaaleeoortiiz";
$password = "noaguantomas";
$bd = "gestion_articulos";

$conn = new mysqli($host, $usuario, $password, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>