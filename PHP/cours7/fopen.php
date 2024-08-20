<?php
if(isset($_POST['submit']))
{
    // Je vais vérifier si le fichier existe
    $nom_fichier = $_POST['nom'].'_'.$_POST['prenom'].'.txt';
    // Je vérifie avec file_exists
    if(!file_exists($nom_fichier)){
        $open = 'x';
    }
    else
    {
        $open = 'w';
    }
    $fichier = fopen($nom_fichier,$open);
    // Je vais écrire dans mon fichier
    fwrite($fichier,$_POST['description']);
    // Je ferme mon fichier
    fclose($fichier);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Découverte de Fopen</title>
</head>
<body>
    <h1>Découverte de fopen()</h1>
    <form method="POST" action="">
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom">
        </div> 
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom">
        </div>  
        <div>
            <label for="prenom">Description</label>
            <textarea name="description"></textarea>
        </div> 
        <button type="submit" name="submit">Enregistrer</button>  
    </form>
</body>
</html>