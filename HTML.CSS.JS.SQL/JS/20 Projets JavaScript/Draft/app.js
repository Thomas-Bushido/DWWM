//  API ENDPOINT : `https://en.wikipedia.org/w/api.php?action=query&list=search&format=json&origin=*&srlimit=20&srsearch=${searchInput}`

// `https://en.wikipedia.org/?curid=${el.pageid}`;

const form = document.querySelector('form');
const input = document.querySelector('input');
const ErrorMsg = document.querySelector(".error-msg");
const ResultDisplay = document.querySelector(".results-display");
const loader = document.querySelector(".loader");

form.addEventListener("submit", handleSubmit);

function handleSubmit(e){
 e.preventDefault();
 if(input.value ===""){
    ErrorMsg.textContent = "Wops";
    return;
 }
 else{
    ErrorMsg.textContent ="";
    loader.style.display = "flex";
    ResultDisplay.textContent = "";
    WikiApiCall(input.value);
 }
}

async function WikiApiCall(searchInput){
    const response = await fetch(`https://en.wikipedia.org/w/api.php?action=query&list=search&format=json&origin=*&srlimit=20&srsearch=${searchInput}`);
    console.log(response);
    
     const data = await response.json();
     createCards(data.query.search);
     console.log(data);
}


function createCards(data) {
    if(!data.length){
        ErrorMsg.textContent = "Wopsy, aucun résultat";
        loader.style.display = "none";
        return;
    }
    data.forEach(el => {
        const url = `https://en.wikipedia.org/?curid=${el.pageid}`;
        const card = document.createElement("div");
        card.className = "result-item";
        card.innerHTML =`
        <h3 class="result-title">
         <a href=${url} target="_blank">${el.title}</a>
         </h3>
         <a href=${url} class="result-link" target="_blank">${url}</a>   
        <span class="result-snippet">${el.snippet}</span>
        <br>
         `;
         ResultDisplay.appendChild(card);
         
    })
    loader.style.display ="none"; 
    
}