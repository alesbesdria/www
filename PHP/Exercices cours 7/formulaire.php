<?php

if (isset($_POST['submit'])) {
    $nom_fichier = 'fichier.csv';
    if (!file_exists($nom_fichier)) {
        $open = 'x';
    } else {
        $open = 'a';
    }
    $fichier = fopen($nom_fichier, $open);

    $array = [
        [
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['age'],
            $_POST['ville']
        ]
    ];
}


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

fclose($fichier);
