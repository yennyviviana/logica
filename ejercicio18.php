//Función para obtener las palabras que empiezan con una letra específica de una cadena de texto

<?php
function palabras_con_letra($str, $letra) {
  $palabras = explode(' ', $str); // Convertir la cadena en un arreglo de palabras
  $result = array();
  foreach ($palabras as $palabra) {
    if (strtolower(substr($palabra, 0, 1)) == strtolower($letra)) { // Verificar si la primera letra de la palabra coincide con la letra buscada
      $result[] = $palabra;
    }
  }
  return $result;
}

// Ejemplo de uso:
$str = "El perro de San Roque no tiene rabo";
$letra = 'P';
print_r(palabras_con_letra($str, $letra)); // Resultado: Array ( [0] => perro );

?>