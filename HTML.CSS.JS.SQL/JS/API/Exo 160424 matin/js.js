
// Exercice de ce matin :

// Créer une page avec un bouton (html)
// En cliquant sur le bouton, j'ai besoin de voir apparaitre un rectangle rouge (js) et également un autre rectangle bleu qui n'apparaitra qu'au bout de 5 seconde
// Il va falloir utiliser setTimeout()


let   body = document.querySelector("body");
let bouton = document.getElementById("btn");

bouton.addEventListener("click", function() {
     let rect1 = document.createElement("div");
     let rect2 = document.createElement("div");
      rect1.id = "rect1";
      rect2.id = "rect2";
    console.log(rect1, rect2);

      body.appendChild(rect1)
      body.appendChild(rect2)
      rect1.style.display = "block";
      setTimeout(function() {
      
      rect2.style.display = "block";
 
      }, "5000");
   
});


// Correction avec le bonus crééer bouton supprimer 
// const btn = document.querySelector('button')
// const body = document.querySelector('body')

// btn.addEventListener('click', () => {
//     const rectRed = document.createElement('div')
//     const rectBlue = document.createElement('div')
//     rectRed.style.height = "200px"
//     rectRed.style.width = "300px"
//     rectRed.style.backgroundColor = "red"
//     body.appendChild(rectRed)
    
//     setTimeout(() => {       
//         rectBlue.style.height = "200px"
//         rectBlue.style.width = "300px"
//         rectBlue.style.backgroundColor = "blue"
//         body.appendChild(rectBlue)
//     }, 5000);

//     rectRed.addEventListener('click', () => {
//         deleteRect(rectRed)
//     })
//     rectBlue.addEventListener('click',() => {
//         deleteRect(rectBlue)
//     })

// })


// function deleteRect(rectangle){
//     rectangle.remove()
// }








 