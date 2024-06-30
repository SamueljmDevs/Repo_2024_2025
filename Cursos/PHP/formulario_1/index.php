<?php
if (isset($_POST["enviar"])) {
    $error_nombre = $_POST["nombre"] == "";
    $error_edad = $_POST["edad"] <= 0 || $_POST["edad"] == "";

    $error_form = $error_nombre || $error_edad;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        .error {
            color: red;
        }

        .correcto {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Formulario</h1>
    <form action="recogida.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Introduza su nombre:</label>
        <input type="text" name="nombre" value="">
        <br>
        <label for="edad">Introduzca su edad:</label>
        <input type="number" name="edad" value="">
        <br>
        <label for="ciudad">Nacido en: </label>
        <select name="ciudad" id="ciudad">
            <option value="Córdoba">Córdoba</option>
            <option value="Málaga" selected>Málaga</option>
            <option value="Sevilla">Sevilla</option>
            <option value="Granada">Granada</option>
        </select>
        <br>
        <label for="sexoH">Hombre</label>
        <input type="radio" name="sexo" id="sexoH" value="hombre" checked></input>
        <label for="sexoM">Mujer</label>
        <input type="radio" name="sexo" id="sexM" value="mujer"></input>
        <br>
        <input type="submit" value="Enviar" name="enviar">
        <input type="reset" name="borrar" value="Borrar">
    </form>
</body>

</html>