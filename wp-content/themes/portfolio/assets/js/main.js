// FONCTIONNALITÉS FORMULAIRE
let pName = document.getElementById("p_name");
let pFirstname = document.getElementById("p_firstname");
let fName = document.getElementById("f_name");
let fFirstname = document.getElementById("f_firstname");
const fEmail = document.getElementById("f_email");

pName.addEventListener('keyup', () => {
    fName.value = pName.value;
})
pFirstname.addEventListener('keyup', () => {
    fFirstname.value = pFirstname.value;
})
fEmail.addEventListener('focus', () => {
    // Afficher les yeux ici !
})


// CANVAS
const canvas = document.getElementById("canvas");
let canvasHeight = document.querySelector(".index__presentation").offsetHeight;

canvas.width = window.innerWidth/6;
canvas.height = canvasHeight + canvas.width*2;

window.addEventListener('resize', () => {
    canvas.width = window.innerWidth/6;
    canvas.height = canvasHeight + canvas.width*2;
})


