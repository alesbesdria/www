<?php
session_start();
require_once 'db.php';
switch ($_GET['action']) {
    case 'connection':
        if (isset($_POST['submit'])) {
            if (!empty($_POST['email']) && !empty($_POST['motdepasse'])) {
                $req = $dbh->prepare('SELECT * FROM `utilisateurs` WHERE email_utilisateur = :email');
                $req->bindValue(':email', strip_tags($_POST['email']), PDO::PARAM_STR);
                if ($req->execute()) {
                    if ($req->rowCount() == 1) {
                        $utilisateur = $req->fetch();
                        /*
                            // Le retour de fetch
                            $utilisateur['nom']
                            $utilisateur['prenom']
                            $utilisateur['email']
                            $utilisateur['motdepasse']
                        */
                        if (password_verify($_POST['motdepasse'], $utilisateur['motdepasse_utilisateur'])) {
                            $_SESSION['utilisateur'] = $utilisateur['id_utilisateur'];
                            $valeur_cookie = [
                                'mail' => $utilisateur['email_utilisateur'],
                                'hash' => $utilisateur['motdepasse_utilisateur']
                            ];
                            setcookie('utilisateur', serialize($valeur_cookie), (time() + 86400));
                            header('location:index.php');
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
}
