
let nuevoElemento = document.createElement("main")

nuevoElemento.id = "nuevo"
nuevoElemento.textContent = "Hola, soy un nuevo elemento*"

let cuerpoHTML = document.querySelector("body")

cuerpoHTML.appendChild(nuevoElemento)
console.log(nuevoElemento);
