<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>

<body>
    <h1>Formulario: Recogida</h1>
    <p>El usuario se llama: <?php echo $_POST["nombre"] ?></p>
    <p>Su edad es de: <?php echo $_POST["edad"] ?></p>
    <p>Nacido en: <?php echo $_POST["ciudad"] ?></p>
    <p>Y es: <?php echo $_POST["sexo"] ?></p>
</body>

</html>