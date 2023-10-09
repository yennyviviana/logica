
<form method="POST" action="">

<h6> un número al usuario y escribir los cinco números siguientes al
número ingresado por el usuario</h6>

    <label for="numero">Ingresa un número:</label>
    <input type="number" name="numero" required>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el número ingresado por el usuario
    $numero = $_POST['numero'];

    // Calcular los cinco números siguientes
    $siguientes_numeros = array();
    for ($i = 1; $i <= 5; $i++) {
        $siguientes_numeros[] = $numero + $i;
    }

    // Mostrar los resultados
    echo "El número ingresado es: " . $numero . "<br>";
    echo "Los cinco números siguientes son: ";
    foreach ($siguientes_numeros as $siguiente) {
        echo $siguiente . " ";
    }
}
?>

