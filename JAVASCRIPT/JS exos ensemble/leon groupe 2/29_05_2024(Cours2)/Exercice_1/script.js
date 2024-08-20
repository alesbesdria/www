let tableau = [];


// fonction ajouter qui ajoute une tache à la liste

function ajouterTache() {
    let element = prompt();
    tableau.push(element);
}

//fonction supprimer qui supprime une tache de la liste

function supprimerTache() {
    let numeroTache = prompt();
    if (tableau[numeroTache] !== undefined) {
        tableau.splice(numeroTache, 1);
    } else {
        alert("Il n'y a pas de tache a cette endroit !!");
    }
}

//fonction afficher les tache de la liste

function afficherTaches() {
    for (let i = 0; i < tableau.length; i++) {
        console.log("[" + i + "] : " + tableau[i]);
    }
}

