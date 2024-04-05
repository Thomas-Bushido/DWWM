// EXERCICES 4 SUPPRESSION D'ELEMENTS

const btnSup = document.querySelector('.btnSup')

btnSup.addEventListener('click', () => {
    const selectUl = document.querySelector('.selectUl')
    selectUl.children[0].remove()
})

// EXERCICES 5 

Let button = document.querySelectorAll("#bouton1, #bouton2, #bouton3")
  console.log(button)
  button.forEach((button) => {
    button.addEventListener("click", (event) => {
    console.log(event.target.id)
    })
  })