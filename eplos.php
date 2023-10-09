 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>eplo</title>
</head>
<body>


<form method="post">
<input type="number" name="n2">
<input type="submit" name="boton" value="Calcular">
</form>



<?php // inicio


$n1=5; //conozco
$n2=$_POST['ndos'];//desconozco

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





//fin





?>






</body>
</html>