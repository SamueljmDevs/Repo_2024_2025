let frutas = ["naranja", "manzana", "kiwi"]
console.log(frutas)
frutas.push("sandía"); // Mete un valor en una nueva posición final
console.log(frutas)
frutas.pop(); // Elimina el último elemento
console.log(frutas)
frutas.push("sandía")
frutas.push("mandarina")
frutas.shift(); // Elimina el primer elemento
frutas.unshift("pera") // Añade en la primera posición
console.log(frutas)
// filter -> Filtra elementos dentro del array

let frutasConI = frutas.filter((e) => e.includes("i"));
console.log(frutasConI)

//----------
let arr1 = ["Pico", "Pala", "Zoleta"]
let arr2 = ["Casco", "Arnés"]

let arr3 = arr1.concat(arr2); // Concatenar dos arrays
console.log(arr3)

arr3.reverse(); // Ordenar inverso a como está
console.log(arr3)

arr3.sort(); // Ordena alfabéticamente por orden ascendente
console.log(arr3)