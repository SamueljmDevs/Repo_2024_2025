<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales Fantásticos</title>
    <style>
        table {
            width: 60%;
            margin: 0 auto;
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        tr,
        td {
            border: 1px solid black;
        }

        img {
            width: 200px;
            height: auto;
        }
    </style>
</head>

<body>
    <?php
    if ($conexion->connect_errno) {
        die("Conexión fallida" . $conexion->connect_errno);
    } else {
        $consulta = 'SELECT * from criaturas';
        $datos = mysqli_query($conexion, $consulta);
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Descripción</th><th>Imagen</th></tr>";
        while ($fila = mysqli_fetch_assoc($datos)) {
            echo "<tr><td>" . $fila['nombre'] . "</td><td>" . $fila['descripcion'] . "</td><td><img src='img/" . $fila['retrato'] . "'></td></tr>";
        };
        echo "</table>";
    }
    ?>
</body>

</html>