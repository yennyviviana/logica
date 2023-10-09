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
                <h1>Formulario</h1>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-md-6">
                <h1>Tabla</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Aquí puedes agregar la lógica para obtener los datos de la tabla desde una base de datos o cualquier otra fuente
                        $datos = [
                            ['Juan', 'juan@example.com'],
                            ['María', 'maria@example.com'],
                            ['Pedro', 'pedro@example.com']
                        ];

                        // Iterar sobre los datos y mostrarlos en la tabla
                        foreach ($datos as $dato) {
                            echo "<tr>";
                            echo "<td>" . $dato[0] . "</td>";
                            echo "<td>" . $dato[1] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
