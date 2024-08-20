<?php
require_once 'db.php';
/*
Écrire un script PHP pour insérer ces données dans 
la table users en utilisant PDO.
*/

if (isset($_POST['submit'])) {
    if ((!empty($_POST['nom']) && !empty($_POST['email']))) {
        $req = $dbh->prepare('
                    INSERT INTO `users` (nom,email)
                    VALUES (:nom,:email)
                ');
        $req->bindValue(':nom', strip_tags($_POST['nom']), PDO::PARAM_STR);
        $req->bindValue(':email', strip_tags($_POST['email']), PDO::PARAM_STR);
        if ($req->execute()) {
            echo 'inscription validé';
        } else {
            echo 'erreur SQL';
        }
    }
}
