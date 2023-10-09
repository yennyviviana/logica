<!DOCTYPE html>
<html>
<head>
    <title>Resta y suma de números</title>
</head>
<body>

    <h1>Restar dos números dados por el usuario y guardar su resultado, sumar otros dos números</h1>

    <form action="" method="POST">
        <label for="numero1">Primer número:</label>
        <input type="number" id="numero1" name="numero1" required><br>

        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" required><br>

        <label for="numero3">Tercer número:</label>
        <input type="number" id="numero3" name="numero3" required><br>

        <label for="numero4">Cuarto número:</label>
        <input type="number" id="numero4" name="numero4" required><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>


<?php
 
 if(isset($_POST['numero1']) &&  isset ($_POST['numero2'])  && isset($_POST['numero3']) && isset($_POST['numero4'])                           )
  $numero1   = $_POST['numero1'];
  $numero2   =  $_POST['numero2'];
  $numero3   =  $_POST['numero3'];
  $numero4  =   $_POST['numero4'];


    //suma de otros numeros
$suma= $numero1 + $numero2;

//restar los  dos numeros dados por el usuario
$resta= $numero1  - $numero2;


//imprimiendo los resultados
echo "el resultado de la suma  es ". $suma . "<br>";
echo "el resultado de la resta  es ". $resta;


?>
