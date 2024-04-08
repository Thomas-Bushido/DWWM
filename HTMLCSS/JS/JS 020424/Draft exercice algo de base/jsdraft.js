let nombre1 = 3;
let nombre2 = 5;

resultataddition = nombre1 + nombre2;
console.log(resultataddition)


let nombre3 = 10;
let nombre4 = 7;

resultatsoustraction = nombre3 - nombre4;
console.log(resultatsoustraction)

let nombre5 = 4;
let nombre6 = 6;

resultatmultiplication = nombre5 * nombre6;
console.log(resultatmultiplication)


let nom= "Doe";
let prénom= "John";

resultatconcatenation = prénom +" "+ nom;
console.log(resultatconcatenation)

let sujet= "Le chat";
let verbe= "mange" ;
let objet= "la souris";

resultatconcatenation2 = sujet +" "+ verbe +" "+ objet;
console.log(resultatconcatenation2)

// Creation de fonction 
// Exo1
function saluer2(prenom, nom) {
    return  "Bonjour," + prenom +" "+ nom + "!";
}

console.log(saluer2("thomas", "brandt"));

// Exo2

function mutlip(nb1, nb2) {
    return nb1*nb2;
}
console.log(mutlip(7, 8))

// Création de tableaux et manipulation:
// Exo1 // Exo2
let tab4= [1,2,3,4,5];

console.log(tab4);

tab4.push(10, 20, 30);

console.log(tab4);

tab4.shift();

console.log(tab4);

//Création d'objet et manupulation :

let program = {
prénom:"Alice", 
age: 25,
ville: "Paris"

}

console.log(program.prénom)
console.log(program.age)
console.log(program.ville)

let comptebancaire = {
solde: 1000,
titulaire: "John Doe"

}
let ajout = 500
console.log("solde:" + " " + (comptebancaire.solde + ajout))
console.log("titulaire:" + " " + comptebancaire.titulaire)


// Exercices - Conditions & boucles

// Exo1
let age = 17
if ( age >= 18){
    console.log("Majeur");
}
else { ( age < 18)
    console.log("Mineur")
}

// Exo2
let numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

numbers.forEach(function(number) {
    
    console.log(number);
});


 
