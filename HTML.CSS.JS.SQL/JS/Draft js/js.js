
console.info("Situation : Calculer la somme de deux nombres ==>");

// Instructions :

// Écris une fonction nommée calculerSomme qui prend deux paramètres, nombre1 et nombre2.
// À l'intérieur de la fonction, ajoute nombre1 et nombre2 ensemble.
// Retourne le résultat de l'addition.



console.info("Situation : Calculer la moyenne ==>");

// Instructions :

// Écris une fonction nommée calculerMoyenne qui prend un tableau de nombres en tant que paramètre.
// À l'intérieur de la fonction, calcule la somme de tous les nombres dans le tableau.
// Ensuite, divise la somme par le nombre total d'éléments dans le tableau pour obtenir la moyenne.
// Retourne la moyenne calculée.













console.info("Situation : Convertir une phrase en majuscules ==>");

// Instructions :

// Écris une fonction nommée convertirMajuscules qui prend une chaîne de caractères en tant que paramètre.
// À l'intérieur de la fonction, convertis la chaîne de caractères en majuscules.
// Retourne la nouvelle chaîne de caractères convertie en majuscules.


// Instructions :

// Écris une fonction nommée estPalindrome qui prend une chaîne de caractères en tant que paramètre.
// À l'intérieur de la fonction, vérifie si la chaîne de caractères est un palindrome. Un palindrome est une chaîne qui se lit de la même manière de gauche à droite et de droite à gauche.
// Retourne true si la chaîne de caractères est un palindrome et false sinon.
 let chaine = "Anna"
function estPalindrome(chaine) {
    // Convertir la chaîne en minuscules pour ignorer la casse
    chaine = chaine.toLowerCase();
    
    // Supprimer les caractères non alphabétiques de la chaîne
    chaine = chaine.replace(/[^a-z]/g, "");

    // Vérifier si la chaîne est un palindrome
    for (let i = 0; i < Math.floor(chaine.length / 2); i++) {
        if (chaine[i] !== chaine[chaine.length - 1 - i]) {
            return false; // Si les caractères ne correspondent pas, ce n'est pas un palindrome
        }
    }
    return true; // Si la boucle se termine sans retourner false, la chaîne est un palindrome
}
console.log(Math.floor(chaine.length / 2));
let resultat = estPalindrome(chaine)
console.log(resultat)