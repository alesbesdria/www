<?php
// Je vérifie si le formulaire a été envoyé
if(isset($_POST['submit']))
{
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';
    // Je vérifie si le fichier a été envoyé
    if(is_uploaded_file($_FILES['fichier']['tmp_name']))
    {
        // Je vais bouger l'image
        // Pour créer un dossier en PHP avec mkdir
        mkdir('sncf');
        if(move_uploaded_file($_FILES['fichier']['tmp_name'],'halouf/'.$_FILES['fichier']['name'])){
            echo 'tout est ok';
        }
    }
}
?>