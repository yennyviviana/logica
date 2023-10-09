<?php
// Solicitar información personal del usuario
$name = readline("Ingrese su nombre completo: ");
$birthdate = readline("Ingrese su fecha de nacimiento (en formato dd/mm/aaaa): ");
$nationality = readline("Ingrese su nacionalidad: ");
$id_number = readline("Ingrese su número de identificación personal: ");

// Mostrar información personal ingresada por el usuario
echo "Nombre completo: $name\n";
echo "Fecha de nacimiento: $birthdate\n";
echo "Nacionalidad: $nationality\n";
echo "Número de identificación personal: $id_number\n";
?>
