<!-- 
Exercice 1 - Function PHP:
Créer une fonction qui remplace les caractères spéciaux et les accents par une lettre. 
La fonction doit aussi remplacer les espaces par des -
  -->

<?php
function remplaceCar($chaine)
{
    $spec = ['é', 'è', 'î', '&', '$', '%', '@', ' '];
    $space = ['e', 'e', 'i', 'e', 'o', 'o', 'o', '-'];

    $chaine = str_replace($spec, $space, $chaine);
    return $chaine;
}

$salut = "sa lut";
$blah = 'éhhf @ &&blu%%z';
echo remplaceCar($salut);
echo remplaceCar($blah);
?>