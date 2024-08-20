<?php
ini_set('display_errors',false); // Pour cacher les erreurs
session_start();
require_once 'db.php';
require_once 'functions.php';
$admin = verifAdmin();
if($admin == false){
    // L'utilisateur n'est pas admin je le redirige vers index.php
    header('location:index.php');
    exit;
}
require_once 'admin/header.php'; // Pour le header de l'admin
switch($_GET['route'])
{
    case 'utilisateurs':
        require_once('admin/utilisateurs.php');

    break;

    case 'fichiers':
        require_once('admin/fichiers.php');

    break;

    case 'devoirs':
        require_once('admin/devoirs.php');

    break;
    default:
        require_once('admin/index.php');
    break;
}
require_once 'admin/footer.php'; // Pour le footer de l'admin
?>