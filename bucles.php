<?php

$contador = 1;

while ($contador <= 10) {
    echo $contador + 2;
    echo "<br>";
    $contador ++;
}

for ($contador = 1; $contador <= 10; $contador++) {
    echo "<br>";
    echo "<br>";
}

$suma = 5;
$dato = 2;

switch ($dato) {
    case 2:
        echo $dato + $suma;
        break;
    default:
        echo $dato / $suma;
        break;
}

?>



