<?php
session_start();
require_once 'functions.php';
// Je vérifie si le formulaire a été soumis
if(isset($_POST['submit']))
{
    // Je vérifie si les champs ont une valeur
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {
        // Je vérifie si le token est bon
        if(verifierToken())
        {
            // Je génère un nouveau token
            $token = genererToken();
            // Je fais un lien vers la page viaformation.php en passant le nouveau token en GET
            echo '<a href="viaformation.php?token='.$token.'">Voir la page</a>';
        }
        else
        {
            // Le token n'est pas bon
            echo 'accès interdit';
        }
    }
    else
    {
        // Les champs n'ont pas de valeur
        echo 'veuillez saisir vos identifiants';
    }
}
else
{
    // Le formulaire n'a pas été soumis
    echo 'Veuillez soumettre le formulaire';
}

?>