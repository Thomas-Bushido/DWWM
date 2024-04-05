// Exercice 4
// let Inputmonth = prompt("Veuillez entrer un mois")

// let nomdumois
// function month(mois)

// switch (mois) {
//     case "janvier":
//             console.log("31 jours")
        
       
//     case "février":
//             console.log("30 jours")
        
//     case "mars":
//             console.log("31 jours")
        
        
//     case "avril": 
//             console.log("30 jours")
        
        
//     case "mai":
//         console.log("30 jours")
        
        
//     case "juin":
//             console.log("31 jours")
        
        
//     case "juillet":
//             console.log("30 jours")
        
   
//     case "aout":
        
//             console.log("31 jours")
        
        
//     case "septembre":
        
//             console.log("30 jours")
        
        
//     case "octobre":
        
//             console.log("31 jours")
        
        
//     case "novembre":
//             console.log("30 jours")
        
//     case "décembre":
//             console.log("31 jours")
        
              
//     default:
//         nomDuJour = "Jour invalide";
// }


// Correction 4
// function nombreDeJours(num){
//     let nombreDeJours;
//     let annee = new Date().getFullYear();

// switch (num) {
//     case 1:
//         nombreDeJours = 31;
//         break;
//     case 2:
//         if (annee % 4 ==0){
//         nombreDeJours = 29;
//     }
//         else {nombreDeJours = 28};
//         break;
    
//     case 3:
//         nombreDeJours = 31;
//         break;
//     case 4:
//         nombreDeJours = 30;
//         break;
//     case 5:
//         nombreDeJours = 31;
//         break;
//     case 6:
//         nombreDeJours = 30;
//         break;
//     case 7:
//         nombreDeJours = 31;
//         break;
//     case 8:
//         nombreDeJours = 31;
//         break;
//     case 9:
//         nombreDeJours = 30;
//         break;
//     case 10:
//         nombreDeJours = 31;
//         break;
//     case 11:
//         nombreDeJours = 30;
//         break;
//     case 12:
//         nombreDeJours = 31;
//         break;
//     default:
//         nombreDeJours = "mois invalide";
// }

// console.log("nombre de jour : " + nombreDeJours);
// }

// nombreDeJours(2);


// MANIPULATION DU DOM 


// ### Exercice 1 : Modification du contenu d'un élément

// Ajoutez un bouton à votre page HTML et un paragraphe vide. Lorsque vous cliquez sur le bouton, le texte "Hello, world!" doit être ajouté au paragraphe.
// let button = document.getElementsByTagName("button");
// console.log(button);
// button[0].addEventListener("click", function() {
// let p = document.getElementsByTagName("p");
// p[0].textContent = "Hello World";
// });

// Exercice 2 CORRIGE  MANIPULATION DU DOM :
// let btn2 = document.getElementById("btn2");
// btn2.addEventListener("click", function() {
//     document.getElementById('p2').style.color = "red";
//     console.log("Le bouton a été cliqué !");
// });
  
// // Exercice 3 CORRIGE  MANIPULATION DU DOM :
// let btn3 = document.getElementById("btn3");
// let ul = document.getElementById("ul1");
// btn3.addEventListener("click", function() {
//     let newli = document.createElement("li");
//     newli.textContent = 'Nouvel élément';
//     ul.appendChild(newli)
//     console.log("Text ajouter");
// });







// // Exercice 2 FONCTIONS : 
//  Ecrivez une fonction `mergeArrays` qui prend deux tableaux en entrée et retourne un nouveau tableau qui est la fusion des deux tableaux d'entrée.

//  Exemple d'entrée :

//  const arr1 = [1, 2, 3];
//  const arr2 = [4, 5, 6];
//  console.log(mergeArrays(arr1, arr2)); // Résultat attendu : [1, 2, 3, 4, 5, 6]


//  function mergeArrays(arr3, arr4) {
//      return arr3.concat(arr4);
//    }

//  const arr3 = [7, 8, 9];

// const arr4 = [10, 11, 12];

//  console.log(mergeArrays(arr3, arr4));

// //Exercice 3 :
// let tab1 = ['Apple', 'Banana', 'Apple', 'Orange', 'Banana', 'Apple']
// function removeDuplicates(tab1) {
//     return tab1.splice(start, 'Apple', 'Banana', 'Apple', deleteCount, 'Orange', 'Banana', 'Apple')
// }



// console.log(removeDuplicates(tab1));