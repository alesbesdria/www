<?php
session_start();

require_once 'db.php';
require_once 'inscription.html';
switch ($_GET['action']) {
    case 'inscription':
        if (isset($_POST['submit'])) {
            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['motdepasse'])) {
                $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
                $req = $dbh->prepare('
                    INSERT INTO `utilisateurs` (nom_utilisateur,prenom_utilisateur,email_utilisateur,motdepasse_utilisateur)
                    VALUES (:nom,:prenom,:email,:motdepasse)
                ');
                $req->bindValue(':nom', strip_tags($_POST['nom']), PDO::PARAM_STR);
                $req->bindValue(':prenom', strip_tags($_POST['prenom']), PDO::PARAM_STR);
                $req->bindValue(':email', strip_tags($_POST['email']), PDO::PARAM_STR);
                $req->bindValue(':motdepasse', $motdepasse, PDO::PARAM_STR);
                if ($req->execute()) {
                    header('location:login.html');
                } else {
                    echo 'erreur SQL';
                }
            }
        }

        break;
}
