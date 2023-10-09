//Crear una función llamada "calcularPromedio" que reciba un arreglo de números como parámetro
// y devuelva el promedio de los números del arreglo.

function calcularPromedio(numeros) {
    let suma = 0;
    numeros.forEach(function(numero) {
        suma += numero;
    });
    return suma / numeros.length;
}



