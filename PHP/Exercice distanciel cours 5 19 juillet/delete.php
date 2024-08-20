<?php
require_once 'db.php';
//Écrire un script PHP pour supprimer 
// l'utilisateur correspondant à 
// l'ID saisi en utilisant PDO.

if ((!empty($_POST['id']))) {

    $req = $dbh->prepare('
        DELETE FROM `users`
        WHERE id = :id
                ');
    $req->bindValue(':id', strip_tags($_POST['id']), PDO::PARAM_INT);
    if ($req->execute()) {
        echo 'suppression effectuée';
    } else {
        echo 'erreur';
    }
}
