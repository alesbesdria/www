<?php
$dsn = 'mysql:dbname=articlescours7;host=localhost';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);

$produits = $dbh->query('SELECT * FROM produits WHERE 1');

$produits->execute();


$nom_fichier = 'fichier.csv';

$fichier = fopen($nom_fichier, 'a');
$array = $produits->fetchAll(PDO::FETCH_ASSOC);

foreach ($array as $a) {
    fputcsv($fichier, $a, '.');
}


fclose($fichier);
$fichier = fopen($nom_fichier, 'r');


while ($csv = fgetcsv($fichier, null, ';')) {
    foreach ($csv as $info) {
        echo $info;
        echo '<br>';
    }
}
/////////////////////////////////////////////////////////////////////////
fclose($fichier);

echo '<br>';

$fichier = fopen($nom_fichier, 'a');

$calcul = $dbh->query('SELECT SUM(Prix * Stock) AS TotalSomme FROM produits WHERE 1');
$total = $calcul->fetch(PDO::FETCH_ASSOC);

fputcsv($fichier, $total, '.');

fclose($fichier);
$fichier = fopen($nom_fichier, 'r');

while ($csv = fgetcsv($fichier, null, ';')) {
    foreach ($csv as $info) {
        echo $info;
        echo '<br>';
    }
}


fclose($fichier);

// STOCK -5
echo '<br>';

$nom_fichier2 = 'stock.csv';
if (!file_exists($nom_fichier2)) {
    $open = 'x';
} else {
    $open = 'w';
}
$fichier2 = fopen($nom_fichier2, $open);

$affiche = $dbh->query('SELECT nom, Stock  FROM produits WHERE Stock < 5');
$affichage = $affiche->fetchAll(PDO::FETCH_ASSOC);

foreach ($affichage as $aff) {
    fputcsv($fichier2, $aff, '.');
}


fclose($fichier2);
$fichier2 = fopen($nom_fichier2, 'r');

while ($csv = fgetcsv($fichier2, null, ';')) {
    foreach ($csv as $info) {
        echo $info;
        echo '<br>';
    }
}

fclose($fichier2);
