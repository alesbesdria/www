<!DOCTYPE html>
<html>

<head>
    <title>Ma page Smarty</title>
</head>

<body>
    <h2>($articles[0].titre)</h2>

    <br>
    <br>
    <h2>Commentaires</h2>
    {foreach from=$commentaires item=commentaire}
        <li> {$commentaire.id}, {$commentaire.titre}, {$commentaire.contenu}, {$article.auteur|truncate:5}<a
                href='./article.php'>Lire l'article</a>
            , {$commentaire.date}.</li>

    {/foreach}

</body>

</html>