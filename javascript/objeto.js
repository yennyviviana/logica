//Crear un objeto utilizando un constructor
let miObjeto = {};
miObjeto.propiedad1 = "valor1";
miObjeto.propiedad2 = "valor2";

function Automovil(marca, modelo, anio) {
    this.marca = marca;
    this.modelo = modelo;
    this.anio = anio;
  }
  
  let auto1 = new Automovil("Toyota", "Camry", 2020);
  let auto2 = new Automovil("Honda", "Civic", 2019);
  let auto3 = new Automovil("Chevrolet", "Cruze", 2018);
  
  console.log(auto1); // Output: { marca: "Toyota", modelo: "Camry", anio: 2020 }
console.log(auto2); // Output: { marca: "Honda", modelo: "Civic", anio: 2019 }
console.log(auto3); // Output: { marca: "Chevrolet", modelo: "Cruze", anio: 2018 }
