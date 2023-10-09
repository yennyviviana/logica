//Realizar las cuatro operaciones matemáticas básicas con dos número dados por el usuario y mostrar los
 resultados con un mensaje indicando el tipo de operación realizada para cada resultado.

 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>eplo</title>
</head>
<body>


<form method="post">
<input type="number" name="n1">
<input type="number" name="n2">
<input type="submit" name="boton" value="Calcular">
</form>



<?php // inicio

if (isset($_POST['n1']) && isset($_POST['n2'])) {
$n1=$_POST['n1'];
$n2=$_POST['n2'];

//ejecucion
$suma=$n1 + $n2;
$resta=$n1 - $n2;
$multipli=$n1 * $n2;
$division=$n1 / $n2;


//mostrar los resultados


echo "el resultado de la suma  es ". $suma . "<br>";
echo "el resultado de la resta  es ". $resta. "<br>";
echo "el resultado de la multipli es ". $multipli . "<br>";
echo "el resultado de la division es ". $division. "<br>";



}
?>






</body>
</html>