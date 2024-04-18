


let data = {
    "id": "0001",
    "type": "gateau",
    "nom": "donuts",
    "price": 0.55,
    "nappages":
    {
        "nappage":
            [
                { "id": "1001", "type": "Chocolat" },
                { "id": "1002", "type": "Fraise" },
                { "id": "1003", "type": "Framboise" },
                { "id": "1004", "type": "Vanille" }
            ]
    },
    "topping":
        [
            { "id": "5001", "type": "Sans Topping" },
            { "id": "5002", "type": "Perles de sucre" },
            { "id": "5003", "type": "Copos de coco" },
            { "id": "5004", "type": "Billes de chocolat" },
            { "id": "5005", "type": "Vermisselles de chocolat" },
        ]
}

// Exercice 1
// Affichez dans un h1, le type et nom (concaténation)
// Affichez le prix dans un paragraphe
// Affichez tous les types de nappages possibles dans un paragraphe
// Faites en une card 

let Divcard = document.createElement('div')
let Body = document.querySelector('body')
Divcard.classList.add("card")
Body.appendChild(Divcard)
let conc = data.type +" "+ data.nom


// Affichez dans un h1, le type et nom (concaténation)
let h1 = document.createElement('h1')
h1.textContent = conc
Divcard.appendChild(h1)



// Affichez le prix dans un paragraphe
let Para1 = document.createElement('p')
Divcard.appendChild(Para1)
let Price = data.price

Para1.textContent = "Prix:" +" "+Price

// Affichez tous les types de nappages possibles dans un paragraphe







data.nappages.nappage.forEach(element => {
    let Para2 = document.createElement('p')
    Para2.textContent = element.type
    Divcard.appendChild(Para2)
    
});


// *** Début exercice 2 ***

const form = document.createElement('form')
Body.appendChild(form)

data.nappages.nappage.forEach(element => {
   const inputRadio = document.createElement('input')
   inputRadio.type = "radio";
   form.appendChild(inputRadio);

   inputRadio.name = "nappage";
   inputRadio.value = element.type;

   const label1 = document.createElement('label');
   label1.innerHTML = element.type;
   form.appendChild(label1);

})

const formtop = document.createElement('form')
Body.appendChild(formtop)

data.topping.forEach(element => {
    const inputRadio = document.createElement('input');
    inputRadio.type = "radio";
    formtop.appendChild(inputRadio)

    inputRadio.name = "topping"
    inputRadio.value = element.type;

    const label2 = document.createElement('label');
    label2.innerHTML = element.type;
    formtop.appendChild(label2);
})

const butValider = document.createElement('button');
Body.appendChild(butValider);
butValider.textContent = "Valider";

butValider.addEventListener('click', () => {
const nappageSelection = document.querySelector('input[name="nappage"]:checked')
const toppingSelection = document.querySelector('input[name="topping"]:checked')


const resultat = document.createElement('p')
    resultat.textContent = nappageSelection.value + " " + "-" + " " + toppingSelection.value;
    document.body.appendChild(resultat)


})