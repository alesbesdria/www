<?php
require_once 'db.php';
/*
Écrire un script PHP pour mettre à jour les données de 
l'utilisateur correspondant à l'ID saisi en utilisant PDO.
*/


if ((!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['email']))) {

    $req = $dbh->prepare('
        UPDATE `users`
        SET nom = :nom ,email = :email
        WHERE id = :id
                ');
    $req->bindValue(':nom', strip_tags($_POST['nom']), PDO::PARAM_STR);
    $req->bindValue(':email', strip_tags($_POST['email']), PDO::PARAM_STR);
    $req->bindValue(':id', strip_tags($_POST['id']), PDO::PARAM_INT);
    if ($req->execute()) {
        echo 'mise à jour effectuée';
    } else {
        echo 'erreur';
    }
}
