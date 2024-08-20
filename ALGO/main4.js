function rechercheElement(tableau, elementRecherche) {
    for (let i = 0; i < tableau.length; i++){
        if (tableau[i] === elementRecherche) {
            return i;
        }
    }
    return -1;
}

const tableauNombres = ["10", "20", "30", "40", "50", 'yaya', 'firas', 'timothee', 'abde', 'alex', 'benoit', 'meli','teddy', 'charles', 'thierry', 'marco', 'leon', 'estelle'];

const nombreRecherche = prompt("Entrez un nombre où un nom à rechercher :");

const resultatRecherche = rechercheElement(tableauNombres, nombreRecherche);

if (resultatRecherche !== -1){
    alert(nombreRecherche + " a été trouvé à l'indice" + resultatRecherche + " dans le tableau.");
} else {
    alert(nombreRecherche + " n'a pas été trouvé dans le tableau.");
}