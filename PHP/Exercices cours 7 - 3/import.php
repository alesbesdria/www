<?php
$dsn = 'mysql:dbname=infousers;host=localhost';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);

$nom_fichier = 'utilisateurs.csv';
$fichier = fopen($nom_fichier, 'r');

while ($csv = fgetcsv($fichier, null, ';')) {
    $users = $dbh->prepare('
                    INSERT INTO `utilisateurs` (Nom,Prenom,Age,Ville,Motdepasse)
                    VALUES (:nom,:prenom,:age,:ville,:motdepasse)');
    $users->bindValue(':nom', $csv[0], PDO::PARAM_STR);
    $users->bindValue(':prenom', $csv[1], PDO::PARAM_STR);
    $users->bindValue(':age', $csv[2], PDO::PARAM_STR);
    $users->bindValue(':ville', $csv[3], PDO::PARAM_STR);
    $users->bindValue(':motdepasse', password_hash('lili', PASSWORD_DEFAULT), PDO::PARAM_STR);
    $users->execute();
    foreach ($csv as $info) {
        echo $info;
        echo '<br>';
    }
}

fclose($fichier);
