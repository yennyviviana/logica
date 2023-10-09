<?php
function es_palindromo($str) {
  $str = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str)); // Convertir a minúsculas y eliminar caracteres no alfanuméricos
  return $str == strrev($str);
}

// Ejemplo de uso:
echo es_palindromo("Anita lava la tina"); // Resultado: true
echo es_palindromo("Hola mundo"); // Resultado: false


function IsCasiPalindromo($palabra) {
  $n = strlen($palabra);
  $modificaciones = 0;
  for ($i = 0; $i < $n / 2; $i++) {
    if ($palabra[$i] != $palabra[$n - 1 - $i]) {
      $modificaciones++;
      if ($modificaciones > 1) {
        return false;
      }
      if ($n % 2 == 0 && $i == $n / 2 - 1) {
        return true;
      }
      if ($palabra[$i] == $palabra[$n - 2 - $i] && $palabra[$i + 1] == $palabra[$n - 1 - $i - 1]) {
        return true;
      }
      if ($palabra[$i] == $palabra[$n - 1 - $i - 1] && $palabra[$i + 1] == $palabra[$n - 2 - $i]) {
        return true;
      }
      return false;
    }
  }
  return true;
}

$palabra = "abccbx";
if (IsCasiPalindromo($palabra)) {
  echo "La palabra '$palabra' es un casi palíndromo\n";
} else {
  echo "La palabra '$palabra' no es un casi palíndromo\n";
}


?>
