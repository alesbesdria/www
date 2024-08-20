<?php
// Pour afficher des messages
echo 'Coucou';
print('Vive le tour de France');
// Pour inclure des fichiers
include('monfichier.php'); // pour inclure un fichier
include_once('monfichier.php'); // Pour inclure un fichier une seule fois
//require('monfichier2.php'); // Pour inclure un fichier qui est obligatoire
require_once('monfichier.php'); // Pour inclure un fichier qui est obligatoire une seule fois
// Les variables
$variablestring = 'Alfa Roméo'; // Une variable string
$variabletypestring = (string) 'Alfa Roméo';
$variableint = 1000; // Une variable entier
$variabletypeint = (int) 1000;
$variabletableau = array('Alfa','Renault','Peugeot'); // Une variable tableau
$variabletableau2 = ['Alfa','Renault','Peugeot']; 
// Les variables superglobales
//$_POST[]; // La superglobale POST (pour récupérer les infos d'un formulaire, type array)
//$_GET[]; // La superglobale GET (pour récupérer les infos d'un formulaire, type array)
//$_SERVER[]; // La superglobale SERVER (pour récupérer des infos sur le serveur ou le client)
//$_FILES[]; // La superglobale FILES (pour récupérer un fichier envoyé)
// Les boucles en PHP
// La boucle for
for($i=0;$i<=10;$i++)
{
    echo $i;
    echo ' ';
}
// La boucle foreach
foreach($variabletableau as $marque)
{
    echo $marque;
    echo '<br>';
}
// La boucle while
$i = 0;
// Tant que i est inférieur au nombre d'éléments dans le tableau
while($i < count($variabletableau))
{
    echo $variabletableau[$i]; // Pour afficher l'élément courant
    $i++; // pour incrémenter i à chaque itération
}
// Les conditions
if($variableint == 100 && $variablestring == 'Renault')
{

}
else if($variableint == 50)
{

}
else
{

}
// Le switch en PHP
switch($variablestring)
{
    case 'Alfa Roméo':
        echo 'Voiture de merde';
    break;
    case 'Renault':
        echo 'Achète un vélo';
    break;
    default:
        echo 'vive les écolos';
    break;
}
if($variablestring == 'Alfa Roméo')
{
    echo 'Voiture de merde';
}
else if($variablestring == 'Renault')
{
    echo 'Achète un vélo';
}
else
{
    echo 'vive les écolos';
}



?>
