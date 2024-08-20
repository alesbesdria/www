<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>
<body>
    <h1>Connection</h1>
    <form name="connection" method="POST" action="action.php?action=connection">
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="motdepasse">Mot de passe :</label>
            <input type="password" name="motdepasse" id="motdepasse">
        </div>   
        <button type="submit" name="submit">Se connecter</button>     
    </form>
    
</body>
</html>