<!-- 
Exercice 3 - Fonction PHP:
Ecrire une fonction qui permet de traiter l'envoi d'un fichier. 
La fonction prends 1 paramètre: le repertoire de destination du fichier
La fonction doit vérifier l'extension du fichier et renommer le fichier via un nom unique.
  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoie Fichier</title>
</head>

<body>
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
$extensions = ['.jpg', '.png', '.JPG', '.PNG'];

function sendFiles($doss)
{
    if (isset($_POST['submit'])) {

        if (is_uploaded_file($_FILES['alfa']['tmp_name'])) {
            $alfa = uniqid() . $_FILES['alfa']['name'];
            global $extensions;
            $ext = strrchr($_FILES['alfa']['name'], '.');

            if (in_array($ext, $extensions)) {

                if (move_uploaded_file($_FILES['alfa']['tmp_name'], $doss . $alfa)) {
                    echo 'fichier envoyé';
                } else {
                    echo 'erreur transfert fichier';
                }
                return true;
            } else {
                return false;
            }
        }
    }
}
sendFiles('dest/');
?>