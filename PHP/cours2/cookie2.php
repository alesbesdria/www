<?php
// Je déclare un tableau
$tableau = ['Charles','Mélissa','Léon','Marco','Alexandre'];
// Je créer un cookie en serialisant le tableau
setcookie('apprenants',serialize($tableau),(time()+3600));
// Voir fichier recup_cookie.php pour l'affichage du cookie
?>