//Solicitar un número al usuario y escribir los cinco números siguientes 
al número ingresado por el usuario
<?php
$num = readline("Ingresa un número: ");
for ($i = 1; $i <= 5; $i++) {
  $sig = $num + $i;
  echo "El siguiente número es: " . $sig . "\n";
}
?>
