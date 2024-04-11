// Accueil
let Accueil = document.getElementById("Accueil");
let Startbutton = document.getElementById("Startbutton");

// Choix du pseudo
let Pseudobutton = document.getElementById("button1");
let MenuPseudo = document.getElementById("Choixpseudo");

// Choix du personnage
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
     pageCombat.style.display = "none";
});

Pseudobutton.addEventListener("click", function() {
     MenuPseudo.style.display = "block";
     Pseudobutton.style.display = "none";
     SelectPlayer.style.display ="none";
     MenuPlayer.style.display = "none";
     Accueil.style.display = "none";
     Readyfight.style.display = "none";
     pageCombat.style.display = "none";
 });

SelectPlayer.addEventListener("click", function() {
    SelectPlayer.style.display ="none";
    Readyfight.style.display = "none";
    MenuPlayer.style.display = "flex";
    Accueil.style.display = "none";
    MenuPseudo.style.display = "none";
    pageCombat.style.display = "none";
});


Rockiselection.addEventListener("click", function() {
   this.classList.add("button-clique1");
   Papermanselection.classList.remove("button-clique2");
   Scissorhandsselection.classList.remove("button-clique3");
});

Papermanselection.addEventListener("click", function() {
    this.classList.add("button-clique2");
    Rockiselection.classList.remove("button-clique1");
    Scissorhandsselection.classList.remove("button-clique3");
});

Scissorhandsselection.addEventListener("click", function() {
    this.classList.add("button-clique3");
    Papermanselection.classList.remove("button-clique2");
    Rockiselection.classList.remove("button-clique1");
});



let choixPrecedent = null;
let Outilpierre = document.getElementById("Pierrejoueur");
let Outilfeuille = document.getElementById("Feuillejoueur");
let Outilcouteau = document.getElementById("Couteaujoueur");



let persopierre = Rockiselection.addEventListener("click", function() {
    this.classList.add("button-clique1");
    Papermanselection.classList.remove("button-clique2");
    Scissorhandsselection.classList.remove("button-clique3");
    choixPrecedent = "Pierre"; // Enregistrer le choix Rock
    Outilpierre.style.display = "grid";
    Outilfeuille.style.display = "none";
    Outilcouteau.style.display = "none";

 });

 let persofeuille = Papermanselection.addEventListener("click", function() {
    this.classList.add("button-clique2");
    Rockiselection.classList.remove("button-clique1");
    Scissorhandsselection.classList.remove("button-clique3");
    choixPrecedent = "Feuille";
    Outilfeuille.style.display = "grid";
    Outilpierre.style.display = "none";
    Outilcouteau.style.display = "none";
});

let persociseau = Scissorhandsselection.addEventListener("click", function() {
    this.classList.add("button-clique3");
    Papermanselection.classList.remove("button-clique2");
    Rockiselection.classList.remove("button-clique1");
    choixPrecedent = "Couteau";
    Outilcouteau.style.display = "grid";
    Outilfeuille.style.display = "none";
    Outilpierre.style.display = "none";
});

let boutonPrêt = document.getElementById("boutonCommencer");
let pageCombat = document.getElementById("PageCombat")

    boutonPrêt.addEventListener("click", function() {
        switch (choixPrecedent) {
            case "Rock":
                // Action pour le choix précédent "Rock"
                break;
            case "Paper":
                // Action pour le choix précédent "Paper"
                break;
            case "Scissors":
                // Action pour le choix précédent "Scissors"
                break;
            default:
                // Aucun choix précédent enregistré
                break;
            }
                
                pageCombat.style.display = "grid";
                Startbutton.style.display = "none";
                Readyfight.style.display = "none";
                Accueil.style.display = "none";
                MenuPlayer.style.display = "none";

});



let choixdupseudo = document.getElementById("pseudo")
let boutoncomptecréé = document.getElementById("Submit")
let caseJoueur1 = document.getElementById("CaseJoueur1");
let savepseudo = null

 boutoncomptecréé.addEventListener("click", function(event) {
    // Récupérer la valeur saisie dans l'input
    savepseudo = choixdupseudo.value;
    event.preventDefault()
    // Afficher le pseudo enregistré (facultatif)
    console.log("CaseJoueur1 :", savepseudo);

    Startbutton.style.display = "none";
     Readyfight.style.display = "block";
     Accueil.style.display = "none";
     MenuPlayer.style.display = "none";
     pageCombat.style.display = "none";
     MenuPseudo.style.display = "none";
     SelectPlayer.style.display ="block";
     Pseudobutton.style.display ="block";

});

let InputPseudo = document.getElementById("pseudo");
let pseudooutput = document.getElementById("pseudoOutput");

InputPseudo.addEventListener("input", function() {
    const pseudo = InputPseudo.value;
    pseudoOutput.textContent = "Pseudo: " + pseudo;

});



// Lancer le combat

let gagné = document.getElementById("Win");
let perdu = document.getElementById("Loose");
let égalité = document.getElementById("Egalité");






let choixadversaire = ["Pierre", "Feuille", "Couteau"];

let Outiladvpierre = document.getElementById("Pierre");
let Outiladvfeuille = document.getElementById("Feuille");
let Outiladvcouteau = document.getElementById("Couteau");



   function choixaleatoire(choices) {
     return choices[Math.floor(Math.random()*3)];

  }

  function determinerResultat(choixPrecedent, choixadversaire) {
      
      if (choixPrecedent === choixadversaire) {
          return "Egalité!";
       }
    else if (
        (choixPrecedent === "Pierre" && choixadversaire === "Couteau") ||
        (choixPrecedent === "Feuille" && choixadversaire === "Pierre") ||
        (choixPrecedent === "Couteau" && choixadversaire === "Feuille")
    ) {

        return "Gagné!";
    } else {
        return "Perdu!";
    }
};



// Sélection de l'élément bouton
const buttonattaquelancée = document.getElementById("Lancez");
// let win = document.querySelector("#Win")
function Apparitionadversaire(choixaleatoire) {
    if (choixaleatoire === "Feuille") {
         Outiladvfeuille.style.display = "grid";
         Outiladvpierre.style.display = "none";
         Outiladvcouteau.style.display = "none";
        }
    else if (choixaleatoire === "Pierre") {
         Outiladvpierre.style.display = "grid";
         Outiladvcouteau.style.display = "none";
         Outiladvfeuille.style.display = "none";
        }
    else if (choixaleatoire === "Couteau") {
         Outiladvcouteau.style.display = "grid";
         Outiladvpierre.style.display = "none";
         Outiladvfeuille.style.display = "none";
    }
    
  };


// Événement de clic sur le bouton
buttonattaquelancée.addEventListener('click', function() {
    
        const choixAleatoireAdversaire = choixaleatoire(choixadversaire);
        Apparitionadversaire(choixAleatoireAdversaire);
        console.log(choixAleatoireAdversaire);
        const resultat = determinerResultat(choixPrecedent, choixAleatoireAdversaire);

        switch (resultat) {
           case "Gagné!":
               gagné.style.display = "grid";
               perdu.style.display = "none";
               égalité.style.display = "none";
               break;
           case "Perdu!":
               perdu.style.display = "grid";
               gagné.style.display = "none";
               égalité.style.display = "none";
               break;
           case "Egalité!":
               égalité.style.display = "grid";
               perdu.style.display = "none";
               gagné.style.display = "none";
               break;
           default:
               break;

        }

        
        // win.textContent = resultat
         console.log(resultat)
    });

    