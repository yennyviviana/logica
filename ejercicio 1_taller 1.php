<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ejercicio 1</title>
</head>
<body>


<form method="post">
<input type="number" name="A"required="required">
<input type="number" name="B"required="required">
<input type="submit" name="boton" value="calcular">

</form>




<?php
  //conozco 
   $A=48;
   $B=57; 
   
   
   //desconozco
   
if(isset($_POST['boton'])){
$suma = $_POST['calcular'];

   
   //ejecucion
    $suma=$A+$B;
    
    
}
    
    
    
    //mostrarlos resultados
    
    
    echo "el resultado de la suma es:" . $suma;












?>


















</body>
</html>
 