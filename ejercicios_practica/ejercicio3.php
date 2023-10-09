
<!DOCTYPE html>
<html>
<head>
    <title>Calcular la división de cualquier par de números naturales dados por el usuario</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form action="" method="POST">
        <label for="numero1">Ingrese el primer número:</label>
        <input type="number" id="numero1" name="numero1" required><br>

        <label for="numero2">Ingrese el segundo número:</label>
        <input type="number" id="numero2" name="numero2" required><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>


<?php

if (isset($_POST['numero1']) && isset($_POST['numero1']))  {
$A = $_POST['numero1'];
$B = $_POST['numero2'];

// division
$division = $A / $B;


// División
if ($B != 0) {
    $division = $A / $B;
    echo "La división de los números es: " . $division . "<br>";
} else {
    echo "Error: No se puede realizar la división debido a que el segundo número es cero.<br>";
}

}
?>
