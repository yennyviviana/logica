//Escribir el valor absoluto de un número dado por el usuario

<!DOCTYPE html>
<html>
<head>
    <title>Calcular Valor Absoluto</title>
</head>
<body>
    <h1>Calcular Valor Absoluto</h1>

    <form action="" method="POST">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" required>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>



<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    // Calcular el valor absoluto del número
    $valorAbsoluto = abs($numero);

    // Mostrar el resultado al usuario
    echo "El valor absoluto de $numero es: $valorAbsoluto";
}
?>