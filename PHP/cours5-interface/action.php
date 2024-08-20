<?php
session_start();
require_once 'db.php'; // Pour avoir la connection à la base de données
require_once 'functions.php'; // Pour pouvoir utiliser les fonctions
// Je fais un switch pour traiter les différents formulaire
switch ($_GET['action']) {
    case 'inscription':
        // Pour traiter l'inscription
        if (isset($_POST['submit'])) {
            // Si l'utilisateur est bien passé par le formulaire
            // Je vais vérifier si les champs ont des valeurs
            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['motdepasse'])) {
                // Je hashe le mot de passe avant de l'enregistrer dans la base de données
                $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
                // Je prépare ma requête SQL en utilisant des paramètres nommées
                $req = $dbh->prepare('
                    INSERT INTO `utilisateurs` (Nom,Prenom,Email,Motdepasse)
                    VALUES (:nom,:prenom,:email,:motdepasse)
                ');
                // Je remplace mes paramètres nommées par les données utilisateurs
                $req->bindValue(':nom', strip_tags($_POST['nom']), PDO::PARAM_STR);
                $req->bindValue(':prenom', strip_tags($_POST['prenom']), PDO::PARAM_STR);
                $req->bindValue(':email', strip_tags($_POST['email']), PDO::PARAM_STR);
                $req->bindValue(':motdepasse', $motdepasse, PDO::PARAM_STR);
                // Je vais executer ma requête SQL
                if ($req->execute()) {
                    echo 'inscription validé';
                } else {
                    echo 'erreur SQL';
                }
            }
        }

        break;

    case 'connection':
        // Je vais vérifier si le formulaire a été soumis
        if (isset($_POST['submit'])) {
            // Je vais vérifier si j'ai bien des valeurs dans les champs
            if (!empty($_POST['email']) && !empty($_POST['motdepasse'])) {
                // Je prépare une requête pour vérifier si le mail est bien dans la base de données
                $req = $dbh->prepare('SELECT * FROM `utilisateurs` WHERE email = :email');
                // Je fais passer mon paramètres avec la bonne valeur
                $req->bindValue(':email', strip_tags($_POST['email']), PDO::PARAM_STR);
                // Je vais executer ma requête
                if ($req->execute()) {
                    // Si ma requête est bien executé je vais vérifier qu'elle me retourne un résultat
                    if ($req->rowCount() == 1) {
                        // Si j'ai bien un résultat je transforme le résultat en tableau PHP
                        $utilisateur = $req->fetch();
                        /*
                            // Le retour de fetch
                            $utilisateur['nom']
                            $utilisateur['prenom']
                            $utilisateur['email']
                            $utilisateur['motdepasse']
                        */
                        // Je vais vérifier si le mot de passe correspond au hachage
                        if (password_verify($_POST['motdepasse'], $utilisateur['Motdepasse'])) {
                            // J'enregistre l'utilisateur dans une session
                            $_SESSION['utilisateur'] = $utilisateur['ID'];
                            // Je vais créer un cookie pour garder mon utilisateur connecté 24h
                            $valeur_cookie = [
                                'mail' => $utilisateur['Email'],
                                'hash' => $utilisateur['Motdepasse']
                            ];
                            setcookie('utilisateur', serialize($valeur_cookie), (time() + 86400));
                            // On redirige l'utilisateur vers index.php
                            header('location:login.php');
                            exit;
                        } else {
                            echo 'Mot de passe incorrect';
                        }
                    } else {
                        echo 'Utilisateur introuvable';
                    }
                }
            }
            /*foreach($_POST as $champs){
                if(!empty($champs)){
                    echo 'ok';
                }else{
                    echo $champs.'vide';
                }
            }*/
        }


        break;

    case 'deconnection':
        // Je supprime la session
        $_SESSION['utilisateur'] = null;
        // Je supprime le cookie
        setcookie('utilisateur', '', (time() - 1));
        // Je redirige l'utilisateur
        header('location:connection.php');
        exit;


        break;

    case 'envoifichier':

        // Je vais vérifier si jamais le formulaire a été envoyé
        if (isset($_POST['submit'])) {
            // Je vérifie si mon utilisateur est connecté
            $utilisateur = verifConnect();
            if ($utilisateur) {
                // Je vais vérifier si un fichier a été envoyé
                if (is_uploaded_file($_FILES['fichier']['tmp_name'])) {
                    // Je vérifie si le dossier de l'utilisateur existe
                    if (!file_exists('fichiers/' . $utilisateur['ID'])) {
                        // Je créer un dossier avec l'ID de l'utilisateur
                        mkdir('fichiers/' . $utilisateur['ID']);
                    }
                    // Je vais transférer son fichier
                    if (move_uploaded_file($_FILES['fichier']['tmp_name'], 'fichiers/' . $utilisateur['ID'] . '/' . $_FILES['fichier']['name'])) {
                        // Je vais enregistrer le nom du fichier dans la base de données
                        $sql = $dbh->prepare('INSERT INTO `fichiers` (ID_Utilisateur,Nom_Fichier,Date_Fichier)
                        VALUES (:utilisateur_id,:nom,CURDATE())');
                        $sql->bindValue(':utilisateur_id', $utilisateur['ID'], PDO::PARAM_INT);
                        $sql->bindValue(':nom', $_FILES['fichier']['name'], PDO::PARAM_STR);
                        if ($sql->execute()) {
                            echo 'Fichier envoyé';
                        } else {
                            echo 'erreur SQL';
                        }
                    } else {
                        echo 'Erreur envoi fichier';
                    }
                }
            }
        }

        break;

    case 'suppressionfichier':

        // Je vérifie si mon utilisateur est connecté
        $utilisateur = verifConnect();
        if ($utilisateur) {
            // Je vérifie si j'ai un paramètre GET['id']
            if (!empty($_GET['id'])) {
                // Je recupère les informations sur le fichier
                $verif = $dbh->query('SELECT * FROM `fichiers` WHERE ID = ' . intval($_GET['id']));
                // Je vais vérifier si le fichier existe
                if ($verif->rowCount() == 1) {
                    $infos = $verif->fetch();
                    // Je vérifie si le fichier appartient à l'utilisateur
                    if ($infos['ID_Utilisateur'] == $utilisateur['ID']) {
                        // Pour supprimer un fichier sur le serveur avec unlink
                        unlink('fichiers/' . $utilisateur['ID'] . '/' . $infos['Nom_Fichier']);
                        // Pour supprimer la ligne du fichier dans la base de donnée
                        $del = $dbh->query('DELETE FROM `fichiers` WHERE ID = ' . intval($infos['ID']));
                        if ($del) {
                            echo 'Fichier supprimé';
                        } else {
                            echo 'Impossible de supprimer le fichier';
                        }
                    } else {
                        echo 'Le fichier ne vous appartient pas !!';
                    }
                }
            }
        }

        break;
}
