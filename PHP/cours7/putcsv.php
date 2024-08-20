<?php
// Pour écrire des informations dans un fichier CSV
$file = fopen('tableur.csv','x'); // Je créé le fichier tableau.csv et l'ouvre en écriture
$array = [
    ['Firas test','33 ans','Alfa'],
    ['Mélissa','36 ans','Dacia'],
    ['Teddy','28 ans','Velo'],
    ['Charles','32 ans','Peugeot']
];
// Je parcours mon tableau
foreach($array as $a)
{
    // Je vais écrire les lignes dans mon fichier CSV
    fputcsv($file,$a,';');
    // Premier paramètre le fichier
    // Deuxième paramètre le tableau
    // Troisième paramètre (option) le caractère de séparation
    // Quatrième paramètre (option) le caractère d'enclosure
    // Cinquième paramètre (option) le caractère d'échappement
}
// Je vais fermer mon fichier
fclose($file);
?>