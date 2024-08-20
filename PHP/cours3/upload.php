<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader un fichier</title>
</head>
<body>
    <h1>Uploader un fichier</h1>
    <form name="upload" method="POST" enctype="multipart/form-data" action="">
        <div>
            <label for="alfa">Fichier</label>
            <input type="file" name="alfa">
        </div>
        <button type="submit" name="submit">Envoyer</button>    
    </form>
</body>
</html>
<?php
// Pour le traitement du formulaire
require_once 'functions.php';
if(isset($_POST['submit']))
{
    // Je vais vérifier si un fichier a été envoyé
    if(is_uploaded_file($_FILES['alfa']['tmp_name']))
    {
        // Je vérifie l'extension
        if(verifExtension($_FILES['alfa']['name']))
        {
            // Je renomme le fichier avec la fonction
            $nouveau_nom = renommerFichier($_FILES['alfa']['name']);
            // Je déplace le fichier temporaire vers sa destination avec son nouveau nom
            if(move_uploaded_file($_FILES['alfa']['tmp_name'],'dest/'.$nouveau_nom))
            {
                echo 'fichier envoyé';
            }
            else
            {
                echo 'erreur transfert fichier';
            }
        }
        else
        {
            echo 'extension non autorisée';
        }
    }
}
?>