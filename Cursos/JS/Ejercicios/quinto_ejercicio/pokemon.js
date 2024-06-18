let pokemon0 = ["Bulbasaur", 45, 49, 49, 65, 65, 45]
let pokemon1 = ["Squirtle", 44, 48, 65, 50, 64, 43]
let pokemon2 = ["Charmander", 39, 52, 43, 60, 50, 65]
let pokemon3 = ["Pikachu", 35, 55, 40, 50, 50, 90]
let pokemon4 = ["Eevee", 55, 55, 50, 45, 65, 55]
let pokemon5 = ["Haunter", 45, 50, 45, 115, 55, 95]

let equipo = [
    pokemon0, pokemon1, pokemon2, pokemon3, pokemon4, pokemon5
]

function evaluadorPkm(arr) {

    for (let i = 0; i < arr.length; i++) {
        let suma = 0;
        for (let j = 1; j < arr[i].length; j++) {
            suma += arr[i][j];
            media = suma / (arr.length - 1);
        }
        if (media > 70) {
            console.log("El pokemon " + arr[i][0] + " tiene unas habilidades para competir. (" + media + ")")
        } else {
            console.log("El pokemon " + arr[i][0] + " no tiene unas habilidades para competir. (" + media + ")")
        }

    }
}
evaluadorPkm(equipo);