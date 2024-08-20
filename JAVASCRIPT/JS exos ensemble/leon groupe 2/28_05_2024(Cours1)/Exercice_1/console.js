const tableau = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//l'utilisateur qui rentre la table qu'il veut

n = prompt("Entrez un Entier pour la multiplication: ");

function multiply(n, tableau) {
    for (let i = 0; i < n; i++) {
        console.log("table de " + (i + 1));
        for (let j = 0; j < n; j++) {
            console.log(i + 1 + " * " + (j + 1) + " = " + tableau[i] * tableau[j]);
        }
    }
}

multiply(n, tableau);
