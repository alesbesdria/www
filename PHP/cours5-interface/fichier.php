<?php
session_start();
require_once 'db.php';
require_once 'functions.php';
$utilisateur = verifConnect(); // Je fais appel à ma fonction verifconnect pour vérifier si l'utilisateur est connecté
if(!$utilisateur)
{
    // Si verifConnect retourne false
    header('location:connection.php'); // Je redirige l'utilisateur vers connection.php
    exit; // je quitte l'execution du script
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer un fichier</title>
</head>
<body>
    <h1>Envoyer un fichier</h1>
    <form name="fichier" method="POST" action="action.php?action=envoifichier" enctype="multipart/form-data">
        <div>
            <label for="fichier">Selectionnez votre fichier</label>
            <input type="file" name="fichier" id="fichier">
        </div>
        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</html>