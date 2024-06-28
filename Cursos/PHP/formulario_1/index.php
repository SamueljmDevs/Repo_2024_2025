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
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Introduza su nombre:</label>
        <input type="text" name="nombre" value="<?php if (isset($_POST["nombre"]) && !$error_nombre) echo $_POST["nombre"] ?>">
        <?php
        if (isset($_POST["enviar"]) && $error_nombre) {
            echo "<span class='error'>* El campo no puede dejarse vacío.</span>";
        }
        ?>
        <br>
        <label for="edad">Introduzca su edad:</label>
        <input type="number" name="edad" value="<?php if (isset($_POST["edad"]) && !$error_edad) echo $_POST["edad"] ?>">
        <?php
        if (isset($_POST["enviar"]) && $error_edad) {
            echo "<span class='error'>* El campo no puede dejarse vacío ni ser menor de 0.</span>";
        }
        ?>
        <br>
        <input type="submit" value="Enviar" name="enviar">
        <input type="reset" name="borrar" value="Borrar">
    </form>
    <?php
    if (isset($_POST["enviar"]) && !$error_form) {
        echo "<span class='correcto'>Los datos se recibieron con éxito</span>";
    }
    ?>
</body>

</html>