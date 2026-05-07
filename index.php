<?php
include("conexion.php");

$sql = "SELECT * FROM articulos";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Artículos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="contenedor">
    <h1>Gestión de Artículos..</h1>

    <a href="crear.php" class="btn">+ Nuevo Artículo</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th>Bodega</th>
            <th>Acciones</th>
        </tr>

        <?php while($fila = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['marca']; ?></td>
            <td><?php echo $fila['cantidad']; ?></td>
            <td><?php echo $fila['bodega']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $fila['id']; ?>" class="editar">Editar</a>

                <a href="eliminar.php?id=<?php echo $fila['id']; ?>"
                class="eliminar"
                onclick="return confirm('¿Desea eliminar este artículo?')">
                Eliminar
                </a>
            </td>
        </tr>
        <?php } ?>

    </table>
</div>

</body>
</html>