var fecha = new Date(1994, 0, 1); //Tienes que poner un mes menos porque empieza en 0
//var fecha = new Date("01/01/1994"); //Mes/dia/anio

//alert(fecha);

//Funciones especiales

var dia = fecha.getDate();
var mes = fecha.getMonth();
var anio = fecha.getFullYear();

alert("Día: " + dia)
alert("Mes: " + (mes + 1))
alert("Año: " + anio)