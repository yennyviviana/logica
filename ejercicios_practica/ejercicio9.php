Escribir un algoritmo que calcule el promedio de 3 números


<!DOCTYPE html>
<html>
<head>
    <title>Porcentaje</title>
</head>
<body>

    <h1>Escribir un algoritmo que calcule el promedio de 3 números</h1>

    <form action="" method="POST">
        <label for="numero1">Primer número:</label>
        <input type="number" id="numero1" name="numero1" required><br>

        <label for="numero2">Primer número:</label>
        <input type="number" id="numero1" name="numero2" required><br>

        <label for="numero3">Primer número:</label>
        <input type="number" id="numero1" name="numero3" required><br>

        <input type="submit" value="calcular">

    </form>


<?php
 if(isset($_POST['numero1']) &&  isset ($_POST['numero2'])  && isset($_POST['numero3']))
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$numero3=$_POST['numero3'];


//suma de los tes numeros
$suma =  $numero1 +  $numero2  + $numero3;


//promedio de loss numeros
$promedio =  $suma / 3;


 // Mostrar el resultado
 echo "El  promedio de los tres numero  es: " . $promedio;





?>















