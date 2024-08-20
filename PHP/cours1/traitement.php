<?php
// Je vais inclure mon header
$titre = 'Retour formulaire';
require_once('views/header.php');
// Je vérifie avec isset si la variable $_POST['inscription'] existe
if(isset($_POST['inscription']))
{
    // J'affiche l'ensemble des infos contenu dans $_POST
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/
    // Je vérifie que les champs ne soient pas vide
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password1']) && !empty($_POST['password2'])){
        // Je vérifie si les 2 mots de passes sont identiques
        if($_POST['password1'] == $_POST['password2'])
        {
            echo 'Inscription terminé';
            // Pour sécurisé les données saisie par l'utilisateur on utilise strip_tags
            echo strip_tags($_POST['nom']);
        }
        else
        {
            echo 'Les mots de passes ne correspondent pas !!';
        }
    }
    else
    {
        echo 'Veuillez saisir tout les champs';
    }
}
else{
    echo 'Veuillez passer par le formulaire';
}

// Je vais inclure mon footer
require_once('views/footer.php');
?>