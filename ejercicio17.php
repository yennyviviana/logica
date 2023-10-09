//Función para obtener el número más grande de un arreglo de números

<?php
function numero_mas_grande($numeros) {
  $max = $numeros[0];
  foreach ($numeros as $numero) {
    if ($numero > $max) {
      $max = $numero;
    }
  }
  return $max;
}

// Ejemplo de uso:
$numeros = array(3, 6, 1, 8, 4);
echo numero_mas_grande($numeros); // Resultado: 8


?>