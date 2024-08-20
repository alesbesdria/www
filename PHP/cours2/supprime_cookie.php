<?php
// Pour supprimer un cookie
// Je vérifie si le cookie existe
if($_COOKIE['client'])
{
    // Pour le supprimer je rappelle la fonction setcookie
    setcookie('client','',-1);
}
?>