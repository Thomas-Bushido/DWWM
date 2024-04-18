// Pour la page episode, il faudra indiquer dans un tableau :
// le numéro de l'épisode
// l'intitulé de l'épisode
// La date de sortie


function createRow(episodeNumber, episodeTitle, airDate) {
     const tableBody = document.querySelector('#episodesTable tbody');
     const newRow = document.createElement('tr');

     newRow.innerHTML = `
         <td>${episodeNumber}</td>
         <td>${episodeTitle}</td>
         <td>${airDate}</td>
     `;

     tableBody.appendChild(newRow);
 }

 // Code pour récupérer les données de l'API et les afficher dans le tableau
 let pages;
 fetch("https://rickandmortyapi.com/api/episode")
     .then(response => response.json())
     .then(data => {
         pages = data.info.pages;

     //     setTimeout(() => {
             for (let index = 1; index <= pages; index++) {
                 fetch(`https://rickandmortyapi.com/api/episode?page=${index}`)
                     .then(response => response.json())
                     .then(data => {
                         data.results.forEach(episode => {
                             createRow(episode.episode, episode.name, episode.air_date);
                          console.log(createRow);
                         });
                     });
             }
     //     }, 2000);
     });


