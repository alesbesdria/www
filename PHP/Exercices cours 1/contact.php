<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <section>
        <form name="inscription" method="POST" action="contact.php">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="message">
                <label for="message"></label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Ecrivez votre message"></textarea>
            </div>
            <button type="submit" name="envoyer">Envoyer</button>
        </form>
    </section>
    <?php
    if (isset($_POST['envoyer'])) {
        if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['message'])) {
            echo 'Tous les champs sont requis';
        } else {
            echo 'Votre message a bien été envoyé :';

            echo '<br>' . strip_tags($_POST['nom']) . '<br>' . strip_tags($_POST['email']) . '<br>' . strip_tags($_POST['message']);
        }
    }
    ?>
</body>

</html>