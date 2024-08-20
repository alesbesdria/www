<?php
// Fonction qui permet de vérifier si un utilisateur est connecté
function verifConnect()
{
    // Je passe $dbh en global pour pouvoir faire des requêtes
    global $dbh;
    $sql = 'SELECT * FROM `utilisateurs` WHERE 1';
    // Je vérifie si j'ai une session
    if(!empty($_SESSION['utilisateur']))
    {
        // Je rajoute la condition sur l'ID
        $sql.= ' AND ID = '.intval($_SESSION['utilisateur']);
    }
    else if(!empty($_COOKIE['utilisateur']))
    {
        // Je déserialize mon cookie
        $info_cookie = unserialize($_COOKIE['utilisateur']);
        $sql.= ' AND Email = "'.$info_cookie['mail'].'" AND Motdepasse = "'.$info_cookie['hash'].'"';
    }
    // J'execute ma requête avec query
    $req = $dbh->query($sql);
    // Je vérifie que j'ai bien un utilisateur
    if($req->rowCount() == 1){
        // Je met dans un tableau les infos de l'utilisateur avec fetch
        $info = $req->fetch();
        // Je vais relancer une session et un cookie
        $_SESSION['utilisateur'] = $info['ID'];
        $cookie = [
            'mail' => $info['Email'],
            'hash' => $info['Motdepasse']
        ];
        setcookie('utilisateur',serialize($cookie),(time()+86400));
        // Je retourne les infos sur l'utilisateur
        return $info;
    }else{
        // Je retourne faux
        return false;
    }
}
function verifAdmin()
{
    $utilisateur = verifConnect();
    // Je vérifie si l'utilisateur est connecté et si il est admin
    if($utilisateur && $utilisateur['Statut'] == 'admin'){
        return $utilisateur;
    }
    else
    {
        return false;
    }
}
// Fonction avec un argument facultatif
function listeUtilisateurs($recherche=null)
{
    global $dbh; // Pour utiliser la PDO dans ma fonction
    $sql = 'SELECT * FROM `utilisateurs` WHERE 1 ';
    if($recherche)
    {
        // Si j'ai une recherche
        $sql.= 'AND 
            (Nom LIKE "%'.strip_tags($recherche).'%"
            OR
            Prenom LIKE "%'.strip_tags($recherche).'%"
            OR
            Email LIKE "%'.strip_tags($recherche).'%")
            ';
    }
    $req = $dbh->query($sql);
    if($req->rowCount() >= 1){
        // Si j'ai au moins un résultat je retourne l'ensemble des lignes
        return $req->fetchAll();
    }
    else
    {
        return false;
    }


}
?>