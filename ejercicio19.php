//escribir un programa que muestre en pantalla los numeros 1 al 5, sustituyendo los  multiplos de 3 por su primer nombre (yenny) y los multiplos de 5 por su segundo nombre (bibiana), y los multiplos de ambos por sus dos nombres
Aquí te muestro el código en PHP para mostrar los números del 1 al 5 y reemplazar los múltiplos de 3 y 5 por nombres:

<?php

for ($i = 1; $i <= 5; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "Yenny Bibiana" . PHP_EOL;
    } elseif ($i % 3 == 0) {
        echo "Yenny" . PHP_EOL;
    } elseif ($i % 5 == 0) {
        echo "Bibiana" . PHP_EOL;
    } else {
        echo $i . PHP_EOL;
    }
}

?>



