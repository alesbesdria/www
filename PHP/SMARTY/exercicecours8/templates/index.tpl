<!DOCTYPE html>
<html>

<head>
    <title>Ma page Smarty</title>
</head>

<body>
    <h2>Articles</h2>

    <br>
    <br>
    <h2>Selection</h2>
    {foreach from=$articles item=article}
        <li> {$article.id}, {$article.titre}, {$article.contenu}, {$article.auteur|truncate:5}<a href='./article.php'>Lire
                l'article</a>
            , {$article.date}.</li>

    {/foreach}

</body>

</html>