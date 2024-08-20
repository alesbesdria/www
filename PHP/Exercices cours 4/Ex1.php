<!-- Exercices tableau PHP

Exercice 1: Création et Affichage d'un Tableau
Créez un tableau associatif pour stocker les informations 
suivantes sur une personne : nom,
âge, adresse. Ensuite, affichez ces informations. -->

<?php
echo "<br>" . 'EXO1' . "<br>";
$tab1 = [
    'nom' => 'Meirsman',
    'âge' => '36',
    'adresse' => '666, Highway to hell'
];

foreach ($tab1 as $cle => $value) {
    echo $cle . ' = ' . $value . "<br>";
}
// echo $tab1['âge'];
?>


<!-- Exercice 2: Parcourir un Tableau avec une Boucle
Créez un tableau contenant les noms de cinq fruits. Utilisez 
une boucle foreach pour afficher
chaque fruit. -->

<?php

echo "<br>" . 'EXO2' . "<br>";

$tab2 = [
    'pêche',
    'nectarine',
    'abricot',
    'ananas',
    'framboise'
];

foreach ($tab2 as $cle2) {
    echo $cle2 . "<br>";
}

?>

<!-- Exercice 3: Ajouter et Supprimer des Éléments
Créez un tableau contenant les jours de la semaine. 
Ajoutez "Dimanche" à la fin du tableau
et supprimez "Lundi" du début du tableau avec 
la fonction array_shift. Affichez le tableau
résultant. -->

<?php
echo "<br>" . 'EXO3' . "<br>";
$tab3 = [
    'lundi',
    'mardi',
    'mercredi',
    'jeudi',
    'vendredi',
    'samedi',

];

array_push($tab3, 'dimanche');
$suppr = array_shift($tab3);
print_r($tab3);
?>

<!-- Exercice 4: Trier un Tableau
Créez un tableau contenant des nombres aléatoires. 
Triez le tableau dans l'ordre croissant
(fonction native de PHP) et affichez les valeurs triées. -->

<?php
echo "<br>" . 'EXO4' . "<br>";

$tab4 = [
    25,
    68,
    42,
    36,
    54,
    99,
];

sort($tab4);
foreach ($tab4 as $key) {
    print_r($key);
    echo ' ';
}

?>

<!-- Exercice 5: Fusionner des Tableaux
Créez deux tableaux : un contenant les prénoms 
et un autre contenant les noms de famille.
Fusionnez ces deux tableaux avec 
la fonction array_combine pour créer un tableau associatif
complet (prénom => nom de famille). -->

<?php

echo "<br>" . 'EXO5' . "<br>";

$tabpre = ['prenom' => 'Riri', 'Fifi', 'Loulou'];
$tabnom = ['nom' => 'Donald', 'Duck', 'CoinCoin'];
$tabmix = array_combine($tabpre, $tabnom);

print_r($tabmix);

?>

<!-- Exercice 6: Filtrer un Tableau
Créez un tableau contenant des nombres. 
Filtrez les nombres pairs à l’aide de la fonction
array_filter et affichez-les. -->

<?php
echo "<br>" . 'EXO6' . "<br>";
$tab6 = [
    25,
    68,
    42,
    36,
    51,
    54,
    67,
    99
];

function even($var)
{
    return !($var & 1);
}
echo '<pre>';
print_r(array_filter($tab6, "even"));
echo '</pre>';

?>

<!-- Exercice 7: Calculer la Somme et la Moyenne
Créez un tableau contenant des notes d'examen. 
Calculez et affichez la somme et la
moyenne des notes à l’aide de la fonction array_sum. -->

<?php
echo "<br>" . 'EXO7' . "<br>";
$tab7 = [
    25,
    68,
    42,
    36,
    54,
    99
];

echo "somme = " . array_sum($tab7) . "\n";
$moyenne = array_sum($tab7) / count($tab7); // Le calcul 
echo "moyenne = " . $moyenne;

?>