<?php
session_start(); // Pour pouvoir utiliser les sessions, a placer juste après la balise <?php
$_SESSION['nomdelasession'] = 'valeurdelasession'; // je déclare une session
$_SESSION['session2'] = 'valeursession2';
// J'affiche la valeur de session2
//echo $_SESSION['session2'].$_SESSION['nomdelasession'];
// Session qui contient un mot de passe
$_SESSION['password'] = password_hash('dykhounphypheth',PASSWORD_DEFAULT);
echo $_SESSION['password'];
?>