<!DOCTYPE html>
    <html>
        <head>
            <title>Ma page Smarty</title>
        </head>
        <body>
            Bonjour {$prenom} {$nom|upper}
            {if $age >= 18}
                Vous êtes majeur et vacciné
            {else}
                Reste chez tes parents
            {/if} 
            <br>
            Nous sommes le {$date|date_format:'%d/%m/%Y'}  
            <h2>Boucle smarty</h2>
            <ul>
            {foreach from=$tableau item=prenom}
                <li>{$prenom}</li>
            {foreachelse}  
                pas de prénom  
            {/foreach}
            </ul>
            Attention {$melissa[0]}
            <br>
            Le nom de famille de charles contient {$melissa[3]|count_characters} caractères
            <br>
            {$nb1+$nb2}
        </body>

    </html>
