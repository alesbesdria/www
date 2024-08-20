<?php
// Pour afficher le cookie client
echo $_COOKIE['client'];
// Pour afficher le cookie apprenant en désérialisé
$apprenant = unserialize($_COOKIE['apprenants']);
var_dump($apprenant);
?>