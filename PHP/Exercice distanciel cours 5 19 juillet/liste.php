<?php
require_once 'db.php';
/*
Écrire un script PHP pour récupérer et afficher toutes les données de la table users.
*/

// Requêtes pour sélectionner les fichiers de l'utilisateur
$users = $dbh->query('SELECT * FROM `users`');
// Je vais vérifier si mon utilisateur à des fichiers
if ($users->rowCount() >= 1) {
?>
    <table>
        <tr>
            <th>Nom du client</th>
            <th>Email</th>
        </tr>
    <?php
    // foreach ($users->fetchAll() as $user) {
    //     echo '<tr>';
    //     echo '<td>' . $user['id'] . ' ' . $user['nom'] . ' ' . $user['email'] . '</td>';

    //     echo '</tr>';
    // }
    $i = 0;
    $user = $users->fetchAll();
    while ($i < count($user)) {
        echo '<td>' . $user[$i]['id'] . ' ' . $user[$i]['nom'] . ' ' . $user[$i]['email'] . '</td>';
        $i++;
    }
}
    ?>