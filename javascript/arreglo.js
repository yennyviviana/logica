//arreglo de enteros
var numeros=[1,2,3,4,5,6,7,8,9,10];

//arreglo de cadenas
var diasSemana=["lunes","martes", "miercoles","jueves","viernes","sabado","domingo"];

//arreglo de boleanos
var examenes=[true,false,true,false]; 

//utilizar métodos para agregar, eliminar o modificar elementos en un arreglo.
numeros.push(6,7,8);// agrega el elemento 6 al final del arreglo
diasSemana.pop();// elimina el último elemento del arreglo
examenes.shift();// elimina el primer elemento del arreglo

numeros.unshift(0);//agrega uno o ma selementos
console.log(numeros.length);// Output: [0, 1, 2, 3]


//arreglo vacio
let Arreglo = [];
//longitud del arreglo vacio mediante el constructor Array
let miArreglo= new Array(6);
//arreglos de javascript para iterar
miArreglo.forEach((elemento) => console.log(elemento));

//recorrer el arreglo y sumar todos sus elementos y mostrar en consola el resultado.
let nuevoArray=[1,2,3,4,5,6,7,8,9,10];
let Suma=0;
for(let i=0; i <nuevoArray.length; i++){
Suma+=nuevoArray[i];

}

 console.log(Suma); //output: 55

 //Agregar elementos al final de un arreglo
 let miElementos = [1, 2, 3];
miElementos[miElementos.length] = 4;
console.log(miElementos); // Output: [1, 2, 3, 4]


//Eliminar el último elemento de un arreglo
let Elemento = [1, 2, 3];
Elemento.length--;
console.log(Elemento); // Output: [1, 2]

//método "slice()" devuelve una copia de una porción del arreglo
let Arreglos = [1, 2, 3, 4, 5];
let copiaArreglo = Arreglos.slice();
console.log(copiaArreglo); // Output: [1, 2, 3, 4, 5]

//Copiar una porción del arreglo:
let porcionArreglo = [1, 2, 3, 4, 5];
let subArreglos = porcionArreglo.slice(1, 3);
console.log(subArreglo); // Output: [2, 3]

//Copiar una porción del arreglo con índices negativos
let porcionNegativa = [1, 2, 3, 4, 5];
let subArreglo = porcionNegativa.slice(-3, -1);
console.log(subArreglo); // Output: [3, 4]

//método "splice()":

let miAgregar = [1, 2, 3, 4, 5];
miAgregar.splice(2, 0, 6);
console.log(miAgregar); // Output: [1, 2, 6, 3, 4, 5]

//Método "sort()":
let miArre = [3, 2, 1, 4, 5];
miArre.sort();
console.log(miArre); // Output: [1, 2, 3, 4, 5]

//Método "reverse()":
let ordenar = [1, 2, 3, 4, 5];
ordenar.reverse();
console.log(ordenar); // Output: [5, 4, 3, 2, 1]

//Método "concat()"
let arreglo1 = [1, 2, 3];
let arreglo2 = [4, 5, 6];
let arregloConcatenado = arreglo1.concat(arreglo2);
console.log(arregloConcatenado); // Output: [1, 2, 3, 4, 5, 6]

