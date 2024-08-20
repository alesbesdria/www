<!-- Créer un formulaire d'envoi de fichier multiple. Traiter via une boucle while (ou for)
l'envoi des fichiers et enregistrer les fichiers dans le dossier upload/ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice cours 2</title>
</head>

<body>
    <h1>Envoyer un fichier</h1>
    <form name="upload" method="POST" action="exercice1.php" enctype="multipart/form-data">
        <div>
            <label for="fichier">Votre fichier</label>
            <input type="file" name="fichier[]" id="fichier" multiple>
        </div>
        <button type="submit" name="submit">Envoyer</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        for ($_FILES['fichier'] as $dl) {
            echo '<pre>';
            var_dump($dl);
            echo '</pre>';
            if (is_uploaded_file($dl['tmp_name'])) {
                if (move_uploaded_file($dl['tmp_name'], 'upload/' . $dl['newname'])) {
                    echo 'tout est ok';
                }
            }
        }
    }
    ?>
</body>

</html>


if(isset($_POST['submit']))
{
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';
    // Je déclare i
    $i = 0;
    // Tant que chaque fichier qui a été envoyé
    while(is_uploaded_file($_FILES['fichiers']['tmp_name'][$i]))  //on va mettre l'indice avec i
    {
        // Je vais bouger l'image
        // Pour créer un dossier en PHP avec mkdir
        //mkdir('upload');
        if(move_uploaded_file($_FILES['fichiers']['tmp_name'][$i],'upload/'.$_FILES['fichiers']['name'][$i])){
            echo 'tout est ok';
        }
        echo $i;
        $i++; // j'incrémente i
        // Je vérifie si i est  égal aux nombres d'élément dans FILES
        if(count($_FILES) == $i){
            exit;
        }
    }
}