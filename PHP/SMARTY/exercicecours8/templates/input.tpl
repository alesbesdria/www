<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple formulaire</title>
</head>
<body>
    <form name="input" method="POST" action="">
    <input name="prenom" type="text" value="{if $prenom}{$prenom|upper}{/if}">
        <button type="submit" name="submit">Envoyer</button>
    </form>
    {literal}
        <script>

        </script>
    {/literal}
    
</body>
</html>