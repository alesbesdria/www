<?php
$html = file_get_contents('template.html'); // Je charge le fichier HTML
$html = str_replace('[PRENOM]', 'Charles', $html);
$html = str_replace('[NOM]', 'Dykhounphypheth', $html);
$html = str_replace('[AGE]', 32, $html);
// $variable = ['[PRENOM]','[NOM]','[AGE]'];
// $valeur = ['Yahia','Bel moukaddam',32];
// $html = str_replace($variable,$valeur,$html);
echo $html; // J'affiche le fichier HTML
