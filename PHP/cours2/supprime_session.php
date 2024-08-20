<?php
session_start();
// Pour supprimer une session en particulier
$_SESSION['password'] = '';
// Pour supprimer toutes les sessions
session_destroy();
// Erreur car la session a été détruite
echo $_SESSION['session2'];
?>