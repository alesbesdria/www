
<?php
session_start(); // Pour pouvoir enregistrer mon tableau
if(isset($_POST['submit']))
{
    // Je vérifie si j'ai déjà la session tableau
    if(!empty($_SESSION['tableau']))
    {
        $tableau = unserialize($_SESSION['tableau']); // je récupère le tableau serialisé
    }
    else{
        $tableau = [];
    }
    // J'ajoute l'élément au tableau
    $tableau[] = strip_tags($_POST['element']);
    $_SESSION['tableau'] = serialize($tableau); // J'enregistre le tableau dans la session

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux PHP</title>
</head>
<body>
    <h1>Les tableaux</h1>
    <form name="tableau" action="" method="POST">
        <input type="text" name="element" placeholder="Ajouter un élement">
        <button type="submit" name="submit">Ajouter</button>
    </form>   
    <?php
    // Pour afficher la liste des noms
    if(!empty($_SESSION['tableau'])){
        echo '<pre>';
        print_r(unserialize($_SESSION['tableau']));
        echo '</pre>';
    }
    ?>
</body>
</html>