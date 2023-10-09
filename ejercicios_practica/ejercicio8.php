Dada una cantidad de pesos, devolver (escribir) el 15% de esa cantidad.

<!DOCTYPE html>
<html>
<head>
    <title>Resta y suma de números</title>
</head>
<body>

    <h1>Dada una cantidad de pesos, devolver (escribir) el 15% de esa cantidad.</h1>

    <form action="" method="POST">
        <label for="cantidad_pesos">Primer número:</label>
        <input type="number" id="cantidad_pesos" name="cantidad_pesos" required><br>

        <input type="submit"  value="calcular">
    </form>
</body>
</html>



<?php

if(isset($_POST['cantidad_pesos']))
$cantidad_pesos = $_POST['cantidad_pesos'];


    // Calcular el 15% de la cantidad de pesos
    $porcentaje = $cantidadPesos * 0.15;

   
?>


