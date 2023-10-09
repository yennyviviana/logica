// Calcular la división de cualquier par de números naturales dados por el usuario

<?php

//conozco
$num1= (int)readline("Ingrese el primer numero:");
$num2=(int)readline("Ingrese el segundo numero: ");


//verificar los numeros ingresados sean naturales
while($num1 < 0 || $num2 < 0){
     echo  "Los numeros deben ser naturales.intente de nuevo.\n ";

     $num1= (int)readline("Ingrese el primer numero:");


     //realiza division
     $resultado= $num1 /  $num2;


     //mostrar los resultados
     echo  "El resultado de la division es: ".$resultado. "\n";

}



?>