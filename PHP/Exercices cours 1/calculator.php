<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form name="calculette" method="GET" action="calculator.php">
        <div>
            <label for="nbr1">Premier nombre</label>
            <input type="text" name="nbr1" id="nbr1" required>
        </div>
        <select name="operateurs" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <div>
            <label for="nbr2">Deuxieme nombre</label>
            <input type="text" name="nbr2" id="nbr2" required>
        </div>
        <br></br>
        <button type="submit" name="calculer">Calculer</button>
    </form>
    <?php
    if (isset($_GET['calculer'])) {
        if ((empty($_GET['nbr1']) && ($_GET['nbr1']) != 0) || (empty($_GET['nbr2']) && ($_GET['nbr2']) != 0)) {
            echo 'Tous les champs sont requis';
        } else if ($_GET['operateurs'] == '+') {
            echo intval($_GET['nbr1']) + intval($_GET['nbr2']);
        } else if ($_GET['operateurs'] == '-') {
            echo intval($_GET['nbr1']) - intval($_GET['nbr2']);
        } else if ($_GET['operateurs'] == '/') {
            echo intval($_GET['nbr1']) / intval($_GET['nbr2']);
        } else if ($_GET['operateurs'] == '*') {
            echo intval($_GET['nbr1']) * intval($_GET['nbr2']);
        }
    }
    ?>
</body>

</html>