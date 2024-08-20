<?php
// 1 - Préparer le PDO
$dns = 'mysql:dbname=pdo;host=localhost';
$user = "root";
$pwd = "azertyuiop";

$pdo = new PDO($dns, $user, $pwd, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// var_dump($pdo);

// 2 - Préparer la requête
$requeteCreerUtilisateur = $pdo->prepare("
  INSERT INTO users (username, age)
  VALUES (:username, :age)
");

$requeteGetUtilisateur = $pdo->prepare("
  SELECT *
  FROM users
  WHERE id=:id
");

// 3 - Associer les valeurs
// $user1 = "Teddy";
// $user2 = "Charles Eric";

// $requeteCreerUtilisateur->bindValue(":username", $user2, PDO::PARAM_STR);
// $requeteCreerUtilisateur->bindValue(":age", 29, PDO::PARAM_INT);

// $requeteGetUtilisateur->bindValue(":id", 2);

// 4 - Exécuter la requête
// $requeteCreerUtilisateur->execute();
// $requeteGetUtilisateur->execute();

// 5 - Récupérer le résultat de la requête
// $utilisateurRecupereSurLaDb = $requeteGetUtilisateur->fetch();
echo "<pre>";
// var_dump($utilisateurRecupereSurLaDb);
// var_dump($_SERVER);
echo "</pre>";


// Créer l'utilisateur au submit du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $requeteCreerUtilisateur->bindValue(":username", $_POST["username"], PDO::PARAM_STR);
  $requeteCreerUtilisateur->bindValue(":age", $_POST["age"], PDO::PARAM_INT);
  $requeteCreerUtilisateur->execute();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDO 101</title>
</head>

<body>

  <h1>Création d'utilisateur</h1>

  <form action="" method="POST">
    <div class="input-group">
      <label for="username">Nom</label>
      <input type="text" name="username">
    </div>

    <div class="input-group">
      <label for="age">Age</label>
      <input type="number" name="age">
    </div>

    <button type="submit">Envoyer</button>
  </form>

</body>

</html>