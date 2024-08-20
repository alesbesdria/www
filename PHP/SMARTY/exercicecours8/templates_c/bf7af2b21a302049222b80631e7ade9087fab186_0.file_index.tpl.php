<?php
/* Smarty version 5.3.1, created on 2024-07-29 14:17:40
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66a7a484258d91_44736278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf7af2b21a302049222b80631e7ade9087fab186' => 
    array (
      0 => 'index.tpl',
      1 => 1722262658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a7a484258d91_44736278 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\PHP\\SMARTY\\exercicecours8\\templates';
?><!DOCTYPE html>
<html>

<head>
    <title>Ma page Smarty</title>
</head>

<body>
    <h2>Articles</h2>

    <br>
    <br>
    <h2>Selection</h2>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('articles'), 'article');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach0DoElse = false;
?>
        <li> <?php echo $_smarty_tpl->getValue('article')['id'];?>
, <?php echo $_smarty_tpl->getValue('article')['titre'];?>
, <?php echo $_smarty_tpl->getValue('article')['contenu'];?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('article')['auteur'],5);?>
<a href='./article.php'>Lire
                l'article</a>
            , <?php echo $_smarty_tpl->getValue('article')['date'];?>
.</li>

    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

</body>

</html><?php }
}
