<?php
#Iniciamos sesión de curl

use LDAP\Result;
//SI solo quieres hacer get puedes usar $result = file_get_contents(APi_URL);
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
//indicar que queremos recibir el resultado sin monstrar en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Ejecutamos la petición y guardamos el resultado
$result = curl_exec($ch);
$data = json_decode($result, true); //true lo mete en un array asociativo, false en texto plano
curl_close($ch);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Movie</title>
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
</head>

<body>
    <section>
        <h2>La siguiente producción de Marvel es:</h2>
        <p><img src=<?php echo $data["poster_url"]; ?>></p>
        <p>
            <b><?= $data["title"]; ?></b>
            <br>
            Se estrenará dentro de: <?php echo $data["days_until"] ?> días.<br>
            <?php
            $estreno = $data["release_date"];
            $estrenoEspania = date("d/m/Y", strtotime($estreno));

            ?>
            El día: <?php echo $estrenoEspania ?>
        </p>
    </section>
    <section>
        <h2>Después se estrenará:</h2>
        <p><img src=<?php echo $data["following_production"]["poster_url"]; ?>></p>
        <p>
            <b><?= $data["following_production"]["title"]; ?></b>
            <br>
            Se estrenará dentro de: <?php echo $data["following_production"]["days_until"] ?> días.<br>
            <?php
            $estreno = $data["following_production"]["release_date"];
            $estrenoEspania = date("d/m/Y", strtotime($estreno));
            ?>
            El día: <?php echo $estrenoEspania ?>
        </p>
    </section>
</body>

</html>
<?php

?>