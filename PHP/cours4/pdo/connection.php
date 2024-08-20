<?php
session_start();
require_once 'db.php';
if(isset($_POST['submit']))
{
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        // Je recupère l'utilisateur en fonction de son mail
        $user = $dbh->prepare('SELECT * FROM membres WHERE email = :email');
        $user->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
        // J'execute la requête
        $user->execute();
        // Je vérifie si j'ai un résultat avec rowcount()
        if($user->rowCount() == 1){
            $membre = $user->fetch(); // Je transforme la ligne de la requête sql en tableau PHP
            // Je vérifie que le mot de passe saisie dans le formulaire correspond au hachage dans la base
            if(password_verify($_POST['password'],$membre['password']))
            {
                // J'enregistre son ID dans une session
                $_SESSION['membre'] = $membre['ID'];
                header('location:membres.php'); // Je redirige vers l'espace membre
                exit;
            }
            else
            {
                echo 'Mauvais mot de passe';
            }
        }
        else
        {
            echo 'utilisateur inexistant';
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
</head>
<body>
    <h1>Se connecter</h1>
    <form name="connection" method="POST" action="">
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password">
        </div> 
        <button type="submit" name="submit">Se connecter</button>
    </form>
</body>
</html>