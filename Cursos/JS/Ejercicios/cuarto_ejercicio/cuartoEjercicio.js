var primerNumero, segundoNumero;
primerNumero = parseInt(prompt("Introduzca el primer número"));
segundoNumero = parseInt(prompt("Introduzca el segundo número"));

if (primerNumero > segundoNumero) {
    alert(primerNumero + " es mayor")
} else {
    alert(segundoNumero + " es mayor")
}

var dia, mes, anio;
dia = prompt("Introduzca el día");
mes = prompt("Introduzca el mes, en número");
anio = prompt("Introduzca el año");

var fecha = new Date((mes) + "/" + (dia) + "/" + anio);
var diaSemana = fecha.getDay();
var diaSemanaNombre;
switch (diaSemana) {
    case 1:
        diaSemanaNombre = "Lunes";
        break;
    case 2:
        diaSemanaNombre = "Martes";
        break;
    case 3:
        diaSemanaNombre = "Miércoles";
        break;
    case 4:
        diaSemanaNombre = "Jueves";
        break;
    case 5:
        diaSemanaNombre = "Viernes";
        break;
    case 6:
        diaSemanaNombre = "Sábado";
        break;
    case 7:
        diaSemanaNombre = "Domingo";
        break;
}
alert("El día de la semana es: " + diaSemanaNombre)