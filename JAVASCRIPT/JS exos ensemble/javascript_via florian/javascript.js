// Pour écrire dans le document
document.write('Hello World');
// Pour demander une info au visiteur
let prenom = prompt('Quel est votre prénom??');
// pour sélectionner un élément du DOM en JS via son ID
document.getElementById('prenom').innerText = prenom;
// Pour faire du CSS
document.getElementById('prenom').style.color = 'red';
// Ma première boucle pour les ages
let element = document.getElementById('age');
for(let i=17;i<100;i++){
    element.innerHTML+= '<option value="'+ i +'">'+ i +' ans</option>';
}
// Pour détecter un évènement sur le DOM
document.addEventListener('change',function(){
    // J'enregistre l'age
    let age = element.value;
    if(age >= 17 && age <= 30){
        alert('Vous êtes jeunes');
    }
    else if(age >= 31 && age <= 40){
        alert('La vieillesse approche');
    }
    else if(age >= 41 && age <= 64){
        alert('Bientôt le retraite');
    }else{
        alert('Encore en vie???');
    }
});
// Ma fonction vérifMdp
function verifMdp(element){
    let longueur = element.value
    //alert(longueur.length);
}
function voirMdp(){
    // On va récupérer le champ
    let champ = document.getElementById('password');
    // je modifie l'attribut
    champ.setAttribute('type','text');
    // Pour cacher le mot de passe au bout de 5 secondes avec setTimeout
    setTimeout(() => champ.setAttribute('type','password'),5000);
}
/*function cacheMdp(){
    let champ = document.getElementById('password');
    // Je modifie l'attribut
    champ.setAttribute('type','password');
}*/