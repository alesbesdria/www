<?php
session_start(); // Pour pouvoir travailler avec les sessions
require_once 'functions.php';
$token = genererToken();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
    <h1>Formulaire de login</h1>
    <form name="login" method="POST" action="dashboard.php?token=<?=$token;?>">
        <div>
            <label for="login">Email</label>
            <input type="email" name="login">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
        </div>
        <button type="submit" name="submit">Se connecter</button>
    </form>
</body>
</html>