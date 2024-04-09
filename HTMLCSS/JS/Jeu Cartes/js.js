let Accueil = document.getElementById("Accueil");
let Startbutton = document.getElementById("Startbutton");

let Pseudobutton = document.getElementById("button1");
let MenuPseudo = document.getElementById("Choixpseudo")

let Readyfight = document.getElementById("ReadyFight");
let SelectPlayer = document.getElementById("button2");
let MenuPlayer = document.getElementById("MenuPlayer");
let Rockiselection = document.getElementById("PhotoRocki");
let Papermanselection = document.getElementById("PhotoPaperman");
let Scissorhandsselection = document.getElementById ("PhotoScissorhands");





Startbutton.addEventListener("click", function() {
     Startbutton.style.display = "none";
     Readyfight.style.display = "block";
     Accueil.style.display = "none";
     MenuPlayer.style.display = "none";
});

Pseudobutton.addEventListener("click", function() {
     MenuPseudo.style.display = "block";
     Pseudobutton.style.display = "none";
     SelectPlayer.style.display ="none";
     MenuPlayer.style.display = "none";
     Accueil.style.display = "none";
     Readyfight.style.display = "none";
 });

SelectPlayer.addEventListener("click", function() {
    SelectPlayer.style.display ="none";
    Readyfight.style.display = "none";
    MenuPlayer.style.display = "flex";
    Accueil.style.display = "none";
    MenuPseudo.style.display = "none";
});


Rockiselection.addEventListener("click", function() {
   this.classList.add("button-clique1");
    this.classList.remove("button-clique2");
    this.classList.remove("button-clique3");
});

Papermanselection.addEventListener("click", function() {
    this.classList.add("button-clique2");
    this.classList.remove("button-clique1");
    this.classList.remove("button-clique3");
});

Scissorhandsselection.addEventListener("click", function() {
    this.classList.add("button-clique3");
    this.classList.remove("button-clique2");
    this.classList.remove("button-clique1");
});

