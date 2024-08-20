<?php
// Les tableaux en PHP
$array1 = ['alfa', 'renault', 'peugeot']; // Tableau avec indices
$array2 = [
    'marque' => 'Alfa',
    'modele' => 'Mito',
    'energie' => 'essence'
]; // Tableau avec clés et valeurs
// Pour afficher les clés et les valeurs
foreach ($array2 as $cle => $valeur) {
    echo $cle . ' = ' . $valeur . "<br>";
}
$array_multiple =
    [
        [
            'voiture' => [
                'marque' => 'Alfa',
                'modele' => 'Giulia',
                'energie' => 'Diesel'
            ]

        ],
        [
            'marque' => 'Renault',
            'modele' => 'Megane',
            'energie' => 'electrique'
        ],
        [
            'marque' => 'Peugeot',
            '307',
            'energie' => 'en panne'
        ],
        [
            'magasin' => 'Besson',
            'pointure' => 38,
            'couleur' => 'rouge'


        ]
    ];
$melissa_array = array(
    'nom1' => [
        [
            'marque' => 'Timberland',
            'pointure' => 42,
            'couleur' =>
            [
                'noir', 'rouge', 'bleue'
            ]

        ],
        [
            'marque' => 'Louboutin',
            'pointure' => 39,
            'couleur' => 'jaune'
        ],
        [
            'marque' => 'Nike',
            'pointure' => 40,
            'couleur' => 'blanc'
        ]
    ],
    'nom2' => [
        [
            'enseigne' => 'Carrefour',
            'lieu' => 'Orléans'
        ],
        [
            'enseigne' => 'Auchan',
            'lieu' => 'Olivet'
        ]
    ]
);
/*echo '<pre>';
print_r($melissa_array);
echo '</pre>';*/
// Afficher la couleur des lou boutin
//echo $melissa_array['nom1'][1]['couleur'];
// Parcourir un tableau multiple avec des boucles
foreach ($melissa_array as $key => $value) {
    echo $key;
    echo '<br>';
    foreach ($value as $key2 => $value2) {
        echo $key2;
        echo '<br>';
        foreach ($value2 as $key3 => $value3) {
            echo $key3;
            echo '<br>';
            // Si l'élément est un tableau
            if (is_array($value3)) {
                echo '<pre>';
                print_r($value3);
                echo '</pre>';
            } else {
                echo $value3;
            }

            echo '<br>';
        }
    }
}
// Utilisation d'array_merge pour fusionner 2 tableaux
$tab1 = ['marque' => 'Alfa', 'modele' => 'Giulietta', 'energie' => 'essence'];
$tab2 = ['marques' => 'Renault', 'modele' => 'Megane', 'option' => 'velo'];
$merge = array_merge($tab1, $tab2);
echo '<pre>';
print_r($merge);
echo '</pre>';
