<section>
    <form name="inscription" method="POST" action="traitement.php">
        <div>
            <label for="nom">Votre nom</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <div>
            <label for="prenom">Votre prénom</label>
            <input type="text" name="prenom" id="prenom" required>
        </div>
        <div>
            <label for="email">Votre email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password1">Votre mot de passe</label>
            <input type="password" name="password1" id="password1" required>
        </div>
        <div>
            <label for="password2">Répéter mot de passe</label>
            <input type="password" name="password2" id="password2" required>
        </div>
        <button type="submit" name="inscription">S'inscrire</button>
    </form>
</section>