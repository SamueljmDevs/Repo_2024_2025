<?php
#Esto es un comentario
echo "<h1>Hola mundo</h1>";
$name = "Pache";
$age = 30;
#Escupe toda la info de la variable
var_dump($name);
#gettype te mira el tipo de la variable
gettype($name);
#Para las constantes se usa define(nombre, valor);
#o const NOMBRE = valor;
/*
if(){
}elseif (){
}else{
}

o

<?php if () : ?>
    código sin echo
<?php elseif () : ?>   NUNCA PONGAS ELSE IF
    codigo sin echo
<?php else : ?>
    codigo sin echo
<?php endif; ?>

Se pueden hacer ternaria
(age>18)?"":"";
*/

$outputAge = match ($age) {
    0, 1, 2 => "Eres un baby",
    3, 4, 5, 6, 7, 8, 9, 10 => "Eres un niño",
    11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolescente",
    19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 => "Eres un adulto joven",
    default => "Vas tirando a viejo"
};

$outputAge2 = match (true) { #Al poner true busca en el que se cumpla la condición puesta
    $age < 2 => "Eres un baby",
    $age < 10 => "Eres un niño",
    $age < 18 => "Eres un adolescente",
    $age === 18 => "Eres mayor de edad",
    $age < 30 => "Eres un adulto joven",
    default => "Vas tirando a viejo"
};
$array1 = ["PHP", "JS", "Python"];
$array1[] = "Java";
$array1[1] = "JavaScript";

$array2 = ["Samu" => "Pache", "Ignacio" => "Nacho", "Victoria" => "Vicky"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <ul>
        <?php foreach ($array1 as $key => $language) : ?>
            <li><?= $key . "-" . $language ?></li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <?php foreach ($array2 as $key => $language) : ?>
            <li><?= $key . "-" . $language ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
<?php

?>