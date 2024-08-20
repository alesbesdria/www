<!-- Création des données :
Créez deux tableaux PHP :
$articles : Un tableau d'articles, chaque article étant un tableau associatif avec 
les clés suivantes : id, titre, contenu, auteur, date.
$commentaires : Un tableau de commentaires, chaque commentaire étant un tableau 
associatif avec les clés suivantes : id, article_id, auteur, contenu, date.
Affichage de la liste des articles :
Créez un template Smarty (blog.tpl) qui affiche une liste d'articles.

Utilisez une boucle {foreach} pour parcourir le tableau $articles et afficher le titre, 
l'auteur, la date et un extrait du contenu de chaque article.

Ajoutez des liens pour accéder à la page individuelle de chaque article.
Affichage d'une page d'article individuel :
Créez un nouveau template Smarty (article.tpl) pour afficher un article 
individuel avec tous les détails.

Utilisez la balise {include} pour inclure le template de l'article dans blog.tpl 
lorsqu'un lien est cliqué.

Affichage des commentaires :
Sur la page d'article (article.tpl), utilisez une boucle {foreach} pour afficher
 les commentaires associés à cet article.
Ajoutez un formulaire simple pour permettre aux utilisateurs d'ajouter des commentaires. -->


<?php
require_once 'vendor/autoload.php';

use Smarty\Smarty;

$template = new Smarty();

$articles = array(
    array(
        'id' => 1,
        'titre' => 'La souris',
        'contenu' => 'videzzzzzzzz',
        'auteur' => 'blablabla',
        'date' => '22-12-2024'
    ),
    array(
        'id' => 2,
        'titre' => 'Le rat',
        'contenu' => 'un peu rempli',
        'auteur' => 'bliblibli',
        'date' => '22-11-2023'
    ),
    array(
        'id' => 3,
        'titre' => 'La fouine',
        'contenu' => 'rempli',
        'auteur' => 'bloublub',
        'date' => '22-10-2022'
    ),
);



$commentaires = array(
    array(
        'id' => 1,
        'article_id' => 1,
        'titre' => 'La souris',
        'auteur' => 'blablabla',
        'contenu' => 'videzzzzzzzzzzzzzzzzzzzz',
        'date' => '22-12-2024'
    ),
    array(
        'id' => 2,
        'article_id' => 2,
        'titre' => 'Le rat',
        'auteur' => 'bliblibli',
        'contenu' => 'un peu remplizzzzzzzzzzzzzzzzz',
        'date' => '22-11-2023'
    ),
    array(
        'id' => 3,
        'article_id' => 3,
        'titre' => 'La fouine',
        'auteur' => 'bloublub',
        'contenu' => 'remplizzzzzzzzzzzzzzzzz',
        'date' => '22-10-2022'
    ),

);
$template->assign('articles', $articles);
$template->assign('commentaires', $commentaires);
$template->display('index.tpl');

?>