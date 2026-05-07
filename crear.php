<?php
include("conexion.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $bodega = $_POST['bodega'];

    $sql = "INSERT INTO articulos(nombre, marca, cantidad, bodega)
            VALUES('$nombre','$marca','$cantidad','$bodega')";

    if($conn->query($sql) === TRUE){
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Artículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="formulario">
    <h2>Nuevo Artículo</h2>

    <form method="POST">

        <input type="text" name="nombre" placeholder="Nombre" required>

        <input type="text" name="marca" placeholder="Marca" required>

        <input type="number" name="cantidad" placeholder="Cantidad" required>

        <input type="text" name="bodega" placeholder="Bodega" required>

        <button type="submit">Guardar</button>

    </form>
</div>

</body>
</html>