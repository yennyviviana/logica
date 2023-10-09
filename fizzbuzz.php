<?php

function fibonacci($n) {
  $fibonacci = array();
  for ($i = 0; $i < $n; $i++) {
      if ($i < 2) {
          $fibonacci[$i] = $i;
      } else {
          $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
      }
  }
  return $fibonacci;
}




?>