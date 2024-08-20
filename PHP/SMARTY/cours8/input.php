<?php
require_once 'vendor/autoload.php';
use Smarty\Smarty; // Pour utiliser le namespace de Smarty
$input = new Smarty();
$input->assign('prenom',$_POST['prenom']);
$input->display('input.tpl');
?>