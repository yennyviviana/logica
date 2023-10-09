//Crear un arreglo de objetos "Alumno" y utilizar la función "forEach" para imprimir el nombre y el promedio de cada alumno.

let alumnos = [
    new Alumno("Juan", 20, [10, 9, 8]),
    new Alumno("Maria", 22, [7, 9, 8]),
    new Alumno("Pedro", 21, [8, 8, 8])
];
alumnos.forEach(function(alumno) {
    console.log(`Nombre: ${alumno.nombre}, Promedio: ${alumno.promedio()}`);
});