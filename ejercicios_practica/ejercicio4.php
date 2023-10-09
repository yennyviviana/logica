<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ejercicio Taller</title>
</head>
<body>
    <h1>EL SALARIO MÍNIMO</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td>Salario básico</td>
                <td><input type="text" name="salario_basico"></td>
            </tr>
            <tr>
                <td>Salud</td>
                <td><input type="text" name="salud"></td>
            </tr>
            <tr>
                <td>Pensión</td>
                <td><input type="text" name="pension"></td>
            </tr>
            <tr>
                <td>Bonificaciones</td>
                <td><input type="text" name="bonificacion"></td>
            </tr>
            <tr>
                <td>Salario mensual</td>
                <td><input type="text" name="salario_mensual" readonly></td>
            </tr>
            <tr>
                <td><input type="submit" name="boton" value="Calcular"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php
if (isset($_POST['salario_basico']) && isset($_POST['salud']) && isset($_POST['pension']) && isset($_POST['bonificacion'])) {
    $salarioBasico = $_POST['salario_basico'];
    $salud = $_POST['salud'];
    $pension = $_POST['pension'];
    $bonificacion = $_POST['bonificacion'];

    // Validar que los campos sean números válidos

    if (is_numeric($salarioBasico) && is_numeric($salud) && is_numeric($pension) && is_numeric($bonificacion)) {
        // Calcular el salario mensual
        $salarioMensual = $salarioBasico - $salud - $pension + $bonificacion;

        // Mostrar el resultado en el campo correspondiente del formulario
        echo '<script>document.getElementsByName("salario_mensual")[0].value = ' . $salarioMensual . ';</script>';
    } else {
        echo "Error: Ingrese valores numéricos válidos en los campos.";
    }
}
?>
