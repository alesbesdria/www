// CODE YAYA

// let button = document.getElementById('submit');
// let nom = document.getElementById('nom');
// let pre = document.getElementById('prenom');
// let pass = document.getElementById('password');
// let presentation = document.getElementById('presentation');
// let retour = document.getElementById('retour');
// let re ='';
// let compteur = 0;

// button.addEventListener('click',(e)=> {

//     compteur = 0;

//     if(nom.value == '' ){
//         nom.style.border = 'solid 2px red'; 
//         re += 'le champs ' + nom.name;
//         compteur ++;
//     }else {
//         nom.style.border = ''
//     }

//     if( pre.value == ''){
//         pre.style.border = 'solid 2px red';
//         re += ' , ' +prenom.name ;
//         compteur ++;
//     }else {
//         pre.style.border = ''
//     }

//     if(pass.value == ''){
//         pass.style.border = 'solid 2px red';
//         re += ' , ' +pass.name ;
//         compteur ++;
//     }else {
//         pass.style.border = ''
//     }

//     if(presentation.value == ''){
//         presentation.style.border = 'solid 2px red';
//         re += ' , ' +presentation.name ;
//         compteur ++;
//     }else {
//         presentation.style.border = ''
//     }

//     if (compteur == 1){
//         re += ' est requis';
//     }else if (compteur > 1){
//         re += ' sont requis';
//     }
    
//     retour.innerHTML = re;
//     re = '';

//     if (compteur!==0){
//         e.preventDefault();
//     }
// });


// CODE MELI

let input = document.querySelectorAll('input');
let submit = document.getElementById('submit');
let retour = document.getElementById('retour');
let pres = document.getElementById('presentation');
let nbcar = document.getElementById('nb_car');
let error = 0;

let cpt = 0;
console.log(input);

submit.addEventListener('click', (e)=>{
    error = 0;
    for (cpt = 0; cpt < input.length ; cpt++){
        if (input[cpt].value == '' && input[cpt].id != 'nb_car'){
            input[cpt].style.border = 'red 1px solid';
            retour.innerHTML = 'Le champ en rouge est requis !';
            error ++;
        }
        else input[cpt].style.border = '';
    }
    if (pres.value == ''){
        pres.style.border = 'red 1px solid';
        retour.innerHTML += ' Le champ présentation est requis !';
        nbcar.style.border = '';
        error ++;
    } else pres.style.border = '';
    if (error !== 0){
        e.preventDefault();
        }
})

let password = 