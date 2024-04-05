let nombre1 = 5;
let nombre2 = 3;

// const resultatAddition = nombre1 + nombre2;
console.log(nombre1 + nombre2);


const a = 10;
const b = 5;
// const resultatSoustraction = a - b;
console.log(a - b);

const c = 6;
const d = 4;
// const resultatMultiplication = c * d;
console.log(c * d);

let prenom = "John";
let nom = "Doe";
        
        // Concaténation des variables pour former le nom complet
        let nomComplet = prenom + " " + nom;
        
        // Affichage du nom complet
        console.log("Nom complet :", nomComplet);

let sujet = "Le chat"
let verbe = "mange"
let objet = " la souris"

let phrasecomplete = sujet +" "+ verbe +" "+ objet;

console.log( phrasecomplete);

const chiffres = [1, 2, 3, 4, 5]
chiffres.forEach (elements => {
     console.log(elements)
});

let tableau2 =[]
let tab2 = (tableau2)

tab2.push(10, 20, 30)
console.log(tab2)
tab2.shift()
console.log(tab2)


let programme = {
   nom:"Alice",
   age:25,
   ville:"Paris"
};


console.log("Nom de la personne :", programme.nom);
console.log("Age de la personne:", programme.age);
console.log("Ville de la personne:", programme.ville);

let comptebancaire = {
     solde: 1000,
     titulaire: "John Doe"
}
console.log("Solde du compte : ", comptebancaire.solde)
console.log("Nom du propriétaire : ", comptebancaire.titulaire)
console.log("Solde du compte : ", comptebancaire.solde)
let ajout= 500
console.log(comptebancaire.solde + ajout)



function saluer1(a) {
     return "Bonjour,"+ a +"!";
}

console.log(saluer1("n'importe quoi"));
// CORRECTION EN DESSOUS // la solution du dessus est ayuss //ALGO DE BASE CREATION DE FONCTION
function saluer2(prenom, nom) {
     console.log( "Bonjour," + prenom +" "+ nom + "!")
}

saluer2("thomas", "brandt")

// CORRECTION EN DESSOUS EXO 2 //ALGO DE BASE CREATION DE FONCTION
function multi(a, b) {
console.log(a * b)
}
multi(7, 8)


// Exercices - Conditions et boucles //

// Exercice 1
let age = 18

if (age >= 18) {
     console.log("Majeur")
}

else {(age < 18) 
     console.log("Mineur")
}

// Correction 1:
function determinerage(age){
     if (age >= 18) {
          console.log("la personne est majeur")
     }
     else{
          console.log("la personne est mineur");
     }
}


//Exercice 2
for (let i = 2; i < 20; i += 2) {
     console.log(i);
 }

 //Exercice 3 
 let x = prompt()
 
 if (x == 5) {
     console.log("Gagné!");
 } 
 else if (x !== 5){
     console.log("Perdu!");
 }

// Correction3:
const randomNumber = Math.floor((Math.random() * 100) + 1)

let inputUser = prompt("Veuillez entrer une valeur entre 1 et 100")

while (isNaN(inputUser)){
    inputUser = prompt("Veuillez entrer un nombre entre 1 et 100")
}  

while (inputUser != randomNumber){
    if (inputUser > randomNumber){
        inputUser = prompt("Le nombre est trop haut")
    }
    
    if (inputUser < randomNumber){
        inputUser = prompt("le nombre est trop bas")
    }

    if (inputUser == randomNumber){
        console.log("c'est gagné");
    }

}


