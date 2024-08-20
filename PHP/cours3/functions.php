<?php
function renommerFichier($nom)
{
    // Les caractères que je souhaite remplacer sont dans un tableau
    $str = ['é','è',' ','î'];
    $nom = str_replace($str,'',$nom); // Je remplace les caractères par rien
    $nom = uniqid().$nom; // Je rajoute un identifiant unique à mon fichier
    // Je retourne le nom modifié
    return $nom;

}
// Test de la fonction
/*$chaine = 'alfa-roméo.pdf';
echo 'chaine origine: '.$chaine;
echo '<br>';
echo 'chaine modifié:'.renommerFichier($chaine);*/
// Fonction pour vérifier les extensions des fichiers
$extensions = ['.jpg','.png','.JPG','.PNG'];
function verifExtension($nom)
{
    // Pour faire appel à une variable externe à la fonction on utilise global
    global $extensions;
    $ext = strrchr($nom,'.'); // Je récupère l'extension du fichier
    // Je vais vérifier si mon extension fait parti des extensions autorisées
    if(in_array($ext,$extensions)){
        // Si l'extension est autorisé
        return true;
    }
    else
    {
        return false;
    }
}
// Test de la fonction verifExtension
/*if(verifExtension($chaine)){
    echo 'extension autorisé';
}
else
{
    echo 'extension non autorisé';
}*/
// Fonction qui génère un token
function genererToken()
{
    // Je déclare les caractères dans un tableau
    $ch = ['a','z','e','r','t','y','u','i','o','p','q','s','d','f','g','h','j','k','l','m','w','x','c','v','b','n',1,2,3,4,5,6,7,8,9,0];
    // J'initialise la variable token
    $token = '';
    // Je fais une boucle de 0 à 20 pour générer une clé de 20 caractères
    for($i=0;$i<20;$i++)
    {
        // J'ajoute les caractères à la variable token
        // J'utilise la fonction rand() pour générer un indice entre 0 et la longueur du tableau
        $token.= $ch[rand(0,count($ch)-1)];
    }
    // Je hashe la clé générée avec password_hash
    $token = password_hash($token,PASSWORD_BCRYPT);
    // J'enregistre la clé dans une session
    $_SESSION['token'] = $token;
    // Je retourne la clé
    return $token;
}
// Fonction pour vérifier le token
function verifierToken()
{
    // Si la session est identique a ce qui est passé dans l'URL
    if($_SESSION['token'] === $_GET['token'])
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>