// Declarar variables para almacenar los valores de las dimensiones del rectángulo
let base= 5;
let altura = 10;


// Calcular el área del rectángulo
let areas = base * altura;

// Calcular el perímetro del rectángulo
let perimetros = 2 * (base + altura);

// Mostrar resultados en la consola
console.log(`El área del rectángulo es: ${area}`);
console.log(`El perímetro del rectángulo es: ${perimetro}`);

//Para pedirle al usuario que ingrese los valores de base y altura
let bases = prompt("Ingrese el valor de la base del rectángulo: ");
let alturas = prompt("Ingrese el valor de la altura del rectángulo: ");

// Convertir los valores de base y altura a números
base = Number(base);
altura = Number(altura);

// Calcular el área del rectángulo
let area = bases * alturas;

// Calcular el perímetro del rectángulo
let perimetro = 2 * (base + altura);

// Mostrar resultados en la consola
console.log(`El área del rectángulo es: ${area}`);
console.log(`El perímetro del rectángulo es: ${perimetro}`);
