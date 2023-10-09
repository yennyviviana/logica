// Crear array de objetos
let objetos = [
    {id: 1, descripcion: "Objeto 1"},
    {id: 2, descripcion: "Objeto 2"},
    {id: 3, descripcion: "Objeto 3"}
];

// Función para listar objetos
function listarObjetos() {
    console.log("Listando objetos:");
    objetos.forEach(function(objeto) {
        console.log("Id: " + objeto.id + ", Descripción: " + objeto.descripcion);
    });
}

// Función para insertar objeto
function insertarObjeto(nuevoObjeto) {
    objetos.push(nuevoObjeto);
    console.log("Objeto insertado con éxito. Id: " + nuevoObjeto.id + ", Descripción: " + nuevoObjeto.descripcion);
}

// Función para eliminar objeto
function eliminarObjeto(id) {
    let index = objetos.findIndex(function(objeto) {
        return objeto.id === id;
    });
    if (index === -1) {
        console.log("No se encontró el objeto con id: " + id);
    } else {
        objetos.splice(index, 1);
        console.log("Objeto eliminado con éxito. Id: " + id);
    }
}

// Ejemplos de uso de las funciones
listarObjetos();
insertarObjeto({id: 4, descripcion: "Objeto 4"});
listarObjetos();
eliminarObjeto(3);
listarObjetos();
