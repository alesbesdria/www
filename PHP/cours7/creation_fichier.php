<?php
if(isset($_POST['submit']))
{
    $nom_fichier = $_POST['nom'].'.php';
    if(!file_exists($nom_fichier)){
        $open = 'x';
    }
    else
    {
        $open = 'w';
    }
    $file = fopen($nom_fichier,$open);
    fwrite($file,$_POST['contenu']);
    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un fichier PHP</title>
</head>
<body>
    <h1>Création d'un fichier PHP</h1>
    <form name="creation" method="POST" action="">
        <div>
            <label for="nom">Nom du fichier</label>
            <input type="text" name="nom">
        </div>
        <div>
            <label for="contenu">Contenu du fichier</label>
            <textarea name="contenu" cols="90" rows="100"></textarea>
        </div>
        <button type="submit" name="submit">Créer</button>
    </form>
</body>
</html>