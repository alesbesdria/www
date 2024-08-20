<?php
// Pour charger smarty
require_once 'vendor/autoload.php';
use Smarty\Smarty; // Pour utiliser le namespace de Smarty
$template = new Smarty(); // J'instancie Smarty
$template->assign('prenom','Thierry'); // Pour assigner une valeur à une variable
$template->assign('nom','Touré');
$template->assign('age',17); 
$template->assign('date',date('Y-m-d'));
$template->assign('tableau',array('Charles','Teddy','Mélissa','Benoit'));
$tableau_melissa = array('Mélissa','Ophélie','Maude','Dykhounphypheth');
$template->assign('melissa',$tableau_melissa);
$template->assign('nb1',10);
$template->assign('nb2',5);
$template->display('index.tpl'); // Pour afficher le template

?>