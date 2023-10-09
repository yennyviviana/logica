<?php
//función array_unique() en PHP:
$frutas = array("manzana", "pera", "manzana", "uva", "uva", "mango");
$frutas_unicas = array_unique($frutas);

print_r($frutas_unicas);

?>