//calcular el factorial de un número entero:
<?php


function factorial($n) {
  if ($n <= 1) {
    return 1;
  } else {
    return $n * factorial($n-1);
  }
}

// Ejemplo de uso:
echo factorial(5); // Resultado: 120

?>