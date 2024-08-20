<h2>Gestion utilisateurs</h2>
<fieldset>
    <h3>Ajouter un utilisateur</h3>
    <form name="add_utilisateur" method="POST" action="">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="statut">Statut :</label>
            <select name="statut" id="statut">
                <option value="apprenant">Apprenant</option>
                <option value="admin">Administrateur</option>
            </select>
        </div>
        <button type="submit" name="submit">Ajouter</button>   
    </form>
</fieldset>
<fieldset>
    <h3>Liste des utilisateurs</h3>
    <div>
        <form name="recherche" method="GET" action="">
            <label>Rechercher un utilisateur:</label>
            <input type="text" name="recherche">
            <input type="hidden" name="route" value="utilisateurs">
            <button type="submit" name="submit">Rechercher</button>
        </form>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
        <?php
        // Je regarde si le formulaire de recherche a été soumis
        if($_GET['recherche'])
        {
            $mot = strip_tags($_GET['recherche']);
        }
        else
        {
            $mot = null;
        }
        $utilisateurs = listeUtilisateurs($mot); // Je vais chercher mes utilisateurs
        // On vérifie si il y a des utilisateurs
        if($utilisateurs)
        {
            foreach($utilisateurs as $utilisateur)
            {
                echo '<tr>';
                echo '<td>'.$utilisateur['ID'].'</td>';
                echo '<td>'.$utilisateur['Nom'].'</td>';
                echo '<td>'.$utilisateur['Prenom'].'</td>';
                echo '<td>'.$utilisateur['Email'].'</td>';
                echo '<td>'.$utilisateur['Statut'].'</td>';
                echo '<td>';
                echo '<a href="#">Modifier</a>';
                echo '<a href="#">Supprimer</a>';
                echo '</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>    

</fieldset>    