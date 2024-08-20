<?php
/* Smarty version 5.3.1, created on 2024-07-29 09:54:00
  from 'file:input.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66a766b8b30ce6_81156985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f51716a67416b7f3859fcb860f6cb41d1501788' => 
    array (
      0 => 'input.tpl',
      1 => 1722246833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a766b8b30ce6_81156985 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/florian/Documents/php-via/cours8/templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple formulaire</title>
</head>
<body>
    <form name="input" method="POST" action="">
    <input name="prenom" type="text" value="<?php if ($_smarty_tpl->getValue('prenom')) {
echo mb_strtoupper((string) $_smarty_tpl->getValue('prenom') ?? '', 'UTF-8');
}?>">
        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</html><?php }
}
