// Exercice calculatrice 31/05 Marco Melissa Timothé Firas

// Gérer l'affichage des chiffres et des opérations sur l'écran de la calculatrice.
// Implémenter la logique pour effectuer des calculs de base.
// Réinitialiser l'écran de la calculatrice lorsque l'utilisateur clique sur le bouton "C".

const bouton0 = document.querySelector('[data-value="0"]');
const bouton1 = document.querySelector('[data-value="1"]');
const bouton2 = document.querySelector('[data-value="2"]');
const bouton3 = document.querySelector('[data-value="3"]');
const bouton4 = document.querySelector('[data-value="4"]');
const bouton5 = document.querySelector('[data-value="5"]');
const bouton6 = document.querySelector('[data-value="6"]');
const bouton7 = document.querySelector('[data-value="7"]');
const bouton8 = document.querySelector('[data-value="8"]');
const bouton9 = document.querySelector('[data-value="9"]');
const boutonPoint = document.querySelector('[data-value="."]');

const boutonDiviser = document.querySelector('[data-value="/"]');
const boutonMultiplier = document.querySelector('[data-value="*"]');
const boutonAdditionner = document.querySelector('[data-value="+"]');
const boutonSoustraire = document.querySelector('[data-value="-"]');

const equal = document.querySelector('#equal');
const boutonClear = document.querySelector('#clear');
const display = document.querySelector('#display');

function ecrire(bouton) {
    display.value += bouton.target.dataset.value;
    console.log(bouton);
}

function clear() {
    display.value = "";
}

// function calcul(params) {
  // display.value
  // i = 0;
  // j = 0;
    //la séparer par les opérateurs : / * + - 
    // puis prendre les valeurs et faire l'opération avec l'opérateur qui a été mentionné 
//   while (display.value[i] != boutonDiviser.value || display.value[i] != boutonMultiplier.value || display.value[i] != boutonAdditionner.value || display.value[i] != boutonSoustraire.value){
//     i++;
//     j++;
//   }
//   console.log(display.value[i]);
//   j+2;
//   while (j != NULL){
//     display.value[j] += j;
//     j++;
//   }
//   if (i + 1 === boutonDiviser.value){
//     return (display.value[i] / display.value[j]);
//   }
//   if (i + 1 === boutonMultiplier.value){
//     return (display.value[i] * display.value[j]);
//   }
//   if (i + 1 === boutonAdditionner.value){
//     return (display.value[i] + display.value[j]);
//   }
//   if (i + 1 === boutonSoustraire.value){
//     return (display.value[i] - display.value[j]);
//   }    
// }

boutonClear.addEventListener("click",clear); 
// equal.addEventListener("click",calcul);
// console.log(calcul);

bouton0.addEventListener("click",ecrire);
bouton1.addEventListener("click",ecrire);
bouton2.addEventListener("click",ecrire);
bouton3.addEventListener("click",ecrire);
bouton4.addEventListener("click",ecrire);
bouton5.addEventListener("click",ecrire);
bouton6.addEventListener("click",ecrire);
bouton7.addEventListener("click",ecrire);
bouton8.addEventListener("click",ecrire);
bouton9.addEventListener("click",ecrire);

boutonDiviser.addEventListener("click",ecrire);
boutonMultiplier.addEventListener("click",ecrire);
boutonAdditionner.addEventListener("click",ecrire);
boutonSoustraire.addEventListener("click",ecrire);

//split

// function multi{

// }

// function add{

// }

// function soust{

// }

// function divi{

// }



 

























const buttons = document.querySelectorAll(".btn");
const colors =  ["#f542ef","#1f55d1", "#ebd80e", "#0ed9eb","#ed6c15","#18cc45"]
const things = ['🍪', '❤️', '🐈', '🐰', '🐻', '🐸','🦄','🐖','🐒','🦩','🐋','🐘', '🎈', '⚽', '🪇', '🪕', '🍕', '🍔', '🌭', '🍜', '🍬']
const cats = ["https://images.unsplash.com/photo-1589883661923-6476cb0ae9f2?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", "https://images.unsplash.com/photo-1518791841217-8f162f1e1131?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","https://images.unsplash.com/photo-1442291928580-fb5d0856a8f1?q=80&w=1032&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", "https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?q=80&w=843&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","https://images.unsplash.com/photo-1571570703598-39eb580a0329?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","https://images.unsplash.com/photo-1596854307943-279e29c90c14?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","https://images.unsplash.com/photo-1519052537078-e6302a4968d4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", "https://images.unsplash.com/photo-1536500152107-01ab1422f932?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", "https://images.unsplash.com/photo-1586042091284-bd35c8c1d917?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","https://images.unsplash.com/photo-1515002246390-7bf7e8f87b54?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","https://images.unsplash.com/photo-1602592818892-305611f06492?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","https://images.unsplash.com/photo-1568043210943-0e8aac4b9734?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"]

buttons.forEach(btn => btn.addEventListener("click", handleStyle));

function handleStyle() {
  this.innerText = things[Math.floor(Math.random() * things.length)];
  this.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
  this.style.color = "#e66910";
  document.body.style.backgroundImage = `url(${cats[Math.floor(Math.random() * cats.length)]})`;
  console.log("Design by @Teddy - Webdesigner de qualiT€");
}