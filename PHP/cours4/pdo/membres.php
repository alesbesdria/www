<?php
session_start();
require_once 'db.php';
// Je vérifie si j'ai bien une session membre
if(!empty($_SESSION['membre']))
{
    $req = $dbh->query('SELECT * FROM membres WHERE ID = '.intval($_SESSION['membre']));
    // Je vérifie si une ligne est retourné
    if($req->rowCount() == 1){
        $membre = $req->fetch();
        echo '<pre>';
        print_r($membre);
        echo '</pre>';
        echo '<a href="deconnection.php">Se deconnecter</a>'; // le lien pour se deconnecter
    }else{
        echo 'membre introuvable';
        //header('location:https://www.google.fr');
    }
}
else
{
    echo 'accès interdit';
}
?>