<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ckeckage</title>
</head>

<body>
    <section>
        <form name="inscription" method="POST" action="age_check.php">
            <div>
                <label for="age">Saisissez votre age</label>
                <input type="text" name="age" id="age" required>

            </div>
        </form>
    </section>
    <?php
    // if (isset($_POST['age'])) {
    //     if (empty($_POST['age'])) {
    //         echo 'Votre age est requis';
    //     } else if ($_POST['age'] < 19) {
    //         echo 'Vous êtes mineur';
    //     } else if ($_POST['age'] > 18 && $_POST['age'] < 26) {
    //         echo 'Vous êtes un jeune adulte';
    //     } else {
    //         echo 'Vous êtes adulte';
    //     }
    // }
    $checkage = $_POST['age'];
    switch ($checkage) {
        case 10:
            echo 'Vous êtes mineur';
            break;
        case 20:
            echo 'Vous êtes un jeune adulte';
            break;
        case 36:
            echo 'Vous êtes adulte';
            break;
            // default:
            //     echo 'Votre age est requis';
            //     break;
    }
    ?>
</body>

</html>