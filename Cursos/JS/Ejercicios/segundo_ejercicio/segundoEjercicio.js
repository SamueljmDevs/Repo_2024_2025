var primerNumero = prompt("Introduzca el primer número");
var segundoNumero = prompt("Introduzca el segundo número");

var resultado = primerNumero - segundoNumero;

if (resultado < 0) {
    alert("El resultado de la resta es menor que cero")
} else {
    alert("El resultado de la resta es mayor que cero");
    if (resultado % 2 == 0) {
        alert("Además es un número par, porque " + resultado + " es par.")
    } else {
        alert("Además es un número impar, porque " + resultado + " es impar.")
    }
}