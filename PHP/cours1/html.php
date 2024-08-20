<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site web</title>
</head>
<body>
    <header>
        <h1>Mon site</h1>
    </header>
    <?php
    if($_GET['url'] == 'home')
    {
        require('home.php');
    }
    else if($_GET['url'] == 'contact')
    {
        require('contact.php');
    }
    ?>
    <footer>
        <p>Site super</p>
    </footer>    
</body>
</html>