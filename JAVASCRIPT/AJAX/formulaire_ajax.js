// Requête AJAX en javascript avec l'objet XMLHttpRequest
/*document.getElementById('inscription').addEventListener('submit',(event) =>{
    event.preventDefault(); // J'empêche le formulaire d'être soumis

    let formulaire = document.getElementById('inscription');
    let data = new FormData(formulaire);

    let xhr = new XMLHttpRequest();
    xhr.open('POST','formulaire.php',true); // Le type (POST ou GET), l'url, asynchrone
    //xhr.open('GET','https://www.google.fr',true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            console.log(xhr.responseText); // Affiche la réponse du serveur
            document.getElementById('retour').innerHTML = xhr.responseText;
        } else{
         console.log('erreur');
        }
    };
    // Je vais envoyer les données
    xhr.send(data);
});*/
// Avec fetch
/*document.getElementById('inscription').addEventListener('submit',(event) =>{
    event.preventDefault();

    let formulaire = document.getElementById('inscription');
    let data = new FormData(formulaire);

    fetch('formulaire.php',{method:'POST',body:data})
    .then(response => response.text())
    .then(data => {
        document.getElementById('retour').innerHTML = data;
    })
    .catch(error =>{
        console.log('Erreur = '+error);
    });

});*/
$(document).ready(function(){
    $('#inscription').on('submit',(event) =>{
        event.preventDefault();
        let data = $(this).serialize(); // je sérialise les données du formulaire
        $('#serialize').text(data);
        // Je fais ma requête Ajax
        $.ajax({
            url: 'formulaire.php',
            method: 'POST',
            data: data,
            success: (response)=>{
                $('#retour').html(response);
            }
            
        });

    });
});