<?php
// Configuración del servicio web
$url = 'https://jsonplaceholder.typicode.com/posts';

// Inicialización de cURL
$ch = curl_init($url);

// Configuración de las opciones de cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecución de la solicitud HTTP GET utilizando cURL
$response = curl_exec($ch);

// Verificación de que la solicitud haya sido exitosa
if(curl_errno($ch) === 0 && curl_getinfo($ch, CURLINFO_HTTP_CODE) === 200) {
    // Impresión de los datos obtenidos
    $data = json_decode($response, true);
    print_r($data);
} else {
    echo 'Error al obtener los datos';
}

// Cierre de la sesión de cURL
curl_close($ch);
?>
      

<?php


// Define las rutas de la API
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (isset($_GET['id'])) {
            get_employee($_GET['id']);
        } else {
            get_employees();
        }
        break;
    case 'POST':
        create_employee();
        break;
    case 'PUT':
        update_employee();
        break;
    case 'DELETE':
        delete_employee();
        break;
    default:
        http_response_code(405);
        echo json_encode(array('message' => 'Método no permitido'));
}

// Función para obtener un empleado por ID
function get_employee($id) {
    $employee = get_employee_by_id($id);
    if (!$employee) {
        http_response_code(404);
        echo json_encode(array('message' => 'Empleado no encontrado'));
    } else {
        echo json_encode($employee);
    }
}

// Función para obtener todos los empleados
function get_employees() {
    $employes = get_all_employees();
    echo json_encode($employes);
}

// Función para crear un empleado
function create_employee() {
    // Valida los datos del formulario
    $data = json_decode(file_get_contents("php://input"), true);
    if (!validate_employee_data($data)) {
        http_response_code(400);
        echo json_encode(array('message' => 'Datos inválidos'));
    } else {
        $employee = create_new_employee($data);
        http_response_code(201);
        echo json_encode($employee);
    }
}

// Función para actualizar un empleado
function update_employee() {
    // Valida los datos del formulario
    $data = json_decode(file_get_contents("php://input"), true);
    if (!validate_employee_data($data) || !isset($_GET['id'])) {
        http_response_code(400);
        echo json_encode(array('message' => 'Datos inválidos'));
    } else {
        $employee = update_employee_by_id($_GET['id'], $data);
        if (!$employee) {
            http_response_code(404);
            echo json_encode(array('message' => 'Empleado no encontrado'));
        } else {
            echo json_encode($employee);
        }
    }
}

// Función para eliminar un empleado
function delete_employee() {
    if (!isset($_GET['id'])) {
        http_response_code(400);
        echo json_encode(array('message' => 'ID no proporcionado'));
    } else {
        $result = delete_employee_by_id($_GET['id']);
        if (!$result) {
            http_response_code(404);
            echo json_encode(array('message' => 'Empleado no encontrado'));
        } else {
            echo json_encode(array('message' => 'Empleado eliminado correctamente'));
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de API con PHP y AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Lista de empleados</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Identificación</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Ciudad de nacimiento</th>
                <th>Cargos</th>
                <th>Jefe inmediato</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="employee-table-body">
            <!-- Aquí se agregan los empleados mediante AJAX -->
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            // Hace una solicitud GET para obtener todos los empleados
            $.ajax({
                url: 'api.php',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Agrega cada empleado a la tabla
                    $.each(response, function(index, employee) {
                        $('#employee-table-body').append('<tr>' +
                            '<td>' + employee.id + '</td>' +
                            '<td>' + employee.nombres + '</td>' +
                            '<td>' + employee.apellidos + '</td>' +
                            '<td>' + employee.identificacion + '</td>' +
                            '<td>' + employee.direccion + '</td>' +
                            '<td>' + employee.telefono + '</td>' +
                            '<td>' + employee.ciudad_nacimiento + '</td>' +
                            '<td>' + employee.cargos + '</td>' +
                            '<td>' + employee.jefe_inmediato + '</td>' +
                            '<td>' +
                                '<button class="edit-button" data-id="' + employee.id + '">Editar</button>' +
                                '<button class="delete-button" data-id="' + employee.id + '">Eliminar</button>' +
                            '</td>' +
                        '</tr>');
                    });
                }
            });

            // Agrega un controlador de eventos para el botón de editar
            $('#employee-table-body').on('click', '.edit-button', function() {
                var employeeId = $(this).data('id');
                // Hace una solicitud GET para obtener los datos del empleado seleccionado
                $.ajax({
                    url: 'api.php?id=' + employeeId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Abre un formulario para editar los datos del empleado
                        // ...
                    }
                });
            });

            // Agrega un controlador de eventos para el botón de eliminar
            $('#employee-table-body').on('click', '.delete-button', function() {
                var employeeId = $(this).data('id');
                // Hace una solicitud DELETE para eliminar el empleado seleccionado
                $.ajax({
                    url: 'api.php?id=' + employeeId,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(response) {
                        // Elimina el empleado de la tabla
                        // ...
                    }
                });
            });
        });
