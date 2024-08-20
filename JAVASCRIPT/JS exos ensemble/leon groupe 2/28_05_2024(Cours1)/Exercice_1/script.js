const tableau = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//l'utilisateur qui rentre la table qu'il veut

function multiply(n, tableau) {
    for (let i = 0; i < n; i++) {
        for (let j = 0; j < n; j++) {
            document.getElementById("table-multiplication").innerText += tableau[i] * tableau[j];
        }
    }
}

function afficher_table() {
    let n = document.getElementById("nbmultiplication").value;
    multiply(n, tableau);
}
