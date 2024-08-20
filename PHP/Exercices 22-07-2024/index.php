<?php
session_start();

require_once 'db.php';

$sql = 'SELECT * FROM `utilisateurs` WHERE 1 ';

// info cookie

$req = $dbh->query($sql);
if ($req->rowCount() >= 1) {
?>
    <table>
        <tr>
            <th>Id:</th>
            <th>Nom:</th>
            <th>Prenom:</th>
            <th>Email:</th>
            <th>Niveau:</th>
            <th>Actif:</th>
        </tr>
    <?php

    foreach ($req->fetchAll() as $utilisateur) {
        echo '<tr>';

        echo '<td>' . $utilisateur['id_utillisateur'] . '</td>';
        echo '<td>' . $utilisateur['nom_utilisateur'] . '</td>';
        echo '<td>' . $utilisateur['prenom_utilisateur'] . '</td>';
        echo '<td>' . $utilisateur['email_utilisateur'] . '</td>';
        echo '<td>' . $utilisateur['niveau_utilisateur'] . '</td>';
        echo '<td>' . $utilisateur['actif_utilisateur'] . '</td>';
        echo '<td>';
        echo '<a href="#">Editer</a>';
        echo '<a href="#">Supprimer</a>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    return false;
}

    ?>



    <?php

    ?>