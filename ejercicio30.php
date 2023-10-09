<?php

function distancia_promedio($x1, $y1, $x2, $y2, $x3, $y3) {
  $dist1 = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
  $dist2 = sqrt(pow($x3 - $x1, 2) + pow($y3 - $y1, 2));
  $dist3 = sqrt(pow($x3 - $x2, 2) + pow($y3 - $y2, 2));
  
  $promedio = ($dist1 + $dist2 + $dist3) / 3;
  
  return $promedio;
}

// Ejemplo de uso:
$x1 = 1;
$y1 = 2;
$x2 = 4;
$y2 = 6;
$x3 = 8;
$y3 = 3;

$distancia_prom = distancia_promedio($x1, $y1, $x2, $y2, $x3, $y3);
echo "La distancia promedio es: " . $distancia_prom;


 
?>