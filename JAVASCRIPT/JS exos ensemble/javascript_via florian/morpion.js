// Code du morpion
// Je demande le prénom du 1er joueur
let joueur1 = prompt('Prénom du premier joueur');
// Je demande le prénom du 2ème joueur
let joueur2 = prompt('Prénom du deuxième joueur');
// Score pour les joueurs
let score1='';
let score2='';
// Compteur de partie
let partie = 1;
// J'initialise la variable joueur courant avec le joueur1 par défault
let joueur_courant = joueur1;
// J'initialise le premier joueur
let joueur = 'X';
// L'état du jeu à true par défault
let jeu = true;
// Je détermine le tableau vide de jeu
let tableau = ["","","","","","","","",""];
// Compteur de nombre de coup
let compteur = 0;
// Variable pour définir si joueur pair ou impair
let binaire = 0;
// Fonction pour afficher le score et la partie
function afficherScore(){
    document.getElementById('joueur1').innerText = joueur1;
    document.getElementById('joueur2').innerText = joueur2;
    document.getElementById('score1').innerText = score1;
    document.getElementById('score2').innerText = score2;
    document.getElementById('partie').innerText = partie;
}
// Fonction pour afficher le joueur qui doit jouer
function afficheMessage(prenom){
    document.getElementById('message').innerHTML = "C'est au tour de "+prenom;
}
// On affiche le message
afficheMessage(joueur_courant);
// Fonction pour afficher le bouton reset
function afficheReset(){
    document.getElementById('reset').style.display = 'block';
}
// Fonction qui vérifie si la partie est gagnante
function verifierGagnant(){
    if(
        (tableau[0] == joueur && tableau[1] == joueur && tableau[2] == joueur) ||
        (tableau[3] == joueur && tableau[4] == joueur && tableau[5] == joueur) ||
        (tableau[6] == joueur && tableau[7] == joueur && tableau[8] == joueur) ||
        (tableau[0] == joueur && tableau[3] == joueur && tableau[6] == joueur) ||
        (tableau[1] == joueur && tableau[4] == joueur && tableau[7] == joueur) ||
        (tableau[2] == joueur && tableau[5] == joueur && tableau[8] == joueur) ||
        (tableau[0] == joueur && tableau[4] == joueur && tableau[8] == joueur) ||
        (tableau[2] == joueur && tableau[4] == joueur && tableau[6] == joueur)
    ){
        // J'ai une combinaison gagnante je stoppe le jeu
        jeu = false;
        // J'affiche le bouton reset
        afficheReset();
        // pour joueur un son en js
        let applause = document.createElement("audio");
        applause.src = "aplause.mp3";
        applause.play();
        // La fonction retourne retourne true
        return true;
    }else{
        // Le jeu continue
        return false;
    }
}
// Fonction pour jouer
function jouer(element){
// Je vérifie si le jeu est en cours
if(jeu == false){
    return false;
}
// Je récupère l'ID de l'élément
 let position = element.getAttribute('id');
 // On vérifie si la case n'a pas déjà une valeur
 if(element.innerText != ''){
    alert('Attention case déjà jouée');
 }
 else{
    let apple = document.createElement("audio");
    apple.src = "apple.mp3";
    apple.play();
    // On remplit la case
    element.innerText = joueur;
    // Si joueur X on met le texte en vert
    if(joueur == 'X') element.style.color = 'green';
    else element.style.color = 'red';
    // je met à jour le tableau
    tableau[position] = joueur;
    if(verifierGagnant()){
        // Si la combinaison est gagnante
        if(joueur == 'X'){
            score1+= '*';
        }else{
            score2+= '*';
        }
        document.getElementById('message').innerText = joueur_courant+' a gagné !!!';
        afficherScore();
    }else{
        // J'incrémente mon compteur de partie
        compteur++;
        // Je vérifie si le compteur est supérieur ou égal à 9
        if(compteur >= 9){
            alert('Match Nul');
            // Je coupe le jeu
            jeu = false;
            // J'affiche le bouton reset
            afficheReset();
            return;
        }
        // Si le joueur est X
        if(joueur == 'X'){
            // On passe au joueur O
            joueur = 'O';
            // Joueur courant devient joueur2
            joueur_courant = joueur2;
        }else{
            // Si joueur est O alors on passe à X
            joueur = 'X';
            // Joueur courant devien joueur1
            joueur_courant = joueur1;
        }
        // J'affiche le message pour indiquer à qui est le tour
        afficheMessage(joueur_courant);
    }
 }

}
// Je sélectionne mon bouton reset
let bouton = document.getElementById('reset');
// Je détecte le clic sur le bouton avec un addEventListener
bouton.addEventListener('click',function(){
    // On passe jeu à true
    jeu = true;
    // On passe le compteur à 0
    compteur = 0;
    // On réinitialise le tableau JS
    tableau = ["","","","","","","","",""];
    // Je vais faire une boucle for pour effacer le tableau HTML
    for(let i = 0;i <= 8;i++){
        document.getElementById(i).innerText = '';
    }
    // Définir le joueur qui commence
    if(binaire == 0){
        joueur = 'O';
        joueur_courant = joueur2;
        binaire = 1;
    }else{
        joueur = 'X';
        joueur_courant = joueur1;
        binaire = 0;
    }
    // J'incrémente la partie
    partie++;
    // Je cache le bouton
    document.getElementById('reset').style.display = 'none';
    // J'affiche le message avec le joueur courant
    afficheMessage(joueur_courant);
    afficherScore();
});