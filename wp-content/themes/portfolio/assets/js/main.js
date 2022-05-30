let pName = document.getElementById("p_name");
let pFirstname = document.getElementById("p_firstname");
let fName = document.getElementById("f_name");
let fFirstname = document.getElementById("f_firstname");
const fEmail = document.getElementById("f_email");

const canvas = document.getElementById("canvas");
let canvasHeight = document.querySelector(".index__presentation").offsetHeight;
canvas.height = canvasHeight;
canvas.width = window.innerWidth/6;


pName.addEventListener('keyup', () => {
    fName.value = pName.value;
})
pFirstname.addEventListener('keyup', () => {
    fFirstname.value = pFirstname.value;
})

fEmail.addEventListener('focus', (e) => {
    // Afficher les yeux ici !
})

window.addEventListener('resize', () => {
    canvas.height = canvasHeight;
    canvas.width = window.innerWidth/6;
})
