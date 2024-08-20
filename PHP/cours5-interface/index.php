<?php
session_start();
require_once 'db.php';
require_once 'login.php';
$utilisateur = verifConnect(); // Je fais appel à ma fonction verifconnect pour vérifier si l'utilisateur est connecté
if (!$utilisateur) {
    // Si verifConnect retourne false
    header('location:login.php'); // Je redirige l'utilisateur vers connection.php
    exit; // je quitte l'execution du script
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace apprenants</title>
</head>

<body>
    <h1>Tableau de bord</h1>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="fichier.php">Envoyer un fichier</a></li>
            <li><a href="action.php?action=deconnection">Se déconnecter</a></li>
        </ul>
        <nav>
            <main>
                <h2>Liste des fichiers</h2>
                <?php
                // Requêtes pour sélectionner les fichiers de l'utilisateur
                $fichiers = $dbh->query('SELECT * FROM `fichiers` WHERE ID_Utilisateur = ' . intval($utilisateur['ID']));
                // Je vais vérifier si mon utilisateur à des fichiers
                if ($fichiers->rowCount() >= 1) {
                ?>
                    <table>
                        <tr>
                            <th>Nom du fichier</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    <?php
                    // Je vais boucler sur mes fichiers
                    foreach ($fichiers->fetchAll() as $fichier) {
                        echo '<tr>';
                        echo '<td><a href="fichiers/' . $utilisateur['ID'] . '/' . $fichier['Nom_Fichier'] . '">' . $fichier['Nom_Fichier'] . '</a></td>';
                        echo '<td>' . $fichier['Date_Fichier'] . '</td>';
                        echo '<td><a href="action.php?action=suppressionfichier&id=' . $fichier['ID'] . '">Supprimer</a></td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                }
                    ?>
            </main>
</body>

</html>