// Pour la page lieux, il faudra mettre dans un tableau :
// le nom
// le type de lieu

function createrow(nameLocation, typeLocation) {
    const tbody = document.querySelector('#TableauLieux tbody');
    const newrow = document.createElement('tr');


    // newrow.innerHTML = 
    // <><td>${nameLocation}</td><td>${typeLocation}</td></>
    // ;
   
    newrow.innerHTML = `
    <td>${nameLocation}</td>
    <td>${typeLocation}</td>
   
`;

tbody.appendChild(newrow);

}

    let pages;
    fetch("https://rickandmortyapi.com/api/location")
.then(response => response.json())
.then(data => {
    pages = data.info.pages;

       
  setTimeout(() => {
      for(let index =1; index <= pages; index++) {
        fetch(`https://rickandmortyapi.com/api/location?page=${index}`)
.then(response => response.json())
.then(data => {
      data.results.forEach(element => {
        createrow(element.dimension, element.type);
        console.log(createrow);
    });
});

      }
    }, 2000);
});




