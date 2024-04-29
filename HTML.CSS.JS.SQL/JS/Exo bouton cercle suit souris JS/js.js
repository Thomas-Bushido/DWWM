// Objectif : Faire suivre votre curseur de souris par un cercle

// 1 - Créer un bouton en html
// 2 - Ajouter un écouteur d'événement sur ce bouton pour créer une div
// 3 - Ajouter le style de la div dans le CSS
// 4 - Changer en CSS les propriétés de la position du cercle pour faire suivre votre curseur


let body = document.querySelector("body")
let bouton = document.getElementById("btn");
let rect = document.getElementById("rect");

bouton.addEventListener("click", function (event) {
    let curseur = document.createElement("div");
   curseur.id = "curseur"
    console.log(curseur)
   body.appendChild(curseur)
    console.log(event.target)
});

rect.addEventListener("mousemove", function(event) {
     console.log(event)
     curseur.style.top = event.clientY + "px"
     curseur.style.left = event.clientX + "px"
    

}

)
