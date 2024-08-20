<!-- Exercice 1: Création et Affichage d'un Tableau Multidimensionnel
Créez un tableau multidimensionnel pour stocker les informations suivantes sur trois
étudiants : nom, âge, et note. Affichez ces informations. -->

<?php
echo "<br>" . 'EXO1' . "<br>";
$multiple1 =
    [
        [

            'nom' => 'Poutine',
            'age' => '25',
            'note' => '14'

        ],
        [
            'nom' => 'Trump',
            'age' => '30',
            'note' => '16'
        ],
        [
            'nom' => 'Macron',
            'age' => '35',
            'note' => '18'
        ]
    ];

foreach ($multiple1 as $key => $value) {

    foreach ($value as $key2 => $value2) {

        echo $value2 . ' ';
    }
    echo ' .';
}
?>

<!-- Exercice 2: Ajout d'Éléments à un Tableau Multidimensionnel
Ajoutez un nouvel étudiant au tableau créé dans l'exercice précédent. 
Affichez ensuite le
tableau mis à jour. -->


<?php
echo "<br>" . 'EXO2' . '<br>';
array_push(
    $multiple1,
    [
        'nom' => 'Laden',
        'age' => '40',
        'note' => '20'
    ]
);
echo $multiple1[3]['nom'] . ' ';
echo $multiple1[3]['age'] . ' ';
echo $multiple1[3]['note'] . ' ';
?>


<!-- Exercice 3: Accéder à des Éléments Spécifiques
Accédez et affichez uniquement le nom et la note du deuxième étudiant dans le tableau. -->


<?php
echo "<br>" . 'EXO3' . "<br>";
echo $multiple1[1]['nom'] . ' ';
echo $multiple1[1]['age'] . ' ';
?>


<!-- Exercice 4: Parcourir un Tableau Multidimensionnel avec une Boucle Imbriquée
Créez un tableau multidimensionnel pour stocker les informations sur trois classes, chaque
classe contenant les noms de trois étudiants. Utilisez des boucles imbriquées pour afficher
tous les noms des étudiants, en précisant la classe à laquelle ils appartiennent. -->


<?php
echo "<br>" . 'EXO4' . "<br>";
$multiple4 =
    [
        [
            'classe1' => [
                'nom' => 'Gugus', 'Julio', 'Bibou'
            ]
        ],
        [
            'classe2' => [
                'nom' => 'pignou', 'teuteu', 'sosso'
            ]
        ],
        [
            'classe3' => [
                'nom' => 'foifoi', 'fifi', 'bataba'
            ]
        ]
    ];



foreach ($multiple4 as $key4 => $value4) {
    foreach ($value4 as $key5 => $value5) {
        foreach ($value5 as $key6 => $value6) {
            echo $key4 . ' ' . $key5 . ' '  . $key6 . ' ' . $value6 . '<br>';
        };
    };
}
?>


<!-- Exercice 5: Recherche dans un Tableau Multidimensionnel
Écrivez une fonction qui prend en paramètre un tableau multidimensionnel et un nom
d'étudiant, puis retourne l'âge et la note de cet étudiant. Testez la fonction avec le tableau
de l'exercice 1. -->


<?php
echo "<br>" . 'EXO5' . "<br>";
function search($tab, $nom)
{
    foreach ($nom as $key7 => $value7) {
        echo $key7;
        // a finir
    };
};
echo search($multiple1, 'Poutine');
?>


<!-- Exercice 6: Trier un Tableau Multidimensionnel
Créez un tableau multidimensionnel pour stocker les informations suivantes sur trois
produits : nom, prix, et quantité. Triez ce tableau par prix (croissant) et affichez-le. -->

<?php
echo "<br>" . 'EXO6' . "<br>";

?>