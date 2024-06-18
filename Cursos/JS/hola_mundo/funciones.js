function saludar() {
    console.log("Yo te saludo");
}

saludar();

function sumatoria(numA, numB) {
    return numA + numB;
}

let primerNumero = parseInt(prompt("Introduzca el primer número"));
let segundoNumero = parseInt(prompt("Introduzca el segundo número"));

let suma = sumatoria(primerNumero, segundoNumero);

alert("La suma de " + primerNumero + " y " + segundoNumero + " es: " + suma);