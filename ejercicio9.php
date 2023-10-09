/*Calcular el nuevo salario de un obrero si obtuvo un incremento del 25% sobre su salario anterior*/

<?php
$salario_anterior = 1000;
$incremento = 0.25;
$nuevo_salario = $salario_anterior + ($salario_anterior * $incremento);
echo "El nuevo salario es: " . $nuevo_salario;
?>