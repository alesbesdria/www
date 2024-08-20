<?php
// J'ouvre mon fichier avec fopen
$file = fopen('tableur.csv','r'); // J'ouvre en lecture seule avec r
// Je parcours mon fichier CSV avec fgetcsv
// Premier argument le fichier
// Deuxième argument la longueur (si null ou 0 on parcours tout)
// Troisième arguement le caractère de séparation
while($csv = fgetcsv($file,null,';'))
{
    // Pour parcourir le tableau
    foreach($csv as $info)
    {
        echo $info; // Pour afficher les infos
        echo '<br>';
    }
}
fclose($file);
?>