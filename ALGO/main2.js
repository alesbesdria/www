function estPalindrome(chaine) {
chaine = chaine.toLowerCase().replace(/ /g,'');

const chaineInverse = chaine.split('').reverse().join('');

if (chaine === chaineInverse) {
    return true;
} else {
    return false;
}
}

const saisie = prompt("Entrez une chaine de caractères : ");

if (estPalindrome(saisie)){
    alert(saisie + " est un palindrome. ❤️");
} else {
    alert(saisie + " n'est pas un palindrome.😒");
}