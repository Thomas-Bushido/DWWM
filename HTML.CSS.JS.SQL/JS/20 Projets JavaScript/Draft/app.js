
// API ENDPOINT : `https://en.wikipedia.org/w/api.php?action=query&list=search&format=json&origin=*&srlimit=20&srsearch=${searchInput}`

const form = document.querySelector('form');
const input = document.querySelector('input');
const resultdisplay = document.querySelector('result-display');
const errormsg = document.querySelector('error-msg');
const loader = document.querySelector("loader");

form.addEventListener("submit", handlesubmit)

function handlesubmit(e){
  e.preventDefault();
  if(input.value ===""){
    errormsg.textContent = "Wops"
    return;
  }
  else{
    resultdisplay.textContent = "";
    loader.style.display = "flex";
    errormsg.textContent = "";
    Wikiapicall(input.value);
  }
}

async function Wikiapicall(data.query.search){
   const response = await fetch(`https://en.wikipedia.org/w/api.php?action=query&list=search&format=json&origin=*&srlimit=20&srsearch=${searchInput}`);
   const data = await response.json();

   createcards()
}

function createcards(data){
  if(!length){
    errormsg.textContent ="oups";
   return;
  }
  data.foreach(el =>{

   const url = `https://en.wikipedia.org/?curid=${el.pageid}`;
   const card = document.createElement('div');
   card.className = "result-item";
   card.innerHTML=`
   <h3 class="result-title">
   <a href=${url} target="_blank>${el.title}</a>  
   </h3>
  <a class="result-link" href=${url} target="_blank">${el.page} </a>
  <span class="result-snippet>${el.snippet}</span>
   `;


  });
}