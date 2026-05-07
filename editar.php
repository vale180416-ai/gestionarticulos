<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM articulos WHERE id=$id";
$resultado = $conn->query($sql);

$fila = $resultado->fetch_assoc();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $bodega = $_POST['bodega'];

    $update = "UPDATE articulos SET
                nombre='$nombre',
                marca='$marca',
                cantidad='$cantidad',
                bodega='$bodega'
                WHERE id=$id";

    if($conn->query($update) === TRUE){
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Artículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="formulario">
    <h2>Editar Artículo</h2>

    <form method="POST">

        <input type="text" name="nombre"
        value="<?php echo $fila['nombre']; ?>" required>

        <input type="text" name="marca"
        value="<?php echo $fila['marca']; ?>" required>

        <input type="number" name="cantidad"
        value="<?php echo $fila['cantidad']; ?>" required>

        <input type="text" name="bodega"
        value="<?php echo $fila['bodega']; ?>" required>

        <button type="submit">Actualizar</button>

    </form>
</div>

</body>
</html>