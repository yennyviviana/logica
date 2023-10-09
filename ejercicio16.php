<?php

//Función para sumar los valores de la diagonal principal de una matriz bidimensional
function suma_diagonal_principal($matriz) {
    $suma = 0;
    for ($i = 0; $i < count($matriz); $i++) {
      $suma += $matriz[$i][$i];
    }
    return $suma;
  }
  
  // Ejemplo de uso:
  $matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
  );
  echo suma_diagonal_principal($matriz); // Resultado: 15
  





?>