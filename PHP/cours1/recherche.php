<?php
$titre = 'Recherche';
require_once('views/header.php');
require_once('views/recherche.php'); // Pour le formulaire
// Je traite le formulaire
$tableau = ['Alfa','Renault','Peugeot','Dacia','Toyota','Nissan'];
// Je vérifie si mon formulaire a été soumis
if(isset($_GET['search']))
{
    // Je vérifie si un mot a été saisi
    if(!empty($_GET['mot']))
    {
        echo '<p>Votre recherche pour <b>'.strip_tags($_GET['mot']).'</b></p>';
        // Je vais vérifier avec in_array si le mot est dans le tableau
        if(in_array($_GET['mot'],$tableau))
        {
            echo 'Mot trouvé';
        }
        else
        {
            echo 'Mot non trouvé';
        }
    }
}
require_once('views/footer.php');
?>