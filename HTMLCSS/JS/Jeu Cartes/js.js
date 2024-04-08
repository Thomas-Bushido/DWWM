let Startbutton = document.getElementById("Startbutton");
let Readyfight = document.getElementById("ReadyFight");
let Accueil = document.getElementById("Accueil");
let SelectPlayer = document.getElementById("button1");
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

SelectPlayer.addEventListener("click", function() {
    SelectPlayer.style.display ="none";
    Readyfight.style.display = "none";
    MenuPlayer.style.display = "flex";
    Accueil.style.display = "none";
});


Rockiselection.addEventListener("click", function() {
    this.classList.add("button-clique1");
});

