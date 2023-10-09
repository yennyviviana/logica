//Crear una clase llamada "Alumno" con las propiedades "nombre", "edad" y "notas" 
//(un arreglo de números). La clase debe tener un método "promedio" que devuelva el promedio de las notas del alumno.

class Alumno {
    constructor(nombre, edad, notas) {
        this.nombre = nombre;
        this.edad = edad;
        this.notas = notas;
    }
    promedio() {
        return calcularPromedio(this.notas);
    }
}