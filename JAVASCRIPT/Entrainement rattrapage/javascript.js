let textarea = document.getElementById('texte'); // Pour sélectionner le textarea en fonction de son ID
// J'écoute l'évènement keyup (des que le doigt à quitté la touche)
textarea.addEventListener('keydown',function(){
    // Je récupère la longueur du textarea
    let longueur = textarea.value.length+1;
    // Je met à jour le champs number avec la valeur de longueur
    document.getElementById('compteur').value = longueur;
    // Si longueur est supérieur ou égal à 50 j'active le button et je désactive le textarea
    if(longueur >= 50){
        textarea.setAttribute('disabled','disabled');
        let bouton = document.querySelector('button[name="test"]');
        // J'active le bouton
        bouton.removeAttribute('disabled');
    }

});
let couleur = document.querySelector('input[type="color"]'); // pour sélectionner un élément en fonction de son type
// Evènement au changement de valeur de l'input
couleur.addEventListener('input',function(){
    let titre = document.querySelector('h1');
    titre.style.color = couleur.value; // J'applique la couleur de l'input color au titre
    titre.style.fontSize = '80px';
    titre.classList.add('animation'); // Pour ajouter une classe CSS
});
let submit = document.querySelector('button[type="submit"]'); // Je sélectionne mon bouton submit
// J'écoute le click sur le bouton en faisant passer l'évènement (var couscous)
submit.addEventListener('click',function(couscous){
    // Je désactive le comportement par défaut du bouton (plus de soumission)
    couscous.preventDefault();
});
// Soumettre le formulaire en ajax (jquery pour Léon et fetch pour Charles)
// Afficher le retour de la requête ajax dans la div id message
// Début code Léon

$(document).ready(function(){
    $('button[name="submit"]').on('click', (e) => {
        e.preventDefault();
        let textarea = $('#texte').val();
        $.ajax({
            url:   'ajax.php',
            method:  'POST',
            data:   'message='+textarea,
            success: (response)=>{
                $('#message').html(response);
                //document.getElementById('message').innerHTML = response;
            } 
        });
    })
});
// Fin code Léon
// Début code Charles
// submit.addEventListener('click',(r)=>{
//     r.preventDefault();

// let data = new FormData();
// data.append('message',textarea.value);    
// fetch("ajax.php",{ 
//     method: "POST",
//     body: data}
// ).then((reponse) => {
//     reponse.text().then((data) => {
//       let divm= document.querySelector('#message');
//       divm.innerHTML=data;
    
// })
// })}
// );
