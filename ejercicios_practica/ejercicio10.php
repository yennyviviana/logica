<!DOCTYPE html>
<html>
<head>
    <title>Formulario y Tabla</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5> Pida el nombre de un estudiante y luego escribiendo su nombre en pantalla
solicítele número de identificación, fecha de nacimiento y valor de matrícula.</h5>



                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="nombre">Identificacion:</label>
                        <input type="text" class="form-control" id="identidad" name="identidad" required>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Valor de la maticula:</label>
                        <input type="number" class="form-control" id="valor_maticula" name="valor_maticula" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>



<?php


$nombre=$_POST['nombre'];
$identidad=$_POST['identidad'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$valor_matricula=$_POST['valor_maticula'];



// Mostrar los datos ingresados
echo "nombre: " . $nombre . "<br>";
echo "identificación: " . $identidad . "<br>";
echo "Fecha de nacimiento: " . $fecha_nacimiento . "<br>";
echo "Valor de matrícula: " . $valor_matricula . "<br>";
?>













