let tab = [10, 9, 4, 14, 16, 18, 2, 0, 20, 6, 13, 9];

//fonction pour la somme
function somme() {
    let resultat = 0;
    for (let i = 0; i < tab.length; i++) {
        resultat += tab[i];
    }
    return resultat;
}


//fonction pour la moyenne
function moyenne() {
    console.log("Voici la moyenne: " + somme() / tab.length);
}

//fonction pour la ou les valeurs maximum du tableau
function valeurMax() {
    let max = 0;
    for (let i = 0; i < tab.length; i++) {
        if (max < tab[i]) {
            max = tab[i];
        }
    }
    return max;
}
console.log("Voici la somme du tableau: " + somme());
console.log("Voici la valeur max: " + valeurMax());
moyenne();