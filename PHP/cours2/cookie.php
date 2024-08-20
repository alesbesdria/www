<?php
if(isset($_POST['submit']))
{
    // Je vérifie si j'ai bien une valeur
    if(!empty($_POST['nom']))
    {
        // Je vais créer un cookie qui a une validité de 6 mois
        setcookie('client',strip_tags($_POST['nom']),(time()+(86400*180)));
    }
}
?>