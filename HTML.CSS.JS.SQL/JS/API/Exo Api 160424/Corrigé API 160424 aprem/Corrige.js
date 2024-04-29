// *** Corrigé exercice1 ***

// A partir des data, affichez moi les éléments suivants (copier coller l'objet directement dans votre fichier js)
// let data = {
//     "id": "0001",
//     "type": "gateau",
//     "nom": "donuts",
//     "price": 0.55,
//     "nappages":
//     {
//         "nappage":
//             [
//                 { "id": "1001", "type": "Chocolat" },
//                 { "id": "1002", "type": "Fraise" },
//                 { "id": "1003", "type": "Framboise" },
//                 { "id": "1004", "type": "Vanille" }
//             ]
//     },
//     "topping":
//         [
//             { "id": "5001", "type": "Sans Topping" },
//             { "id": "5002", "type": "Perles de sucre" },
//             { "id": "5003", "type": "Copos de coco" },
//             { "id": "5004", "type": "Billes de chocolat" },
//             { "id": "5005", "type": "Vermisselles de chocolat" },
//         ]
// }


// Exercice1
// Affichez dans un h1, le type et nom (concaténation)
// Affichez le prix dans un paragraphe
// Affichez tous les types de nappages possibles dans un paragraphe
// Faites en une card 



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


const card = document.createElement('div')
const body = document.querySelector('body')
card.classList.add("card")
body.appendChild(card)

let conc = data.nom + " " + data.type


const h1 = document.createElement('h1')
h1.textContent = conc
card.appendChild(h1)

const para = document.createElement('p')
para.textContent = data.price + "€"
card.appendChild(para)

data.nappages.nappage.forEach(element => {
    const nappagePara = document.createElement('p')
    nappagePara.textContent = element.type
    card.appendChild(nappagePara)

});


// Exercice2
// Créer un formulaire avec :
// Tous les napages possible à l'aide d'un input de type radio
// Tous les toppings possible à l'aide d'un autre input de type radio
// Un bouton
// Un écouteur d'événement sur le bouton qui permettra d'afficher dans un h2 le type de nappage et le type de topping

const formNapp = document.createElement('form')
document.body.appendChild(formNapp)

data.nappages.nappage.forEach(element => {
    const inputRadio = document.createElement('input');
    inputRadio.type = "radio";
    formNapp.appendChild(inputRadio);
    
    inputRadio.name = "nappage";
    inputRadio.value = element.type;
    
    const label1 = document.createElement('label');
    label1.innerHTML = element.type;
    formNapp.appendChild(label1);
})


const formTopp = document.createElement('form')
document.body.appendChild(formTopp)

data.topping.forEach(element => {
    const inputRadio = document.createElement('input');
    inputRadio.type = "radio";
    formTopp.appendChild(inputRadio);
    
    inputRadio.name = "topping"
    inputRadio.value = element.type;

    const label2 = document.createElement('label');
    label2.innerHTML = element.type;
    formTopp.appendChild(label2);
})

const butValider = document.createElement('button')
document.body.appendChild(butValider)
butValider.textContent = "Valider";

butValider.addEventListener('click', () => {
    const nappageSelection = document.querySelector('input[name="nappage"]:checked')
    const toppingSelection = document.querySelector('input[name="topping"]:checked')
    console.log(nappageSelection.value);
    console.log(toppingSelection.value);

    const resultat = document.createElement('p')
    resultat.textContent = nappageSelection.value + " " + "-" + " " + toppingSelection.value;
    document.body.appendChild(resultat)

})
// Tous les napages possible à l'aide d'un input de type radio
// Tous les toppings possible à l'aide d'un autre input de type radio
// Un bouton
// Un écouteur d'événement sur le bouton qui permettra d'afficher dans un h2 le type de nappage et le type de topping