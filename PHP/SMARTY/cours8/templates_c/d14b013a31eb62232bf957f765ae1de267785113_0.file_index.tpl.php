<?php
/* Smarty version 5.3.1, created on 2024-07-29 09:49:54
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66a765c2ee77b5_36206608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd14b013a31eb62232bf957f765ae1de267785113' => 
    array (
      0 => 'index.tpl',
      1 => 1722246592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a765c2ee77b5_36206608 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/florian/Documents/php-via/cours8/templates';
?><!DOCTYPE html>
    <html>
        <head>
            <title>Ma page Smarty</title>
        </head>
        <body>
            Bonjour <?php echo $_smarty_tpl->getValue('prenom');?>
 <?php echo mb_strtoupper((string) $_smarty_tpl->getValue('nom') ?? '', 'UTF-8');?>

            <?php if ($_smarty_tpl->getValue('age') >= 18) {?>
                Vous êtes majeur et vacciné
            <?php } else { ?>
                Reste chez tes parents
            <?php }?> 
            <br>
            Nous sommes le <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('date'),'%d/%m/%Y');?>
  
            <h2>Boucle smarty</h2>
            <ul>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tableau'), 'prenom');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('prenom')->value) {
$foreach0DoElse = false;
?>
                <li><?php echo $_smarty_tpl->getValue('prenom');?>
</li>
            <?php
}
if ($foreach0DoElse) {
?>  
                pas de prénom  
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
            Attention <?php echo $_smarty_tpl->getValue('melissa')[0];?>

            <br>
            Le nom de famille de charles contient <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->getValue('melissa')[3], $tmp);?>
 caractères
            <br>
            <?php echo $_smarty_tpl->getValue('nb1')+$_smarty_tpl->getValue('nb2');?>

        </body>

    </html>
<?php }
}
