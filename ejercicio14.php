<?php
// Inicio del proceso de inscripción
echo "Bienvenido al proceso de inscripción de Unitecnica\n";

// Solicitar información personal del estudiante
$name = readline("Ingrese su nombre completo: ");
$id_number = readline("Ingrese su número de identificación: ");
$birthdate = readline("Ingrese su fecha de nacimiento (en formato dd/mm/aaaa): ");
$email = readline("Ingrese su correo electrónico: ");
$phone_number = readline("Ingrese su número de teléfono: ");
$address = readline("Ingrese su dirección: ");
$academic_program = readline("Ingrese el programa académico al que desea inscribirse: ");
$semester = readline("Ingrese el semestre al que desea inscribirse: ");
$modality = readline("Ingrese la modalidad de estudio (presencial o virtual): ");

// Validar los datos ingresados
if (!empty($name) && !empty($id_number) && !empty($birthdate) && !empty($email) && 
!empty($phone_number) && !empty($address) && !empty($academic_program) && !empty($semester)
 && !empty($modality)) {
    // Almacenar información en la base de datos de Unitecnica
    // (código para almacenar información en la base de datos)
    echo "¡Felicidades! Su inscripción ha sido exitosa\n";
} else {
    echo "Lo siento, se produjo un error al procesar su solicitud. Por favor, inténtelo de nuevo.\n";
}
?>
