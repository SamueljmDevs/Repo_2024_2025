<?php
$server = 'localhost';
$user = 'jose';
$pass = 'josefa';
$database = 'monster_bbdd';

$conexion = new mysqli($server, $user, $pass, $database);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monstruos y Mitología</title>
</head>

<body>
    <?php
    if ($conexion->connect_errno) {
        die("Conexión fallida" . $conexion->connect_errno);
    } else {
        echo "<p>Conectado</p>";
    }
    ?>
</body>

</html>