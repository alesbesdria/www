<?php
require_once 'db.php'; // Pour avoir la connexion à la database
if(isset($_POST['submit']))
{
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        // Je fais la requête pour vérifier si l'email est dans la Base de données
        $verif = $dbh->query('SELECT id FROM membres WHERE email = "'.$_POST['email'].'"');
        // Si il y a 1 résultat ou +
        if($verif->rowCount() >= 1){
            // Je redirige l'utilisateur vers la page de connection
            header('location:connection.php');
            exit;
        }

        $req = $dbh->prepare('INSERT INTO membres 
                                (email,password,date_inscription,date_connection)
                                VALUES (:email,:password,CURDATE(),CURDATE())');
        // J'attribue les valeurs aux paramètres nommés                        
        $req->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
        $req->bindValue(':password',password_hash($_POST['password'],PASSWORD_DEFAULT),PDO::PARAM_STR);   
        // J'execute la requête
        if($req->execute())
        {
            // Je redirige le visiteur vers la page de connexion
            header('location:connection.php');
            exit;
        }else
        {
            echo 'Une erreur est survenue';
        }                    
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>S'inscrire</h1>
    <form name="inscription" method="POST" action="">
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password">
        </div> 
        <button type="submit" name="submit">S'inscrire</button>
    </form>
</body>
</html>