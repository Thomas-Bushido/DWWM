// Fonction à exécuter lorsque n'importe quelle touche est pressée


  
  // Ajouter un écouteur d'événements pour détecter les touches pressées
//   document.addEventListener('keypress', function(event){
//     console.log(event.key);


//   });

// let Rectangle1 = document.getElementById("Rectangle1");
// let Rectangle2 = document.getElementById("Rectangle2");
// let Rectangle3 = document.getElementById("Rectangle3");
// let Rectangle4 = document.getElementById("Rectangle4");


// Rectangle1.addEventListener("click", function(event) {
//   console.log(event.target)


// });
// Rectangle2.addEventListener("click", function(event) {
//   console.log(event.target)


// });
// Rectangle3.addEventListener("click", function(event) {
//   console.log(event.target)


// });
// Rectangle4.addEventListener("click", function(event) {
//   console.log(event.target)


// });




// let Rectangle1 = document.getElementById("Rectangle1");
// let Rectangle2 = document.getElementById("Rectangle2");
// let Rectangle3 = document.getElementById("Rectangle3");
// let Rectangle4 = document.getElementById("Rectangle4");





// Rectangle1.addEventListener("click", function(event) {
    //  const elem = event.target.style
//     Rectangle1.style.backgroundColor = "yellow";
    

// });

// Rectangle2.addEventListener("click", function(event) {
//     const elem = event.target.style
//     Rectangle2.style.backgroundColor = "yellow";
//  });


// Rectangle3.addEventListener("click", function(event) {
//     const elem = event.target.style
//     Rectangle3.style.backgroundColor = "yellow";
//  });

// Rectangle4.addEventListener("click", function(event) {
//     const elem = event.target.style
//     Rectangle4.style.backgroundColor = "yellow";

// });


// // réduction
// const rectangles = document.querySelectorAll('.rectangle')
// rectangles.forEach(element => {
//     element.addEventListener('click', (event) => {
//         rectangles.forEach(element2 => {
//             element2.style.backgroundColor = "red"
//         })
//         event.target.style.backgroundColor = "yellow"
//     })
// });



// EXO POSITION DANS RECTANGLE

let position = document.getElementById("Rectangle1");

  position.addEventListener('mousemove', (event) => {
    let X = event.clientX
    let Y = event.clientY
      console.log('X:' + X +" " +'Y:' + Y)
});