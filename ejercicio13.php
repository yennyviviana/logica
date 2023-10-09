Un estudiante de algoritmos desea saber cuánto debe obtener como nota mínima para aprobar la 
asignatura. Sabe que su profesor le hará tres parciales y que tienen un valor porcentual de 30, 30 y
 40 cada uno de ellos respectivamente. Ayude a este pobre estudiante a resolver su problema.

<?php
$nota_minima = 3.0;
$porcentaje_aprobacion = 0.6;
$porcentaje_reprobacion = 0.4;
$nota_parcial1 = 4.5;
$nota_parcial2 = 3.0;
$nota_parcial3 = 2.5;

$nota_aprobatoria = ($nota_minima - ($nota_parcial1 * $porcentaje_aprobacion) - ($nota_parcial2 * $porcentaje_aprobacion)) / $porcentaje_reprobacion;
echo "La nota mínima que necesita el estudiante para aprobar la asignatura es: " . $nota_aprobatoria;
?>



