//JE DECLARE MES VARIABLES

let envoi = document.getElementById('submit');
let nombrechar = document.querySelector('input[type="number"]');

let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let email = document.getElementById('email');
let sujet = document.getElementById('sujet');
let message = document.getElementById('message');

// JE CREE MA FONCTION QUI VA COMPTER ET AFFICHER LE NOMBRE DE CARACTERES
//DANS LE CHAMPS MESSAGE ET ACTIVER LE BOUTON ENVOYER
//QUAND TOUS LES CHAMPS SONT REMPLIS.

message.addEventListener('keydown',function(){

    let longueur = message.value.length+1;

    nombrechar.value = longueur;

    if(longueur >= 80){

        // message.setAttribute('disabled','disabled');
        
        if ( nom.value !== '' && prenom.value !== '' && email.value !== '' && sujet.value !== ''){
            envoi.removeAttribute('disabled');
        } else {
            alert('Tous les champs ne sont pas remplis!');
        }
    }

});

// JE CREE MA REQUETE AJAX EN JQUERY

$(document).ready(function(){
    $(envoi).on('click', (e) => {
        e.preventDefault();
        var formulairejs = new FormData($('#login')[0]);
        $.ajax({
            url:   'formulaire.php',
            method:  'POST',
            data:   formulairejs,
            success: (response)=>{
                $('#message').text('Félicitations, votre formulaire a bien été envoyé !!');

                switch (response) {
                    case '2':
                        $('#message').text('Nom requis').css('border-color = red');
                    break;
                    case '3':
                        $('#message').text('Prénom requis').css('border-color = red');
                    break;
                    case '4':
                        $('#message').text('Email requis').css('border-color = red');
                    break;
                    case '5':
                        $('#message').text('Sujet requis').css('border-color = red');
                    break;
                    case '6':
                        $('#message').text('Message requis').css('border-color = red');
                  }
            } 
        });
    })
});