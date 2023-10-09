//Escriba un programa que obtenga tres números, los almacene en variables y
 luego calcule y muestre un reporte sobre su suma y su promedio.

<?php
$num1 = 10;
$num2 = 20;
$num3 = 30;
$suma = $num1 + $num2 + $num3;
$promedio = $suma / 3;
echo "La suma de los números es: " . $suma . "\n";
echo "El promedio de los números es: " . $promedio;
?>